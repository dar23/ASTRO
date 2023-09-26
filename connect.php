<?php


$host='127.0.0.1';
$user='root';
$password='';
$db='astrophoto';


$connect= new mysqli($host,$user,$password,$db);


if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // echo "Connected successfully";
  


//$tab="CREATE TABLE MyGuests1(
//    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//    firstname VARCHAR(30) NOT NULL,
//    lastname VARCHAR(30) NOT NULL,
//    email VARCHAR(50),
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
 //   )";

//$connect->query($tab);





?>