<?php
$nbperpage = 9;
$requirements = getRequirements($page, $nbperpage);
require 'Views/v_requirementsList.php';
