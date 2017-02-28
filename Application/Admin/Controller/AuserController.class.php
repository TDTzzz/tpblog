<?php
namespace Admin\Controller;
use Think\Controller;
class AuserController extends AdmController {
    public function index(){
        $admin=D("admin");
        $users=$admin->select();

        $data=array();
        $data['users']=$users;

        $this->assign("data",$data);

        $this->display();
    }
    public function add(){
        $id=I("get.id");
        $admin=D("admin");
        $user=array(
            'id'=>0,
            'name'=>'',
            'passwd'=>'',
            );
        if($id>0){
            $user=$admin->where(array('id'=>$id))->find();
        }
        $this->assign("user",$user);
        $this->display();
    }
    public function delete(){
        $id=I("get.id");
        D("admin")->where(array('id'=>$id))->delete();
        return $this->redirect("/Admin/Auser/index");
    }
    public function _edit($id){
         $admin=D("admin");

        if(IS_POST){
            $name=I("post.name");
            $passwd=I("post.passwd");
            //验证表单的合法性
            $rule=array(
                array("name","require","用户名不能为空"),
                array("passwd","require","密码不能为空"),
                );
            //validate 用于数组数据的自动验证 create创建数据对象
            if(!$admin->validate($rule)->create()){
                return $this->error($admin->getError(),"/Admin/Auser/add");
            }
            //验证用户的唯一性
            $where=array();
            $where['name']=$name;
            $where['id']=array('NEQ',$id);
            $isArr=$admin->where($where)->find();
            if($isArr){
                return $this->error("此用户已经存在","/Admin/Auser/add");
            }
            //插入数据
            $insert=array(
                'name'=>$name,
                'passwd'=>$passwd,
                );
            $is=$admin->where(array('id'=>$id))->save($insert);
            
                return $this->success("操作成功了{$is}条数据","/Admin/Auser/index");//有问题 只能显示操作了1或0条数据
           
        }
    }
    public function save(){
        $id=I("get.id");
        var_dump($id);
        if($id>0){
            return $this->_edit($id);
        }
        $admin=D("admin");

        if(IS_POST){
            $name=I("post.name");
            $passwd=I("post.passwd");

            $rule=array(
                array("name","require","用户名不能为空"),
                array("passwd","require","密码不能为空"),
                );
            //validate 用于数组数据的自动验证 create创建数据对象
            if(!$admin->validate($rule)->create()){
                return $this->error($admin->getError(),"/Admin/Auser/add");
            }
            //验证用户的唯一性
            $where=array();
            $where['name']=$name;
            $isArr=$admin->where($where)->find();
            if($isArr){
                return $this->error("此用户已经存在","/Admin/Auser/add");
            }
            //插入数据
            $insert=array(
                'name'=>$name,
                'passwd'=>$passwd,
                );
            $id=$admin->add($insert);
            if($id){
                return $this->success("操作成功","/Admin/Auser/index");
            }else{
                return $this->error("操作失败","/Admin/Auser/add");
            }
        }
    }
}