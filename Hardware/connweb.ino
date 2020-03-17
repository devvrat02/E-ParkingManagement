#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <SoftwareSerial.h> 
#include<String.h>
SoftwareSerial mySerial(D0, D1); // RX, TX

String Park="demo2";          ////////////////****Global variable Declaration starts from here

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

String U1="1";
String U2="1";
String U3="1";
String U4="1";

WiFiClient client;
void setup() {
  mySerial.begin(9600);
  Serial.begin(9600);
  WiFi.begin(ssid, password);
 
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    mySerial.print("...");
  }
    mySerial.print("connected");
  
 
 
}

void loop() {
  // Check WiFi Status
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
        servers();
        delay(200);
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




void servers() {
    if (WiFi.status() == WL_CONNECTED) {
  postData= "park=" + Park +"&stat1=" + U1 + "&stat2=" + U2 + "&stat3=" + U3 + "&stat4=" + U4 ;
//  mySerial.println(postData);
  if (client.connect(server, 80)) {
//  client.println("POST /hardware/hard.php HTTP/1.1");
    client.println("POST /authentication/hard.php HTTP/1.1");
    client.println("Host: eparkm.000webhostapp.com"); //e-parkingmanagement.herokuapp.com");
    client.println("Content-Type: application/x-www-form-urlencoded");
    client.print("Content-Length: ");
    client.println(postData.length());
    client.println();
    client.print(postData);
     mySerial.println(postData);
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
  rcv=rcv.substring(ind+1,ind+11);

  
  }
  Serial.println(rcv);
  mySerial.println(rcv);
  }
