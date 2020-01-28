// defines pins numbers                   

const int trigPin1 = 11;  //D11
const int echoPin1 = 12;  //D12
const int trigPin2 = 9;  //D10
const int echoPin2 = 10;  //D9
const int trigPin3 = 7;  //D8
const int echoPin3 = 8;  //D7
const int trigPin4 = 5;  //D6
const int echoPin4 = 6;  //D5
const int led1 = 13;
const int led2 = 2;
const int led3 = 3;
const int led4 = 4;
String U1;
String U2;
String U3;
String U4;
// defines variables
long duration1;
long duration2;
long duration3;
long duration4;
int distance1;  
int distance2;  
int distance3;  
int distance4;  
int maxdistance; 
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
void setup() 
{
  pinMode(trigPin1, OUTPUT); // Sets the trigPin as an Output A1
  pinMode(echoPin1, INPUT); // Sets the echoPin as an Input A1
  pinMode(trigPin2, OUTPUT); // Sets the trigPin as an Output A2
  pinMode(echoPin2, INPUT); // Sets the echoPin as an Input A2
  pinMode(trigPin3, OUTPUT); // Sets the trigPin as an Output A3
  pinMode(echoPin3, INPUT); // Sets the echoPin as an Input A3
  pinMode(trigPin4, OUTPUT); // Sets the trigPin as an Output A4
  pinMode(echoPin4, INPUT); // Sets the echoPin as an Input A4
  pinMode(led1, OUTPUT);
  pinMode(led2, OUTPUT);
  pinMode(led3, OUTPUT);
  pinMode(led4, OUTPUT);
  Serial.begin(9600); // Starts the serial communication
  sensor1();
  delay(1000);
  sensor2();
  delay(1000);
  sensor3();
  delay(1000);
  sensor4();
  delay(1000);
  Serial.println("1," + U1 + ',' + U2 + ',' + U3 + ',' + U4 + '*'); //Status of Ultrasonic sensors in format( 1,1,0,1,1) 
}
void sensor1()
{
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
  //Serial.print("Car slot 1 ");
  if(distance1<11)
  { 
    //digitalWrite(led1, HIGH);
    //Serial.println("Slot is alloted");
    //Serial.println(distance1);
    U1='1';
     //Serial.println(U1);
  }
  else 
  {
    //digitalWrite(led1, LOW);
    //Serial.println("Slot is free");
   //Serial.println(distance1);
    U1='0';
    //Serial.println(U1);
  }
}

void sensor2()
{
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
  //Serial.print("Car slot 2 ");
  if(distance2<11)
  {
    //digitalWrite(led2, HIGH); 
    //Serial.println("Slot is alloted");
    //Serial.println(distance2);
    U2='1';
  }
  else
  {
    //digitalWrite(led2, LOW);
    //Serial.println("Slot is free");
    //Serial.println(distance2);
    U2='0';
  }
}

void sensor3()
{
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
  //Serial.print("Car slot 3 ");
  if(distance3<11)
  { 
    //digitalWrite(led3, HIGH);
    //Serial.println("Slot is alloted");
    //Serial.println(distance3);
    U3='1';
  }
  else
  {
      
    //digitalWrite(led3, LOW);
    //Serial.println("Slot is free");
    //Serial.println(distance3);
    U3='0';
  }
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
  //Serial.print("Car slot 4 ");
  if(distance4<11)
  { 
    //digitalWrite(led4, HIGH);
    //Serial.println("Slot is alloted");
    //Serial.println(distance4);
    U4='1';
  }
  else 
  {
    //digitalWrite(led4, LOW);  
    //Serial.println("Slot is free");
    //Serial.println(distance4);
    U4='0';
  }
}

void loop() 
{
  //Expected string from serial input (0,Ledstatus1,Ledstatus2,Ledstatus3,Ledstatus4*)
  if (Serial.available())  
  {
    char c = Serial.read();  //gets one byte from serial buffer
    if (c == '*') 
    {
      //Serial.println(readString);
      ind1 = readString.indexOf(',');         //finds location of first ,
      flag = readString.substring(0, ind1);   //captures first data String
      if (flag.toInt() == 0)                  // flag 0 indicates user data from remote side and parses the information
      {
        ind2 = readString.indexOf(',', ind1+1 );   //finds location of second ,
        Ledstatus1 = readString.substring(ind1+1, ind2);   //captures second data String
        //Serial.println(Ledstatus1);
        ind3 = readString.indexOf(',', ind2+1 );
        Ledstatus2 = readString.substring(ind2+1,ind3);
        //Serial.println(Ledstatus2);
        ind4 = readString.indexOf(',', ind3+1 );//captures second data String
        Ledstatus3 = readString.substring(ind3+1,ind4);
        //Serial.println(Ledstatus3);
        ind5 = readString.indexOf(',', ind4+1 );//captures second data String
        Ledstatus4 = readString.substring(ind4+1);
        //Serial.println(Ledstatus4);
        readString=""; 
        if (Ledstatus1.toInt()==1)
          digitalWrite(led1, HIGH);
        else
          digitalWrite(led1, LOW);
        if (Ledstatus2.toInt()==1)
          digitalWrite(led2, HIGH);
        else
          digitalWrite(led2, LOW);
        if (Ledstatus3.toInt()==1)
          digitalWrite(led3, HIGH);
        else
          digitalWrite(led3, LOW);
        if (Ledstatus4.toInt()==1)
          digitalWrite(led4, HIGH);
        else
          digitalWrite(led4, LOW);
        sensor1();
        delay(1000);
        sensor2();
        delay(1000);
        sensor3();
        delay(1000);
        sensor4();
        delay(1000);
        //Serial.println("hell0");
        Serial.println( "1," + U1 + ',' + U2 + ',' + U3 + ',' + U4 + '*'); //Status of Ultrasonic sensors in format( 1,1,0,1,1*) 
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
      
