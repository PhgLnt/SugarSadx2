<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class increaseSupplier
{
    public function increaseSupplier(&$bean, $event, $arguments)
   {
       if(empty($bean->fetched_row['supplier_number'])) {
           //logic
           global $db;
           $sqlSelect = "SELECT LPAD((SELECT COUNT(*)+1 FROM p_customsuppliers), 4, 0) as count";
           $row = $db->fetchOne($sqlSelect);

           if (!empty($row)) {
               $bean->supplier_number = 'NCC' . $row['count'];
           }
       }





    }
}

