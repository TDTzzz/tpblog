<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    
    public function index(){
        $do=I("get.do");
        if($do=='chk'){
            $name=I("post.name");
            $passwd=I("post.passwd");
            $admin=D("admin");

            $where=array(
                'name'=>$name,
                'passwd'=>$passwd,
                );
            $user=$admin->where($where)->find();
            var_dump($user);
            if(!$user){
                return $this->error("账号或密码错误","/Admin/Login/index");
            }
            session("id",$user['id']);
            return $this->error("登陆成功","/Admin/Auser/index");
        }
        $this->display();
    }
    public function out(){
        
        session("id",null);
        $this->success("退出成功","/Admin/Login/index");
    }
}