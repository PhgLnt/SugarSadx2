<?php
$module_name = 'P_CustomInvoices';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
        'LBL_DETAILVIEW_PANEL2' => 
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
            'name' => 'invoice_number',
            'label' => 'LBL_INVOICE_NUMBER',
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
          1 => 'date_entered',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'order_name_c',
            'studio' => 'visible',
            'label' => 'LBL_ORDER_NAME',
          ),
          1 => 
          array (
            'name' => 'order_price',
            'label' => 'LBL_ORDER_PRICE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'voucher_discount_c',
            'studio' => 'visible',
            'label' => 'LBL_VOUCHER_DISCOUNT',
          ),
          1 => 
          array (
            'name' => 'total_discount',
            'label' => 'LBL_TOTAL_DISCOUNT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'total_price',
            'label' => 'LBL_TOTAL_PRICE',
          ),
        ),
      ),
      'lbl_detailview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'product_information_c',
            'label' => 'LBL_PRODUCT_INFORMATION',
              'customCode' => '{include file="custom/modules/P_CustomInvoices/tpls/customProductInfo.tpl"}',
              ),
        ),
        1 => 
        array (
          0 => 'description',
          1 => '',
        ),
      ),
    ),
  ),
);
?>
