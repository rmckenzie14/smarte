<?php


$host = 'gator3215';
$user = 'hummions_smarte';
$pwd = '3bc8ba3f81cf_2023';
$dbName = 'hummions_smarte';

// private $host = "gator3215";
//     private $user = "hummions_avaloni";
//     private $pwd = "SuNmoon123!dayna";
//     private $dbName = "hummions_cariShield";

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

