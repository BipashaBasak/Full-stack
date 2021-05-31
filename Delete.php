<?php include_once "connection.php"; ?>
<?php

    //echo 'to be deleted';
     //print_r($_REQUEST);

      //$qry = mysqli_query($con, "DELETE FROM `users` WHERE `id`= ".$_REQUEST['id']);
        $qry = mysqli_query($con, "UPDATE `users` SET `isDeleted` = 'Inactive' WHERE `id`= ".$_REQUEST['id']);

      if ($qry) {
      	//echo "successfully deleted";
      	header('location: read.php');
      } else {
      	echo "Failed";
      }





?>


