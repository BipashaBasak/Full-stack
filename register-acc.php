<?php include_once "connection.php"; ?>

<?php


    $qry = "INSERT INTO `users` VALUES ('', '". $_REQUEST['name']."', '". $_REQUEST['email']."', '".$_REQUEST['password']."', 'Active')";
    $qry_exec = mysqli_query($con, $qry);

    if ($qry_exec) {
    	//echo "Registered succesfully";
    	header('location: read.php');
    } else {
    	echo "Failed";
    }	




?>