<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:82:"/Users/zhanwen/Desktop/thing/public/../application/home/view/index/clientcase.html";i:1581323188;s:67:"/Users/zhanwen/Desktop/thing/application/home/view/common/logo.html";i:1580699706;s:68:"/Users/zhanwen/Desktop/thing/application/home/view/common/login.html";i:1580699706;s:69:"/Users/zhanwen/Desktop/thing/application/home/view/common/footer.html";i:1580699706;s:68:"/Users/zhanwen/Desktop/thing/application/home/view/common/alert.html";i:1581319705;}*/ ?>
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
    <meta name="keywords" content="合规用工,自由务工,用工节税案例,用工减税案例,人力外包节税案例,劳务用工节税案例,劳务众包减税案例,税务筹划案例,财税规划案例,共享经济平台节税案例,惠灵工" />
    <meta name="description"
        content="惠灵工已服务全国各地众多行业,设计并落地实施众多行业用工合法节税案例,用工合法避税案例,劳务用工节税案例,企业用工减税案例,税务筹划案例,用工财税规划案例,共享经济平台节税案例等众多行业用工税筹案例。">
    <link rel="stylesheet" href="/static/spirit/css/base.css">
    <link rel="stylesheet" href="/static/spirit/font/syht.css">
    <link rel="stylesheet" href="/static/spirit/css/clientcase.css">
    <link rel="stylesheet" href="/static/spirit/css/footer.css">
    <link rel="stylesheet" href="/static/spirit/css/alert.css">
    <link rel="stylesheet" href="/static/spirit/css/header_nav.css">
    <link rel="stylesheet" href="/static/spirit/css/left.css">
    <link rel="stylesheet" href="/static/spirit/css/news.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="/static/spirit/js/lazysizes.min.js" async=""></script>
    <!-- <script src="/static/spirit/js/clamp.js"></script> -->
    <script src='/static/spirit/js/clientcase.js'></script>
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
        <a href="<?php echo url('/home/index/index'); ?>">
            <img src="/static/spirit/images/logo2xxxx.png">
        </a>

    </h1>
</div>
                <!-- nav部分 -->
                <div class="nav">
                    <ul class="clearfix">
                        <li><a href="<?php echo url('/home/index/index'); ?>">首页</a></li>
                        <li><a href="<?php echo url('/home/index/productservice'); ?>">产品服务</a></li>
                        <li><a href="<?php echo url('/home/index/solution'); ?>">行业解决方案</a></li>
                        <li class="nav-active"><a href="<?php echo url('/home/index/clientcase'); ?>">客户案例</a></li>
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
                <!--<div>-->
                <!--<?php if(empty($userinfo['mobile'])): ?>
<div class="loging clearfix">
    <div class="register-btn"><a href="javascript:void(0)" onclick="click_login(this)" location_url="<?php echo config('curl.hlg'); ?>" login_url="<?php echo config('curl.login_url'); ?>" target="_blank">
            登录
        </a></div>
    <div class="loging-btn"><a href="javascript:void(0)" onclick="click_register(this)" location_url="<?php echo config('curl.hlg'); ?>" register_url="<?php echo config('curl.register_url'); ?>">注册</a></div>
</div>
<?php else: ?>
<div class="u_info">
    <div>
        <div class="u_info_img">
            <img src="/static/spirit/images/user_img.png" style="width:30px;height:30px; vertical-align: middle;">
        </div>
        <p id="mobile_phone"><?php echo $userinfo['mobile']; ?></p>
    </div>
    <div class="u_info_content" id="u_info_content">
        <a class="u_out" href="javascript:void(0)" onclick="user_logout(this)" data-token="<?php echo $userinfo['token']; ?>"
            location_url="<?php echo config('curl.website'); ?>/home/login/hlg_logout" data-url="<?php echo url('/home/login/logout'); ?>">退出账号</a>
    </div>
</div>
<?php endif; ?>-->
                <!--</div>-->
                <!--<?php endif; ?>-->
                <!--登陆注册-->
                <!-- <?php if(empty($userinfo['mobile'])): ?>
<div class="loging clearfix">
    <div class="register-btn"><a href="javascript:void(0)" onclick="click_login(this)" location_url="<?php echo config('curl.hlg'); ?>" login_url="<?php echo config('curl.login_url'); ?>" target="_blank">
            登录
        </a></div>
    <div class="loging-btn"><a href="javascript:void(0)" onclick="click_register(this)" location_url="<?php echo config('curl.hlg'); ?>" register_url="<?php echo config('curl.register_url'); ?>">注册</a></div>
</div>
<?php else: ?>
<div class="u_info">
    <div>
        <div class="u_info_img">
            <img src="/static/spirit/images/user_img.png" style="width:30px;height:30px; vertical-align: middle;">
        </div>
        <p id="mobile_phone"><?php echo $userinfo['mobile']; ?></p>
    </div>
    <div class="u_info_content" id="u_info_content">
        <a class="u_out" href="javascript:void(0)" onclick="user_logout(this)" data-token="<?php echo $userinfo['token']; ?>"
            location_url="<?php echo config('curl.website'); ?>/home/login/hlg_logout" data-url="<?php echo url('/home/login/logout'); ?>">退出账号</a>
    </div>
