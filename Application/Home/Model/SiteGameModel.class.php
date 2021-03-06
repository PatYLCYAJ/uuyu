<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Model;

/**
 * 分类模型
 */
class SiteGameModel extends SiteModel{

    protected $_validate = array(
        array('game_id', 'check_game', '该游戏已经存在', self::EXISTS_VALIDATE, 'callback', self::MODEL_BOTH),
        array('game_rebate', 'is_numeric', '返利参数必须是数字', self::EXISTS_VALIDATE, 'function', self::MODEL_BOTH),
        array('game_rebate', [0,100], '返利参数不正确', self::EXISTS_VALIDATE, 'between', self::MODEL_BOTH),
        array('game_dow_url', 'url', '链接地址错误', self::VALUE_VALIDATE, 'regex', self::MODEL_BOTH),
    );

    protected $_auto = array(
        array('create_time', NOW_TIME, self::MODEL_INSERT),
        array('top_time', NOW_TIME, self::MODEL_INSERT),
        array('status', '1', self::MODEL_BOTH),
        array('promote_id', PID, self::MODEL_BOTH),
    );

    /**
     * @param int $promote_id
     * @return mixed
     */
    public function get_promote_data($promote_id=PID){
        $map['promote_id'] = $promote_id;
        $map['status'] = 1;
        $data = $this->where($map)->order('top_time desc')->select();
        return $data;
    }

    /**
     * 检查游戏是否存在
     * @return bool
     */
    public function check_game(){
        if(I('game_source') == 2){
            return true;
        }
        $map['id'] = ['neq',I('id')];
        $map['promote_id'] = PID;
        $map['game_id'] = I('game_id');
        $data = $this->where($map)->find();
        if(empty($data)){
            return true;
        }else{
            return false;
        }
    }

    public function saveData($data = "")
    {
        $data = I('post.');
        if($data['game_source'] == 2){
            $data['game_id'] = 0;
        }
        return parent::saveData($data); // TODO: Change the autogenerated stub
    }

}
