<?php
    include "../classes/user.php"; 

    $user = new User(); //instantiates
    
    //FORM HANDLING
    if( isset($_POST["btn_submit"]) )
    {
        //INPUT
        $username = $_POST["username"];
        $password = $_POST["password"];

        //PROCESS
        //call login method from user class
        $user->login($username,$password);
    }

?>