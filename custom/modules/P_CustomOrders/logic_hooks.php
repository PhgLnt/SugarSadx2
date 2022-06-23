<?php

$hook_version = 1;
$hook_array = Array();

$hook_array['before_save'][] = array(
    1, //Integer
    'demo save price', //String
    'custom/modules/P_CustomOrders/save_unitprice.php', //String or null if using namespaces
    'saveUnitprice', //String
    'saveUnitprice', //String
);



?>