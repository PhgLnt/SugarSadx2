<?php

$hook_version = 1;
$hook_array = Array();

$hook_array['before_save'][] = array(
    1, //Integer
    'demo invoice increase', //String
    'custom/modules/P_CustomInvoices/increase_invoice.php', //String or null if using namespaces
    'increaseInvoice', //String
    'increaseInvoice', //String
);



?>