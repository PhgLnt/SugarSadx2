<?php

$hook_version = 1;
$hook_array = Array();

$hook_array['before_save'][] = array(
    1, //Integer
    'demo invoice increase', //String
    'custom/modules/P_CustomInvoices/saveAffect.php', //String or null if using namespaces
    'saveAffect', //String
    'increaseInvoice', //String
);
$hook_array['before_save'][] = array(
    2, //Integer
    'demo save total price', //String
    'custom/modules/P_CustomInvoices/saveAffect.php', //String or null if using namespaces
    'saveAffect', //String
    'getTotalPrice', //String
);



?>