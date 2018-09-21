<?php

  $servername = "localhost";
  $username = "root";
  $password = "lalalala";
  $dbname = "db_clinic";

  //Create connection

  $con = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($con->connect_error){

    die("Connection failed: " . $con->connect_error);
  }


?>
