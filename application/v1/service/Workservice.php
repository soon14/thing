<?php
namespace app\v1\service;
use app\common\model\Work;
use think\Session;
use think\Cache;
use think\Config;

class Workservice
{
    // 静态对象
    protected static $instance = null;
    /**
     * @DESC：单例
     * @return null|static
     * @author: jason
     * @date: 2019-07-26 10:00:16
     */
    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }


    /**
     * title string
     *获取资讯列表
     */
    public function getNewList($title){
        if(empty($title) || !isset($title)){

            $where = ['del_time'=>0];
        }else {

            $where =[
                 'del_time'=>0,
                 'title|keyword'=>['like','%'.$title.'%'],
            ];
        }

        $list  = Work::instance()->where($where)->order(['sort'=>'desc','create_time'=>'desc'])->paginate(15);
        return  $list;
    }


    /**
     * array array
     *
     * 添加 数据
     */
    public function setAddArray($array){
        $ret = Work::instance()->save($array);
        return $ret;
    }


    /**
     * 通过id 更新
     * array array
     * id    string
     *return bool
     */
    public function  updateByArray($array,$id){
        $w = ['id'=>$id];

        if(empty($id) || $id <=0){
            return false;
        }

        if(empty($array)){
            return  false;
        }

        $ret =  Work::instance()->where($w)->update($array);
        return $ret;
    }


    /**
     * 通过id 获取信息
     */
    public function getIdInfo($id){

        if(empty($id) || $id <=0){
            return false;
        }
       $w    = ['id'=>$id];
       $info = Work::instance()->where($w)->find();
       return $info;
    }

    /**
     * 删除 del
     * id string
     * return bool
     */
    public function setDel($id){
        if(empty($id) || $id <=0){
            return false;
        }

        $w   = ['id'=>$id];
        $c   = ['del_time'=>time()];
        $ret = Work::instance()->where($w)->update($c);
        return $ret;
    }

    /**
     *设置排序
     * id  string
     * sort string|int
     * return bool
     */
    public  function toSetsort($id,$sort){
        if(empty($id) || !isset($id)){
            return false;
        }

        if(empty($sort) || $sort <= 0){
            $sort = 0;
        }

        $w   = ['id'=>$id];
        $arr = ['sort'=>$sort];

        $ret = Work::instance()->where($w)->update($arr);

        if($ret !== false){
            return true;
        }else{
            return false;
        }

    }

}