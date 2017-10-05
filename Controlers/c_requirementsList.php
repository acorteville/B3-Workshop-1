<?php
$nbperpage = 9;
$requirements = getRequirements($page, $nbperpage, $sort, $order);
require 'Views/v_requirementsList.php';
