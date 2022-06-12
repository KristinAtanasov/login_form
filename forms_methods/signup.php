<?php

include "../classes/db_connection.class.php";
include "../classes/signup.class.php";
include "../classes/signup.contrl_class.php";

if(isset($_POST['submit'])){
     
    //Receiving the data from the form
    $uid = $_POST['uid'];
    $password = $_POST['pwd'];
    $repeat_password = $_POST['pwdRepeat'];
    $email = $_POST['email'];

    //Creating Signup controller
    $signup = new SignupController($uid, $pwd, $pwdRepeat, $email);
    
    $signup->signupUser();

    header("location: ../index.php?error=none");

}
