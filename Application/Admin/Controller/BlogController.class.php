<?php
namespace Admin\Controller;

class BlogController extends AdmController {
    public function index(){
        
        $setting=D("setting");
        $cfg=$setting->getAll();

        $blog=D("blog");

        $count      = $blog->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,$cfg['分页']);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $blogs=$blog->limit($Page->firstRow.','.$Page->listRows)->select();
        
        $this->assign("show",$Page->show());
        $this->assign("blogs",$blogs);
        $this->display();
    }
    public function add(){
        $bid=I("get.bid");
        $blog=D("blog");
        $blogs=array(
            'bid'=>0,
            'title'=>'',
            'author'=>'',
            'content'=>'',
            'intime'=>'',
            );
        if($bid>0){
            $blogs=$blog->where(array('bid'=>$bid))->find();
        }
        $this->assign("blogs",$blogs);
        $this->display();
    }
    public function save(){
        $bid=I("get.bid");
        var_dump($bid);
        if($bid>0){
            return $this->_edit($bid);
        }
        $blog=D("blog");

        if(IS_POST){
            $title=I("post.title");
            $author=I("post.author");
            $content=I("post.content");

            $rule=array(
                array("title","require","标题不能为空"),
                array("author","require","作者不能为空"),
                array("content","require","内容不能为空"),
                );
            //validate 用于数组数据的自动验证 create创建数据对象
            if(!$blog->validate($rule)->create()){
                return $this->error($blog->getError(),"/Admin/Blog/add");
            }
            
            //插入数据
            $insert=array(
                'title'=>$title,
                'author'=>$author,
                'content'=>$content,
                'intime'=>time(),
                );
            $bid=$blog->add($insert);
            if($bid){
                return $this->success("操作成功","/Admin/Blog/index");
            }else{
                return $this->error("操作失败","/Admin/Blog/add");
            }
        }
    }
    public function delete(){
        $bid=I("get.bid");
        D("blog")->where(array('bid'=>$bid))->delete();
        return $this->redirect("/Admin/Blog/index");
    }
    public function upload(){
        $result=array();
        $result['msg']='';
        $result['success']=false;
        $result['file_path']='';

        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        // 上传文件 
        $info   =   $upload->uploadOne($_FILES['file1']);
        if(!$info) {// 上传错误提示错误信息
            $result['msg']=$upload->getError();
            
        }else{// 上传成功
            $url='/Uploads/'.$info['savepath'].$info['savename'];
            $result['file_path']=$url;
            $result['success']=true;
        }

        $this->ajaxReturn($result);
    }
    public function _edit($bid){
         $blog=D("blog");

        if(IS_POST){
            $title=I("post.title");
            $author=I("post.author");
            $content=I("post.content");

            $rule=array(
                array("title","require","标题不能为空"),
                array("author","require","作者不能为空"),
                array("content","require","内容不能为空"),
                );
            //validate 用于数组数据的自动验证 create创建数据对象
            if(!$blog->validate($rule)->create()){
                return $this->error($blog->getError(),"/Admin/Blog/add");
            }
            
            //插入数据
            $insert=array(
                'title'=>$title,
                'author'=>$author,
                'content'=>$content,
                'intime'=>0,
                );
            $is=$blog->where(array('bid'=>$bid))->save($insert);
            var_dump($is);
            return $this->success("操作成功了{$is}条数据","/Admin/Blog/index");

           
        }

    }
}