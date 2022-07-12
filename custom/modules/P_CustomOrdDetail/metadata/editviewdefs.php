<?php
$module_name = 'P_CustomOrdDetail';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'order_name_c',
            'studio' => 'visible',
            'label' => 'LBL_ORDER_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'product_number_c',
            'studio' => 'visible',
            'label' => 'LBL_PRODUCT_NUMBER',
          ),
          1 => 
          array (
            'name' => 'quantity_c',
            'label' => 'LBL_QUANTITY',
          ),
        ),
        2 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
