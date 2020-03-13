<html>
 <head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <meta charset="utf-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <title>资金管理-我要充值</title> 
  <meta http-equiv="pragma" content="no-cache" /> 
  <meta http-equiv="cache-control" content="no-cache" /> 
  <meta http-equiv="expires" content="0" /> 
  <link href="/css/common.css" rel="stylesheet" type="text/css" /> 
  <link href="/css/sea.css" rel="stylesheet" type="text/css" /> 
  <link href="/css/style.css" rel="stylesheet" type="text/css" /> 
  <link href="/css/grey2013.css" rel="stylesheet" /> 
  <!--时间  s--> 
  <link href="/css/jquery-ui.css" rel="stylesheet" type="text/css" /> 
  <link href="/css/forms_style.css" rel="stylesheet" type="text/css" /> 
  <style type="text/css">
.plusBank5{width:680px; height:500px;  margin-left:-340px; margin-top:-250px;_margin-top:-250px;}
.serviceFeeTR{
    display:none;
}
</style> 
 </head> 
 <body style="display: block;">
   @include('template.header') 
  <div class="clearfix"></div> 
  <!--layout start--> 
  <div class="main page215 clearfix" style="min-height:230px"> 
   <!--content start--> 
   <div class="pt_20 fluid"> 
    <div class="module buy_page" style="padding:0;width:100%; float:left;"> 
     <!--top s--> 
     <div class="clearfix buy_box" style="background:#fff;"> 
      <!--l s--> 
      <div class="fl l"> 
       <h3 class="pl_20 t_bt"><img src="/image/safe_safe_002.png" /><span class="fc_green pl_10">账户资金安全由银行委托管理</span></h3> 
       <ul class="clearfix td_all"> 
        <li class="fl td1"> <h4 class="fc_9 pl_20">产品名称</h4> <p class="pl_20 fs_18 fc_6"> <a href="javascript:void(0);" title="房屋抵押借款"> {{$pro->title}} </a> </p> </li> 
        <li class="fl td2"> <h4 class="fc_9">借款年利率</h4> <p class="airal fs_24 fc_orange"> {{$pro->rate}}% </p> </li> 
        <li class="fl td3"> <h4 class="fc_9 pl_15">还款期限</h4> <p class="fs_18 pl_15"> {{$pro->hrange}}个月 </p> </li> 
        <li class="fl td4"> <h4 class="fc_9">还款方式</h4> <p>按月付息 到期还本</p> </li> 
        <li class="fl td5"> <h4 class="fc_9">剩余投资金额(元)</h4> <p><span class="airal fs_24 fc_orange"> {{($pro->money-$pro->recive)/100}} </span>元</p> </li> 
       </ul> 
      </div> 
      <!--l e--> 
      <!--r s--> 
      <div class="fr r" style="width:310px;"> 
       <div class="td_all2"> 
        <form action="{{url('pay')}}" method="post">
          {{csrf_field()}} 
         <input type="hidden" name="pid" value="{{$pro->pid}}" /> 
         <table width="100%" class="fc_6"> 
          <tbody> 
           <tr> 
            <th class="fs_16 fc_9" style="text-align:left;">投资金额：</th> 
            <td style="padding-right:0;width:220px;"><input style="width:140px;" class="fc_orange airal fs_18" name="money" value="{{($pro->money-$pro->recive)/100}}" />元</td> 
           </tr> 
          </tbody> 
         </table> 
         <div class="fc_6 t_r b1 newstyle" style="padding-top:100px;"> 
          <input type="submit" id="confirmBut" value="确认购买" class="btn btnSize_1 btn_orange" /> 
         </div> 
        </form> 
       </div> 
      </div> 
      <!--r e--> 
     </div> 
    </div> 
    <div class="fluid"> 
    </div> 
   </div> 
  </div> 
  <!--content end-->  @include('template.footer') 
 </body>
</html>