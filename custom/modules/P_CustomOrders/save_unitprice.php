<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class saveUnitprice
{
    public function saveUnitprice(&$bean, $event, $arguments)
    {
        //logic
        global $db;
//        $sqlSelect = "SELECT LPAD((SELECT COUNT(*)+1 FROM p_customorders), 4, 0) as count";
//        $row = $db->fetchOne($sqlSelect);
        if(!empty($row)){ }
        $bean->unit_price_c = 160000;

    }
}