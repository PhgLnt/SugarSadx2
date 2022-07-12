<?php
$module_name = 'P_CustomInvoices';
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
          0 => 'name',
          1 => 
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
            'name' => 'customer_invoice_c',
            'studio' => 'visible',
            'label' => 'LBL_CUSTOMER_INVOICE',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'voucher_discount_c',
            'studio' => 'visible',
            'label' => 'LBL_VOUCHER_DISCOUNT',
          ),
        ),
        3 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
