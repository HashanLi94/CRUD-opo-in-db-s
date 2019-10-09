<?php
    $connection = mysqli_connect('localhost', 'root', '', 'login_1_db');

    if(mysqli_connect_errno()){
        die('Connection is failed.' . mysqli_connect_error());

    }else{
        echo'Connection is successfull.'. "<br>";
    }

?>