<?php

	session_start();

	include("./connection.php");

	switch($_POST['func']){

    case 1:

    $unamex = $_POST['unamex'];
    $pwordx = $_POST['pwordx'];

    $sql = "SELECT * FROM tbl_user
    	WHERE username LIKE '$unamex'
    	AND password LIKE '$pwordx'";

    $result = $con->query($sql);

    $row = $result->fetch_assoc();

    if($row>0){
    	echo 1;
    }else{
    	echo 0;
    }

    break;

	}
?>
