<?php
if(!isset($_SESSION['email']))
    { if (!isset($_SESSION['idSession']))
        {
            //header("Location: http://127.0.0.1/B3-Workshop-1/index.html");
        }
    }
    
?>
<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    </head>
    <body>
        <div class="header">
            <h5 class="listetitle">Liste des besoins <i class="fa fa-power-off btndisconnect" aria-hidden="true"></i><i class="fa fa-plus btnajout" aria-hidden="true"></i> </h5>
            
        </div>
        <div class="container">
            <div class="input-group searchbar">
                <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2">
                <span class="input-group-addon" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            <div class="list-group">
                <ul class='listeul'>
                    <li class="list-group-item active listeli" >
                    <h6 class="list-group-item-heading">J'ai besoin d'aide</h6>
                    <p class="list-group-item-text">Jean Michel - 03/10/2017</p>
                    <span class="listeboutton">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </span>
                    </li>
                    <li class="list-group-item active listeli" >
                    <h6 class="list-group-item-heading">J'ai besoin d'aide</h6>
                    <p class="list-group-item-text">Jean Michel - 03/10/2017
                    <span class="listeboutton">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </span>                    
                    </p>
                    </li>
                    <li class="list-group-item active listeli" >
                    <h6 class="list-group-item-heading">J'ai besoin d'aide</h6>
                    <p class="list-group-item-text">Jean Michel - 03/10/2017</p>
                    <span class="listeboutton">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </span>                    </li>
                    <li class="list-group-item active listeli" >
                    <h6 class="list-group-item-heading">J'ai besoin d'aide</h6>
                    <p class="list-group-item-text">Jean Michel - 03/10/2017</p>
                    <span class="listeboutton">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </span>                    </li>
                
                </ul>
            </div>
            
        </div>
    </body>
</html>
