<?php
require '../mysqlConnect.php';
?>
<?php
$parking="demo1";
$slot1 =$_GET['stat1'];
$slot2 =$_GET['stat2'];
$slot3 =$_GET['stat3'];
$slot4 =$_GET['stat4'];
$sql="select * from $parking ";
            $result=$con->query($sql);
		    $row=$result->fetch_assoc();
			$a=$row["status"];
		    $row=$result->fetch_assoc();
            $b=$row["status"];
		    $row=$result->fetch_assoc();
            $c=$row["status"];        
            $row=$result->fetch_assoc();
            $d=$row["status"];
// echo $a ."</br>";
// echo $b ."</br>";
// echo $c ."</br>";
// echo $d ."</br>";
if($a != "booked")
{
    if ($slot1== 1) {
    $sql="update $parking set book='unavailabe' where slot='A'";
    $con->query($sql);
        $led1 = 1;
      }
      else {
        $sql="update $parking set book='availabe' where slot='A'";
        $con->query($sql);
        $led1 = 0;
      }
} 
else 
{
        $led1=1;
}   
if($b != "booked")
{
    if ($slot2== 1) {
    $sql="update $parking set book='unavailabe' where slot='B'";
    $con->query($sql);
        $led2 = 1;
      }
      else {
        $sql="update $parking set book='availabe' where slot='B'";
        $con->query($sql);
        $led2 = 0;
      }
} 
else 
{
        $led2=1;
} 
if($c != "booked")
{
    if ($slot3== 1) {
    $sql="update $parking set book='unavailabe' where slot='C'";
    $con->query($sql);
        $led3 = 1;
      }
      else {
        $sql="update $parking set book='availabe' where slot='C'";
        $con->query($sql);
        $led3 = 0;
      }
} 
else 
{
        $led3=1;
} 
if($d != "booked")
{
    if ($slot4== 1) {
    $sql="update $parking set book='unavailabe' where slot='D'";
    $con->query($sql);
        $led4 = 1;
      }
      else {
        $sql="update $parking set book='availabe' where slot='D'";
        $con->query($sql);
        $led4 = 0;
      }
} 
else 
{
        $led4=1;
} 

// mySerial.println("0," + Ledstatus1 + ',' + Ledstatus2 + ',' + Ledstatus3 + ',' + Ledstatus4 + '*');
echo "0".",".$led1.",".$led2.",".$led3.",".$led4."*";
?>
