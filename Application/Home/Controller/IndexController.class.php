<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    function __construct(){
       parent::__construct();
      $this->setting=D("Admin/Setting");
      $this->cfg=$this->setting->getAll();
      
    }

    public function index(){

      $this->assign('cfg',$this->cfg);
      $this->display();
       
    }
    public function read(){

      $bid=I("get.bid");
      $blogModel=D("blog");

      $blog=$blogModel->where(array('bid'=>$bid))->find();

      $this->assign('blog',$blog);
      $this->assign('cfg',$this->cfg);
      $this->display();

    }
   
}