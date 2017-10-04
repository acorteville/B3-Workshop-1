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
            </div>
        </div>



