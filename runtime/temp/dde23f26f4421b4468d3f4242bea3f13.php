<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:110:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\thing\public/../application/home\view\index\solution.html";i:1576459724;s:98:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\thing\application\home\view\common\login.html";i:1574064055;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="renderer" content="webkit" />
  <meta name="force-rendering" content="webkit" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <script>/*@cc_on document.write('\x3Cscript id="_iealwn_js" src="https://support.dmeng.net/ie-alert-warning/latest.js">\x3C/script>'); @*/</script>
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
  <link rel="stylesheet" href="/static/spirit/css/base.css">
  <link rel="stylesheet" href="/static/assets/plugins/layui/css/layui.css">
  <link rel="stylesheet" href="/static/spirit/css/solution.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="/static/spirit/js/clamp.js"></script>
  <script src='/static/spirit/js/solution.js'></script>
  <script src="/static/assets/plugins/layui/layui.all.js"></script>
  <script src="/static/spirit/js/spirit.js"></script>
  <script src='/static/common/js/public.js'></script>
</head>

<body>
  <div class="container">
    <!-- 导航部分 -->
    <!-- 导航部分 -->
    <div class="nav-box">
      <div class="w nav-container clearfix">
        <!-- logo图 -->
        <div class="logo">
          <h1>
            <img src="/static/spirit/images/logo2xxx.png">
          </h1>
        </div>
        <!-- nav部分 -->
        <div class="nav">
          <ul class="clearfix">
            <li><a href="<?php echo url('/home/index/index'); ?>">首页</a></li>
            <li><a href="<?php echo url('/home/index/productservice'); ?>">产品服务</a></li>
            <li class="nav-active"><a href="<?php echo url('/home/index/solution'); ?>">行业解决方案</a></li>
            <li><a href="<?php echo url('/home/index/clientcase'); ?>">客户案例</a></li>
            <li><a href="<?php echo url('/home/index/informationlist'); ?>">新闻资讯</a></li>
            <!--<li>-->
            <!--<?php if(empty($userinfo['userType'])): ?>-->
            <!--<a href="javascript:void(0)" login_url="<?php echo config('curl.login_url'); ?>" loca_url="<?php echo config('curl.hlg'); ?>" onclick="members_click(this)">会员通道</a>-->
            <!--<?php elseif($userinfo['userType'] == 'C'): ?>-->
            <!--<a href="javascript:void(0)">会员通道</a>-->
            <!--<?php else: ?>-->
            <!--<a href="<?php echo config('curl.redirect_url'); ?>/task/task">会员通道</a>-->
            <!--<?php endif; ?>-->

            <!--</li>-->
          </ul>
        </div>



        <!-- 登陆注册 -->
        <!--<?php if(empty($userinfo['mobile'])): ?>-->
        <!--<div class="loging clearfix">-->
        <!--<div class="register-btn"><a href="javascript:void(0)" login_url="<?php echo config('curl.login_url'); ?>" loca_url="<?php echo config('curl.hlg'); ?>" onclick="login_btn(this)">-->
        <!--登录-->
        <!--</a></div>-->
        <!--<div class="loging-btn"><a href="<?php echo url('/home/login/register'); ?>">注册</a></div>-->
        <!--</div>-->
        <!--<?php else: ?>-->
        <!--<div class="u_info">-->
        <!--<?php if(empty($userinfo['mobile'])): ?>
<div class="loging clearfix">
    <div class="register-btn"><a href="<?php echo $baseurl; ?>" target="_blank">
        登陆
    </a></div>
    <div class="loging-btn"><a href="<?php echo url('/home/login/register'); ?>">注册</a></div>
</div>
<?php else: ?>
<div class="u_info">
    <img src="/static/spirit/images/user_img.png"
         style="width:30px;height:30px; vertical-align: middle;">
    <p style="display:inline-block;color:#fff;"  id="mobile_phone"><?php echo $userinfo['mobile']; ?></p>
    <div class="u_info_content" id="u_info_content">
        <a class="u_out" href="javascript:void(0)" onclick="user_logout(this)"  data-token="<?php echo $userinfo['token']; ?>" location_url="<?php echo url('/home/index/index'); ?>" data-url="<?php echo url('/home/login/logout'); ?>">退出账号</a>
    </div>
