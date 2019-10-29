//手机验证
function checkPhone(phone) {
    var tel_reg = /^1([38]\d|5[0-35-9]|7[3678])\d{8}$/;
    if (tel_reg.test(phone)) {
        return true;
    } else {
        return false;
    }
}

var gurl = "http://172.26.2.41:8088";

function getErp() {
       var urkl = gurl + "/api/wechatForeign/public/addGatewayPotentialCustomer";

       var data = {};

       data.contactName = $("#contactName").val();//联系姓名
       data.companyName = $("#companyName").val(); //公司
       data.contactMobile = $("#contactMobile").val();//手机
       data.source = $("#source").val(); //渠道
       data.identification = $("#identification").val();//标识

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

       })

   }

//点击弹窗
function showSearch(){
   var   content = '';

         content += "<div class='propbox' >";
         content += "<div class='title' onclick='closedTab()'>方案咨询<i class='close'></i></div>";
         content += "<div class='total-input'> <div>";
         content += "<span>您的姓名</span>";
         content += "<input type='text' id='contactName'  placeholder='请输入您的姓名'></div>";
         content += "<div><span>您的公司</span>";
         content += "<input type='text' id='companyName' placeholder='请输入您的公司名...'></div><div>";
         content += "<span>联系方式</span>";
         content += "<input type='text' id='contactMobile'  placeholder='请输入您的联系方式...'></div>";
         content += "<input type='hidden' id='source' value='门户首页'>";
         content += "<input type='hidden' id='identification' value='企业一站式服务'>";
         content += "<button  class='button' onclick='getErp()'>获取方案</button>";
         content += "</div></div>";

         console.log(content);
         $(".prop_box").append(content).show();
}

//关闭弹窗
function closedTab(){
    $(".prop_box").hide();
}

$(function(){
    var url = $('#add_url').val();

    $.post(
        url,
        {data:'getdata'},
        function (ret){
            $.each(ret.pic2,function (index,item){
                if(index == 1){
                    $('.'+item.is_show+index).css('background-image','url('+item.pic2+')');
                }else{
                    $('.'+item.is_show+index).css('background-image','url('+item.is_pic1+')');
                }
            });
        }
    );

});

//显示案例
function click_show(objthis){
    var v = $(objthis).attr('data-attr');
    var keys = $(objthis).attr('keys');
    var url = $('#add_url').val();

    $.post(
        url,
        {data:'getdata'},
        function (ret){
            $.each(ret.pic2,function (index,item){
                $('.'+item.is_show).css('display','none');
                $('.' + v).css('display','block');
                if(keys == index){
                    $('.'+item.is_show+index).css('background-image','url('+item.pic2+')');
                }else{
                    $('.'+item.is_show+index).css('background-image','url('+item.is_pic1+')');
                }
            });
        }
    );



}

//搜索
 function search(){
        var keyword = $('#keyword').val();
        var url = "/home/index/infoList";

        if(keyword == '' || keyword==undefined){
            layer.msg('请输入搜索条件');
            return false;
        }

        window.location.href = url+"?keyword="+keyword;
    }

//了解更多
function showUrl(objthis){
    var data_url = $(objthis).attr('data-url');
    var login_url = $(objthis).attr('login_url');
    var is_login = $(objthis).attr('mobile-phone');
    if(is_login == '' || is_login == 'undefined' || is_login == undefined){
        window.location.href=login_url;
    }else{
        window.location.href=data_url;
    }

}

//列表页搜索
$(function(){
    $('#searched').click(function(){
        var keyword = $('#keyword').val();
        var url = $(this).attr('data-url');
        if(keyword == '' || keyword == undefined){
            layer.msg('请输入搜索条件');
            return false;
        }
        //var urlw = "/home/index/infoList";

        window.location.href = urlw+"?keyword="+keyword;

    });
});


//招商信息分页
function moreShang(keyword,pages){
    var urls = '/home/index/getshangPage';

    $.get(urls,{'keyword':keyword,'page':pages},function(ret){
        if(ret.code == 200){
            var html= "<li>";
            $.each(ret.data,function(i,item){
                 html+= "<a href='/home/index/getInfo.html?mid="+item.id+" '>";
                 html+= "<div class='tabs-items-content'>";
                 html+= "<div class='tabs-items-content-title figcaption'>";
                 html+= "<p>"+item.title+"</p></div>";
                 html+= "<div class='tabs-items-content-text figcaption'>";
                 html+= "<p>"+item.desc+"</p></div>";
                 html+= "<div class='tabs-items-content-time'><span>";
                 html+= "<img src='/static/spirit/images/shijian2x.png'>";
                 html+="</span><span>"+item.create_time+"</span></div></div></a>";
            });
            html +="</li>";

            $('#page').val(++pages);
            $('#shang').append(html).html();
        }

        if(ret.code == 404){
            layer.msg(ret.msg);
            return false;
        }
    },'json');
}

//招标信息分页
function moreBiao(keyword,pages){
    var urls = '/home/index/getbiaoPage';

    $.get(urls,{'keyword':keyword,'page':pages},function(ret){
        if(ret.code == 200){
            var html= "<li>";
            $.each(ret.data,function(i,item){
                html+= "<a href='/home/index/getInfo.html?mid="+item.id+" '>";
                html+= "<div class='tabs-items-content'>";
                html+= "<div class='tabs-items-content-title figcaption'>";
                html+= "<p>"+item.title+"</p></div>";
                html+= "<div class='tabs-items-content-text figcaption'>";
                html+= "<p>"+item.desc+"</p></div>";
                html+= "<div class='tabs-items-content-time'><span>";
                html+= "<img src='/static/spirit/images/shijian2x.png'>";
                html+="</span><span>"+item.create_time+"</span></div></div></a>";
            });
            html +="</li>";

            $('#pages').val(++pages);
            $('#biao').append(html).html();
        }

        if(ret.code == 404){
            layer.msg(ret.msg);
            return false;
        }
    },'json');
}


