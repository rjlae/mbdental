<?php

	session_start();

	include("./connection.php");

	switch($_POST['func']){

    case 1:

    $pnamee = $_POST['pnamee'];
    $paddress = $_POST['paddress'];
    $pcontactno = $_POST['pcontactno'];
    $page = $_POST['page'];
    $pbloodpress = $_POST['pbloodpress'];
    $ptemp = $_POST['ptemp'];
    $pmedhist = $_POST['pmedhist'];
    $prefby = $_POST['prefby'];


    $sql = "INSERT INTO tbl_patients(patientName, patientAddress, patientContact, patientAge, patientBp, patientTemp, patientMedhist, patientRefby)
            VALUES ( '$pnamee', '$paddress' , '$pcontactno', '$page', '$pbloodpress', '$ptemp', '$pmedhist', '$prefby')";

    if($con->query($sql)==TRUE){

    	echo 1;
    }else{
    	echo 0;
    }

    break;

	}
?>
