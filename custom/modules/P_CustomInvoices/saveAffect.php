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
    public function getOrderPrice(&$bean, $event, $arguments)
    {
        global $db;
        $sqlSelect = "SELECT total_price_c FROM `p_customorders_cstm` JOIN `p_customorders` WHERE id=id_c AND name ='$bean->order_number_c'";
        $row = $db->fetchOne($sqlSelect);
        if(!empty($row)){ $bean->order_price_c = $row['total_price_c'];}
    }
    public function getTotalDiscount(&$bean, $event, $arguments)
    {
        //logic
        global $db;
        $sqlSelect = "SELECT discount_number_c FROM `p_something_cstm` JOIN `p_something` WHERE id=id_c AND name ='$bean->voucher_c'";
        $row = $db->fetchOne($sqlSelect);

        if(!empty($row)){
            $bean->total_discount_c = $this->calculateDiscount($row['discount_number_c'], $bean->order_price_c);
        }

    }
    function calculateDiscount ($number, $money)
    {
        if($number<1) {
            $discount = $number * $money;
        } else $discount = $number;
        return $discount;
    }

    public function getTotalPrice(&$bean, $event, $arguments)
    {
        $bean->total_price_c = $bean->order_price_c - $bean->total_discount_c;
    }
}


