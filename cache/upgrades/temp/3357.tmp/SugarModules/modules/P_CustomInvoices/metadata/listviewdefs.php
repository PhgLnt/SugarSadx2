<?php
$module_name = 'P_CustomInvoices';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'INVOICE_NUMBER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INVOICE_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'CUS_INVOICE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CUS_INVOICE',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'ORDER_NAME' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ORDER_NAME',
    'id' => 'P_CUSTOMORDERS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'ORDER_PRICE' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_ORDER_PRICE',
    'width' => '10%',
  ),
  'TOTAL_DISCOUNT' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_TOTAL_DISCOUNT',
    'width' => '10%',
  ),
  'TOTAL_PRICE' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_TOTAL_PRICE',
    'width' => '10%',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
?>
