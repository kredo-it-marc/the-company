<?php
    include "../classes/user.php";

    $user = new User();
    
    //FORM HANDLING
    if( isset($_POST["btn_upload"]) )
    {
        //INPUT
        $file_name = $_FILES["photo"]["name"];
        $tmp_dir = $_FILES["photo"]["tmp_name"];

        $user->uploadFile($_SESSION["user_id"],$file_name,$tmp_dir);

    }

?>