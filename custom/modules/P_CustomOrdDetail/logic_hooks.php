<?php

$hook_version = 1;
$hook_array = Array();

$hook_array['before_save'][] = array(
    1, //Integer
    'demo save name', //String
    'custom/modules/P_CustomOrdDetail/beforeSaveAffectOrdDetail.php', //String or null if using namespaces
    'beforeSaveAffectOrdDetail', //String
    'saveName', //String
);
$hook_array['before_save'][] = array(
    2, //Integer
    'demo save price', //String
    'custom/modules/P_CustomOrdDetail/beforeSaveAffectOrdDetail.php', //String or null if using namespaces
    'beforeSaveAffectOrdDetail', //String
    'savePrice', //String
);



?>