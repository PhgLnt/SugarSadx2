<?php

$hook_version = 1;
$hook_array = Array();

$hook_array['before_save'][] = array(
    1, //Integer
    'demo supplier increase', //String
    'custom/modules/P_CustomSuppliers/increase_supplier.php', //String or null if using namespaces
    'increaseSupplier', //String
    'increaseSupplier', //String
);



?>