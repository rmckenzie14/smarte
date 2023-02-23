<?php
//session_start();

$host = 'localhost';
$user = 'root';
$pwd = '';
$dbName = 'smart_e';

//create connection
// $dbconnection = new mysqli($host, $user, $pwd, $dbName);
// // Check connection
// if ($dbconnection->connect_error) {
//     die("Connection failed: " . $dbconnection->connect_error);

//   }else{
//     $_SESSION['isConnect'] = true;
//   }
$con = mysqli_connect($host, $user, $pwd, $dbName);

  if(!$con)
  {

      die("Failed to connect!");

  }

