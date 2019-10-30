//搜索
function search(objthis){
    var keyword = $('#keyword').val();

    var url = $(objthis).attr('data-url');
    if(keyword== '' || keyword==undefined){
        layer.msg('请输入搜索内容');
        return false;
    }

    window.location.href= url+'?keyword='+keyword;
}

//手机验证
function checkPhone(phone) {
    var tel_reg = /^1([38]\d|5[0-35-9]|7[3678])\d{8}$/;
    if (tel_reg.test(phone)) {
        return true;
    } else {
        return false;
    }
}

//接口 公海
var gurl = "http://172.26.2.41:8089";

var urkl = gurl + "/api/wechatForeign/public/addGatewayPotentialCustomer";

function btnErp(){

    var datas = {};

    datas.contactName = $("#Name").val();//联系姓名
    datas.companyName = $("#cName").val(); //公司
    datas.contactMobile = $("#Mobile").val();//手机
    datas.source = $("#source").val(); //渠道
    datas.identification = $("#identification").val();//标识

    if (datas.contactMobile == '' || datas.contactMobile == undefined) {
        layer.msg('请填写联系电话');
        return false;
    }

    if (checkPhone(datas.contactMobile) === false) {
        layer.msg("联系电话不合法");
        return false;
    }

    if (datas.companyName == '' || datas.companyName == undefined) {
        layer.msg('请填写公司名称');
        return false;
    }

    if (datas.contactName == '' || datas.contactName == undefined) {
        layer.msg('请填写您的姓名');
        return false;
    }

    $.ajax({
        url: urkl,
        type: "post",
        headers: {
            "Content-Type": "application/json",
        },
        dataType: 'json',
        data: JSON.stringify(datas),
        success: function (ret) {

            //201 号码已经存在
            if (ret.status == 200 && ret.rel == true) {
                layer.msg('提交成功', function () {
                    parent.location.reload();
                })
            }

            if (ret.status == 201) {
                layer.msg(ret.message, function () {
                    parent.location.reload();
                })
            }

            if (ret.status == 500) {
                layer.msg('网络错误，请稍后再提交。', function () {
                    parent.location.reload();
                });
            }
        },
        error: function (ret) {
            console.log(ret);
        }

    });
}

//弹窗
function GetErp(){
    $('#popbox').show();
}

//关闭
function turnoff(){
    $('#popbox').hide();
}

//提交公海
function form_btn(){
    var data = {};

    data.contactName = $("#contactName").val();//联系姓名
    data.companyName = $("#companyName").val(); //公司
    data.contactMobile = $("#contactMobile").val();//手机
    data.source = $("#sources").val(); //渠道
    data.identification = $("#identifications").val();//标识

    if (data.contactMobile == '' || data.contactMobile == undefined) {
        layer.msg('请填写联系电话');
        return false;
    }

    if (checkPhone(data.contactMobile) === false) {
        layer.msg("联系电话不合法");
        return false;
    }

    if (data.companyName == '' || data.companyName == undefined) {
        layer.msg('请填写公司名称');
        return false;
    }

    if (data.contactName == '' || data.contactName == undefined) {
        layer.msg('请填写您的姓名');
        return false;
    }

    $.ajax({
        url: urkl,
        type: "post",
        headers: {
            "Content-Type": "application/json",
        },
        dataType: 'json',
        data: JSON.stringify(data),
        success: function (ret) {

            //201 号码已经存在
            if (ret.status == 200 && ret.rel == true) {
                layer.msg('提交成功', function () {
                    parent.location.reload();
                })
            }

            if (ret.status == 201) {
                layer.msg(ret.message, function () {
                    parent.location.reload();
                })
            }

            if (ret.status == 500) {
                layer.msg('网络错误，请稍后再提交。', function () {
                    parent.location.reload();
                });
            }
        },
        error: function (ret) {
            console.log(ret);
        }

    });
};


//分页
function getMore(keyword,i,objthis){
   var urls = $(objthis).attr('data-url');

   var hrefs=$(objthis).attr('data-href');
   $.get(urls,{'keyword':keyword,'page':i},function(ret){
         if(ret.code == 200){
             var html= '<li>';
             $.each(ret.data,function(i,item){
                html+= "<a href= '"+hrefs+"?mid="+item.id+"'>";
                html+= "<div class='tabs-items-img'><img src="+item.imgs+" alt=''></div>";
                html+= "<div class='tabs-items-content'><div class='tabs-items-content-title figcaption'>";
                html+=  "<p>"+ item.title +"</p></div>";
                html+= "<div class='tabs-items-content-text figcaption'>";
                html+= "<p>"+item.desc+"</p></div>";
                html+=" <div class='tabs-items-content-time'>" ;
                html+="<span><img src='/static/spirit/images/shijian2x.png' alt=''></span>";
                html+="<span>"+item.create_time +"</span></div></div>";
                html+= "</a>";
             });
             html +='</li>';
            console.log(html);return;
            $('#page').val(++i);
            $('#content').append(html).html();
         }

         if(ret.code == 404){
             layer.msg(ret.msg);
             return false;
         }
   },'json')

}

<<<<<<< HEAD
//回到惠灵工
function go_work(obj){
    var urls  = $(obj).attr('data-url');
    window.location.href= urls;
}

//回惠灵工新闻列表
function go_news(obj){
    var urlk  = $(obj).attr('data-url');
    window.location.href= urlk;
}
=======

//登录了才能查看了解更多
function is_login(objthis){
    var data_url = $(objthis).attr('data-url');
    var login_url = $(objthis).attr('login_url');
    var is_login = $(objthis).attr('mobile-phone');
    if(is_login == '' || is_login == 'undefined' || is_login == undefined){
        window.location.href=login_url;
    }else{
        window.location.href=data_url;
    }
}

>>>>>>> da3e85cb4a2ff309ebb8f44f7843ec3b96f2dadc