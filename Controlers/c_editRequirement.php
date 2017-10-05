<?php
$isEditReq = true;
$requirement = getRequirementDetails($id);
$clients = getClients();
$keys = $requirement->getKeys();
$keys = $keys[0];
$contacts = getContacts($requirement->id_client);

require 'Views/v_addRequirement.php';