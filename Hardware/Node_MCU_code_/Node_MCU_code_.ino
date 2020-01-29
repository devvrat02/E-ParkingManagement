#include <MySQL_Connection.h>
#include <MySQL_Cursor.h>
#include <ESP8266WiFi.h>
#include <WiFiClient.h>
#include<String.h>
#include <SoftwareSerial.h>

SoftwareSerial mySerial(D0, D1); // RX, TX
char ssid[] = "";                 // Network Name
char pass[] = "";                 // Network Password
byte mac[6];
WiFiServer server(80);
IPAddress ip;
String  U1 = "";
String  U2 = "";
String  U3 = "";
String  U4 = "";
int ind1; // locations
int ind2;
int ind3;
int ind4;
int ind5;
int book1, book2, book3, book4;
String readString;        //main captured String
String Ledstatus1;
String Ledstatus2;
String Ledstatus3;
String Ledstatus4;
String flag;
String Ledstat1, Ledstat2, Ledstat3, Ledstat4;
WiFiClient client;
MySQL_Connection conn((Client *)&client);   //Sql connection
//DNSClient dns_client;
char conn_database[] = "USE";          //Database name Use Database
char updaten_SQL[] = "Update demo1 Set status=\'available\' %s";
char updatey_SQL[] = "Update demo1 Set status=\'unavailable\' %s";
char getvalue[] = "SELECT * FROM demo1 %s";
char A[] = "where slot= \'A\'";
char B[] = "where slot= \'B\'";
char C[] = "where slot= \'C\'";
char D[] = "where slot= \'D\'";
IPAddress server_addr(0,0,0,0); //db sserver address

char user[] = "";           // MySQL user
char password[] = "";       // MySQL password

char query[50];
int led1, led2, led3, led4;
int stat1, stat2, stat3, stat4;
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

  while (WiFi.status() != WL_CONNECTED) {
    delay(200);
    mySerial.print(".");
  }

  mySerial.println("");
  mySerial.println("WiFi Connected:");

  WiFi.macAddress(mac);
  mySerial.print("MAC: ");
  mySerial.print(mac[5], HEX);
  mySerial.print(":");
  mySerial.print(mac[4], HEX);
  mySerial.print(":");
  mySerial.print(mac[3], HEX);
  mySerial.print(":");
  mySerial.print(mac[2], HEX);
  mySerial.print(":");
  mySerial.print(mac[1], HEX);
  mySerial.print(":");
  mySerial.println(mac[0], HEX);
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
  sprintf(query, conn_database );
  mySerial.println("Connecting Database");
  mySerial.println(query);
  MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn); //Establishing connection
  cur_mem->execute(query);
  sprintf(query, conn_database);                        //Selecting Database
  cur_mem->execute(query);
  delete cur_mem;
}

void sensor1()
{ MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn);
    sprintf(query, getvalue, A);
  cur_mem->execute(query);
  column_names *cols = cur_mem->get_columns();
  mySerial.println();
  // Read the rows and print them
  row_values *row = NULL;
  do {
    row = cur_mem->get_next_row();
    if (row != NULL) {
      if (row->values[2] != "booked") {
  // Deleting the cursor also frees up memory used
    if (U1.toInt() == 1)
    {
      mySerial.println("yes");
      sprintf(query, updatey_SQL, A);
      led1 = 1;
    }
    else {
      mySerial.println("NO");
      sprintf(query, updaten_SQL, A);
    led1 = 0;
    }
    mySerial.println("Recording data.");
    mySerial.println(query);

    cur_mem->execute(query);
      } else {
        led1=1;
        }
      }
  } while (row != NULL);
    delete cur_mem;
   mySerial.println(led2);
}

