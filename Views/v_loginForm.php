<div class="logincontent" style="padding: 0 0 32px;">
    <img src="<?php echo BASESITE; ?>Assets/IMG/logo.png" alt="logogfi" class="loginlogo">
    <hr class="loginline">
    <form class="formlogin" action="./" method="POST">
        <div class="col-sm-10 loginfield input-group">
            <input type="text" class="form-control logintext" id="email" name="email" placeholder="<?php echo $text[$language]['lastname'].".".$text[$language]['name']; ?>" aria-describedby="basic-addon2">
            <span class="input-group-addon loginmailgfi" id="basic-addon2">@gfi.com</span>
        </div>
        <div class="col-sm-offset-2 col-sm-10 loginfield">
            <button type="submit" class="btn btn-default loginbutton" id="connexion"><?php echo $text[$language]['signin']; ?></button>
        </div>
    </form>
</div>
