<div class="logincontent" style="padding: 0 0 32px;">
    <img src="<?php echo BASESITE; ?>Assets/IMG/logo.png" alt="logogfi" class="loginlogo">
    <hr class="loginline">
    <?php if($error) { ?><div style="width: 70%; margin: 12px auto; background: #be7c7c; color: #702525; text-align: center; padding: 12px 16px; border: 1px solid #702525; border-radius: 3px;"><p style="margin: 0;"><?php echo $text[$language]['checklogin']; ?></p></div><?php } ?>
    <form class="formlogin" action="./" method="POST">
        <div class="col-sm-10 loginfield input-group">
            <input type="text" class="form-control logintext" id="email" name="email" autocapitalize="none" placeholder="<?php echo $text[$language]['lastname'].".".$text[$language]['name']; ?>" aria-describedby="basic-addon2">
            <span class="input-group-addon loginmailgfi" id="basic-addon2">@gfi.com</span>
        </div>
        <div class="col-sm-offset-2 col-sm-10 loginfield">
            <button type="submit" class="btn btn-default loginbutton" id="connexion"><?php echo $text[$language]['signin']; ?></button>
        </div>
    </form>
</div>
