<?php 
    //Include constants.php for SITEURL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "food-order";
    define('SITEURL', 'http://localhost/food-order/');


    $conn = new mysqli($servername, $username, $password, $dbname);

    //1. Destory the Session
    session_destroy(); //Unsets $_SESSION['user']

    //2. REdirect to Login Page
    header('location:'.SITEURL.'admin/login.php');

?>