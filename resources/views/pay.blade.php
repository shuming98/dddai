<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link type="text/css" rel="stylesheet" href="/css/common.css">
    <link type="text/css" rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body class="container index_niwo holiday_bg">
    @include('template.header')
      <form method="post" action="/pays/index.php" style="width:250px;margin:auto">
        {{csrf_field()}}
        <h1>订单平台</h1>
        <p><input type="hidden" name="v_mid" value="{{$v_mid}}"></p>
        <p>订单编号<input type=text name="v_oid" value="{{$v_oid}}"></p>
        <p>订单总金额<input type=text name="v_amount" value="{{$v_amount}}"></p>
        <p><input type="hidden" name="v_moneytype" value="{{$v_moneytype}}"></p>
        <p><input type="hidden" name="v_url" value="{{$v_url}}"></p>
        <p><input type="hidden" name="v_md5info" value="{{$v_md5info}}"></p>
        <input type="submit" class="btn btn-primary" value="立即支付">
    </form>
    @include('template.footer')
  </body>
</html>
