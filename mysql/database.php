<?php

if(isset($_POST['submit'])) {

    $connect = mysqli_connect('localhost', 'root', 'password', 'LandingPage');

    if(!$connect) {
        die('Connection to the database unsuccessful; please check the error message' . mysqli_connect_error());
    } else {
        echo 'Connection has been successful';
        mysqli_close($connect);
    };
}
 