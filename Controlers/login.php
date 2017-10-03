<?php
session_start();

include_once '../Classes/Client.php';
include_once '../Classes/Contact.php';
include_once '../Classes/File.php';
include_once '../Classes/Key.php';
include_once '../Classes/Pdom.php';
include_once '../Classes/Requirement.php';
include_once '../Classes/User.php';
require_once '../Models/Models.php';

Pdom::getPdo();
$pdo = Pdom::getMonPdo();
if(isset($_POST['email']) && $_POST['email'] != "")
{
    //var_dump($_POST['email']);
    //echo $_POST['email'];
    $data = loginUser($_POST['email']);
    //var_dump($data); 
    if(empty($data))
    {
        header("Location: http://127.0.0.1/B3-Workshop-1/index.html");
    }
    else
    {
        $_SESSION['email'] = $data['email']; 
        $_SESSION['idSession'] = $data['id']; 
        header("Location: http://127.0.0.1/B3-Workshop-1/listebesoin.php");
    }
}
else
{
    header("Location: http://127.0.0.1/B3-Workshop-1/index.html");
}
//echo $_POST['email'];