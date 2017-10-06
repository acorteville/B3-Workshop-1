        <div class="header">
            <h5 class="listetitle">
                <?php echo $userConnected->lastname ?> <span class="separator">|</span> <span class="pagetitle"><?php echo $text[$language]['requirementslist']; ?></span>
                <a href="<?php echo BASESITE; ?>logout/" title="<?php echo $text[$language]['logout']; ?>"><i class="fa fa-power-off btndisconnect" aria-hidden="true"></i></a>
                <a href="<?php echo BASESITE; ?>new-requirement/" title="<?php echo $text[$language]['addrequirement']; ?>"><i class="fa fa-plus btnajout" aria-hidden="true"></i></a>
            </h5>
        </div>