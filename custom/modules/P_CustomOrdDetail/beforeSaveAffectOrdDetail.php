<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class beforeSaveAffectOrdDetail
{
    public function saveName(&$bean, $event, $arguments)
    {
        if(empty($bean->fetched_row['name'])) {
            //logic
           global $db;
            $sqlSelect = "SELECT COUNT(*)+1 as count FROM p_customorddetail_cstm, p_customorders WHERE name ='$bean->order_name_c' and id=p_customorders_id_c";
            $row = $db->fetchOne($sqlSelect);

           if (!empty($row)) {
               $bean->name = 'DETAIL' . $bean->order_name_c . ' - ' . $row['count'];
           }
        }

    }
    public function savePrice(&$bean, $event, $arguments)
    {
            global $db;
            $sqlSelect = "SELECT price FROM `p_customproducts` WHERE id ='$bean->p_customproducts_id_c'";
            $row = $db->fetchOne($sqlSelect);
            if (!empty($row)) {
                $bean->unit_price_c = $row['price'];
            }
            $bean->total_c = ($bean->unit_price_c) * ($bean->quantity_c);

    }
}