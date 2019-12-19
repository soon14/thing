<?php
namespace app\home\controller;

use app\common\controller\BaseController;
use app\common\model\Work;
use think\Controller;
use app\v1\service\Workservice;
use app\v1\service\Exampleservice;
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
        if($this->request->isGet()){
            $redirect_url = Config::get('curl.redirect_url');
            //行业资讯
            $data = Workservice::instance()->three();
            //todo 这个暂时先这样，后面还要改
            if(isset($_GET['line']) && isset($_GET['userType']) && isset($_GET['ttttt']) && $_GET['location'] == 'yes'){
                $mobile = $_GET['line'];
                $userType = $_GET['userType'];
                $arr = [];
                $arr['mobile'] = $mobile;
                $arr['token'] = $_GET['ttttt'];
                $arr['userName'] = '';
                $arr['userType'] = $userType;

                Cookie::set('mobile',$mobile);
                Cookie::set('token',$_GET['ttttt']);
                Cookie::set('userType',$userType);
                //企业
                if ($userType == 'B') {
                    $this->redirect(config::get('curl.redirect_url') . '/task/task');return;
                }
                //个人
                if ($userType == 'C') {
                    $this->redirect(config::get('curl.redirect_url') . '/personTask/myTask');return;
                }
                $this->assign('userinfo',$arr);
            }
            //todo 这个暂时先这样，后面还要改
            $this->assign('data',$data);

            $this->assign('title','惠灵工');

            return  $this->fetch();
        }
        return false;
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

           $this->assign('list',$list);
           $this->assign('title','惠灵工行业资讯');

           return $this->fetch();
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