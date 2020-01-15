//#include <DHT.h>
#include <Dns.h>
#include <MySQL_Connection.h>
#include <MySQL_Cursor.h>
#include <ESP8266WiFi.h>
#include <WiFiClient.h>


char ssid[] = "";                 // Network Name
char pass[] = "";                 // Network Password
byte mac[6];
WiFiServer server(80);
IPAddress ip(192, 168, 0, 4);
IPAddress gateway(192, 168, 0, 1);
IPAddress subnet(255, 255, 255, 0);

WiFiClient client;
MySQL_Connection conn((Client *)&client);
//DNSClient dns_client;
char conn_database[]="";
char updaten_SQL[] = "Update demo1 Set status=\'available\' %s";
char updatey_SQL[] = "Update demo1 Set status=\'unavailable\' %s";
char getvalue[]= "SELECT status,In_time,exit_time FROM demo1 %s";
char A[]="where slot= \'A\'";
char B[]="where slot= \'B\'";
char C[]="where slot= \'C\'";
char D[]="where slot= \'D\'";
IPAddress server_addr(54,39,75,7);

//const char* host= "files.000webhost.com";
char user[] = "";           // MySQL user
char password[] = "";       // MySQL password

char query[50];
const int trigPin1 = D1;  //D1
const int echoPin1 = D0;  //D0
const int trigPin2 = D3;  //D3
const int echoPin2 = D2;  //D2
const int trigPin3 = D6;  //D6
const int echoPin3 = D5;  //D5
const int trigPin4 = D8;  //D8
const int echoPin4 = D7;  //D7

// defines variables
long duration1;
long duration2;
long duration3;
long duration4;
int distance1;  
int distance2;  
int distance3;  
int distance4;  
int maxdistance = 10;

void setup() {  Serial.begin(9600);
pinMode(trigPin1, OUTPUT); // Sets the trigPin as an Output A1
pinMode(echoPin1, INPUT); // Sets the echoPin as an Input A1
pinMode(trigPin2, OUTPUT); // Sets the trigPin as an Output A2
pinMode(echoPin2, INPUT); // Sets the echoPin as an Input A2
pinMode(trigPin3, OUTPUT); // Sets the trigPin as an Output A3
pinMode(echoPin3, INPUT); // Sets the echoPin as an Input A3
pinMode(trigPin4, OUTPUT); // Sets the trigPin as an Output A4
pinMode(echoPin4, INPUT); // Sets the echoPin as an Input A4
  Serial.println("Initialising connection");
  Serial.print(F("Setting static ip to : "));
  Serial.println(ip);

  Serial.println("");
  Serial.println("");
  Serial.print("Connecting to ");
  Serial.println(ssid);
  WiFi.config(ip, gateway, subnet); 
  WiFi.begin(ssid, pass);

  while (WiFi.status()!= WL_CONNECTED) {
    delay(200);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi Connected");

  WiFi.macAddress(mac);
  Serial.print("MAC: ");
  Serial.print(mac[5],HEX);
  Serial.print(":");
  Serial.print(mac[4],HEX);
  Serial.print(":");
  Serial.print(mac[3],HEX);
  Serial.print(":");
  Serial.print(mac[2],HEX);
  Serial.print(":");
  Serial.print(mac[1],HEX);
  Serial.print(":");
  Serial.println(mac[0],HEX);
  Serial.println("");
  Serial.print("Assigned IP: ");
  Serial.print(WiFi.localIP());
  Serial.println("");

  Serial.println("Connecting to database");

//dns_client.begin(Ethernet.dnsServerIP());
//dns_client.getHostByName(host, server_addr);
Serial.println(server_addr);

  while (conn.connect(server_addr, 3306, user, password) != true) {
    delay(200);
    Serial.print ( "." );
  }
  Serial.println("");
  Serial.println("Connected to SQL Server!");  
   sprintf(query,conn_database );
    Serial.println("Connecting Database");
  Serial.println(query);
MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn); 
  cur_mem->execute(query);
}

void sensor1()
{MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn);
digitalWrite(trigPin1, LOW);
delayMicroseconds(2);

// Sets the trigPin on HIGH state for 10 micro seconds
digitalWrite(trigPin1, HIGH);
delayMicroseconds(10);
digitalWrite(trigPin1, LOW);

// Reads the echoPin, returns the sound wave travel time in microseconds
duration1 = pulseIn(echoPin1, HIGH);

// Calculating the distance
distance1= duration1*0.034/2;
Serial.print("Car slot 1 ");
if(distance1<maxdistance)
{ 
Serial.println("yes");
  sprintf(query, updatey_SQL, A);
  }
  else {
  Serial.println("NO");
      sprintf(query, updaten_SQL, A);
  }
  Serial.println("Recording data.");
  Serial.println(query);
  
 
  
  cur_mem->execute(query);

 delete cur_mem;

}

void sensor2()
{MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn);
digitalWrite(trigPin2, LOW);
delayMicroseconds(2);

// Sets the trigPin on HIGH state for 10 micro seconds
digitalWrite(trigPin2, HIGH);
delayMicroseconds(10);
digitalWrite(trigPin2, LOW);

// Reads the echoPin, returns the sound wave travel time in microseconds
duration2 = pulseIn(echoPin2, HIGH);

// Calculating the distance
distance2= duration2*0.034/2;
Serial.print("Car slot 2 ");
if(distance2<maxdistance)
{ 
Serial.println("yes");
  sprintf(query, updatey_SQL, B);
  }
  else {Serial.println("NO");
      sprintf(query, updaten_SQL, B);
  }
  Serial.println("Recording data.");
  Serial.println(query);
  
 
  
  cur_mem->execute(query);

 
delete cur_mem;
}

void sensor3()
{MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn);
digitalWrite(trigPin3, LOW);
delayMicroseconds(2);

// Sets the trigPin on HIGH state for 10 micro seconds
digitalWrite(trigPin3, HIGH);
delayMicroseconds(10);
digitalWrite(trigPin3, LOW);

// Reads the echoPin, returns the sound wave travel time in microseconds
duration3 = pulseIn(echoPin3, HIGH);

// Calculating the distance
distance3= duration3*0.034/2;
Serial.print("Car slot 3 ");
if(distance3<maxdistance)
{
 Serial.println("yes");
  sprintf(query, updatey_SQL, C);
 }
  else {Serial.println("NO");
      sprintf(query, updaten_SQL, C);
  }
  Serial.println("Recording data.");
  Serial.println(query);
  

  
  cur_mem->execute(query);

delete cur_mem;
}

void sensor4()
{
digitalWrite(trigPin4, LOW);
delayMicroseconds(2);

// Sets the trigPin on HIGH state for 10 micro seconds
digitalWrite(trigPin4, HIGH);
delayMicroseconds(10);
digitalWrite(trigPin4, LOW);

// Reads the echoPin, returns the sound wave travel time in microseconds
duration4 = pulseIn(echoPin4, HIGH);

// Calculating the distance
distance4= duration4*0.034/2;
Serial.print("Car slot 4 ");
if(distance4< maxdistance)
{ 
Serial.println("yes");
  sprintf(query, updatey_SQL, D);
  }
  else {Serial.println("NO");
      sprintf(query, updaten_SQL, D);
  }
  Serial.println("Recording data.");
  Serial.println(query);
MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn);  

  cur_mem->execute(query);


delete cur_mem;
}


void loop() {

sensor1();
delay(1000);
sensor2();
delay(1000);
sensor3();
delay(1000);
sensor4(); 
    delay(10000); //10 sec  
}
