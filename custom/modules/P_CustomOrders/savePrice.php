<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class savePrice
{
    public function savePrice(&$bean, $event, $arguments)
    {
        global $db;
        $sqlSelect = "SELECT price FROM `p_customproducts` WHERE name ='$bean->product_order_c'";
        $row = $db->fetchOne($sqlSelect);
        if(!empty($row)){ $bean->unit_price_c = $row['price'];}
        $bean->total_price_c = ($bean->unit_price_c) * ($bean->quantity_c);

    }
}