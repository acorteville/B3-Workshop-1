        <div class="container">
            <div class="input-group searchbar" style="padding: 22px 0 10px;">
                <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2">
                <span class="input-group-addon" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
                <div class="list-group">
                <div  class="row">
                    <?php foreach ($requirements as $aRequirement) { ?>   
                    <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="list-group-item active listeli" >
                        <div class="statut">
                            <?php
                            switch ($aRequirement->status) {
                                case 'Lost':
                                    echo '<i class="fa fa-times statuticon fa-2x" aria-hidden="true" style="color: #a61919;"></i>';
                                break;
                            
                                case 'Win':
                                    echo '<i class="fa fa-check statuticon fa-2x" aria-hidden="true" style="color: #2a8a1b;"></i>';
                                break;

                                case 'Open':
                                    echo '<i class="fa fa-folder-open statuticon fa-2x" aria-hidden="true"></i>';
                                break;
                            
                                default:
                                break;
                            } ?>
                            <p class="statuttext"><?php echo $text[$language][$aRequirement->status]; ?></p>
                            <div class="fix"></div>
                        </div>
                        <div class="titleclient">
                            <h6 class="list-group-item-heading tittleRequirement"><?php echo $aRequirement->title; ?></h6>
                            <p class="list-group-item-text nameclient"><?php echo $aRequirement->name_client; ?></p>
                            <div class="fix"></div>
                        </div>
                        <div class="listeboutton">
                            <p class="daterequirement"><?php echo formatDate($aRequirement->creationdate); ?></p>
                            <a href="<?php echo BASESITE."edit-requirement-".$aRequirement->id.".html"; ?>"><i class="fa fa-pencil iconpencil fa-2x" aria-hidden="true"></i></a>
                            <i id_suppr="<?php echo $aRequirement->id; ?>" class="fa fa-trash icontrash fa-2x" aria-hidden="true"></i>
                            <div class="fix"></div>
                        </div>
                        <div class="fix"></div>
                    </div>     
                    </div>     
                    <?php } ?>
                </div>
                <div class="row" style="margin: 20px auto 20px;">
                    <?php if($page > 1) { ?>
                    <div class="col" style="text-align: center;"><a href="<?php echo BASESITE; ?>requirement-list-<?php echo $page - 1 ."-".$sort."-".$order; ?>.html" class="button "><?php echo $text[$language]['previous']; ?></a><div class="fix"></div></div>
                    <?php } ?>
                    <div class="listetri">
                        <form action="" method="post" name="sortby" id="sortby">
                            <select name="sortby" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                <?php var_dump($text); ?>
                                <option value="<?php echo BASESITE; ?>requirement-list-1-creationdate-DESC.html"><?php echo $text[$language]['datedecreasing']; ?></option>
                                <option value="<?php echo BASESITE; ?>requirement-list-1-creationdate-ASC.html"><?php echo $text[$language]['dateincreasing']; ?></option>
                                <option value="<?php echo BASESITE; ?>requirement-list-1-title-ASC.html"><?php echo $text[$language]['titreincreasing']; ?></option>
                                <option value="<?php echo BASESITE; ?>requirement-list-1-title-DESC.html"><?php echo $text[$language]['titredecreasing']; ?></option>
                            </select>
                        </form>
                    </div>

                    <?php if(count(getRequirements($page + 1, $nbperpage, $sort)) > 0) { ?>
                        <div class="col" style="text-align: center;"><a href="<?php echo BASESITE; ?>requirement-list-<?php echo $page + 1 ."-".$sort."-".$order; ?>.html" class="button"><?php echo $text[$language]['next']; ?></a><div class="fix"></div></div>                        
                    <?php } ?>
                </div>
            </div>
        </div>



