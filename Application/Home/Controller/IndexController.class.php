<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $arr = array("1","3","3","2","2","3","9");
        $json = json_encode($arr);
        $this->assign('arr',$json);
        $this->display();
    }
}