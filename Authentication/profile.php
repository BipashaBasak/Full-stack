<?php include_once "connection.php"; ?>
<?php

    session_start();
    if (!isset($_SESSION['id'])) {
       header('location: login.php');

    }

?>
<?php

    //session_start();
    $qr = "SELECT
              *
           FROM
               `skills`
           WHERE
                `user_id` = ".$_SESSION['id'];     

    $q1 = mysqli_query($con, $qr);

    while($skill = mysqli_fetch_array($q1)) {
        //print_r($skill);
        echo $skill['name'];
        echo '<br>';

    }

    //echo 'welcome to your profile '.$user['name'];
    //echo '<br>';
    
    //echo 'Email: '.$user['email']';    
    
?>

<br>
<br>
<br>
<br>
<a href="logout.php">Logout</a>


