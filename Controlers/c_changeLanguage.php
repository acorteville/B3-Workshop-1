<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

setcookie("lang",$_GET['lang'],time()+86400);
header('Location: '.BASESITE);