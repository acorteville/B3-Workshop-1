<?php
$error = FALSE;
if(isset($_POST['email']) && $_POST['email'] != "")
{    
    $userConnected = loginUser($_POST['email']."@gfi.com");
        
    if($userConnected !== FALSE) {
        $_SESSION['email'] = $userConnected->email;
        $_SESSION['idSession'] = $userConnected->id;
        header('Location: '.BASESITE);
    } else {
        $error = TRUE;
    }
    
}
require 'Views/Template/v_top.php';
require 'Views/v_loginForm.php';
require 'Views/Template/v_foot.php';
require 'Views/Template/v_bottom.php';

