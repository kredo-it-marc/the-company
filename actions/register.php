<?php
    include "../classes/user.php";

    //instantiate
    $user = new User();

    //FORM HANDLING
    if( isset($_POST["btn_submit"]) )
    {
        //INPUT
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        //call createUser() method in class user
        $user->createUser($first_name,$last_name,$username,$password);
    }
?>