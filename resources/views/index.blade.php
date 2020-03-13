<html>
 <head> 
  <meta content="text/html; charset=UTF-8" http-equiv="content-type" /> 
  <!--app-website:6.1--> 
  <meta charset="utf-8" /> 
  <title>点点贷，安全透明灵活的P2P网贷平台、网络投资、网络贷款、正规民间借贷公司</title> 
  <meta content="点点贷|网络理财|个人理财|投资理财|P2P理财|互联网金融|投资理财|债权转让|理财计划|嘉财有道|网络贷款|企业贷|商户贷|车贷|网商贷|网贷|小额贷款|薪金贷|POS贷|物业贷|卡易贷|贷款|贷款公司|房产贷款|汽车贷款|个人贷款|无抵押贷款|个人无抵押贷款" name="keywords" /> 
  <meta content="点点贷(www.dddai.com)是中国领先的互联网金融P2P网络借贷平台，为投资理财用户和贷款用户提供透明、安全、高效的互联网金融服务。投资理财用户可通过点点贷平台进行投标、加入嘉财有道理财计划、购买债权等方式进行投资获得安全的高收益；贷款用户可通过平台高效申请企业贷、商户贷、车贷、网商贷、网贷、薪金贷、POS贷、卡易贷、物业贷等小额贷款。" name="description" /> 
  <meta content="no-cache" http-equiv="pragma" /> 
  <meta content="no-cache" http-equiv="cache-control" /> 
  <meta content="0" http-equiv="expires" /> 
  <link type="text/css" rel="stylesheet" href="/css/common.css" /> 
  <link type="text/css" rel="stylesheet" href="/css/index.css" /> 
 </head> 
 <body class="index_niwo holiday_bg">
   @include('template.header') 
  <div class="niwdoawi_banner"> 
   <div class="img"> 
   </div> 
  </div> 
  <!--banner--> 
  <div class="index_main w1180 front"> 
   <div class="login_front"> 
    <p class="fs_24 t">安全、稳健、高收益</p> 
    <p class="fs_24 bold m">注册送10000元体验金</p> 
    <span id="static_banner_login"><a title="免费注册" rel="nofollow" href="{{url('register')}}" class="btn_orange">免费注册</a><a title="马上登录" rel="nofollow" class="orange" href="{{url('login')}}">马上登录</a></span> 
   </div> 
  </div> 
  <!--三大优势下部分--> 
  <div class="clearfix w1180 pt_20 index_main"> 
   <!--三大优势 s--> 
   <!--新手专享 e--> 
   <!--月统计 s--> 
   <!--三大优势 e--> 
   <!--新用户专享一栏 s--> 
   <!--新用户专享一栏 e--> 
   <!--广告 e--> 
   <div class="clearfix"></div> 
   <!--竞猜宝start--> 
   <!--竞猜宝end--> 
   <div class="clearfix"></div> 
   <!--广告 e--> 
   <div class="clearfix"> 
    <div class="clearfix fl fluid index_left"> 
     <!--列表2 s--> 
     <div class="clearfix mb_20 module pro_list holidy_main_no3"> 
      <!--l s--> 
      <div class="fl pro_img list_img3"> 
       <div class="text"> 
        <span class="fc_white fs_24 bold lh_32">最灵活<br />转让专区</span> 
       </div> 
       <div class="btn_box">
        <a href="javascript:void(0);">查看更多</a>
       </div> 
      </div> 
      <!--l e--> 
      <!--r s--> 
      <div class="fl pro_con"> 
       <!--1 s--> @foreach($pro as $v) 
       <div class="pro_bor"> 
        <ul class="clearfix pro_list_box"> 
         <li class="w1"> <p class="fc_9 mb_5">预期年化 </p> <p class="fc_orange airal"><em class="fs_28">{{$v->rate}}</em> <em class="fs_18">%</em> </p> </li> 
         <li class="w2"> <p class="fc_9 mb_5">期限</p> <p class="fc_6"><em class="fs_18">{{$v->hrange}}</em>个月</p> </li> 
         <li class="w3"> <p class="fc_9 mb_5">投资金额 </p> <p class="fc_6 airal fs_18">{{$v->recive/100}}</p> </li> 
         <li class="w4"> <span class="b_jingdu b_jd{{sprintf('%d',100*$v->recive/$v->money)}}">{{sprintf('%.2f',100*$v->recive/$v->money)}}%</span> </li> 
         <li class="w5"> <a class="btn btnSize_1 btn_orange" href="{{url('touzi',[$v->pid])}}">立即投标</a> </li> 
        </ul> 
       </div> 
      </div> @endforeach 
     </div> 
    </div> 
   </div> 
   <!--left end--> 
   <div class="clearfix fluid fl index_right"> 
    <!--新手起航s--> 
    <div class="module fl numTong numH1 ind_w280 holiday_r_no1 h238"> 
     <h3 class="fs_18 ind_tit">新手起航<a  href="javascript:void(0);" title="更多" class="blue more fr">前往</a><span class="fc_6 fr fs_14 mr_5">规范.专业.透明</span></h3> 
     <div class="shujutime clearfix">
      <span class="fl fc_9"><span class="f">2019年11月数据</span></span>
     </div> 
     <div class="shujuClass fc_9"> 
      <span class="NumlineCon Num1"><i>461,366</i>成功注册(人)</span> 
      <span class="NumlineCon Num2"><i>51,397</i>成功投标(人)</span> 
      <span class="NumlineCon Num1 mt_20"><i>6,598</i>实现借款(人)</span> 
      <span class="NumlineCon Num2 mt_20"><i>188,817</i>成交(万元) <em class="Num2con"> <span class="tkOut tkOut_b"> <i class="ico_all size15 img_icon s_wen"></i> 
         <div style="display: none;" class="tkIn indexTkIn hidden"> 
          <span class="jian" style="left:80px;"></span> 
          <span class="tknr indexTknr" style="font-size:12px; line-height:18px; text-indent:0;">当月成交金额包含债权金额和债权转让金额</span> 
         </div> </span> </em> </span> 
     </div> 
    </div> 
    <!--新手起航 e--> 
   </div> 
  </div> 
  <div class="clearfix fluid"> 
   <!--金额安全 s--> 
   <div class="module mb_20 ind_partner holidy_main_no4"> 
    <h3 class="ind_tit"><span class="fs_18">资金安全</span></h3> 
    <ul class="par_box"> 
     <!--<li class="first">
                        <span><img src="http://static3.niwodai.com/Public/Static/201404/images/ind_par6.png" alt="广发银行"></span>
                        <a href="javascript:void(0);" class="a6">
                        点点贷会员账户资金<br>由广发银行存管<br>
                        </a>
                    </li>--> 
     <li> <span><img width="185" height="84" alt="" src="/image/ind_par2.png" /></span> <a class="a6" href="javascript:void(0);"> 点点贷风险保证金托管<br /> 中国光大银行上海分行 </a> </li> 
     <li> <span><img width="185" height="84" alt="" src="/image/ind_par5.png" /></span> <a class="a6" href="javascript:void(0);"> 点点贷交易账户因盗用、盗刷的资金损失由PICC承保 </a> </li> 
     <li> <span><img width="185" height="84" alt="" src="/image/ind_par4.png" /></span> <a class="a6" href="javascript:void(0);"> 点点贷使用美国FICO<br /> 决策引擎建立评分卡系统 </a> </li> 
     <li> <span><img width="185" height="84" alt="公安部第三研究所" src="/image/ind_par1.png" /></span> <a class="a6" href="javascript:void(0);"> 点点贷信息安全通过<br /> 公安部等保二级测评 </a> </li> 
     <li> <span><img width="185" height="84" alt="" src="/image/ind_par3.png" /></span> <a class="a6" href="javascript:void(0);"> 点点贷违约客户数据对<br /> 接报送上海资信有限公司 </a> </li> 
    </ul> 
   </div> 
   <!--金额安全 e--> 
  </div>
  <!--content--> 
  <!--content--> @include('template.footer')  
 </body>
</html>