<?php

namespace app\admin\controller;
use app\common\controller\AdminBase;
use app\common\model\AdminUser as AU;
use think\Config;

class User extends AdminBase{
    
    protected $admin_user_model;

    protected function _initialize() {
        parent::_initialize();
        $this->admin_user_model = new AU();
    }
    /**
     * 登陆
     * @return type
     */
    public function login(){
        if($this->request->isPost()){
            $data = $this->request->param();
            if(empty($data['username']) || empty($data['password'])){
                return adminErr('数据校验不通过！');
            }
            $where = [
                'name'=>$data['username'],
                'password'=> md5($data['password'].Config::get('salf')),
                'status'=>1
            ];
            $info = $this->admin_user_model->getInfo($where);
            return adminMsg($info);
        }
    }
}
