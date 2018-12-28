<?php

namespace app\admin\validate;
use think\Validate;

class Rules extends Validate{
    
    protected $rule = [
        'id'=>'require|integer',
        'name'=>'require',
        'code'=>'require',
        'sort'=>'require|integer',
        'status'=>'require'
    ];
    
    protected $message = [
        'id.require'=>'请提供数据信息！',
        'id.integer'=>'请提供正确数据信息！',
        'parent_id.require'=>'请正确信息！',
        'name.require'=>'请填写类型名称！',
        'code.require'=>'请填写类型编码！',
        'sort.require'=>'请填写排序值！',
        'sort.integer'=>'排序值必须为整数！',
        'status.require'=>'请提供状态！',
    ];
    
    protected $scene = [
        'create'=>['name','code','sort','status'],
        'update'=>['id']
    ];
}
