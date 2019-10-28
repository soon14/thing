<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:105:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\hui\public/../application/home\view\index\index.html";i:1572263678;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>惠企云</title>
    <link rel="stylesheet" href="/static/home/css/base.css">
    <link rel="stylesheet" href="/static/home/css/index.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src='/static/home/js/index.js'></script>
    <script src="/static/assets/plugins/layui/layui.all.js"></script>
    <script src='/static/home/js/common.js'></script>
    <style>
        .header
        {
            background-image: url("<?php echo (isset($slideshow['pic']) && ($slideshow['pic'] !== '')?$slideshow['pic']:'/static/home/images/default.png'); ?>");
        }

        .success_icon > div:nth-of-type(1) {position: absolute;  top: 49px;  left: 14px;  width: 386px;  height: 166px;  background-size: contain;  background-image: url('/static/home/images/huiduoxin.png');  }

        .success_icon > div:nth-of-type(2) {  position: absolute;  top: 106px;  right: -3px;  width: 386px;  height: 166px;  background-size: 100%;  background-image: url('/static/home/images/huichuangyou.png');  }

        .success_icon > div:nth-of-type(3) {  position: absolute;  top: 190px; left: -1px;  width: 386px;  height: 166px;  background-size: contain;  background-image: url('/static/home/images/huilinggong.png');  }

        .success_icon > div:nth-of-type(4) {  position: absolute;  top: 229px;  right: 6px;  width: 386px;  height: 166px;  background-size: 100%;  background-image: url('/static/home/images/huizhaoshi.png');  }

        .success_icon > div:nth-of-type(5) {  position: absolute;  bottom: 107px;  left: 12px;  width: 386px;  height: 166px;  background-size: contain;  background-image: url('/static/home/images/huiqidong.png');  }

        .success_icon > div:nth-of-type(6) {  position: absolute;  bottom: 72px;  right: -7px;  width: 386px;  height: 166px;  background-size: contain;  background-image: url('/static/home/images/huichuangye.png');  }
    </style>

</head>

