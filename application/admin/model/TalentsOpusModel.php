<?php

namespace app\admin\model;

use think\Model;

class TalentsOpusModel extends Model
{
    protected $name = 'talents_opus';
    protected $autoWriteTimestamp = true;
    public function getOpusByWhere($map, $Nowpage, $limits)
    {
        return $this->field('think_talents_opus.*,name')->join('think_talents', 'think_talents_opus.writer = think_talents.id')->where($map)->page($Nowpage, $limits)->order('id desc')->select();
    }
    public function insertOpus($param)
    {
        try{
            $result = $this->allowField(true)->save($param);
            if(false === $result){             
                return ['code' => -1, 'data' => '', 'msg' => $this->getError()];
            }else{
                return ['code' => 1, 'data' => '', 'msg' => '作品添加成功'];
            }
        }catch( PDOException $e){
            return ['code' => -2, 'data' => '', 'msg' => $e->getMessage()];
        }
    }
    public function updateOpus($param)
    {
        try{
            $result = $this->allowField(true)->save($param, ['id' => $param['id']]);
            if(false === $result){          
                return ['code' => 0, 'data' => '', 'msg' => $this->getError()];
            }else{
                return ['code' => 1, 'data' => '', 'msg' => '作品编辑成功'];
            }
        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }
    }
    public function getOneOpus($id)
    {
        return $this->where('id', $id)->find();
    }
    public function delOpus($id)
    {
        try{
            $this->where('id', $id)->delete();
            return ['code' => 1, 'data' => '', 'msg' => '作品删除成功'];
        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }
    }
}
 