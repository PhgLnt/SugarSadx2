<?php
//if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
//require_once('include/MVC/View/views/view.detail.php');
//class InvoicesViewDetail extends ViewDetail
//{
//    function InvoicesViewDetail(){
//        parent::ViewDetail();
//    }
//
//    function display(){
//
//        global $db;
//        if(empty($this->bean->order_name_c)){
//            global $app_strings;
//            sugar_die($app_strings['ERROR_NO_RECORD']);
//        }
//
//        $recordOrd= $this->bean->order_name_c;
//
////        $sql1 ="SELECT @row := @row + 1 AS STT, p.name, unit_price_c, quantity_c, total_c
////                      FROM p_customorddetail_cstm c, p_customproducts p, p_customorders o, (SELECT @row := 0) r
////                      WHERE p.id = p_customproducts_id_c and c.p_customorders_id_c = o.id and o.name ='Ord9/7'";
//        $sql1 ="SELECT * from p_custominvoices";
//        $row1 =$db->query($sql1);
//        $res =$db->fetchByAssoc($row1);
//        //For eg:
//        $name=$res['name'];
//
//
//
//  $this->ss->assign("name", $name);
//
//
//        $this->dv->process();
//  echo $this->dv->display();
//
//  }
//}

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class P_CustomInvoicesViewDetail extends ViewDetail
{

    public function P_CustomInvoicesViewDetail()
    {
        parent::ViewDetail();
    }

    public function display()
    {
        $name = $this->bean->order_name_c;
        global $db;
        $sqlSelect = "SELECT @row := @row + 1 AS STT, p.name name, unit_price_c up, quantity_c quantity, total_c total
                      FROM p_customorddetail_cstm c, p_customproducts p, p_customorders o, (SELECT @row := 0) r
                      WHERE p.id = p_customproducts_id_c and c.p_customorders_id_c = o.id and o.name ='$name'";

        //$arrayFirst = array("STT", "Name", "Unit Price", "Quantity", "Total");
        $i = 0;

        $result = $db->query($sqlSelect);
        while ($row = $db->fetchByAssoc($result)) {
            $arrayFirst[$i] = array('stt'=>$row['STT'],
                                    'name'=>$row['name'],
                                    'unitprice'=>$row['up'],
                                    'quantity'=>$row['quantity'],
                                    'total'=>$row['total']);
            $i++;
            }
        $this->ss->assign("arrayResult", $arrayFirst);

        parent::display();
    }


}

