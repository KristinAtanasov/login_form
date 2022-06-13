<?php

include "../classes/db_connection.class.php";
include "../classes/signup.class.php";


if(isset($_POST['submit'])){
     
    //Receiving the data from the form
    $uid = $_POST['uid'];
    $password = $_POST['pwd'];
    $repeat_password = $_POST['pwdRepeat'];
    $email = $_POST['email'];
}
