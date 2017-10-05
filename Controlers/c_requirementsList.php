<?php
$nbperpage = 6;
$requirements = getRequirements($page, $nbperpage, $sort, $order);
require 'Views/v_requirementsList.php';
