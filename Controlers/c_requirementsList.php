<?php
$nbperpage = 15;
$requirements = getRequirements($page, $nbperpage, $sort, $order);
require 'Views/v_requirementsList.php';
