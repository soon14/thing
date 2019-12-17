<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:116:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\thing\public/../application/home\view\index\productservice.html";i:1576467420;s:98:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\thing\application\home\view\common\login.html";i:1574064055;}*/ ?>
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
    <link rel="stylesheet" href="/static/spirit/css/product _service.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="/static/spirit/js/clamp.js"></script>
    <script src="/static/assets/plugins/layui/layui.all.js"></script>
    <script src="/static/spirit/js/spirit.js"></script>
    <script src='/static/common/js/public.js'></script>
    <script src='/static/spirit/js/product_service.js'></script>
    <script src='/static/spirit/js/spirit.js'></script>

</head>

<body>

    <div class='container'>

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
                        <!-- <li><a href="<?php echo config('curl.website'); ?>">首页</a></li>
                            <li><a href="<?php echo url('/home/optimal/index'); ?>">惠优税</a></li>
                            <li class="nav-active"><a href="<?php echo url('/home/index/index'); ?>">惠灵工</a></li>
                            <li><a href="<?php echo url('/home/many/index'); ?>">惠多薪</a></li>
                            <li><a href="<?php echo url('/home/business/index'); ?>">惠创业</a></li>
                            <li><a href="<?php echo config('curl.hzs'); ?>">惠找事</a></li>
                            <li><a href="<?php echo url('/home/launch/index'); ?>">惠企动</a></li> -->
                        <li><a href="<?php echo url('/home/index/index'); ?>">首页</a></li>
                        <li class="nav-active"><a href="<?php echo url('/home/index/productservice'); ?>">产品服务</a></li>
                        <li><a href="<?php echo url('/home/index/solution'); ?>">行业解决方案</a></li>
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
        <!-- 头部 -->
        <div class='header-box'>
            <div class="w header">
                <div>产品服务</div>
                <div></div>
                <p>
                    一站式任务派发、结算支付、开票完税的合法合规用工平台
                </p>
            </div>
        </div>
        <!-- 面包屑 -->
        <div class="crumbs">
            <div class="crumbs-box w">
                <b><a href="<?php echo url('/home/index/index'); ?>">惠灵工></a></b>
                <b>产品服务</b>
            </div>
        </div>
        <!-- 共享经济服务平台 -->
        <div class="serves-box">
            <div class="w serves">
                <div class="serves-title">
                    <h2>共享经济服务平台</h2>
                </div>
                <div class="serves-title-content">
                    <p>创新灵活用工、财税优化解决方案-打通应用工具与服务，提升企业劳动力管<br>理能力-打造国内领先标准化灵活用工综合服务体系</p>
                </div>
                <div class="serves-title-img">
                    <img src="/static/spirit/images/servestitleimg.png" alt="">
                </div>
            </div>
        </div>

        <!-- 合作平台化-运营高效化 -->
        <div class="difficulty-box">
            <div class="w difficulty1">
                <ul class="clearfix">
                    <li class="difficulty1-items">
                        <div class="difficulty1-left">
                            <div>
                                <span><img src="/static/spirit/images/IconHZPT.png" alt=""></span>
                                <p>合作平台化</p>
                            </div>
                            <div></div>
                            <div>转型传统雇佣模式， 企业和个人（创客）分别与平台签订协议，责任职责明确</div>
                        </div>
                        <div class="difficulty1-right">
                            <img src="/static/spirit/images/imgHZPT.png" alt="">
                        </div>
                    </li>
                    <li class="difficulty1-items">
                        <div class="difficulty1-left">
                            <div>
                                <span><img src="/static/spirit/images/IconXTZNH.png" alt=""></span>
                                <p>系统智能化</p>
                            </div>
                            <div></div>
                            <div>专业智能系统满足订单接发、身份查验等操作，在线获取专业财税服务，助力企业发展</div>
                        </div>
                        <div class="difficulty1-right">
                            <img src="/static/spirit/images/imgXTZNH.png" alt="">
                        </div>
                    </li>
                    <li class="difficulty1-items">
                        <div class="difficulty1-left">
                            <div>
                                <span><img src="/static/spirit/images/IconFWHGH.png" alt=""></span>
                                <p>服务合规化</p>
                            </div>
                            <div></div>
                            <div>基于诚信纳税法律义务，个人（创客）享受更低个税核定，企业取得合规发票，劳务成本转为项目承包费用，项目外包转移风险，解决社保问题</div>
                        </div>
                        <div class="difficulty1-right">
                            <img src="/static/spirit/images/imgFWHGH.png" alt="">
                        </div>
                    </li>
                    <li class="difficulty1-items">
                        <div class="difficulty1-left">
                            <div>
                                <span><img src="/static/spirit/images/IconYYGXH.png" alt=""></span>
                                <p>运营高效化</p>
                            </div>
                            <div></div>
                            <div>资深法务、税筹专家一对一，服务流、资金流、发票流一站式解决，释放职能部门，聚焦业务，提升企业效能</div>
                        </div>
                        <div class="difficulty1-right">
                            <img src="/static/spirit/images/imgYYGXH.png" alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="difficulty-box2">
            <div class="w difficulty-box2-content">
                <div><img src="/static/spirit/images/difficulty-box2Icon.png" alt=""></div>
                <div>企业将业务标准化后发布至惠灵工灵活用工服务平台，个人通过平台认证转变为创客身份<br>平台将为企业和个人（创客）提供自动审核申报、高效结算等智能化服务</div>
            </div>
        </div>

        <!-- 平台服务流程 -->
        <div class="project-box">
            <div class="w project">
                <div class="project-title">
                    <h2>平台服务流程</h2>
                </div>
                <div class="project-title-content">
                    <p>平台的合作流程规范，简单四步轻松搞定。惠灵工服务让企业/个人操作更简<br>单、稳定、合规、安全、高效！</p>
                </div>
                <div class="project-content-img">
                    <img src="/static/spirit/images/pingTaiFuLiuChengDtu.png" alt="">
                </div>
            </div>
        </div>



        <!-- 客户应用场景 -->
        <div class="reason-box">
            <div class="w reason">
                <div class="reason-title">
                    <h2>客户应用场景</h2>
                </div>
                <div class="reason-title-content">
                    <p>我们始终专注于灵活用工领域，转变优化共享经济双创模式，破解企业用工风<br>险，合理合规税收筹划，降低用工成本，提升企业市场竞争力！</p>
                </div>
                <div class="reason-content">
                    <ul class="clearfix">
                        <li>
                            <div class="reason-content-img">
                                <img src="/static/spirit/images/zhiXiaoHangye.png" alt="">
                            </div>
                            <div class="reason-content-text">
                                <h3>直销行业</h3>
                                <p>直销品牌与营销团队全部是个人代理关系</p>
                            </div>
                        </li>
                        <li>
                            <div class="reason-content-img">
                                <img src="/static/spirit/images/weiShangHangye.png" alt="">
                            </div>
                            <div class="reason-content-text">
                                <h3>微商行业</h3>
                                <p>微商采取的差价/抽佣模式是个人代理关系</p>
                            </div>
                        </li>
                        <li>
                            <div class="reason-content-img">
                                <img src="/static/spirit/images/dianShangPingtai.png" alt="">
                            </div>
                            <div class="reason-content-text">
                                <h3>电商平台</h3>
                                <p>电商平台与店主（分享链接实现购买）是个人合作关系</p>
                            </div>
                        </li>
                        <li>
                            <div class="reason-content-img">
                                <img src="/static/spirit/images/zhiBoHangye.png" alt="">
                            </div>
                            <div class="reason-content-text">
                                <h3>直播行业</h3>
                                <p>直播平台或工会与主播是个人合作关系</p>
                            </div>
                        </li>
                        <li>
                            <div class="reason-content-img">
                                <img src="/static/spirit/images/xingWUliuHangye.png" alt="">
                            </div>
                            <div class="reason-content-text">
                                <h3>新物流行业</h3>
                                <p>物流平台与运送人员（例外卖员）是个人合作关系</p>
                            </div>
                        </li>
                        <li>
                            <div class="reason-content-img">
                                <img src="/static/spirit/images/ziXunPeiXunPingtai.png" alt="">
                            </div>
                            <div class="reason-content-text">
                                <h3>咨询培训平台</h3>
                                <p>咨询平台或培训机构与专家顾问是个人合作关系</p>
                            </div>
                        </li>
                        <li>
                            <div class="reason-content-img">
                                <img src="/static/spirit/images/xingLingShouHangye.png" alt="">
                            </div>
                            <div class="reason-content-text">
                                <h3>新零售行业</h3>
                                <p>零售机构与社会营销人员是个人合作关系 </p>
                            </div>
                        </li>
                        <li>
                            <div class="reason-content-img">
                                <img src="/static/spirit/images/zhiXiaoHangye.png" alt="">
                            </div>
                            <div class="reason-content-text">
                                <h3>制造行业</h3>
                                <p>用工单位与基层短期务工者是个人合作关系</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 联系我们 -->
        <div class="cellme-box">
            <div class="w cellme">
                <div onclick="GetErp()">立即咨询</div>
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
            <div class="w copyRight">©&nbsp;Copyright&nbsp;2019&nbsp;惠企动（湖北）科技有限公司&nbsp;.&nbsp;All Rights
                Reserved&nbsp;ICP证
                :
                鄂ICP备16008680号-3</div>

        </div>

        <!-- 返回顶部 -->
        <div class='goTop' id="goTop">
            <i></i>
            <div>返回顶部</div>
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
                <div class="mask-box">
                    <span></span>
                    <p class="mask-box-title">提交成功</p>
                    <p class="mask-box-content">我们会在一个工作日内联系您</p>
                </div>
            </div>

        </div>


    </div>

</body>
<script>
    $('.nav ul li').on('click', function () {
        $(this).addClass('nav-active chosenPage').siblings().removeClass('nav-active chosenPage')
    })
    $('.nav ul li').on('mouseenter', function () {
        $(this).addClass('nav-active').siblings().removeClass('nav-active')
    })
    $('.nav-box').on('mouseleave', function () {
        $('.nav ul li').removeClass('nav-active')
        if ($('.chosenPage').length < 1) $('.nav ul li').eq(1).addClass('chosenPage')

        $('.chosenPage').addClass('nav-active')
    })
</script>

</html>