</div>
<?php endif; ?> -->
            </div>

        </div>

        <!-- 头部 -->
        <div class='header-box'>
            <div class="w header">
                <div>客户案例</div>
                <div></div>
                <p>
                    优化财税管理，助力企业全速发展
                </p>
            </div>
        </div>

        <!-- 面包屑 -->
        <div class="crumbs">
            <div class="crumbs-box w">
                <b><a href="<?php echo url('/home/index/index'); ?>">惠灵工></a></b>
                <b> 客户案例</b>
            </div>
        </div>

        <!-- 客户案例 -->
        <div class="bg_tab">
            <div class="tabBox w">
                <ul class="clearfix">

                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('/home/index/casedetail',['id'=>$vo['id']]); ?>">
                            <div class="item-img">
                                <img src="" class="lazyload" data-src="<?php echo !empty($vo['imgs'])?$vo['imgs']:''; ?>" alt="">
                            </div>
                            <div class="item-content">
                                <p class="limit1"><?php echo $vo['title']; ?></p>
                                <p class="limit2"><?php echo mb_substr($vo['describes'],'0','35','utf-8'); ?>...</p>
                            </div>
                            <div class="item-comtent-more">查看详情</div>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>

                </ul>
            </div>
        </div>

        <!--分页-->
        <div class="pageNation">
            <?php echo $list->render();; ?>
            <!--<ul class="page">-->
            <!--<li class="prev">上一页</li>-->
            <!--<li class="currentPage">1</li>-->
            <!--<li>2</li>-->
            <!--<li class="next">下一页</li>-->
            <!--</ul>-->
        </div>
    </div>

    <!-- 底部 -->
    <div class="bottomBox">
    <div class="w bottom">
        <div class="aboutUs">
            <span>关于我们</span>
            <p>
                惠企云旗下【惠灵工】，立足“互联网+”共享新经济，专业为企业和自由职业者提供灵活用工综合服务平台。
            </p>
        </div>
        <div class="w navBottom">
            <div class="navList">
                <dl>
                    <dt>惠企云旗下产品</dt>
                    <dd><a href="<?php echo url('/home/index/index'); ?>">惠灵工</a></dd>
                    <dd><a href="<?php echo config('curl.hys'); ?>">惠优税</a></dd>
                    <dd><a href="javascript:;">惠多薪</a></dd>
                    <dd><a href="javascript:;">惠创业</a></dd>
                    <dd><a href="javascript:;">惠找事</a></dd>
                </dl>
                <dl>
                    <dt>惠灵工</dt>
                    <dd><a href="<?php echo url('/home/index/solution'); ?>">行业解决方案</a></dd>
                    <dd><a href="<?php echo url('/home/index/productservice'); ?>">产品服务</a></dd>
                    <dd><a href="<?php echo url('/home/index/clientcase'); ?>">客户案例</a></dd>
                    <dd><a href="javascript:;">招商合作</a></dd>
                </dl>
                <dl>
                    <dt>客服热线</dt>
                    <dd><a href="javascript:;">400-150-9896</a></dd>
                    <dd><a href="javascript:;">181-8619-4461</a></dd>
                </dl>
                <dl>
                    <dt>办公地址</dt>
                    <dd><a href="javascript:;">武汉市硚口区南国大武汉H座</a></dd>
                    <dd><a href="javascript:;">深圳市福田区第一世界广场A座</a></dd>
                    <dd><a href="javascript:;">北京市西城区贵都国际中心B座</a></dd>
                </dl>
            </div>

            <ul class="qrCode">
                <li>
                    <div class="pic">
                        <img src="/static/spirit/images/weixincode.png" alt="">
                    </div>
                    <span><img src="/static/spirit/images/weixinicon.png" alt="">微信扫码关注</span>
                    <i>及时获知一手财税信息</i>
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


    <!-- 侧边栏bottom资讯 -->
    <div class="bottom-left">
        <div onclick="GetErp('右导航','惠灵工客户案例');">
            <div class="bottom-title">咨询方案</div>
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
                    <p>400-150-9896</p>
                </div>
            </div>
        </div>
        <!-- 返回顶部 -->
        <div class='goTop' id="goTop">
            <div><img src="/static/spirit/images/top@2x.png" alt=""></div>
            <div>顶部</div>
        </div>
    </div>

    <!-- 弹窗 -->
    <div class="pop-up-box" id="popbox">
    <div class="form">
        <div class="form-titile">
            <p>方案咨询</p>
            <span class="turnoff" onclick="turnoff()"></span>
        </div>
        <div class="form-content">
            <div>
                <div><span class="title">您的姓名</span><input type="text" id="contactName" placeholder="请输入你的名字"></div>
                <div><span class="title">联系方式</span><input type="text" id="contactMobile" placeholder="请输入你的联系方式">
                </div>
                <div><span class="title">您的公司</span><input type="text" id="companyName" placeholder="请输入你的公司"></div>
                <input type='hidden' id='sources' >
                <input type='hidden' id='identifications'>
                <div class="form-btn" onclick="form_btn()">获取方案</div>
            </div>
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
                if ($('.chosenPage').length < 1) $('.nav ul li').eq(3).addClass('chosenPage')

                $('.chosenPage').addClass('nav-active')
            })

            $('.tab ul li').on('click', function () {
                $('.tabCon img').attr('src', `/static/spirit/images/${$(this).index()}case.png`)
                $('.tabTitle').html($(this).children().html())
                $(this).addClass('activeTab').siblings().removeClass('activeTab')
            })

            $('.limit1').each(function () {
                if ($(this).text().length > 31) {
                    $(this).text($(this).text().slice(0, 31) + '...');
                }
            })

            $('.limit2').each(function () {
                if ($(this).text().length > 63) {
                    $(this).text($(this).text().slice(0, 63) + '...');
                }
            })
        })
    </script>
</body>


</html>