void sensor2()
{ MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn);
    sprintf(query, getvalue, B);
  cur_mem->execute(query);
  column_names *cols = cur_mem->get_columns();
  mySerial.println();
  // Read the rows and print them
  row_values *row = NULL;
  do {
    row = cur_mem->get_next_row();
    if (row != NULL) {
      if (row->values[2] != "booked") {
  // Deleting the cursor also frees up memory used
    if (U1.toInt() == 1)
    {
      mySerial.println("yes");
      sprintf(query, updatey_SQL, B);
      led2 = 1;
    }
    else {
      mySerial.println("NO");
      sprintf(query, updaten_SQL, B);
    led2 = 0;
    }
    mySerial.println("Recording data.");
    mySerial.println(query);

    cur_mem->execute(query);
      } else {
        led2=1;
        }
      }
  } while (row != NULL);
    delete cur_mem;
   mySerial.println(led2);
}

void sensor3()
{
  MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn);
    sprintf(query, getvalue, C);
  cur_mem->execute(query);
  column_names *cols = cur_mem->get_columns();
  mySerial.println();
  // Read the rows and print them
  row_values *row = NULL;
  do {
    row = cur_mem->get_next_row();
    if (row != NULL) {
      if (row->values[2] != "booked") {
  // Deleting the cursor also frees up memory used
    if (U1.toInt() == 1)
    {
      mySerial.println("yes");
      sprintf(query, updatey_SQL, C);
      led3 = 1;
    }
    else {
      mySerial.println("NO");
      sprintf(query, updaten_SQL, C);
    led3 = 0;
    }
    mySerial.println("Recording data.");
    mySerial.println(query);

    cur_mem->execute(query);
      } else {
        led3=1;
        }
      }
  } while (row != NULL);
    delete cur_mem;
   mySerial.println(led3);
}
void sensor4()
{MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn);
    sprintf(query, getvalue, D);
  cur_mem->execute(query);
  column_names *cols = cur_mem->get_columns();
  mySerial.println();
  // Read the rows and print them
  row_values *row = NULL;
  do {
    row = cur_mem->get_next_row();
    if (row != NULL) {
      if (row->values[2] != "booked") {
  // Deleting the cursor also frees up memory used
    if (U1.toInt() == 1)
    {
      mySerial.println("yes");
      sprintf(query, updatey_SQL, D);
      led4 = 1;
    }
    else {
      mySerial.println("NO");
      sprintf(query, updaten_SQL, D);
    led4 = 0;
    }
    mySerial.println("Recording data.");
    mySerial.println(query);

    cur_mem->execute(query);
      } else {
        led4=1;
        }
      }
  } while (row != NULL);
    delete cur_mem;
   mySerial.println(led2);
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
        ind2 = readString.indexOf(',', ind1 + 1 ); //finds location of second ,
        U1 = readString.substring(ind1 + 1, ind2); //captures second data String
        ind3 = readString.indexOf(',', ind2 + 1 );
        U2 = readString.substring(ind2 + 1, ind3);
        ind4 = readString.indexOf(',', ind3 + 1 ); //captures second data String
        U3 = readString.substring(ind3 + 1, ind4);
        ind5 = readString.indexOf(',', ind4 + 1 ); //captures second data String
        U4 = readString.substring(ind4 + 1);
        readString = "";
        mySerial.println(U1);
        mySerial.println(U2);
        mySerial.println(U3);
        mySerial.println(U4);
        sensor1();
        sensor2();
        sensor3();
        sensor4();
        Ledstatus1 = led1;
        Ledstatus2 = led2;
        Ledstatus3 = led3;
        Ledstatus4 = led4;
        led1 = 1; led2 = 1; led3 = 1; led4 = 1;
        Serial.println("0," + Ledstatus1 + ',' + Ledstatus2 + ',' + Ledstatus3 + ',' + Ledstatus4 + '*'); //Status of led sensor(0,Ledstatus1,Ledstatus2,Ledstatus3,Ledstatus4*)
        //       Serial.println("0,1,1,1,1*"); //TO NAN0
        mySerial.println("0," + Ledstatus1 + ',' + Ledstatus2 + ',' + Ledstatus3 + ',' + Ledstatus4 + '*');
        delay(2000);

      }
      else
      {
        readString = ""; //clears variable for new input
        flag = "";
      }
    }
    else if (c == ':')
    {
      readString = "";
    }
    else
    {
      readString += c; //makes the string readString
    }
  }
}
