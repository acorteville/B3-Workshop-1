<?php
if(isset($_POST['email']) && $_POST['email'] != "")
{    
    $userConnected = loginUser($_POST['email']);
    if($userConnected !== FALSE) {
        $_SESSION['email'] = $userConnected->email;
        header('Location: '.BASESITE);
    } else {
        echo "Error";
    }
    
}
require 'Views/Template/v_top.php';
require 'Views/v_loginForm.php';
require 'Views/Template/v_foot.php';
