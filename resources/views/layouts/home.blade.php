<!DOCTYPE html>
<head _tracker='{"pagetype":"index"}' @yield('head')>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="renderer" content="webkit">
    <title>@yield('title')</title>
    <meta name="description" content="北京二手车,急卖二手车,直面个人买家 好车卖出好价,瓜子二手车均经过259项检测,标准无事故,优质个人二手车,14天可退1年质保,个人二手车买卖首选瓜子二手车直卖网!" />
    <meta http-equiv="P3P" content='CP="CAO PSA OUR"' />
    <meta name="baidu-site-verification" content="3r3nh4dkLA" />
    <meta name="360-site-verification" content="f045c917619b6b3dc82ad5f699a09474" />
    <meta name="google-site-verification" content="FQph3WEY6ZqNqVXCB5PT4_u8f-WjfF14l2OOdFiOEmg" />
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta name="sogou_site_verification" content="qY406sTreO"/>
    <meta name="shenma-site-verification" content="7b096264bff0cf1031a570c37abed00c_1476775946">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.guazi.com/favicon.ico" media="screen" />

<script>
    var logged = false;
</script>
<!-- 加载js/css-->
<script type="text/javascript" src="/jquery-easyui-1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="/home/js/guazi-a.js"></script>
<script type="text/javascript" src="/home/js/guazi-b.js"></script>
    <link rel="stylesheet" href="/home/css/guazibuy.css" type="text/css">
    <link rel="stylesheet" href="/home/css/guazibuy1.css" type="text/css">
    <link rel="stylesheet" href="/home/css/guazibuy2.css" type="text/css">
    <link rel="stylesheet" href="/home/css/guazibuy3.css" type="text/css">
    <link rel="stylesheet" href="/home/css/guazibuy4.css" type="text/css">
    <link rel="stylesheet" href="/home/css/guazibuy5.css" type="text/css">
    <link rel="stylesheet" href="/home/css/guazibuy6.css" type="text/css">
    <link rel="stylesheet" href="/home/css/guazibuy7.css" type="text/css">
    <link rel="stylesheet" href="/home/css/guazibuy8.css" type="text/css">
    <link rel="stylesheet" href="/home/css/guazibuy9.css" type="text/css">
    <link rel="stylesheet" href="/home/css/guazibuy10.css" type="text/css">
    <link rel="stylesheet" href="/home/css/guazibuy11.css" type="text/css">
    <link rel="stylesheet" href="/home/css/guazibuy12.css" type="text/css">
    <link rel="stylesheet" href="/home/css/guazibuy13.css" type="text/css">
    <link rel="stylesheet" href="/home/css/guazibuy14.css" type="text/css">
    <link rel="stylesheet" href="/home/css/guazibuy15.css" type="text/css">
    <link rel="stylesheet" href="/home/css/guazibuy16.css" type="text/css">
    <link rel="stylesheet" href="/home/css/guazibuy17.css" type="text/css">
    <link rel="stylesheet" href="/home/css/guazibuy18.css" type="text/css">
    <link rel="stylesheet" href="/home/css/guazibuy19.css" type="text/css">
</head>

