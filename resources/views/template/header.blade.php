<!--header start-->
<html>
 <head>
    <style>
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 100px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.dropdown-content a:hover {background-color: #f1f1f1}
.dropdown:hover .dropdown-content {display: block;}
  </style>
 </head>
 <body>
  <div class="niwdoawi_top"> 
   <div class="header w1000 clearfix"> 
    <div class="fl tel"> 
     <em class="fs_14 mr_5 tel_ico">客服热线</em>
     <i class="aril">010-57155250</i> 
     <span class="iphone"><i></i><a href="#">手机客户端</a></span> 
     <span class="hover_sina"> <a  href="#"></a> </span> 
     <span class="fs_12 ml_10">市场有风险，投资需谨慎</span> 
    </div> 
    <div class="fr login clearfix"> 
     <!--  @if(!Auth::user()) --> 
     @guest 
     <div class="login_bt">
      <a class="fff" title="登录" rel="nofollow" href="{{url('login')}}">登录</a>
      <a class="fff" title="注册" rel="nofollow" href="{{url('register')}}">注册</a>
     </div> 
     @endguest 
     <!-- @else --> 
     @auth 
     <div class="login_bt">
      <input value="" id="log_userid" type="hidden" />
      <input value="itbool" id="log_username" type="hidden" />
      <em class="fff fs_12">您好，</em>
      <a href="#" rel="nofollow" class="hello">{{Auth::user()->name}}</a>
      <a href="{{url('logout')}}" id="loginOut" class="hello">退出</a>
     </div> 
     @endauth 
     <!-- @endif --> 
     <dl> 
      <dt>
       <a href="#" title="账户中心" rel="nofollow" class="txnone">账户中心</a>
      </dt> 
      <dd>
       <a href="#" rel="nofollow" title="充值">充值</a>
      </dd> 
      <dd>
       <a href="#" rel="nofollow" title="提现">提现</a>
      </dd> 
      <dd>
       <a href="#" rel="nofollow" title="我的投资">我的投资</a>
      </dd> 
      <dd>
       <a href="#"  rel="nofollow" title="我的借款">我的借款</a>
      </dd> 
     </dl> 
     <div class="community">
      <a href="#"  rel="nofollow" class="fc_white">关于我们</a>
     </div> 
    </div> 
   </div> 
  </div>
  <!--登录--> 
  <div class="niwdoawi_center"> 
   <div class="w1000 logo clearfix"> 
    <a class="fl pl_20 logo_a holiday_logo" title="给梦想可能" href="{{url('/')}}"><img height="52" alt="点点贷" src="/image/logo_all.png" /></a> 
    <div class="fl logo_aft"> 
     <div id="headLogo" class="pos_aft"> 
      <a href="#" class="defaultlogo"><img src="/image/logo1200.png" /></a> 
     </div> 
    </div> 
    <div class="fr righ"> 
     <ul class="nav clearfix"> 
      <li> <a class="one" title="首页" href="{{url('/')}}" rel="nofollow">首页</a> </li> 
  <li class="dropdown one">
    <a href="javascript:void(0);" title="我要投资" class="dropbtn one">我要投资</a>
    <div class="dropdown-content">
      <a class="one" href="{{url('mytz')}}">我的投资</a>
      <a class="one" href="{{url('mysy')}}">我的收益</a>
    </div>
  </li>
    <li class="dropdown one">
    <a href="javascript:void(0);" title="我要借款" class="dropbtn one">我要借款</a>
    <div class="dropdown-content">
      <a class="one" href="{{url('jie')}}">我要借款</a>
      <a class="one" href="{{url('myzd')}}">还款账单</a>
    </div>
  </li>
      <li class="rela"> <a class="one" title="项目审核"  href="{{url('prolist')}}">项目审核</a> </li> 
      <li style="margin-right:0;"> <a class="one" title="社区"  href="javascript:void(0);">社区 </a> </li> 
     </ul> 
    </div> 
   </div> 
  </div>
  <!--nav--> 
  <!--header end-->