<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class increaseOrder
{
    public function increaseOrder(&$bean, $event, $arguments)
    {
        //logic
        global $db;
        $sqlSelect = "SELECT LPAD((SELECT COUNT(*)+1 FROM p_customorders), 4, 0) as count";
        $row = $db->fetchOne($sqlSelect);
        if(!empty($row)){ $bean->order_number_c = 'ORD'.$row['count'];}


        $sqlgetPrice = "SELECT price from p_customproducts WHERE  ";


    }
}
