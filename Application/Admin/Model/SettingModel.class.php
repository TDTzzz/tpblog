<?php
namespace Admin\Model;
use Think\Model;
class SettingModel extends Model{
    function getAll(){
        $data = $this->select();
        $result = array();
        foreach( $data as $row ){
            $result[ $row['k'] ] = $row['value'];
        }
        return $result;
    }
}