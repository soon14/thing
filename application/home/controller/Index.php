<?php
namespace app\home\controller;

use app\common\controller\BaseController;
use app\common\model\Work;
use think\Controller;
use app\v1\service\Workservice;
use app\v1\service\Exampleservice;
use app\v1\service\Keywordsservice;
use think\Cookie;
use think\Config;
class Index extends BaseController
{

    /**
     * @return bool|mixed
     * 慧灵工 首页
     */
    public function  index()
    {
        //$redirect_url = Config::get('curl.redirect_url');

        //行业资讯
        $data = Workservice::instance()->three();
        if((isset($_GET['line']) && !empty($_GET['line'])) && (isset($_GET['ttttt']) && !empty($_GET['ttttt']))){
            Cookie::set('mobile', $_GET['line']);
            Cookie::set('userType', $_GET['userType']);
            Cookie::set('token', $_GET['ttttt']);
            $arr = [];
            $arr['mobile'] = $_GET['line'];
            $arr['userType'] = $_GET['userType'];
            $arr['token'] = $_GET['ttttt'];
            $this->assign('userinfo',$arr);
        }
        
        $is_empty = '';
        if(isset($_GET['is_empty']) && !empty($_GET['is_empty'])){
            $is_empty = $_GET['is_empty'];
        }
        $mobile = Cookie::get('mobile');
           
        //如果是第一次进惠灵工首页要先跳到慧企云页面获取用户的信息

        
        /*if(empty($mobile) && empty($is_empty)){
            $url = Config::get('curl.website').'/home/login/hlg_local';

            echo "<script>location.href='".$url."'</script>";
        }*/


        $this->assign('data',$data);

        $this->assign('title','惠灵工');

        return  $this->fetch();
    }


    /**
     * 慧灵工 列表页
     */
     public function informationList(){
         if($this->request->isGet()){

//             if(Cookie('mobile') == '' || Cookie('mobile') == NULL || Cookie('mobile') == 0 ){
//                 return $this->redirect('/home/spirit/index');
//             }

           $keyword = input('get.keyword','','trim');
           $list  = Workservice::instance()->Getinfolist($keyword,'');

           //$total = Workservice::instance()->getCount($keyword);
          // $this->assign('total',$total);
          //关键字列表
           $keylist = Keywordsservice::instance()->getlist('');
           $this->assign('keylist',$keylist);

           $this->assign('list',$list);
           $this->assign('title','惠灵工新闻资讯');

           return $this->fetch();
         }
         return false;
     }

     /**
      * 惠灵工 新闻资讯接口
      * @title 关键字
      */  
     public function getinfoapi(){
           if($this->request->isPost()){
              $keyword = json_decode(input('post.title','','trim')); 
              $page  = input('post.page','','int');
              $pages = $page?$page :'1' ;   //当前页
              $size  = 15; //每页显示条数
              $keyword = implode(',',$keyword);
              $list = Workservice::instance()->getkeywordjson($keyword,$pages,$size);
        
              if(!empty($list) || isset($list)){
                  return json(['code'=>200,'data'=>$list,'msg'=>'success']);
              }

              if(empty($list)){
                return json(['code'=>400,'msg'=>'error']);
              }

           }
           return false;
     } 





     /**
      * 惠灵工详情页
      */
     public function detail(){

         if($this->request->isGet()){

//             if(Cookie('mobile') == '' || Cookie('mobile') == NULL || Cookie('mobile') == 0 ){
//                 return $this->redirect('/home/index/index');
//             }

           $id = input('get.mid','','int');
           if(empty($id) || !isset($id)){
               return false;
           }

           $info = Workservice::instance()->getIdInfo($id);
           $top  = Workservice::instance()->getTop($id);
           $next = Workservice::instance()->getNext($id);

           $this->assign('top',$top);
           $this->assign('next',$next);

           $this->assign('info',$info);
           $this->assign('title','资讯详情');
           return $this->fetch();
         }
         return false;
     }


    /**
     * @DESC：行业解决方案首页
     * @return mixed
     * @author: jason
     * @date: 2019-12-03 09:07:51
     */
    public function solution()
    {
        $this->assign('title','行业解决方案');
        return $this->fetch();
    }

    /**
     * @DESC：客户案例首页
     * @return mixed
     * @author: jason
     * @date: 2019-12-03 09:17:31
     */
    public function clientcase()
    {
        $this->assign('title','客户案例');
        /*
        $data = Workservice::instance()->getclientcase();
        $this->assign('list',$data);
        */
        $title = input('get.title','','trim');
        $title  = $title?$title:'';
        $data = Exampleservice::instance()->getalllist($title);
        $this->assign('list',$data);
        return $this->fetch();
    }

    /**
     * @DESC：客户案例详情
     * @return mixed
     * @author: jason
     * @date: 2019-12-03 09:18:23
     */
    public function casedetail()
    {
        $this->assign('title','客户案例详情');
        $id = input('get.id','','int');
        $data = Exampleservice::instance()->getoneinfo($id);
        /*  todo
        if(empty($id) || !isset($id)){
            $this->redirect(url('/home/optimal/index'));return;
        }
        */
        //注释成功案例
        ///$data = Workservice::instance()->getcasedetail(['id' => $id]);
        /* todo
        if($data == false){
            $this->redirect(url('/home/optimal/index'));return;
        }
        */

  
        $this->assign('list',$data);
      
        return $this->fetch();
    }

    /**
     * @DESC：ajax查询出所有的行业解决方案
     * @return \think\response\Json
     * @author: jason
     * @date: 2019-12-03 02:18:00
     */
    public function getAllSolution()
    {
        if($this->request->isAjax() && $this->request->isPost()){
            $info = Workservice::instance()->getAllSolution();
            return json(['data' => $info]);
        }
    }

    /**
     * @DESC：获取单个行业解决方案
     * @return \think\response\Json
     * @author: jason
     * @date: 2019-12-03 02:26:41
     */
    public function ajaxOneSolution()
    {
        if($this->request->isAjax() && $this->request->isPost()){
            $id = input('post.id','','int');
            $info = Workservice::instance()->ajaxOneSolution(['id' => $id]);
            return json(['data' => $info]);
        }
    }
    /**
     * @DESC：产品服务
     * @author: jason
     * @date: 2019-12-03 10:02:58
     */
    public function productservice()
    {
        $this->assign('title','产品服务');
        return $this->fetch();
    }



     /**
      * 分页接口
      */
     public function getpageInfo(){
        $keyword = input('get.keyword','','trim');
        $page    = input('get.page','','int');

        $list  = Workservice::instance()->Getinfolist($keyword,$page);

        if(empty($list)){
            return json(['code'=>404,'msg'=>'没有更多了']);
        }

        if($list){
            return json(['code'=>200,'data'=>$list,'msg'=>'请求成功']);
        }

     }

}