</div>
<?php endif; ?>-->
        <!--</div>-->
        <!--<?php endif; ?>-->
      </div>

    </div>

    <!-- 头部 -->
    <div class='header-box'>
      <div class="w header">
        <h2>行业解决方案</h2>
        <p></p>
        <p>
          不同行业的业务特点和管理要求差别很大，但无论是哪个行业的企业，都会有三个基本诉求：<br>
          经营合法合规、 降低企业成本、 规避意外风险，惠灵工针对不同行业需求提出定制解决方案，帮助企业从容应对行业挑战。
        </p>
      </div>
    </div>

    <!-- 面包屑 -->
    <div class="crumbs-box">
      <div class="w crumbs">
        <b><a href="<?php echo url('/v1/home/index/index'); ?>">首页</a> ></b>
        <b>行业解决方案</b>
      </div>
    </div>

    <!-- 行业tab栏 -->
    <div class="tab-box">
      <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
        <ul class="w layui-tab-title">
          <li class="layui-this">外卖行业</li>
          <li>新物流行业</li>
          <li>新零售行业</li>
          <li>制造业</li>
          <li>咨询培训平台</li>
        </ul>
        <div class="layui-tab-content" style="height: 100px;">
          <div class="layui-tab-item layui-show">
            <!-- 行业现状 -->
            <div class="w status-industry">
              <div class="status-industry-title">
                <h2>行业现状</h2>
              </div>
              <div class="status-industry-content">
                国内外卖行业服务人群与服务场景外延渐成趋势，外卖竞争已上升到本地生活层面。<br>
                外卖配送企业一般代理外卖平台的配送业务,外卖配送企业面临着配送员的劳动关系合规和财税合规问题等用工挑战。<br>
                惠灵工定制解决方案能帮助企业应对这些挑战，规避用工风险，提升用工效能。

              </div>
              <div class="status-industry-wm">
                <div class="status-industry-wm-imgs">
                  <img class="wm-img-active" src="/static/spirit/images/waimai1.png" alt="">
                  <img src="/static/spirit/images/waimai2.png" alt="">
                  <img src="/static/spirit/images/waimai3.png" alt="">
                </div>
                <!-- 折叠 -->
                <div class="status-industry-wm-content" lay-accordion>
                  <div class="status-industry-wm-item">
                    <h2 class="status-industry-wm-item-title">模式不规范<span class="status-btn status-btnone" id="0"></span>
                    </h2>
                    <div class="status-industry-wm-item-content wm-item-show">
                      <p>行业多种模式并存，主体关系混乱（全职、兼职、临时工），统一标准化合同缺乏，对用工环节风险防 范非常薄弱，风险盲区凸显，机构责任压力巨大。</p>
                      <div><span onclick="showSearch()">立即咨询</span></div>
                    </div>
                  </div>
                  <div class="status-industry-wm-item">
                    <h2 class="status-industry-wm-item-title">用工成本高<span class="status-btn" id="1"></span></h2>
                    <div class="status-industry-wm-item-content">
                      <p>行业多种模式并存，主体关系混乱（全职、兼职、临时工），统一标准化合同缺乏，对用工环节风险防 范非常薄弱，风险盲区凸显，机构责任压力巨大。</p>
                      <div><span onclick="showSearch()">立即咨询</span></div>
                    </div>
                  </div>
                  <div class="status-industry-wm-item">
                    <h2 class="status-industry-wm-item-title">周期不固定<span class="status-btn" id="2"></span></h2>
                    <div class="status-industry-wm-item-content">
                      <p>行业多种模式并存，主体关系混乱（全职、兼职、临时工），统一标准化合同缺乏，对用工环节风险防 范非常薄弱，风险盲区凸显，机构责任压力巨大。</p>
                      <div><span onclick="showSearch()">立即咨询</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 行业解决方案 -->
            <div class="solution">
              <div class="solution-title">
                <h2>解决方案</h2>
              </div>

              <div class="solution-content">
                外卖配送企业和惠灵工平台达成合作，结算费用通过惠灵工平台下发，<br>
                平台将为外卖配送企业开具增值税专用发票，同时惠灵工平台帮助配送行业人员转化为创客身份，<br>
                享受国家税收优惠政策并具备自行购买社保资格。
              </div>
              <div class="solution-flow-wm-chart">
                <div>
                  <img src="/static/spirit/images/wmdongt.png" alt="">
                </div>
              </div>
              <div class="solution-footer">
                通过惠零工平台形成企业-平台-创客之间商务合作关系而非个人合作关系，
                为外卖配送企业合规避免劳动用工风险，为配送行业人员提升劳动收益和服务保障。
              </div>
            </div>
            <!-- 方案优势 -->
            <div class="w plan-advantage">
              <div class="plan-advantage-title">
                <h2>方案优势</h2>
              </div>

              <div class="plan-advantage-content">
                惠灵工平台帮助制造业企业将灵活用工人员、新招聘员工那个等转化为创客。
              </div>
              <div class="plan-advantage-wm-items">
                <ul class="clearfix">
                  <li class="plan-advantage-wm-item">
                    <div class="plan-advantage-wm-item-one">
                      <div><img src="/static/spirit/images/plan-advantage1.png" alt=""></div>
                      <p>降低企业成本</p>
                      <div>
                        个人（骑手）在线简单操作<br>
                        流程科学高效<br>
                        降低个税扣除<br>
                        增加个人收入<br>
                      </div>
                    </div>
                  </li>
                  <li class="plan-advantage-wm-item">
                    <div class="plan-advantage-wm-item-one">
                      <div><img src="/static/spirit/images/plan-advantage2.png" alt=""></div>
                      <p>提高个人收入</p>
                      <div>
                        个人（骑手）在线简单操作<br>
                        流程科学高效<br>
                        降低个税扣除<br>
                        增加个人收入<br>
                      </div>
                    </div>

                  </li>
                  <li class="plan-advantage-wm-item">
                    <div class="plan-advantage-wm-item-one">
                      <div><img src="/static/spirit/images/plan-advantage4.png" alt=""></div>
                      <p>规避用工风险</p>
                      <div>
                        个人（骑手）在线简单操作<br>
                        流程科学高效<br>
                        降低个税扣除<br>
                        增加个人收入<br>
                      </div>
                    </div>

                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="layui-tab-item">
            <div class="w">内容2</div>
          </div>
          <div class="layui-tab-item">
            <div class="w">内容3</div>
          </div>


          <div class="layui-tab-item">
            <!-- 行业现状 -->
            <div class="w status-industry">
              <div class="status-industry-title">
                <h2>行业现状</h2>
              </div>
              <div class="status-industry-content">
                部分用人单位对技工“挑肥拣瘦”的现象屡见不鲜，我国工业化进入中后期和居民收入水平的不断提高，<br>
                订单数量减少与产能过剩的危机，让我国的制造业出现了不稳定的情况
              </div>
              <div class="status-industry-items">
                <ul class="clearfix">
                  <li class="status-industry-item">
                    <div class="status-industry-item-box1">
                      <h3>劳动力短缺</h3>
                      <div><img src="/static/spirit/images/zhizaoyexianzhuan1.png" alt=""></div>
                    </div>
                    <div class="status-industry-item-box2">
                      <h3>劳动力短缺</h3>
                      <div>
                        <p>
                          我国制造业发展中面临的挑战在于经济效率与产业附加值相对比较低。部分领域的核心技术、关键设备和零部件在一定程度上还依赖进口。随着我国工业化进入中后期和居民收入水平的不断提高，制造业市场需求结构发生了根本性的变化，需要适应。
                        </p>
                        <div><a href="javascript:;"  onclick="showSearch()">了解更多</a></div>
                      </div>
                    </div>
                  </li>
                  <li class="status-industry-item">
                    <div class="status-industry-item-box1">
                      <h3>成本增加</h3>
                      <div><img src="/static/spirit/images/zhizaoyexianzhuan2.png" alt=""></div>
                    </div>
                    <div class="status-industry-item-box2">
                      <h3>成本增加</h3>
                      <div>
                        <p>
                          我国制造业发展中面临的挑战在于经济效率与产业附加值相对比较低。部分领域的核心技术、关键设备和零部件在一定程度上还依赖进口。随着我国工业化进入中后期和居民收入水平的不断提高，制造业市场需求结构发生了根本性的变化，需要适应。
                        </p>
                        <div><a href="javascript:;" onclick="showSearch()">了解更多</a></div>
                      </div>
                    </div>
                  </li>
                  <li class="status-industry-item">
                    <div class="status-industry-item-box1">
                      <h3>全球经济疲软</h3>
                      <div><img src="/static/spirit/images/zhizaoyexianzhuan3.png" alt=""></div>
                    </div>
                    <div class="status-industry-item-box2">
                      <h3>全球经济疲软</h3>
                      <div>
                        <p>
                          我国制造业发展中面临的挑战在于经济效率与产业附加值相对比较低。部分领域的核心技术、关键设备和零部件在一定程度上还依赖进口。随着我国工业化进入中后期和居民收入水平的不断提高，制造业市场需求结构发生了根本性的变化，需要适应。
                        </p>
                        <div><a href="javascript:;" onclick="showSearch()">了解更多</a></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- 行业解决方案 -->
            <div class="solution">
              <div class="solution-title">
                <h2>解决方案</h2>
              </div>

              <div class="solution-content">

                制造业企业和惠灵工平台达成合作，结算费用通过惠灵工平台下发，<br>
                平台为零售机构开具增值税专用发票，同时惠灵工平台帮助灵活用工人员、新招聘员工等转化为创客身份，<br>
                平衡制造业企业的季节性用工需求，也为用工低谷期的劳务人员提供更多行业选择。

              </div>
              <div class="solution-flow-chart">
                <div>
                  <img src="/static/spirit/images/zhizaoyedongtu.png" alt="">
                </div>
              </div>
              <div class="solution-footer">

                通过惠零工平台形成企业-平台-创客之间商务合作关系而非劳动雇佣关系，<br>
                为制造业企业合规避免劳动用工风险，为灵活用工人员提升劳动收益和服务保障。

              </div>
            </div>
            <!-- 方案优势 -->
            <div class="w plan-advantage">
              <div class="plan-advantage-title">
                <h2>方案优势</h2>
              </div>

              <div class="plan-advantage-content">

                惠灵工平台帮助制造业企业将灵活用工人员、新招聘员工那个等转化为创客。

              </div>
              <div class="plan-advantage-items">
                <ul class="clearfix">
                  <li class="plan-advantage-item">
                    <div class="plan-advantage-item-img">
                      <img src="/static/spirit/images/plan-advantage1.png" alt="">
                    </div>
                    <p class="plan-advantage-item-title">降低企业成本</p>
                    <p class="plan-advantage-item-content">
                      基于国家减税降赋政策，优化企业人力架构方案
                      依托平台共享海量人才，为企业降本增效
                    </p>
                  </li>
                  <li>
                    <div class="plan-advantage-item-img">
                      <img src="/static/spirit/images/plan-advantage2.png" alt="">
                    </div>
                    <p class="plan-advantage-item-title">提高个人收入</p>
                    <p class="plan-advantage-item-content">

                      在线简单操作，流程科学高效
                      提升个人待遇，保障个人收入

                    </p>
                  </li>
                  <li>
                    <div class="plan-advantage-item-img">
                      <img src="/static/spirit/images/plan-advantage3.png" alt="">
                    </div>
                    <p class="plan-advantage-item-title">优化用工管理</p>
                    <p class="plan-advantage-item-content">

                      建立基础用工保障，打破松散的工人组织
                      平台化规范管理，合理降低企业用工风险

                    </p>
                  </li>
                </ul>
              </div>
            </div>

          </div>
          <div class="layui-tab-item">
            <div class="w">内容5</div>
          </div>
        </div>
      </div>
    </div>

    <!-- 底部 -->
    <div class="bottomBox">
      <div class="w bottom">
        <div class="aboutUs">
          <span>关于我们</span>
          <p>
            惠企云网络信息（湖北）有限公司深度研究财税管理及企业管理在新经济时代的创新和运用，将【惠灵工】、【惠优税】、【惠多薪】、【惠创业】、【惠找事】五大产品融汇，打造一站式互联网服务平台，量身定制一体化财税筹划解决方案及企业管理咨询，为企业可持续发展提供有力保障！
          </p>
        </div>
        <div class="w navBottom">
          <div class="navList">
            <dl>
              <dt>惠企云旗下产品</dt>
              <dd><a href="javascript:;">惠灵工</a></dd>
              <dd><a href="javascript:;">惠优税</a></dd>
              <dd><a href="javascript:;">惠多薪</a></dd>
              <dd><a href="javascript:;">惠创业</a></dd>
              <dd><a href="javascript:;">惠找事</a></dd>
            </dl>
            <dl>
              <dt>资讯信息</dt>
              <dd><a href="javascript:;">行业资讯</a></dd>
              <dd><a href="javascript:;">招商政策</a></dd>
              <dd><a href="javascript:;">招标信息</a></dd>
            </dl>
            <dl>
              <dt>招商合作</dt>
              <dd><a href="javascript:;">招募合伙人</a></dd>
            </dl>
            <dl>
              <dt>联系我们</dt>
              <dd><a href="javascript:;"></a>全国统一客服热线：400-150-9896</a></dd>
              <dd><a href="javascript:;"></a>专家服务电话：1818-619-4461</a></dd>
              <dd><a href="javascript:;"></a>武汉市硚口区南国大武汉H座</a></dd>
              <dd><a href="javascript:;"></a>深圳市福田区第一世界广场A座</a></dd>
              <dd><a href="javascript:;"></a>北京市西城区贵都国际中心B座</a></dd>
            </dl>
          </div>

          <ul class="qrCode">
            <li>
              <div class="pic">
                <img src="/static/spirit/images/weixincode.png" alt="">
              </div>
              <span><img src="/static/spirit/images/weixinicon.png" alt="">微信扫码关注</span>
              <i>及时获一手财税信息</i>
            </li>
            <li>
              <div class="pic">
                <img src="/static/spirit/images/weibocode.png" alt="">
              </div>
              <span><img src="/static/spirit/images/weiboicon.png" alt="">惠企云微博</span>
              <!-- <i>及时获一手财税信息</i> -->
            </li>
          </ul>
        </div>
      </div>
      <div class="w copyRight">©&nbsp;Copyright&nbsp;2019&nbsp;惠企动（湖北）科技有限公司&nbsp;.&nbsp;All Rights Reserved&nbsp;ICP证 :
        鄂ICP备16008680号-3</div>

    </div>

    <!-- 侧边栏bottom资讯 -->
    <div class="bottom-left">
      <div>
        <div class="bottom-title">惠家族产品</div>
        <div class="bottom-item">
          <div class="hqy"><a href="<?php echo config('curl.website'); ?>">惠企云</a></div>
          <ul>
            <li><a href="<?php echo url('/home/optimal/index'); ?>">惠优税</a></li>
            <li><a href="<?php echo url('/home/index/index'); ?>">惠灵工</a></li>
            <li><a href="<?php echo url('/home/launch/index'); ?>">惠多薪</a></li>
            <li><a href="<?php echo url('/home/searches/index'); ?>">惠找事</a></li>
            <li><a href="<?php echo url('/home/business/index'); ?>">惠创业</a></li>
            <li><a href="<?php echo url('/home/launch/index'); ?>">惠企动</a></li>
          </ul>
        </div>
      </div>
      <div>
        <div class="bottom-title2">联系我们</div>
        <div class="bottom-item2">
          <div>
            <p>立即预约咨询</p>
            <p>181-8619-4461</p>
          </div>
          <div>
            <p>获取税筹方案</p>
            <p>400-150-9898</p>
          </div>
        </div>
      </div>
      <!-- 返回顶部 -->
      <div class='goTop' id="goTop">
        <div><img src="/static/spirit/images/top@2x.png" alt=""></div>
        <div>顶部</div>
      </div>
    </div>

    <!-- 弹框 -->
    <div class="pop-up-box" id="popbox">
      <div class="form">
        <div class="form-titile">
          <p>方案咨询</p>
          <span class="turnoff" onclick="turnoff()"></span>
        </div>
        <div class="form-content">
          <div><span class="title">您的姓名</span><input type="text" id="contactName" placeholder="请输入你的名字"></div>
          <div><span class="title">联系方式</span><input type="text" id="contactMobile" placeholder="请输入你的联系方式">
          </div>
          <div><span class="title">您的公司</span><input type="text" id="companyName" placeholder="请输入你的公司"></div>
          <input type='hidden' id='sources' value='惠灵工'>
          <input type='hidden' id='identifications' value='灵活用工'>
          <div class="form-btn" onclick="form_btn()">获取方案</div>
        </div>
        <!-- 提交成果后弹窗 -->
        <div class="mask-box2">
          <span></span>
          <p class="mask-box-title">提交成功</p>
          <p class="mask-box-content">我们会在一个工作日内联系您</p>
        </div>
      </div>

    </div>

    <script>

      $(function () {

        $('.nav ul li').on('click', function () {
          $(this).addClass('nav-active chosenPage').siblings().removeClass('nav-active chosenPage')
        })
        $('.nav ul li').on('mouseenter', function () {
          $(this).addClass('nav-active').siblings().removeClass('nav-active')
        })
        $('.nav-box').on('mouseleave', function () {
          $('.nav ul li').removeClass('nav-active')
          if ($('.chosenPage').length < 1) $('.nav ul li').eq(2).addClass('chosenPage')

          $('.chosenPage').addClass('nav-active')
        })

      })
    </script>
</body>


</html>