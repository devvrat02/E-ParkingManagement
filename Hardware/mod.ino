#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include<String.h>

const int trigPin = 11;  //D11
const int echoPin = 12;
const int ledrd = 13;
const int ledgr = 2;
long duration;
int distance;

String readString;
int ind1; // locations
int ind2;
int ind3;
int ind4;
int ind5;
int ind;
String flag;
String postData;

char server[] ="eparkm.000webhostapp.com"; //"e-parkingmanagement.herokuapp.com"; 
// WiFi Parameters
const char* ssid = "Mm";
const char* password = "12345678";
const char* host = ".000webhostapp.com";     //".herokuapp.com";    // //Add the host without "www" Example: electronoobs.com
String rcv="";
String id;
String Uls="1";
String ledr="1";
String ledg="1";
WiFiClient client;
void setup() {
  Serial.begin(9600);
  
  pinMode(trigPin, OUTPUT); // Sets the trigPin as an Output A1
  pinMode(echoPin, INPUT); // Sets the echoPin as an Input A1
  pinMode(ledrd, OUTPUT);
  pinMode(ledgr, OUTPUT);
  WiFi.begin(ssid, password);
 wificonn();
 
}

void loop() {
 servers();
 
}

void reading(){
 if(rcv!=""){
      readString=rcv;
      ind1 = readString.indexOf(',');         //finds location of first ,
      flag = readString.substring(0, ind1);   //captures first data String
      if (flag.toInt() == 1)                  // flag 0 indicates user data from remote side and parses the information
      {
        ind2 = readString.indexOf(',', ind1 + 1 ); //finds location of second ,
        ledr = readString.substring(ind1 + 1, ind2); //captures second data String
        ind3 = readString.indexOf(',', ind2 + 1 );
        ledg = readString.substring(ind2 + 1, ind3);
        readString = "";
        Serial.println(ledr);
        Serial.println(ledg);
        ledstat();
        servers();
        delay(200);
      }
      else{
      readString="";
  }
  readString="";
  }
  }



void servers() {
    if (WiFi.status() == WL_CONNECTED) {
  postData= "id=" + id +"&uls=" + Uls + "&ledr=" + ledr + "&ledg=" + ledg;
//  mySerial.println(postData);
  if (client.connect(server, 80)) {
//  client.println("POST /hardware/hard.php HTTP/1.1");
    client.println("POST /authentication/solo.php HTTP/1.1");
    client.println("Host: eparkm.000webhostapp.com"); //e-parkingmanagement.herokuapp.com");
    client.println("Content-Type: application/x-www-form-urlencoded");
    client.print("Content-Length: ");
    client.println(postData.length());
    client.println();
    client.print(postData);
     Serial.println(postData);
  }
   unsigned long timeout = millis();
    while (client.available() == 0) 
    {
      if (millis() - timeout > 25000) //If nothing is available on server for 25 seconds, close the connection.
      { 
        
      }
    }
 while(client.available())
    {
      String line = client.readStringUntil('\r'); //Read the server response line by line..
      rcv+=line; //And store it in rcv.
    }
    client.stop();

  ind =rcv.indexOf('"');
  rcv=rcv.substring(ind+1,ind+8);
  
  }
  Serial.println(rcv);
  }


 void wificonn()
 {
 
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.print("...");
  }
    Serial.print("connected");
   
 }
 void usensor()
{
  digitalWrite(trigPin, LOW);
  delayMicroseconds(2);
  
  // Sets the trigPin on HIGH state for 10 micro seconds
  digitalWrite(trigPin, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin, LOW);
  
  // Reads the echoPin, returns the sound wave travel time in microseconds
  duration = pulseIn(echoPin, HIGH);
  
  // Calculating the distance
  distance= duration*0.034/2;
  if(distance<12)
  { 
    digitalWrite(ledrd, HIGH);
    Serial.println("Slot is alloted");
    Serial.println(distance);
   
    
  }
  else 
  {
    digitalWrite(ledrd, LOW);
    Serial.println("Slot is free");
   Serial.println(distance);
  }
}
void ledstat(){
  if (ledr.toInt()==1)
          digitalWrite(ledrd, HIGH);
        else
          digitalWrite(ledrd, LOW);
        if (ledg.toInt()==1)
          digitalWrite(ledgr, HIGH);
        else
          digitalWrite(ledgr, LOW);
  }
