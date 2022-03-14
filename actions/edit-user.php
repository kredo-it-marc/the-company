<?php
    include "../classes/user.php";

    $user = new User();

    if( isset($_POST["btn_submit"]) )
    {
        //INPUT
        $user_id = $_POST["user_id"];
        $first_name = $_POST["first_name"]; 
        $last_name = $_POST["last_name"]; 
        $username = $_POST["username"];
        
        //PROCESS
        $user->updateUser($user_id,$first_name,$last_name,$username);
    }
?>