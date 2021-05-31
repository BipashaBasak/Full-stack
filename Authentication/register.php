<?php

    session_start();
    if (isset($_SESSION['id'])) {
        header('location: profile.php');

    }


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="register-acc.php" method="post" enctype="multipart/form-data">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="email" name="email"><br><br>
        Password: <input type="password" name="password"><br><br>

        City:
        <select name="city" required>
        	<option value="">Select your city</option>
        	<option value="kolkata">Kolkata</option>
        	<option value="bengaluru">Banglore</option>
        	<option value="delhi">Delhi</option>
        	
        </select><br><br>

        Gender:
        <input type="radio" value="female" name="gender">Female
        <input type="radio" value="male" name="gender">Male
        <br><br>

        Skills::
        <input type="checkbox" value="Javascript" name="skills[]">Javascript
        <input type="checkbox" value="CoreJava" name="skills[]">CoreJava
        <input type="checkbox" value="HTML" name="skills[]">HTML
        <input type="checkbox" value="PHP" name="skills[]">PHP
        <input type="checkbox" value="Python" name="skills[]">Python
        <input type="checkbox" value="C++" name="skills[]">C++
        <br><br>

        Image:
        <input type="file" name="pic">


        <input type="submit" value="Register"> 
	</form>
</body>
</html>	