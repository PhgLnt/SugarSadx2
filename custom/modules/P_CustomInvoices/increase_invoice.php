<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class increaseInvoice
{
    public function increaseInvoice(&$bean, $event, $arguments)
   {
        //logic
        global $db;
        $sqlSelect = "SELECT LPAD((SELECT COUNT(*)+1 FROM p_custominvoices), 4, 0) as count";
        $row = $db->fetchOne($sqlSelect);

       if(!empty($row)){ $bean->invoice_number_c = 'HD'.$row['count'];}



    }
}

