<?php

	session_start();

	include("./connection.php");

	switch($_POST['func']){

    case 1:

		$datex = $_POST['datex'];
		$servicex = $_POST['servicex'];
    $namex = $_POST['namex'];
    $contactnox = $_POST['contactnox'];
    $timex = $_POST['timex'];

    $sql = "INSERT INTO tbl_appointment(appointmentDate, appointmentService, patientName, patientContact, appointmentTime)
            VALUES ( '$datex', '$servicex', '$namex', '$contactnox',  '$timex')";

    if($con->query($sql)==TRUE){

    	echo 1;
    }else{
    	echo 0;
    }

    break;

	}
?>