@section('content')

    <div id="jstop" class="header-2">
        <div class="header">
            <h1>
                <a href="{{ url('/home/index') }}" title="瓜子二手车">瓜子二手车</a>
            </h1>

            <div class="city" id="city">
                <!-- 鼠标悬停 .city添加class名active -->
                <p class="city-curr">
                    北京<i></i>
                </p>
                <script type="text/javascript">
                    $('#city').hover(
                        function () {
                            $(this).addClass('active');
                        },
                        function () {
                            $(this).removeClass('active');
                        }
                    );
                </script>
                <div class="white-line"></div>
                <!--        class:all-city的作用是局部滚动不影响整体滚动-->
                <div class="city-box all-city">
                    <dl class="bdb-n">
                        <dt class="green-tit">周边</dt>
                        <dd>
                            <a data-gzlog="tracking_type=click&amp;eventid=0020060000000018&amp;select_city=hengshui" baidu_alog="pc_index_city&amp;click&amp;pc_index_around_city_c" href="/hengshui/" title="衡水二手车">衡水</a><a data-gzlog="tracking_type=click&amp;eventid=0020060000000018&amp;select_city=langfang" baidu_alog="pc_index_city&amp;click&amp;pc_index_around_city_c" href="/langfang/" title="廊坊二手车">廊坊</a>
                        </dd>
                    </dl>
                    <dl class="bdb-s">
                        <dt class="green-tit">热门</dt>
                        <dd>
                            <a baidu_alog="pc_index_city&amp;click&amp;pc_index_quanguo_c" data-gzlog="tracking_type=click&amp;eventid=0020060000000021" href="/www/" title="全国二手车">全国</a>
                            <a baidu_alog="pc_index_city&amp;click&amp;pc_index_hot_city_c" data-gzlog="tracking_type=click&amp;eventid=0020060000000019&amp;select_city=bj" class="on" href="/bj/" title="北京二手车">北京</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>A</dt>
                        <dd>
                            <a data-gzlog="tracking_type=click&amp;eventid=0020060000000017&amp;select_city=anqing" baidu_alog="pc_index_city&amp;click&amp;pc_index_all_city_c" href="/anqing/" title="安庆二手车">安庆</a>
                        </dd>
                    </dl>

                </div>
            </div>

            <div class="header-phone">
                <!--电话判断，当页面处于汽车金融则显示汽车金融电话  -->
                400-057-8600</div>

            <div class="uc js-uc js-uc-new" data-gzlog="tracking_type=click&amp;eventid=1015123400000003">
                <a href="{{ url('/home/login')}}" >登录</a>
                <a href="{{ url('/home/phoneregister')}}" >注册</a>
                <div class="uc-app" style="display:none">

                    <a href="/bj/userstore" class="js-loginElem1" data-gzlog="tracking_type=click&amp;eventid=1015123400000004">收藏车辆</a>
                    <a href="/bj/userreduce" class="js-loginElem2" data-gzlog="tracking_type=click&amp;eventid=1015123400000005">降价提醒</a>
                    <a href="/bj/userhistory" class="js-loginElem3" data-gzlog="tracking_type=click&amp;eventid=1015123400000006">浏览记录</a>
                    <a href="javascript:;" class="js-logout js-loginElem4" data-gzlog="tracking_type=click&amp;eventid=1015123400000007">退出</a>
                    <i></i>
                </div>
            </div>

            <div class="nav-list">
                <a class="fl " href="/home/ask" data-gzlog="tracking_type=click&amp;eventid=0010000000000012" title="瓜子问答">瓜子问答</a>
                <a class="fr " baidu_alog="pc_index_top_tab&amp;click&amp;pc_index_top_tab_carfina_c" href="http://jr.guazi.com/bj/?jr_from=homehead&amp;platform=pc" data-gzlog="tracking_type=click&amp;eventid=0010000000000011">瓜子金融</a>
                <a class="fl " baidu_alog="pc_index_top_tab&amp;click&amp;pc_index_top_tab_intro_c" href="/home/intro/" data-gzlog="tracking_type=click&amp;eventid=0010000000000010">瓜子服务</a>
                <a class="fl " baidu_alog="pc_index_top_tab&amp;click&amp;pc_index_top_tab_sell_c" href="/home/sell/?clueS=01" data-gzlog="tracking_type=click&amp;eventid=0010050000000009">我要卖车</a>
                <a class="fl " baidu_alog="pc_index_top_tab&amp;click&amp;pc_index_top_tab_buy_c" href="/home/buy/" data-gzlog="tracking_type=click&amp;eventid=0010000000000008">我要买车</a>
                <a class="fl active" baidu_alog="pc_index_top_tab&amp;click&amp;pc_index_top_tab_index_c" href="{{ url('/home/index') }}" data-gzlog="tracking_type=click&amp;eventid=0010000000000007">首页</a>
            </div>
        </div>
    </div>

