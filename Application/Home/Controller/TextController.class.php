<?php
    namespace Home\Controller;
    use Think\Controller;
    class TextController extends Controller{

        function index(){
            $d=D("settings");
            $key=$d->getField('value');

            $data=array(
                    'key'=>$key,
                    'id'=>'1',
                    'content'=>'嘿嘿'
                );
            $this->assign('key',$key);
            
            $this->assign('data',$data);

            $this->display();
        }
        function text(){
            echo "222";
        }
    }
