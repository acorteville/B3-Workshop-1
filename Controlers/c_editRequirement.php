<?php
$isEditReq = true;
$requirement = getRequirementDetails($id);
$clients = getClients();
$contacts = getContacts($requirement->id_client);
require 'Views/v_addRequirement.php';