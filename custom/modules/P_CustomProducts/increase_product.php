<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class increaseProduct
{
    public function increaseProduct(&$bean, $event, $arguments)
   {
        //logic
        global $db;
        $sqlSelect = "SELECT LPAD((SELECT COUNT(*)+1 FROM p_customproducts), 4, 0) as count";
        $row = $db->fetchOne($sqlSelect);


       if(!empty($row)){ $bean->product_number = 'SKU'.$row['count'];}



    }
}

