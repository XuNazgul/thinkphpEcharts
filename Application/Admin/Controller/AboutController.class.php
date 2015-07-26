<?php
namespace Admin\Controller;
use Think\Controller;
class AboutController extends Controller
{
    public function version(){
        $this->display();
    }
    public function feedback(){
        $this->display();
    }
}