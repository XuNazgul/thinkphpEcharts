<?php
namespace Admin\Controller;
use Think\Controller;
class DashboardController extends Controller
{
    public function transactionStatus(){
        $arr = array("2015-7-1", "2015-7-2", "2015-7-3", "2015-7-4", "2015-7-5", "2015-7-6",
            "2015-7-7", "2015-7-8", "2015-7-9", "2015-7-10", "2015-7-11", "2015-7-12",
            "2015-7-13", "2015-7-14", "2015-7-15", "2015-7-16");
        $arr1 = array("1", "2", "3", "4", "5", "6","1", "2", "3", "4", "5", "6","1", "2", "3", "4");
        $arr2 = array("3", "4", "5", "6", "1", "2","3", "4", "5", "6", "1", "2","3", "4", "5", "6");
        $arr3 = array("4", "6", "8", "10", "6", "8","4", "6", "8", "10", "6", "8","4", "6", "8", "10");
        $json = json_encode($arr);
        $json1 = json_encode($arr1);
        $json2 = json_encode($arr2);
        $json3 = json_encode($arr3);
        $this->assign('arr',$json);
        $this->assign('arr1',$json1);
        $this->assign('arr2',$json2);
        $this->assign('arr3',$json3);

        $this->display();
    }
}