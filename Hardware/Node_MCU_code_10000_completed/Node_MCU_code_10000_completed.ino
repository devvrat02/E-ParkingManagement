#include <MySQL_Connection.h>
#include <MySQL_Cursor.h>
#include <ESP8266WiFi.h>
#include <WiFiClientSecure.h>
#include<String.h>
#include <SoftwareSerial.h>

SoftwareSerial mySerial(D0, D1); // RX, TX
char ssid[] = "Linux";                 // Network Name
char pass[] = "malviya_4";                 // Network Password
byte mac[6];
WiFiServer server(80);        
IPAddress ip;
      String  U1= "";
      String  U2= "";
      String  U3= "";
      String  U4= "";
int ind1; // locations
int ind2;
int ind3;
int ind4;
int ind5;
String readString;        //main captured String
String Ledstatus1;
String Ledstatus2;
String Ledstatus3;
String Ledstatus4;
String flag;
String Ledstat1,Ledstat2,Ledstat3,Ledstat4;
WiFiClientSecure client;
MySQL_Connection conn((Client *)&client);   //Sql connection
//DNSClient dns_client;
char conn_database[]="USE epark";            //Database name
char updaten_SQL[] = "Update demo1 Set book=\'available\' %s";
char updatey_SQL[] = "Update demo1 Set book=\'unavailable\' %s";
char getvalue[]= "SELECT * FROM demo1";
char A[]="where slot= \'A\'";
char B[]="where slot= \'B\'";
char C[]="where slot= \'C\'";
char D[]="where slot= \'D\'";
IPAddress server_addr(13,78,145,25);

char user[] = "chetan@eparkm";           // MySQL user
char password[] = "devvrat@01";       // MySQL password

char query[50];
int led1,led2,led3,led4;

void setup() 
{  
  Serial.begin(9600);
  mySerial.begin(9600);
  mySerial.println("Initialising connection:");
  mySerial.print(F("Setting static ip to : "));
  mySerial.println(ip);

  mySerial.println("");
  mySerial.println("");
  mySerial.print("Connecting to ");
  mySerial.println(ssid);
  WiFi.begin(ssid, pass);

  while (WiFi.status()!= WL_CONNECTED) {
    delay(200);
    mySerial.print(".");
  }

  mySerial.println("");
  mySerial.println("WiFi Connected:");

  WiFi.macAddress(mac);
  mySerial.print("MAC: ");
  mySerial.print(mac[5],HEX);
  mySerial.print(":");
  mySerial.print(mac[4],HEX);
  mySerial.print(":");
  mySerial.print(mac[3],HEX);
  mySerial.print(":");
  mySerial.print(mac[2],HEX);
  mySerial.print(":");
  mySerial.print(mac[1],HEX);
  mySerial.print(":");
  mySerial.println(mac[0],HEX);
  mySerial.println("");
  mySerial.print("Assigned IP: ");
  mySerial.print(WiFi.localIP());
  mySerial.println("");

  mySerial.println("Connecting to database");

////dns_client.begin(Ethernet.dnsServerIP());
////dns_client.getHostByName(host, server_addr);
mySerial.println(server_addr);

  while (conn.connect(server_addr, 3306, user, password) != true) {
    delay(200);
    mySerial.print ( "." );
  }
  mySerial.println("");
  mySerial.println("Connected to SQL Server!");  
   sprintf(query,conn_database );
    mySerial.println("Connecting Database");
  mySerial.println(query);
MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn); //Establishing connection
  cur_mem->execute(query);                
  sprintf(query,conn_database);                         //Selecting Database
  cur_mem->execute(query);
  delete cur_mem;
}

void sensor1()
{MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn);
if(U1.toInt()==1)
{ 
mySerial.println("yes");
  sprintf(query, updatey_SQL, A);
  led1=1;
  }
  else if(led1==0){
  mySerial.println("NO");
      sprintf(query, updaten_SQL, A);
  }
  mySerial.println("Recording data.");
  mySerial.println(query);
  
  cur_mem->execute(query);

 delete cur_mem;
}

