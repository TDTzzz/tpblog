<?php
namespace Home\Controller;
use Think\Controller;
class ReadController extends Controller {
    public function index(){

    }
    public function linux(){
        $blogModel=D("blog");
        $this->assign("blogs",$blogModel->select());
        $this->display();
    }

}