<?php
$module_name = 'P_CustomOrdDetail';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PRODUCT_NUMBER_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT_NUMBER',
    'id' => 'P_CUSTOMPRODUCTS_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'ORDER_NAME_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ORDER_NAME',
    'id' => 'P_CUSTOMORDERS_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'UNIT_PRICE_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_UNIT_PRICE',
    'width' => '10%',
  ),
  'QUANTITY_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_QUANTITY',
    'width' => '10%',
  ),
  'TOTAL_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_TOTAL',
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
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
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
