<?php

$hook_version = 1;
$hook_array = Array();

$hook_array['before_save'][] = array(
    1, //Integer
    'demo product increase', //String
    'custom/modules/P_CustomProducts/increase_product.php', //String or null if using namespaces
    'increaseProduct', //String
    'increaseProduct', //String
);



?>