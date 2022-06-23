<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class saveAffect
{
    public function increaseInvoice(&$bean, $event, $arguments)
   {
        //logic
        global $db;
        $sqlSelect = "SELECT LPAD((SELECT COUNT(*)+1 FROM p_custominvoices), 4, 0) as count";
        $row = $db->fetchOne($sqlSelect);

       if(!empty($row)){ $bean->invoice_number_c = 'HD'.$row['count'];}

    }
    public function getTotalPrice(&$bean, $event, $arguments)
    {
        global $db;
        $sqlSelect = "SELECT total_price_c FROM `p_customorders_cstm` JOIN `p_customorders` WHERE id=id_c AND name ='$bean->order_number_c'";
        $row = $db->fetchOne($sqlSelect);
        if(!empty($row)){ $bean->order_price_c = $row['total_price_c'];}
        $bean->total_price_c = $bean->order_price_c - $bean->total_discount_c;

    }
}