<body id="getdata" data="<?php echo $count; ?>">

    <div class='container'>



        <!-- 头部 -->
        <div class='header'>
            <!-- 头部图标 -->
            <div class='header_total' id='headerTotal'>
                <div class='header_line'>
                    <div class='w header_icon'>
                        <div class='title_icon'>
                            <span class='phone'></span>
                            <span><?php echo $site_info['tel']; ?></span>
                            <span class='email'></span>
                            <span><?php echo $site_info['mail']; ?></span>
                            <!--<span class='bo'></span>-->
                            <!--<span class='wx'></span>-->
                            <!--<span class='tie'></span>-->
                        </div>
                        <div class='title_lan'>中文</div>
                    </div>
                </div>

            </div>


            <!-- 头部其他内容 -->
            <div class='header_fixed'>
                <div class='header_content' id='headerContent'>
                    <div class='w content'>
                        <div class='content_logo' id='logo'></div>
                        <ul>
                            <li><a href="#">首页</a></li>
                            <li><a href="#">惠税优</a></li>
                            <li><a href="<?php echo url('/home/spirit/index'); ?>">惠灵工</a></li>
                            <li><a href="#">惠多薪</a></li>
                            <li><a href="#">惠创业</a></li>
                            <li><a href="#">惠找事</a></li>
                            <li><a href="#">惠启动</a></li>
                        </ul>
                        <div class='register'>
                            <a href="<?php if($is_nginx != ''): ?><?php echo $is_nginx; endif; ?><?php echo url('/home/index/ajaximage'); ?>">登录</a>
                            <span></span>
                            <a href="register">注册</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- 文字部分-->
            <div class='content_text'>
                <div class='w'><?php echo $slideshow['title']; ?></div>
            </div>

            <div class='rentong'>
                <div class='w'><?php echo $slideshow['desc']; ?></div>
            </div>

            <div class='btn'>
                <div class='w'>
                    <button onclick="showSearch()">定制您的方案</button>
                </div>
            </div>

        </div>


        <!-- 选择我们 -->
        <div class='chooseUs'>
            <div class="w choose">
                <div class='choose-title'>选择我们</div>
                <div class='choose-intro'>惠企云平台是一款基于国家政策、以合规化为基础、由金牌顾问团队打造的产品，为企业及个人提供税筹问题的全方位解决方案。</div>
                <ul class='img_total'>
                    <li>
                        <img src="/static/home/images/more.png" alt="">
                        <a href="#">集专家智“惠”定制</a>
                    </li>
                    <li>
                        <img src="/static/home/images/rainning.png" alt="">
                        <a href="#">集专家智“惠”定制</a>
                    </li>
                    <li>
                        <img src="/static/home/images/pig.png" alt="">
                        <a href="#">给您最优“惠”</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- 惠想产品 -->
        <div class='hui_product'>
            <div class='w'>
                <div class='product_logo'></div>
                <ul class='all_product'>
                    <?php if(is_array($protuct) || $protuct instanceof \think\Collection || $protuct instanceof \think\Paginator): $i = 0; $__LIST__ = $protuct;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
                    <li>
                        <img src="<?php echo (isset($v1['imgs']) && ($v1['imgs'] !== '')?$v1['imgs']:''); ?>" alt="">
                        <a href="#"><?php echo (isset($v1['names']) && ($v1['names'] !== '')?$v1['names']:''); ?></a>
                        <a href="#"><?php echo (isset($v1['desc']) && ($v1['desc'] !== '')?$v1['desc']:''); ?></a>
                        <ul class='one_pic'>
                            <li><a onclick="showSearch()">获取方案</a></li>
                            <li><a href="<?php echo (isset($v1['purl']) && ($v1['purl'] !== '')?$v1['purl']:'#'); ?>">前往网站</a></li>
                        </ul>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>

       <div class="prop_box" ></div>


        <!-- 近期成功案例 -->
        <input type="hidden" id="add_url" value="<?php if($is_nginx != ''): ?><?php echo $is_nginx; endif; ?><?php echo url('/home/index/ajaximage'); ?>">
        <div class='success'>
            <div class='w success_content'>
                <div class='success_title'></div>
                <div class='success_icon'>
                    <?php if(is_array($case_list) || $case_list instanceof \think\Collection || $case_list instanceof \think\Paginator): $i = 0; $__LIST__ = $case_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data_list): $mod = ($i % 2 );++$i;?>
                    <div onclick="click_show(this)" keys="<?php echo $key; ?>" class="<?php echo $data_list['is_show'].$key; ?>" data="<?php echo $count; ?>" data-attr="<?php echo $data_list['is_show']; ?>">
                        <div class='<?php if($key == 1): ?>hui_icon<?php else: ?>p_icon<?php endif; ?>'>
                            <div><?php echo $data_list['title2']; ?></div>
                            <div><?php echo $data_list['title3']; ?></div>
                            <?php if($key != 1): ?>
                            <!--<a href="javascript:void(0)">-->
                                <!--<img src="/static/home/images/jiantou.png" alt="">-->
                            <!--</a>-->
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                    <div onclick="click_show(this)" data-attr="huiduoxin">
                        <div class='p_icon'>
                            <div>惠多薪</div>
                            <div>薪酬服务案例</div>
                            <a href="#">
                                <img src="/static/home/images/jiantou.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div onclick="click_show(this)" data-attr="huichuangyou">
                        <div class='hui_icon'>
                            <div>惠创优</div>
                            <div>节税服务案例</div>
                        </div>
                    </div>
                    <div onclick="click_show(this)" data-attr="huilinggong">
                        <div class='duo_icon'>
                            <div>惠灵工</div>
                            <div>一站用工案例</div>
                            <a href="#">
                                <img src="/static/home/images/jiantou.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div onclick="click_show(this)" data-attr="huizhaoshi">
                        <div class='p_icon'>
                            <div>惠找事</div>
                            <div>人才服务案例</div>
                            <a href="#">
                                <img src="/static/home/images/jiantou.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div onclick="click_show(this)" data-attr="huiqidong">
                        <div class='p_icon'>
                            <div>惠启动</div>
                            <div>一站服务案例</div>
                            <a href="#">
                                <img src="/static/home/images/jiantou.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div onclick="click_show(this)" data-attr="huichuangye">
                        <div class='p_icon'>
                            <div>惠创业</div>
                            <div>薪酬服务案例</div>
                            <a href="#">
                                <img src="/static/home/images/jiantou.png" alt="">
                            </a>
                        </div>
                    </div>-->
                </div>
                <div class='to_detailInfo'>
                    <?php if(is_array($case_list) || $case_list instanceof \think\Collection || $case_list instanceof \think\Paginator): $i = 0; $__LIST__ = $case_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info_list): $mod = ($i % 2 );++$i;?>
                    <div class="<?php echo $info_list['is_show']; ?>">
                        <div class='huichuangyou_title'><?php echo $info_list['title']; ?></div>
                        <div class="con">
                            <div class="desc"><?php echo $info_list['desc']; ?></div>
                            <div class="desc"><?php echo $info_list['desc2']; ?></div>
                            <div class="desc"><?php echo $info_list['desc3']; ?></div>
                            <div class="desc"><?php echo $info_list['desc4']; ?></div>
                            <div class="desc"><?php echo $info_list['desc5']; ?></div>
                            <div class="desc"><?php echo $info_list['desc6']; ?></div>
                            <div class="desc"><?php echo $info_list['desc7']; ?></div>
                            <div class='total_input'>
                                <div>
                                    <input type="text" placeholder="请输入您的姓名..">
                                </div>
                                <div>
                                    <input type="text" placeholder="请输入您的公司名称..">
                                </div>
                                <div>
                                    <input type="text" placeholder="请输入您的手机号..">
                                </div>
                                <div>
                                    <input type="button" value='定制您的方案'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                    <div class='huichuangyou'>
                        <div class='huichuangyou_title'>惠创优-服务案例</div>
                        <div class="con">
                            <div class="desc">惠创优：能省122万</div>
                            <div class="desc">原增值税纳税额:(8000-4000)*13%=520万</div>
                            <div class="desc">原所得税纳税额:3500*25%=875万</div>
                            <div class="desc">年纳税额:520+875=1395万</div>
                            <div class="desc">园区政策:520*10%=52万</div>
                            <div class="desc">园区政策奖励额:875*8%=875万</div>
                            <div class="desc">惠创优的节税额:52+70=122万</div>
                            <div class='total_input'>
                                <div>
                                    <input type="text" placeholder="请输入您的姓名..">
                                </div>
                                <div>
                                    <input type="text" placeholder="请输入您的公司名称..">
                                </div>
                                <div>
                                    <input type="text" placeholder="请输入您的手机号..">
                                </div>
                                <div>
                                    <input type="button" value='定制您的方案'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='huiduoxin'>
                        <div class='huichuangyou_title'>惠多薪：人力型社保薪酬</div>
                        <div class="con">
                            <div class="desc">发薪日核算考勤、社保扣缴、发放过程繁琐</div>
                            <div class="desc">采购渠道复杂，财务流程冗长影响业务开展</div>
                            <div class="desc">使用惠多薪从考勤管理到收入核算、优化、发放一站式操作</div>
                            <div class="desc">整合各类优质采购渠道</div>
                            <div class="desc">为企业提供更长的付款周期，提高资金利用率</div>
                            <div class="desc">降低采购成本，减少繁琐工作</div>
                            <div class="desc">令企业及员工采购、消费无忧</div>
                            <div class='total_input'>
                                <div>
                                    <input type="text" placeholder="请输入您的姓名..">
                                </div>
                                <div>
                                    <input type="text" placeholder="请输入您的公司名称..">
                                </div>
                                <div>
                                    <input type="text" placeholder="请输入您的手机号..">
                                </div>
                                <div>
                                    <input type="button" value='定制您的方案'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='huilinggong'>
                        <div class='huichuangyou_title'>惠灵工：灵活用工型税筹</div>
                        <div class="con">
                            <div class="desc">将雇佣关系转变为与惠灵工创客承包关系</div>
                            <div class="desc">承包费：100万 按所得税规定需要交纳25%</div>
                            <div class="desc">手续费用及税费：100万*（3%+6.72%）=9.72万</div>
                            <div class="desc">增值税专用发票可抵扣金额为：（109.72/1.06）*6%=6.21万元</div>
                            <div class="desc">税收奖励返还： 100*1.8%=1.8万</div>
                            <div class="desc">企业可以抵扣的所得税金额：（109.72/1.06）*25%=25.87万</div>
                            <div class="desc">企业实际支付金额为： 9.72-6.21-1.8=1.71万 费用率仅为1.7%</div>
                            <div class='total_input'>
                                <div>
                                    <input type="text" placeholder="请输入您的姓名..">
                                </div>
                                <div>
                                    <input type="text" placeholder="请输入您的公司名称..">
                                </div>
                                <div>
                                    <input type="text" placeholder="请输入您的手机号..">
                                </div>
                                <div>
                                    <input type="button" value='定制您的方案'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='huizhaoshi'>
                        <div class='huichuangyou_title'>惠找事：ToC找零工</div>
                        <div class="con">
                            <div class="desc">针对自由职业者</div>
                            <div class="desc">收入个人所得税最低20%，最高40%</div>
                            <div class="desc">在惠找事平台以惠灵工创客方式承包业务</div>
                            <div class="desc">合法取得劳动所得同时为企业开具增值税6%专用发票</div>
                            <div class="desc">个人只需承担0.4%</div>
                            <div class="desc">同时免去合并征收烦恼</div>
                            <div></div>
                            <div class='total_input'>
                                <div>
                                    <input type="text" placeholder="请输入您的姓名..">
                                </div>
                                <div>
                                    <input type="text" placeholder="请输入您的公司名称..">
                                </div>
                                <div>
                                    <input type="text" placeholder="请输入您的手机号..">
                                </div>
                                <div>
                                    <input type="button" value='定制您的方案'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='huiqidong'>
                        <div class='huichuangyou_title'>惠企动一站式企业服务：</div>
                        <div class="con">
                            <div class="desc">以申办高新技术企业成功为例</div>
                            <div class="desc">某高新技术企业的净利润为200万，研发费用为100万</div>
                            <div class="desc">研发费用可按照175%进行企业所得税的税前扣除</div>
                            <div class="desc">所需交税额：（200-175）*15%=3.75万</div>
                            &lt;!&ndash; <div>园区政策:520*10%=52万</div>
                                <div>园区政策奖励额:875*8%=875万</div>
                                <div>惠创优的节税额:52+70=122万</div> &ndash;&gt;
                            <div class='total_input'>
                                <div>
                                    <input type="text" placeholder="请输入您的姓名..">
                                </div>
                                <div>
                                    <input type="text" placeholder="请输入您的公司名称..">
                                </div>
                                <div>
                                    <input type="text" placeholder="请输入您的手机号..">
                                </div>
                                <div>
                                    <input type="button" value='定制您的方案'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='huichuangye'>
                        <div class='huichuangyou_title'>惠创业：工商、代账、地址注册</div>
                        <div class="con">
                            <div class="desc">充分利用地区差异 , 选择合理注册地址</div>
                            <div class="desc">合理运用税收杠杆 , 匹配注册资金方案</div>
                            <div class="desc">多方位了解各类政策 , 合法享受政策优惠</div>
                            <div class="desc">大幅降低运营成本 , 显著提高营业利润</div>
                            &lt;!&ndash; <div>园区政策:520*10%=52万</div>
                                <div>园区政策奖励额:875*8%=875万</div>
                                <div>惠创优的节税额:52+70=122万</div> &ndash;&gt;
                            <div class='total_input'>
                                <div>
                                    <input type="text" placeholder="请输入您的姓名..">
                                </div>
                                <div>
                                    <input type="text" placeholder="请输入您的公司名称..">
                                </div>
                                <div>
                                    <input type="text" placeholder="请输入您的手机号..">
                                </div>
                                <div>
                                    <input type="button" value='定制您的方案'>
                                </div>
                            </div>
                        </div>
                    </div>-->


                </div>
            </div>
        </div>




        <!-- 招标信息政策 -->
        <div class='zhaoBox'>
            <div class='zhaoInfo'>
                <div class='diandianone'></div>
                <div class='diandiantwo'></div>
                <div class='w'>
                    <div class='search_info'>
                        <div class='zhao_title'>
                        </div>

                        <!-- 搜索 -->
                        <div class='zhaoSearch'>
                            <div class='searchLogo'>
                                <i onclick="search()"></i>
                                <input type="text" id="keyword"  placeholder="搜索招标政策和招标信息...">
                            </div>
                            <!-- <button>查询</button> -->
                        </div>
                    </div>

                    <div class='zhaomethods'>
                        <div class='totalInfo_title'>招商政策</div>
                        <?php if(is_array($shang) || $shang instanceof \think\Collection || $shang instanceof \think\Paginator): $i = 0; $__LIST__ = $shang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ss): $mod = ($i % 2 );++$i;?>
                        <div class='totalInfo_content'>
                            <a href="<?php echo url('home/index/infoList'); ?>">
                            <div class='zhao_contentInfo'>
                                <div><?php echo $ss['title']; ?></div>
                                <div><?php echo $ss['create_time']; ?></div>
                            </div>
                            <div> <?php echo $ss['desc']; ?></div>
                            </a>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <button class='know_more' onclick='showUrl()'>了解更多</button>
                    </div>

                    <div class='zhaoTotalInfo'>
                        <div class='totalInfo_title'>招标信息</div>
                        <?php if(is_array($biao) || $biao instanceof \think\Collection || $biao instanceof \think\Paginator): $i = 0; $__LIST__ = $biao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$biaos): $mod = ($i % 2 );++$i;?>
                        <div class='totalInfo_content'>
                            <a href="<?php echo url('home/index/infoList'); ?>">
                            <div class='zhao_contentInfo'>
                                <div><?php echo (isset($biaos['title']) && ($biaos['title'] !== '')?$biaos['title']:''); ?></div>
                                <div><?php echo $biaos['create_time']; ?></div>
                            </div>
                            <div>
                                <?php echo $biaos['desc']; ?>
                            </div>
                            </a>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <button class='know_more'onclick='showUrl()'>了解更多</button>
                    </div>

                </div>
            </div>
        </div>


        <!-- 合作伙伴 -->
        <div class='partener'>
            <div class='w partener_total'>
                <div class='parter_icon'></div>

                <!-- <div class='search' id='search'>
                    <input type="text" placeholder="请输入姓名">
                    <input type="text" placeholder="请输入公司名称">
                    <input type="text" placeholder="请输入手机号码">
                    <input type="button" value='定义方案'>
                </div> -->
            </div>

        </div>


        <div class='partner_bottom'>
            <div class='w content'>
                <div class='partener_titile'>用智“慧”创造优“惠”</div>
                <div class='parterne_info'>
                    深耕税筹行业多年，合作企业多达几千家。专业为个人和企业解决税务难题。为您提供一站式金融、税务和人力外包服务，以及专业的税筹划分析，最安全、高效、合理的节税措施。我们有最成熟的专家团队和各行业实操经验！作为国内领先的标准化税筹服务互联网平台，我们得到了上海、安徽、江西、湖北等各地政府的大力支持，为企业节税保驾护航！
                </div>
                <div class='parter_catefories'>
                    <dl>
                        <dt>服务产品</dt>
                        <dd>服务型税筹</dd>
                        <dd>门户型税筹</dd>
                        <dd>人力资源</dd>
                    </dl>
                    <dl>
                        <dt>招商政策</dt>
                        <dd>招商政策网</dd>
                    </dl>
                    <dl>
                        <dt>合作</dt>
                        <dd>代理合作</dd>
                    </dl>
                    <dl>
                        <dt>公司信息</dt>
                        <dd>瑟维斯有限公司</dd>
                        <dd>惠创优产业联盟</dd>
                        <dd>中兴瑞华有限公司</dd>
                    </dl>
                    <dl>
                        <dt>联系我们</dt>
                        <dd><?php echo $site_info['tel']; ?></dd>
                        <dd><?php echo $site_info['mail']; ?></dd>
                        <dd><?php echo $site_info['count_code']; ?></dd>
                    </dl>

                </div>
                <!--<div class='concat_icon'>-->
                    <!--<div><img src="/static/home/images/bo.png" alt=""></div>-->
                    <!--<div><img src="/static/home/images/wx.png" alt=""></div>-->
                    <!--<div><img src="/static/home/images/tie.png" alt=""></div>-->
                <!--</div>-->
            </div>
        </div>



        <div class='goTop'id="goTop">
            <i></i>
            <div>返回顶部</div>
        </div>

    </div>

</body>



</html>