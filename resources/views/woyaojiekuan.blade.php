<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="robots" content="all">
<meta charset="utf-8">
<meta name="description" content="点点贷贷款专栏专注于为个人和企业提供2013年最新的贷款利息查询、小额贷款、个人贷款、商业贷款、短期借款期限、汽车抵押贷款、房屋抵押贷款、信用贷款、申请贷款条件等贷款咨询服务。">
<meta name="keywords" content="贷款利率,小额贷款,无抵押贷款,p2p贷款，借钱,长期借款">
<title>快速申请 -点点贷</title>
<meta name="Robots" content="index,follow">
<meta property="wb:webmaster" content="ac04ec3477e29c81">
<meta property="qc:admins" content="1533374623661774116375">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<style>
.foot1 .out .r .line2{
    margin-top: 0;
}
.foot2 .out .line2{
    border-bottom: none;
    margin-top: 0;
}
</style>
<link href="/css/common.css" rel="stylesheet" type="text/css">
<link href="/css/sea.css" rel="stylesheet" type="text/css">
<link href="/css/style.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="/css/webstyle2.css">
<link href="/css/wyjk.css" rel="stylesheet" type="text/css">

<link href="/css/grey2013.css" rel="stylesheet">
<link href="/css/jquery-ui.css" rel="stylesheet" type="text/css">
</head>

<body>
@include('template.header')

<form id="applyForm" name="applyForm" action="" method="POST">
	{{csrf_field()}}
 <div class="application">
        <figure class="banner"></figure>
        <div class="delCon">

            <h1>快速申请</h1>

            <div class="iptBox">
                <span>真实年龄</span>
                <select class="ageBox" id="age" name="age">
                    <option selected="selected" value="0">请选择年龄段</option>
                    <option value="15">23岁以下</option>
                    <option value="40">23岁-55岁</option>
                    <option value="80">55岁以上</option>
                </select>
                @if($errors->has('age'))
                <p id="ageError" class="error" style="display: block;">{{$errors->first('age')}}</p>
                @endif
            </div>

            <div class="iptBox">
                <span>借款金额</span>
                <input id="loanAmount" name="money" maxlength="8" placeholder="请输入借款金额" type="text" value="">
                 @if($errors->has('money'))
                <p style="display: block;" id="amountError" class="error">{{$errors->first('money')}}</p>
                @endif
                
            </div>
            <div class="iptBox">
                <span>手机号码</span>
                <input id="mobile" name="mobile" placeholder="请输入手机号码" maxlength="11" type="text">
                 @if($errors->has('mobile'))
                <p id="mobileError" class="error" style="display: block;">{{$errors->first('mobile')}}</p>
                @endif
              
            </div>
            <div class="iptBox">
                <span class="message">图形验证码</span>
                <input class="short" name="imgcode" id="imgcode" placeholder="请输入图形验证码" type="text">
                <img src="{{url('captcha')}}" name="imgc" id="imgc" alt="换一张" class="get-code" height="36" width="80">
                @if($errors->has('imgcode'))
                <p id="imgcodeError" class="error" style="display: block;">{{$errors->first('imgcode')}}</p>
                @endif
            </div>
            <div class="iptBox">
                <span class="message">短信验证码</span>
                <input class="short" name="verify" id="fucode" placeholder="请输入短信验证码" type="text">
                <i><a href="javascript:;" class="get-code" id="dtmbtn" name="dtmbtn" onclick="putyzm()">获取验证码</a></i>
            </div>
            <input class="applyBtn" value="立即申请" id="save" type="submit">
        </div>
    </div>
</form>

@include('template.footer')

<script src="/js/jquery.js"></script>
<script>
    // $("#applyForm").submit(function(event){
    //     if($("#age").val == ""){
    //         alert('真实年龄：请选择年龄');
    //         return false;
    //     }

    //     var money = /\d{6,}/;
    //     if(!money.test($("#loanAmount").val())){
    //         alert('借款金额：请输入数字并且大于6位数');
    //         return false;
    //     }

    //     var mobile = /1[35789]\d{9}/;
    //     if(!mobile.test($("#mobile").val())){
    //         alert("手机号码：请输入正确的手机号");
    //         return false;
    //     }
    // });
    
    // 点击图片切换二维码
     $("#imgc").click(function(event){
        this.src = this.src + '?';
    });
</script>
</body></html>
