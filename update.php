<?php include_once "connection.php"; ?>

<?php
    //print_r($_REQUEST);

    $qry = mysqli_query($con, "SELECT * FROM `users` WHERE `id` = ".$_REQUEST['id']);
    
    $row = mysqli_fetch_array($qry);

    //print_r($row);



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="Update-acc.php" method="get">
		<input type="hidden" name="id" value="<?=$row['id']?>">
        Name: <input type="text" name="name" value="<?=$row['name']?>"><br><br>
        Email: <input type="email" name="email" value="<?=$row['email']?>"><br><br>
        Password: <input type="password" name="password" value="<?=$row['password']?>"><br><br>
        <input type="submit" value="Update"> 
	</form>
</body>
</html>	

