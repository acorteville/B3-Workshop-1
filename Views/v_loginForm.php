<div class="logincontent">
    <img src="<?php echo BASESITE; ?>Assets/IMG/logogfi.png" alt="logogfi" class="loginlogo">
    <hr class="loginline">
    <form class="formlogin" action="./" method="POST">
        <div class="col-sm-10 loginfield">
            <input type="email" class="form-control logintext" id="email" name="email" placeholder="email@gfi.com">
        </div>
        <div class="col-sm-offset-2 col-sm-10 loginfield">
            <button type="submit" class="btn btn-default loginbutton" id="connexion"><?php echo $text[$language]['signin']; ?></button>
        </div>
    </form>
    <p>Adresse de test : bauduin.lucas@gmail.com</p>
</div>
