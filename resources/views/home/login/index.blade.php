<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>二手车交易市场登陆</title>
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
            <h1>登录</h1>
            @if(session('error'))
            <p style="color:red">{{session('error')}}</p>
            @endif
            <form action="{{url('/home/login')}}" method="post">
            {{csrf_field()}}
                <input type="text" name="user_name" class="username" placeholder="用户名">
                <input type="password" name="user_pass" class="password" placeholder="密码">
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

</html>