void sensor2()
{MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn);
if(U2.toInt()==1)
{ 
mySerial.println("yes");
  sprintf(query, updatey_SQL, B);
  led2=1;
  }
  else if(led2==0){mySerial.println("NO");
      sprintf(query, updaten_SQL, B);
  }
  mySerial.println("Recording data.");
  mySerial.println(query);
  
 
  
  cur_mem->execute(query);

 
delete cur_mem;
}

void sensor3()
{  MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn);

if(U3.toInt()==1)
{
 mySerial.println("yes");
  sprintf(query, updatey_SQL, C);
led3=1;
 }
  else if(led3==0){mySerial.println("NO");
      sprintf(query, updaten_SQL, C);
  }
  mySerial.println("Recording data.");
  mySerial.println(query);
  

  
  cur_mem->execute(query);

delete cur_mem;
}

void sensor4()
{
if(U4.toInt()==1)
{ 
Serial.println("yes");
  sprintf(query, updatey_SQL, D);
  led4=1;
  }
  else if(led4==0){mySerial.println("NO");
      sprintf(query, updaten_SQL, D);
  }
  mySerial.println("Recording data.");
  mySerial.println(query);
MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn);  
  cur_mem->execute(query);
delete cur_mem;
}
int feed(){
    MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn);
  sprintf(query,getvalue); 
  cur_mem->execute(query);
  column_names *cols = cur_mem->get_columns();

  mySerial.println();
  row_values *row = NULL;  
    row = cur_mem->get_next_row();
      mySerial.println(row->values[3]);
    if(row->values[3]=="booked"){
      led1=1;
      }
        row = cur_mem->get_next_row();
      mySerial.println(row->values[3]);
    if(row->values[3]=="booked"){
      led2=1;
      }
       
       row = cur_mem->get_next_row();
     mySerial.println(row->values[3]);
    if(row->values[3]=="booked"){
      led3=1;
      }
       row = cur_mem->get_next_row();
      mySerial.println(row->values[3]);
    if(row->values[3]=="booked"){
      led4=1;
      }
         
return 0;
}
void loop() 
{
//  if (mySerial.available())
//    Serial.write(mySerial.read());
//  if (Serial.available())
//    mySerial.write(Serial.read());
    
  if (Serial.available())  //Expected string from serial input (1,U1, U2,U3 ,U4*)
  {
    char c = Serial.read();  //gets one byte from serial buffer
    if (c == '*') 
    {
      mySerial.println(readString);
      ind1 = readString.indexOf(',');         //finds location of first ,
      flag = readString.substring(0, ind1);   //captures first data String
      if (flag.toInt() == 1)                  // flag 0 indicates user data from remote side and parses the information
      {
        mySerial.println("Status");
        ind2 = readString.indexOf(',', ind1+1 );   //finds location of second ,
        U1 = readString.substring(ind1+1, ind2);   //captures second data String
        ind3 = readString.indexOf(',', ind2+1 );
        U2 = readString.substring(ind2+1,ind3);
        ind4 = readString.indexOf(',', ind3+1 );//captures second data String
        U3 = readString.substring(ind3+1,ind4);
        ind5 = readString.indexOf(',', ind4+1 );//captures second data String
        U4 = readString.substring(ind4+1);
        readString=""; 
        mySerial.println(U1);
        mySerial.println(U2);
        mySerial.println(U3);
        mySerial.println(U4);
        sensor1();
        sensor2();
        sensor3();
        sensor4();
        
        feed();
        
Ledstatus1=led1;
Ledstatus2=led2;
Ledstatus3=led3;
Ledstatus4=led4;
        led1=0;led2=0;led3=0;led4=0;
        Serial.println("0," + Ledstatus1 + ',' + Ledstatus2 + ',' + Ledstatus3 + ',' + Ledstatus4 + '*'); //Status of led sensor(0,Ledstatus1,Ledstatus2,Ledstatus3,Ledstatus4*)
//       Serial.println("0,1,1,1,1*"); //TO NAN0
        mySerial.println("0," + Ledstatus1 + ',' + Ledstatus2 + ',' + Ledstatus3 + ',' + Ledstatus4 + '*');
        delay(500);
        
      }
      else
      {
        readString=""; //clears variable for new input
        flag="";
      }
    } 
    else if (c == ':') 
    {
      readString="";
    }
    else
    {     
      readString += c; //makes the string readString
    }
  }
}