@show
<!-- 底部  s -->
<div class="footer">
    <!--加载footer 信息部分 -->
    <div class="company-info clearfix">
        <div class="footer-logo"></div>
        <div class="phone-email">
            <p>
                咨询电话：<i>400-057-8600</i> <br>
                <span>（周一至周日 8:00-21:00）</span>
            </p>
            <p>售后服务专线：400-066-8780  </p>
        </div>
        <img src="https://sta.guazi.com/static/c2c/web/common/ewm-wx-2.png" alt="" class="gz-ewm">
        <p class="ewm-tit">关注微信</p>
        <img src="https://sta.guazi.com/static/c2c/web/common/ewm-app-2.png" alt="" class="gz-ewm">
        <p class="ewm-tit">下载APP</p>
        <div class="basic-info">
            <div class="info-link">
                <a rel="nofollow" href="/bj/aboutus/" target="_blank">关于瓜子</a>
                <a rel="nofollow" href="/bj/join/" target="_blank">加入我们</a>
                <a rel="nofollow" href="/bj/contact" target="_blank">联系我们</a>
                <a rel="nofollow" href="/bj/intro/" target="_blank">服务保障</a>
            </div>
            <p class="arc-info">Copyright 2017 www.guazi.com All Rights Reserved</p>
            <p class="arc-info">京ICP备15053955号  ICP证151071号 </p>
            <div class="protect clearfix">
                <a class="police" rel="nofollow" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020161">京公网安备11010802020161号</a>
            </div>
            <div class="protect protect-icon-xin315 clearfix">
                <a id='___szfw_logo___' href="https://credit.szfw.org/CX20170627038575010339.html" class="icon-xin" target="_blank"></a>
                <a id='___szfw_logo___1' href="https://credit.szfw.org/CX20170627038575571073.html" class="icon-315" target="_blank"></a>
            </div>
        </div>
    </div>
    <script type='text/javascript'>(function(){document.getElementById('___szfw_logo___').oncontextmenu = function(){return false;}})();</script>
    <script type='text/javascript'>(function(){document.getElementById('___szfw_logo___1').oncontextmenu = function(){return false;}})();</script>
    <!--seo 链接 -->
    <div class="friendly-link">
        <p class="link-tit">热门品牌：</p>
        <span class="open-box"></span>
        <span class="close-box" data-role="is_show_box"></span>
        <a href="/bj/bmw/" target="_blank">北京二手宝马</a>
        <a href="/bj/benz/" target="_blank">北京二手奔驰</a>
        <a href="/bj/audi/" target="_blank">北京二手奥迪</a>
        <a href="/bj/ford/" target="_blank">北京二手福特</a>
        <a href="/bj/hyundai/" target="_blank">北京二手现代</a>
        <a href="/bj/buick/" target="_blank">北京二手别克</a>
    </div>

    <div class="friendly-link">
        <p class="link-tit">热门车系：</p>
        <span class="open-box"></span>
        <span class="close-box" data-role="is_show_box"></span>
        <a href="/bj/suteng/" target="_blank">北京二手大众速腾</a>
        <a href="/bj/golf/" target="_blank">北京二手大众高尔夫</a>
        <a href="/bj/tuguan/" target="_blank">北京二手大众途观</a>
        <a href="/bj/passat/" target="_blank">北京二手大众帕萨特</a>
        <a href="/bj/dazhong-cc/" target="_blank">北京二手大众大众CC</a>
        <a href="/bj/baolai/" target="_blank">北京二手大众宝来</a>
    </div>
    <div class="friendly-link">
        <p class="link-tit">友情链接：</p>
        <span class="open-box"></span>
        <span class="close-box" data-role="is_show_box"></span>
        <a href="http://bj.ganji.com/ershouche/">赶集二手车</a>
        <a href="http://www.che127.com/beijing/">北京二手车</a>
        <a href="http://beijing.tianqi.com/15/">北京天气预报15天</a>
    </div>

    <div class="friendly-link">
        <p class="link-tit">热门城市：</p>
        <span class="open-box"></span>
        <span class="close-box" data-role="is_show_box"></span>
        <a href="/www/">全国二手车</a>
        <a href="/zz/">郑州二手车</a>
        <a href="/sh/">上海二手车</a>
        <a href="/sy/">沈阳二手车</a>
        <a href="/km/">昆明二手车</a>
        <a href="/">二手车</a>
    </div>

    <div class="friendly-link">
        <p class="link-tit">移动版：</p>
        <!--    <span class="open-box"></span>-->
        <!--    <span class="close-box" data-role="is_show_box"></span>-->
        <a href="http://m.guazi.com/bj/">瓜子二手车北京移动页</a>
    </div>

    <div class="friendly-link">
        <p class="link-tit">热门页面：</p>
        <span class="open-box"></span>
        <span class="close-box" data-role="is_show_box"></span>
        <a href="//www.guazi.com/www/buy/b1e1/">1万元二手车</a>
        <a href="//www.guazi.com/www/buy/b2e2/">2万左右二手车</a>
        <a href="//www.guazi.com/www/buy/p11/">3万的二手车</a>
        <a href="//www.guazi.com/www/buy/b4e4/">4万的二手车</a>
        <a href="//www.guazi.com/www/buy/p3/">5万以下二手车</a>
        <a href="/zq_interiorlink/">网站地图</a>
    </div>

    <!--公司信息-->
    <p style="text-align:center;line-height:20px;font-size:12px;color:#666; padding-top:20px;">
        车好多旧机动车经纪（北京）有限公司&emsp;&emsp;&emsp;
        北京市丰台区南四环中路260号北京新发地汽车交易市场旧车经营区B区178号&emsp;&emsp;&emsp;
        010-57317000
    </p>
</div>

<input type="hidden" class="hide_gich" value="">
<div style='display:none;' class='js-check-post-code' data-str='1c43aed7c7c0afaf57227c198cd1ec2e' data-time='1502593103'></div>
<!-- 底部  e -->
</body>
</html>
