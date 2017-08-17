<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>注册账号</title>
		<meta name="keywords" content="网站模板,手机网站模板,手机登录页面,登录页面HTML,免费网站模板下载" />
		<meta name="description" content="JS代码网提供高质量手机网站模板下载" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="/home/assets/css/reset.css">
        <link rel="stylesheet" href="/home/assets/css/supersized.css">
        <link rel="stylesheet" href="/home/assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">
        
            <h1>注册</h1>
            <form action="{{url('/home/phoneregister')}}" method="post">
             {{ csrf_field() }}
                <input type="text" name="user_name" class="username" placeholder="用户名">
                <input type="password" name="user_pass" class="password" placeholder="密码">
                <input type="password" name="user_copass" class="password" placeholder="确认密码">
                <input type="text" name="user_phone" class="username" placeholder="手机号">
                <input type="text" name="code" class="sm" placeholder="验证码" style="width:150px;">
                <a href="javascript:;" onclick="sendCode();return false;">获取验证码</a>
                <button type="submit">提交</button>
                <div class="error"><span>+</span></div>
            </form>
            
        </div>
		
        <!-- Javascript -->
        <script src="/home/assets/js/jquery-1.8.2.min.js"></script>
        <script src="/home/assets/js/supersized.3.2.7.min.js"></script>
        <script src="/home/assets/js/supersized-init.js"></script>
        <script src="/home/assets/js/scripts.js"></script>

    </body>
    <script type="text/javascript">
      function sendCode(){
//          获取电话号码文本框的值
        var telphone =   $('input[name=user_phone]').val();
        // alert(telphone);
        $.get('/phoneregister',{'phone':telphone},function(data){
         // console.log(data);
//          返回的是Json 字符串需要解析成json对象
            var data = JSON.parse(data);
            if(data.status == 0){
                layer.msg('发送成功', {icon: 6});
            }else{

                layer.msg('发送失败', {icon: 5});
            }
        });
      }

    </script>


</html>


