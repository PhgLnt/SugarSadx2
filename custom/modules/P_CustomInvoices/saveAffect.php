<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class saveAffect
{
    public function increaseInvoice(&$bean, $event, $arguments)
   {
       if(empty($bean->fetched_row['invoice_number'])) {
           //logic
           global $db;
           $sqlSelect = "SELECT LPAD((SELECT COUNT(*)+1 FROM p_custominvoices), 4, 0) as count";
           $row = $db->fetchOne($sqlSelect);

           if (!empty($row)) {
               $bean->invoice_number = 'HD' . $row['count'];
           }
       }
    }
    public function getOrderPrice(&$bean, $event, $arguments)
    {
        global $db;
        $sqlSelect = "SELECT SUM(total_c) as total FROM p_customorddetail_cstm join p_customorders WHERE id = p_customorders_id_c and name ='$bean->order_name_c'";
        $row = $db->fetchOne($sqlSelect);
        if(!empty($row)){ $bean->order_price = $row['total'];}
    }
    public function getTotalDiscount(&$bean, $event, $arguments)
    {
        //logic
        global $db;
        $sqlSelect = "SELECT discount_number FROM `p_customvoucher` WHERE name ='$bean->voucher_discount_c'";
        $row = $db->fetchOne($sqlSelect);

        if(!empty($row)){
            $bean->total_discount = $this->calculateDiscount($row['discount_number'], $bean->order_price);
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
        $bean->total_price = $bean->order_price - $bean->total_discount;
    }
//    public function displayProductInfo(&$bean, $event, $arguments)
//    {
        //logic
//        global $db;
//        $sqlSelect = "SELECT @row := @row + 1 AS STT, p.name, unit_price_c, quantity_c, total_c
//                      FROM p_customorddetail_cstm c, p_customproducts p, p_customorders o, (SELECT @row := 0) r
//                      WHERE p.id = p_customproducts_id_c and c.p_customorders_id_c = o.id and o.name ='$bean->order_name_c'";
//
//
//
//        $result = $db->query($sqlSelect);
//        while ($row = $db->fetchByAssoc($result)) {
//                $arrayResult[$row['STT']] = $row['name'];
//            }
//    }

}


