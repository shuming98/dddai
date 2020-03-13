<html>
 <head> 
  <meta content="text/html; charset=UTF-8" http-equiv="content-type" /> 
  <meta content="all" name="robots" /> 
  <meta charset="utf-8" /> 
  <title>投资管理-我的投资</title> 
  <meta content="点点贷、借出、借款" name="keywords" /> 
  <meta content="点点贷" name="description" /> 
  <meta content="no-cache" http-equiv="pragma" /> 
  <meta content="no-cache" http-equiv="cache-control" /> 
  <meta content="0" http-equiv="expires" /> 
  <link type="text/css" rel="stylesheet" href="/css/common.css" /> 
  <link type="text/css" rel="stylesheet" href="/css/sea.css" /> 
  <link type="text/css" rel="stylesheet" href="/css/style.css" /> 
  <link rel="stylesheet" href="/css/grey2013.css" /> 
  <link type="text/css" rel="stylesheet" href="/css/jquery-ui.css" /> 
 </head> 
 <body style="display: block;">
   @include('template.header') 
  <!--面包屑--> 
  <div class="crumbs userCrumbs"> 
   <a class="first" href="javascript:void(0);">账户中心</a>
   <span>&gt;</span>
   <a class="two" href="javascript:void(0);">借款管理</a>
   <span>&gt;</span>
   <a class="two">项目审核</a> 
  </div> 
  <!--面包屑 end--> 
  <!--layout start--> 
  <div class="layout clearfix page46"> 
   <!--left nav start--> 
   <!--left nav start--> 
   <div class="clearfix leftbar"> 
    <div class="clearfix left_nav"> 
     <!--user_nav start--> 
     <div class="clearfix user_nav" id="leftMenuContainer">
      <a href="javascript:void(0);"><h3><i class="ico1"></i>账户中心</h3></a>
      <h4><span>资金管理</span><i></i></h4>
      <ul style="display:block;" pdata="zjglElem" id="zjglElem">
       <li pdata="my_nwd_3" id="my_nwd_3"><a href="javascript:void(0);">我要充值</a></li>
       <li pdata="my_nwd_4" id="my_nwd_4"><a href="javascript:void(0);">我要提现</a></li>
       <li pdata="my_nwd_5" id="my_nwd_5"><a href="javascript:void(0);">资金记录</a></li>
       <li pdata="my_nwd_6" id="my_nwd_6"><a href="javascript:void(0);">收益明细</a></li>
      </ul>
      <h4><span>投资管理</span><i></i></h4>
      <ul style="display:block;" pdata="tzglElem" id="tzglElem">
       <li pdata="tz_nwd_2" id="tz_nwd_2"><a href="javascript:void(0);">嘉财有道</a></li>
       <li pdata="tz_nwd_8" id="tz_nwd_8" class="rela"><a href="javascript:void(0);">嘉猜宝</a></li>
       <li pdata="tz_nwd_1" id="tz_nwd_1"><a href="javascript:void(0);">我的债权</a></li>
       <li pdata="tz_nwd_5" id="tz_nwd_5"><a href="javascript:void(0);">债权转让</a></li>
       <li pdata="tz_nwd_7" id="tz_nwd_7" class="rela"><a href="javascript:void(0);">体验专区</a></li>
       <li pdata="tz_nwd_4" id="tz_nwd_4" class="rela"><a href="javascript:void(0);">电子对账单</a></li>
       <li pdata="tz_nwd_3" id="tz_nwd_3"><a href="javascript:void(0);">智能抢标</a></li>
      </ul>
      <h4><span>借款管理</span><i></i></h4>
      <ul style="display:block;" pdata="jkglElem" id="jkglElem">
       <li pdata="jk_nwd_5" id="jk_nwd_5"><a href="javascript:void(0);">我要还款</a></li>
       <li pdata="jk_nwd_4" id="jk_nwd_4"><a href="javascript:void(0);">借款记录</a></li>
       <li pdata="jk_nwd_6" id="jk_nwd_6"><a href="javascript:void(0);">借款申请</a></li>
      </ul>
      <h4><span>账户管理</span><i></i></h4>
      <ul style="display:block;" pdata="zhglElem" id="zhglElem">
       <li pdata="xinxi_nwd_1" id="xinxi_nwd_1"><a href="javascript:void(0);">个人资料</a></li>
       <li pdata="xinxi_nwd_9" id="xinxi_nwd_9"><a href="javascript:void(0);">我的积分</a></li>
       <li class="weiyi" pdata="xinxi_nwd_8" id="xinxi_nwd_8"><a href="javascript:void(0);">安全中心</a></li>
       <li pdata="xinxi_nwd_7" id="xinxi_nwd_7"><a href="javascript:void(0);">账户绑定</a></li>
       <li pdata="xinxi_nwd_4" id="xinxi_nwd_4"><a href="javascript:void(0);">消息中心</a></li>
      </ul>
      <h4><span>活动管理</span><i></i></h4>
      <ul style="display:block;" pdata="hdglElem" id="hdglElem">
       <li pdata="xinxi_nwd_6" id="xinxi_nwd_6"><a href="javascript:void(0);">我的礼品</a></li>
       <li pdata="tj_nwd_4" id="tj_nwd_4"><a href="javascript:void(0);">推荐有奖</a></li>
       <li pdata="tj_nwd_1" id="tj_nwd_1"><a  href="javascript:void(0);">我要推荐</a></li>
      </ul>
     </div> 
     <!--user_nav end--> 
    </div> 
    <div class="banner_out"> 
     <div class="user_banner"> 
      <div class="img"> 
       <ul> 
       </ul> 
      </div> 
      <div class="page"></div>
     </div> 
    </div> 
   </div> 
   <!--left nav end--> 
   <!--left nav end--> 
   <!--right start--> 
   <div class="clearfix main_wrapper"> 
    <div class="container"> 
     <div class="accountCenter"> 
      <span class="fs_18 left">项目审核</span> 
      <span class="center"></span> 
      <span class="ff bold">单位：元</span> 
     </div> 
     <div class="clearfix fluid mb_10"> 
      <div class="module"> 
       <!--筛选 end--> 
       <div class="clearfix tab_content"> 
        <!--1--> 
        <div class="clearfix nr"> 
         <!--table--> 
         <table class="table"> 
          <tbody>
           <tr> 
            <th class="f">ID</th> 
            <th class="tr"><span>项目名称</span></th> 
            <th class="tr">金额</th> 
            <th class="tr">投资时间</th> 
            <th class="tr">项目状态</th> 
           </tr> @forelse($invest as $v) 
           <tr> 
            <td class="f">{{$v->pid}}</td> 
            <td class="tr"><span>{{$v->title}}</span></td> 
            <td class="tr">{{$v->money/100}}</td> 
            <td class="tr">{{date('Y-m-d',$v->pubtime)}}</td> 
            <td class="tr"> @if($v->status == 1) 招标中 @elseif($v->status == 2) 收益中 @else 项目完成 @endif </td> 
           </tr> @empty  @endforelse 
          </tbody> 
         </table> 
         <!--table end--> 
         <div class="t_foot"> 
          <div class="r"> 
           <div class="fy"> 
            <!--分页 str --> 
           </div> 
          </div> 
         </div> 
         <div class="tongji tj_nr01" id="tongji">
           待还本息 &nbsp;&nbsp;共 
          <span class="fc_orange bold" id="waitCapital"></span> 元， 应还罚息 共 
          <span class="fc_green bold" id="shouldFine"></span> 元 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   <!-- right end --> 
  </div> 
  <!--layout end--> 
  <!--提示start--> 
  <div style="display: none;" id="openMsg" class="plusBank mini page53"> 
   <div class="topper clearfix"> 
    <span id="msgTitle" class="fl fs_18">提示</span> 
    <a id="msgCloseAll" class="fr"></a> 
   </div> 
   <div id="changyong" class="middle"> 
    <div id="msgContent" class="content"></div> 
    <div class="btnbox">
     <button id="msgClose" class="btn btnSize_1 btn_blue plus_c">确认</button>
    </div> 
   </div> 
  </div> 
  <!--提示end--> @include('template.footer') 
 </body>
</html>