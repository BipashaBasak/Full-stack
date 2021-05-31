<?php include_once "connection.php"; ?>

<?php
    //print_r($_REQUEST);die;

    $path = "Upload/".$_FILES["pic"]["name"];
    $tmp = $_FILES["pic"]["tmp_name"];

    move_uploaded_file($tmp, $path); 


    $q1 = mysqli_query($con, "SELECT `id` FROM `users` WHERE `email` = '". $_REQUEST['email']."'");

    $num = mysqli_num_rows($q1);

    if($num === 0) {


       $qry = "INSERT INTO `users` VALUES ('', '". $_REQUEST['name']."', '". $_REQUEST['email']."', '".$_REQUEST['password']."', '".$_REQUEST['gender']."', '".$_REQUEST['city']."', 'Active')";
       $qry_exec = mysqli_query($con, $qry);

       if ($qry_exec) {

       	   $q1 = mysqli_query($con, "SELECT `id` FROM `users` WHERE `email` = '". $_REQUEST['email']."'");
       	   $user = mysqli_fetch_array($q1);

       	   //print_r($_REQUEST['skills']);

       	   foreach ($_REQUEST['skills'] as $key => $value) {
              $qry_exec1 = mysqli_query($con, "INSERT INTO `skills` VALUES ('', ".$user['id'].", '".$value."')");
       	   }
       	  
    	   //echo "Registered succesfully";
    	   header('location: login.php');
        } else {
    	    echo "Failed";
        }
    } else {
    	echo "Email id already exists. Please try a different Email id.";
    }	

?>