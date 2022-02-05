<?php
echo "Creating a connection with database";
$servername="localhost";
$username="root";
$password="";

//create a connection

$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
  die("Connection was Unsucceesful");
}else{
  echo "Connection established Successfully";
}

?>
