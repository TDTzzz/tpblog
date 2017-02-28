<?php
namespace Admin\Controller;

class SettingController extends AdmController {
    public function index(){
        $setting = D("Setting");

        $this->assign( 'setting', $setting->getAll() );
        $this->display();
    }
    public function save(){
        $post = I("post.");
        $setting = D("Setting");
        foreach( $post as $k=>$value ){
            $setting->where( array('k'=>$k) )->save( array('value'=>$value) );
        }
        $this->redirect("/Admin/Setting/index");
    }
}