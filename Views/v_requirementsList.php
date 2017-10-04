        <div class="container">
            <div class="input-group searchbar">
                <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2">
                <span class="input-group-addon" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
                <div class="list-group">
                <ul class='listeul'>
                    <?php foreach ($requirements as $aRequirement) { ?>                    
                    <li class="list-group-item active listeli" >
                        <div class="statut">
                            <i class="fa fa-check statuticon fa-2x" aria-hidden="true"></i>
                            <p class="statuttext"><?php echo $aRequirement->status; ?></p>
                        </div>
                        <div class="titleclient">
                        <h6 class="list-group-item-heading tittleRequirement"><?php echo $aRequirement->title; ?></h6>
                        <p class="list-group-item-text nameclient"><?php echo $aRequirement->getClient()->corporatename; ?></p>
                        </div>
                        <div class="listeboutton">
                        <p class="daterequirement"><?php echo formatDate($aRequirement->creationdate); ?></p>
                            <i class="fa fa-pencil iconpencil fa-2x" aria-hidden="true"></i>
                            <i class="fa fa-trash icontrash fa-2x" aria-hidden="true"></i>
                        </div>
                    </li>     

                    <?php } ?>
                </ul>
                <div class="row" style="width: 400px; margin: 0 auto">
                    <?php if($page > 1) { ?>
                    <div class="col" style="text-align: center;"><a href="<?php echo BASESITE; ?>requirement-list-<?php echo $page - 1; ?>.html" class="button ">Précédent</a><div class="fix"></div></div>
                    <?php } if(count(getRequirements($page + 1, $nbperpage)) > 0) { ?>
                        <div class="col" style="text-align: center;"><a href="<?php echo BASESITE; ?>requirement-list-<?php echo $page + 1; ?>.html" class="button">Suivant</a><div class="fix"></div></div>                        
                    <?php } ?>
                </div>
            </div>
        </div>



