        <div class="container">
            <div class="input-group searchbar">
                <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2">
                <span class="input-group-addon" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
                <div class="list-group">
                <ul class='listeul'>
                    <?php foreach ($requirements as $aRequirement) { ?>
                    <li class="list-group-item active listeli" >
                        <h6 class="list-group-item-heading"><?php echo $aRequirement->title; ?></h6>
                        <p class="list-group-item-text"><?php echo $aRequirement->getClient()->corporatename; ?> - 03/10/2017</p>
                        <span class="listeboutton">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </span>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
