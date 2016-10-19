<?php
    // Connection to the database
    require('db_conn.php');
    
    // Getting File from the Form Input
    $email =  $_POST['email'];
    
    // Sql it to the database
    $q = mysqli_query($db,"INSERT INTO email_subscribers (`email`) VALUES ('$email')");
    
    // Cross Checking

    if($q){
        echo 'success';
    }else{
        echo 'failed';
    }
    
?>