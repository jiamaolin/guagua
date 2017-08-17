@extends('layouts.home')
@section('title','瓜子首页')
@section('content')

<body>
{{--视频--}}
<div class="index-top-video js-video active" data-play="0" style="display: block;">
    <div class="w1200">
        <div class="video-people"></div>
        <div class="video-play ">
            <video id="ado" class="js-play" autoplay="autoplay" controls="" data-setup="{}" width="826" height="465"><source class="js-play-source" type="video/mp4" src="https://image.guazistatic.com/pc_index_adv.mp4"></video>
        </div>
        <span class="video-close iconbg js-play-close"></span>
        <script>
//            alert($);
            $('.js-play-close').click(function(){
                $('.index-top-video').slideUp(1000);
//                触发暂停
                $('#ado').trigger('pause');
            });
        </script>
    </div>
</div>
<div class="index-header">
    <!-- header  s -->
    <input type="hidden" id="skipKindNew" value="0">
    <!--<input type="hidden" id="firstSubLogin" value="0">-->
    <input type="hidden" id="clueData" data-puid="" data-city-id="12">

        @parent




    <!-- 弹框蒙层  s -->
    <div class="pop-mask"></div>
    <!-- 弹框蒙层  e --><!-- 登录弹层  e -->

    <script>
        //公用头部登陆后跳转至个人中心时url中需要用到
        var domain = "bj";
        //意见反馈所需城市id
        var cityId = "12"
    </script>
    <!-- header  e -->

    <!-- 买车和卖车 s -->
    <div class="index-entry-buysell w1200">
        <!-- 买车 s -->
        <div class="entry-buycar fl">
            <div class="entry-title clearfix">
                <a href="/bj/buy/" class="fl" data-gzlog="tracking_type=click&amp;eventid=1010000000000021">我要买车<i class="icon-buysell"></i></a>

                <!-- input在focus状态下，最外层div添加class名active -->
                <div class="search js-search">
                    <div class="search-box suggestion_widget" data-default-count="9">
                        <input type="text" class="search-input js_search_input_index" placeholder="搜索您想要的车" data-role="keywordInput" name="keyword" autocomplete="off" data-domain="bj">
                        <button class="search-btn" data-gzlog="tracking_type=click&amp;eventid=0020070000000022"></button>
                        <input type="hidden" value="bj" name="hiddenCity">
                    </div>
                    <ul class="search-select" style="display: none;">
                        <li class="select-tit">热门推荐</li>
                        <li>大众</li>
                    </ul>
                </div>

            </div>
            <div class="buycar-brand clearfix">
                <a href="/bj/dazhong/" class="icon-dazhong" data-gzlog="tracking_type=click&amp;eventid=0050080000000024&amp;brand=dazhong">大众</a>
                <a href="/bj/bmw/" class="icon-bmw" data-gzlog="tracking_type=click&amp;eventid=0050080000000024&amp;brand=bmw">宝马</a>
                <a href="/bj/benz/" class="icon-benz" data-gzlog="tracking_type=click&amp;eventid=0050080000000024&amp;brand=benz">奔驰</a>
                <a href="/bj/audi/" class="icon-audi" data-gzlog="tracking_type=click&amp;eventid=0050080000000024&amp;brand=audi">奥迪</a>
                <a href="/bj/ford/" class="icon-ford" data-gzlog="tracking_type=click&amp;eventid=0050080000000024&amp;brand=ford">福特</a>
                <a href="/bj/hyundai/" class="icon-hyundai" data-gzlog="tracking_type=click&amp;eventid=0050080000000024&amp;brand=hyundai">现代</a>
                <a href="/bj/buick/" class="icon-buick" data-gzlog="tracking_type=click&amp;eventid=0050080000000024&amp;brand=buick">别克</a>
                <a href="/bj/toyota/" class="icon-toyota" data-gzlog="tracking_type=click&amp;eventid=0050080000000024&amp;brand=toyota">丰田</a>
                <a href="/bj/richan/" class="icon-richan" data-gzlog="tracking_type=click&amp;eventid=0050080000000024&amp;brand=richan">日产</a>
                <a href="/bj/buy/?fromindex=true" class="icon-buycar-more" data-gzlog="tracking_type=click&amp;eventid=0050080000000024&amp;brand=more"><i class="icon-buysell"></i>更多</a>
            </div>
            <div class="buycar-price">
                <a href="/bj/buy/p11/" data-gzlog="tracking_type=click&amp;eventid=0050100000000026&amp;price_index=11">3万以下</a>
                <a href="/bj/buy/p12/" data-gzlog="tracking_type=click&amp;eventid=0050100000000026&amp;price_index=12">3-5万</a>
                <a href="/bj/buy/p13/" data-gzlog="tracking_type=click&amp;eventid=0050100000000026&amp;price_index=13">5-7万</a>
                <a href="/bj/buy/p14/" data-gzlog="tracking_type=click&amp;eventid=0050100000000026&amp;price_index=14">7-9万</a>
                <a href="/bj/buy/p15/" data-gzlog="tracking_type=click&amp;eventid=0050100000000026&amp;price_index=15">9-12万</a>
                <a href="/bj/buy/p16/" data-gzlog="tracking_type=click&amp;eventid=0050100000000026&amp;price_index=16">12-16万</a>
                <a href="/bj/buy/p17/" data-gzlog="tracking_type=click&amp;eventid=0050100000000026&amp;price_index=17">16-20万</a>
                <a href="/bj/buy/p18/" data-gzlog="tracking_type=click&amp;eventid=0050100000000026&amp;price_index=18">20万以上</a>
            </div>
            <div class="buycar-price">
                <a href="/bj/buy/z16/" data-gzlog="tracking_type=click&amp;eventid=0050110000000027&amp;chexing_index=z16">超值</a>
                <a href="/bj/buy/a3/" data-gzlog="tracking_type=click&amp;eventid=0050110000000027&amp;chexing_index=a3">急售</a>
                <a href="/bj/buy/r8/" data-gzlog="tracking_type=click&amp;eventid=0050110000000027&amp;chexing_index=r8">练手车</a>
                <a href="/bj/buy/c4/" data-gzlog="tracking_type=click&amp;eventid=0050110000000027&amp;chexing_index=c4">准新车</a>
                <a href="/bj/buy/r18/" data-gzlog="tracking_type=click&amp;eventid=0050110000000027&amp;chexing_index=r18">保卖车</a>
                <a href="/bj/buy/k6/" data-gzlog="tracking_type=click&amp;eventid=0050110000000027&amp;chexing_index=k6">可迁全国</a>
                <a href="/bj/buy/h2/" data-gzlog="tracking_type=click&amp;eventid=0050110000000027&amp;chexing_index=h2">SUV</a>
                <a href="/bj/buy/h3/" data-gzlog="tracking_type=click&amp;eventid=0050110000000027&amp;chexing_index=h3">MPV</a>
                <a href="/bj/buy/h5/" data-gzlog="tracking_type=click&amp;eventid=0050110000000027&amp;chexing_index=h5">两厢轿车</a>
                <a href="/bj/buy/h6/" data-gzlog="tracking_type=click&amp;eventid=0050110000000027&amp;chexing_index=h6">三厢轿车</a>
            </div>
        </div>
        <!-- 买车 e -->
        <!-- 卖车 s -->
        <div class="entry-sellcar fr">
            <div class="entry-title clearfix">
                <a href="/bj/sell/" class="fl" data-gzlog="tracking_type=click&amp;eventid=1010000000000022">我要卖车<i class="icon-buysell"></i></a>
            </div>
            <div class="sellcar-box">
                <div class="sellcar-show">
                    <p class="amount">已有<span>13311038</span>人提交申请</p>
                    <p class="average">平均<span>7天</span>卖出</p>
                </div>
                <!-- 文本框输入错误时加active -->
                <div class="sellcar-phone">
                    <input class="phone-input js-phone-input js-phone1" maxlength="11" placeholder="请输入您的手机号">
                    <p class="phone-error js-phone-error"></p>
                    <button class="phone-btn-sell js-phone-btn" position="4" data-clue-entry="03" data-evenid="0210050000000013" data-gzlog="tracking_type=click&amp;eventid=0210050000000013">我要卖车</button>
                    <button class="phone-btn-eval js-subAssess" data-gzlog="tracking_type=click&amp;eventid=1010000000000012">免费估价</button>
                </div>
            </div>
        </div>
        <!-- 卖车 e -->
    </div>    <!-- 买车和卖车 e -->
</div>
{{--广告位--}}
<div class="index-operate w1200">
    <a class="operate-img" target="_blank" href="https://xinche.guazi.com/www/fyc" data-gzlog="tracking_type=click&amp;eventid=1010000000000035">
        <img src="https://image.guazistatic.com/gz01170803/19/36/e9f281cf27a8110afd526c22a3085d80.png@base@tag=imgScale&amp;w=400&amp;h=180&amp;q=88" alt="瓜子分期">
    </a>
    <a class="operate-img" target="_blank" href="https://www.guazi.com/bj/buy/r18/" data-gzlog="tracking_type=click&amp;eventid=1010000000000039">
        <img src="https://image.guazistatic.com/gz01170808/18/07/7c0c4ac4053218738686283d41a822ea.png@base@tag=imgScale&amp;w=400&amp;h=180&amp;q=88" alt="瓜子分期">
    </a>
    <a class="operate-img" target="_blank" href="https://xinche.guazi.com/www/fyc/brifinfo/wNC" data-gzlog="tracking_type=click&amp;eventid=1010000000000036">
        <img src="https://image.guazistatic.com/gz01170803/19/33/0f49df95df0b7d3fc70fc7797afa8d2d.png@base@tag=imgScale&amp;w=400&amp;h=180&amp;q=88" alt="瓜子分期">
    </a>
</div>
{{--推荐位--}}
<div class="index-finance w1200 active">
    <a href="http://jr.guazi.com/bj/?jr_from=homebanner_new&amp;platfrom=pc" class="finance-apply" data-gzlog="tracking_type=click&amp;eventid=1010000000000013">
        <div class="apply-img iconbg"></div>
        <ul class="apply-text clearfix">
            <li><span>-</span>低门槛</li>
            <li><span>-</span>低首付</li>
            <li><span>-</span>审批快</li>
            <li><span>-</span>通过率高</li>
        </ul>
        <button class="apply-btn">立即申请</button>
    </a>
    <a href="/bj/buy/p3r19/?jr_from=homebanner_left&amp;platform=pc" class="finance-item" data-gzlog="tracking_type=click&amp;eventid=1010000000000005">
        <p class="fitem-img-day"></p>
        <p class="fitem-name">日供十元贷回家</p>
        <p>
            <span class="fitem-price">5万以内</span>
            <span class="fitem-tag">练手车</span>
        </p>
    </a>
    <a href="/bj/buy/p4r19/?jr_from=homebanner_mid&amp;platform=pc" class="finance-item" data-gzlog="tracking_type=click&amp;eventid=1010000000000006">
        <p class="fitem-img-month"></p>
        <p class="fitem-name">千元月供买好车</p>
        <p>
            <span class="fitem-price">5-10万</span>
            <span class="fitem-tag">中产车</span>
        </p>
    </a>
    <a href="/bj/buy/p20-99r19/?jr_from=homebanner_right&amp;platform=pc" class="finance-item finance-item-last" data-gzlog="tracking_type=click&amp;eventid=1010000000000007">
        <p class="fitem-img-first"></p>
        <p class="fitem-name">六万首付开豪车</p>
        <p>
            <span class="fitem-price">20万以上</span>
            <span class="fitem-tag">高端车</span>
        </p>
    </a>
</div>
{{--轮播图--}}
<div class="index-buysell-step">
        <div class="step-tab">
            <span class="active js-buyProcedure" data-role="buy_car" data-gzlog="tracking_type=click&amp;eventid=1010000000000014&amp;title=buy">买车流程</span>
            <em>|</em>
            <span class="js-sellProcedure" data-role="sale_car" data-gzlog="tracking_type=click&amp;eventid=1010000000000015&amp;title=sell">卖车流程</span>
        </div>
        <div class="slide-mask"></div>
        <div class="slide-area">
            <ul class="slide-list">
                <li style="opacity: 0; background: transparent url(&quot;//sta.guazistatic.com/static/c2c/web/index/buy-step-order.jpg&quot;) no-repeat scroll center top; z-index: 10; left: -200px;"></li>
                <li style="opacity: 1; left: 0px; z-index: 1; background: transparent url(&quot;//sta.guazistatic.com/static/c2c/web/index/buy-step-see.jpg&quot;) no-repeat scroll center top;"></li>
                <li style="opacity: 0; left: -200px; z-index: 10; background: transparent url(&quot;//sta.guazistatic.com/static/c2c/web/index/buy-step-contract.jpg&quot;) no-repeat scroll center top;"></li>
                <li style="opacity: 0; left: 200px; z-index: 10; background: transparent url(&quot;//sta.guazistatic.com/static/c2c/web/index/buy-step-deal.jpg&quot;) no-repeat scroll center top;"></li>
                <li style="opacity:0;"></li>
            </ul>
        </div>
        <!-- 买车流程 s -->
        <div class="step-slide active buy-car-procedure">
            <ul class="slide-items buy" data-role="buy_car_step">
                <!-- 加active，控制slide-title slide-text显示，及slide-icon里icon和文字变绿  -->
                <li class="item-buy-order" slide-to="0" data-url="//sta.guazistatic.com/static/c2c/web/index/buy-step-order.jpg" data-gzlog="tracking_type=click&amp;eventid=1010000000000014&amp;title=order">
                    <p class="slide-title">预约看车</p>
                    <p class="slide-text">拨打400-023-1529或在线预约</p>
                    <p class="slide-icon icon-buy-order"><span class="icon-step"></span>预约看车<i class="icon-step"></i></p>
                </li>
                <li class="item-buy-see active" slide-to="1" data-url="//sta.guazistatic.com/static/c2c/web/index/buy-step-see.jpg" data-gzlog="tracking_type=click&amp;eventid=1010000000000014&amp;title=see">
                    <p class="slide-title">专人带看</p>
                    <p class="slide-text">瓜子将安排售车顾问陪同您看车</p>
                    <p class="slide-icon icon-buy-see"><span class="icon-step"></span>专人带看<i class="icon-step"></i></p>
                </li>
                <li class="item-buy-contract" slide-to="2" data-url="//sta.guazistatic.com/static/c2c/web/index/buy-step-contract.jpg" data-gzlog="tracking_type=click&amp;eventid=1010000000000014&amp;title=contract">
                    <p class="slide-title">签署合同</p>
                    <p class="slide-text">签署三方合同（买家、卖家、瓜子二手车），支付定金</p>
                    <p class="slide-icon icon-buy-contract"><span class="icon-step"></span>签署合同<i class="icon-step"></i></p>
                </li>
                <li class="item-buy-deal" slide-to="3" data-url="//sta.guazistatic.com/static/c2c/web/index/buy-step-deal.jpg" data-gzlog="tracking_type=click&amp;eventid=1010000000000014&amp;title=deal">
                    <p class="slide-title">交易过户</p>
                    <p class="slide-text">销售顾问陪同过户，支付车款，好车开回家</p>
                    <p class="slide-icon icon-buy-deal"><span class="icon-step"></span>交易过户<i class="icon-step"></i></p>
                </li>
            </ul>
        </div>
        <!-- 买车流程 s -->
        <!-- 卖车流程 s -->
        <div class="step-slide sale-car-procedure">
            <ul class="slide-items sale" data-role="sale_car_step">
                <!-- 加active，控制slide-title slide-text显示及slide-icon里icon和文字变绿  -->
                <li class="item-sell-info active" slide-to="0" data-url="//sta.guazistatic.com/static/c2c/web/index/sell-step-info.jpg" data-gzlog="tracking_type=click&amp;eventid=1010000000000015&amp;title=info">
                    <p class="slide-title">在线预约</p>
                    <p class="slide-text">评估师免费上门检测</p>
                    <p class="slide-icon icon-sell-info"><span class="icon-step"></span>在线预约<i class="icon-step"></i></p>
                </li>
                <li class="item-sell-service" slide-to="1" data-url="//sta.guazistatic.com/static/c2c/web/index/sell-step-service.jpg" data-gzlog="tracking_type=click&amp;eventid=1010000000000015&amp;title=service">
                    <p class="slide-title">全网代售</p>
                    <p class="slide-text">海量买家快速售出</p>
                    <p class="slide-icon icon-sell-service"><span class="icon-step"></span>全网代售<i class="icon-step"></i></p>
                </li>
                <li class="item-sell-see" slide-to="2" data-url="//sta.guazistatic.com/static/c2c/web/index/sell-step-see.jpg" data-gzlog="tracking_type=click&amp;eventid=1010000000000015&amp;title=see">
                    <p class="slide-title">三方约看</p>
                    <p class="slide-text">平均7日成交</p>
                    <p class="slide-icon icon-sell-see"><span class="icon-step"></span>三方约看<i class="icon-step"></i></p>
                </li>
                <li class="item-sell-deal" slide-to="3" data-url="//sta.guazistatic.com/static/c2c/web/index/sell-step-deal.jpg" data-gzlog="tracking_type=click&amp;eventid=1010000000000015&amp;title=deal">
                    <p class="slide-title">签约过户</p>
                    <p class="slide-text">省心省时，全程陪同</p>
                    <p class="slide-icon icon-sell-deal"><span class="icon-step"></span>签约过户<i class="icon-step"></i></p>
                </li>
            </ul>
        </div>
        <!-- 卖车流程 s -->
    </div>
{{--标签位--}}
<div class="w1200 js-psotlist">
    <ul class="index-carlist">
        <li class="js-choosecar active" kind="js-rec" data-log="1010000000000024" show-flag="1">
            <span>猜您喜欢</span>
        </li>
        <li kind="js-baomai" data-log="1010000000000032" class="js-choosecar" show-flag="0">
            <span>保卖车</span>
        </li>
        <li kind="js-new" data-log="1010000000000025" class="js-choosecar" show-flag="0">
            <span>最新上架</span>
        </li>
        <li kind="js-jiangjia" data-log="1010000000000026" class="js-choosecar" show-flag="0">
            <span>降价急售</span>
        </li>
        <li kind="js-zhunxin" data-log="1010000000000027" class="js-choosecar" show-flag="0">
            <span>准新车</span>
        </li>
        <li kind="js-lianshou" data-log="1010000000000028" class="js-choosecar" show-flag="0">
            <span>练手车</span>
        </li>
        <li kind="js-suv" data-log="1010000000000029" class="js-choosecar" show-flag="0">
            <span>SUV</span>
        </li>
    </ul>
    <!-- 猜你喜欢 -->
    <div class="index-carlist-box js-rec active">
        <ul class="carlist clearfix">
            <li>
                <a href="/bj/68ce3930f46ab726x.htm#fr_page=index&amp;fr_pos=rec&amp;fr_no=0" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080310000000030&amp;carid=15146261@1">
                    <img src="https://image1.guazistatic.com/qn170727181152049800cff0b525aa62bae4527f03276d.jpg?imageView2/1/w/287/h/192/q/88">
                    <div class="t">起亚智跑 2014款 2.0L 自动两驱版GLS</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2014年<span class="icon-pad">|</span>5.3万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>11.30<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><i class="i-red">急售</i><em class="line-through">20.90万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-sale">急降<br>
                        <span>3000</span>元                        </em>

                </a>
            </li>
            <input value="15146261@1_15716977@2_15712548@3_15614145@4_" class="data-js-rec" show-log="1010000000000024" data-carshow="1" id="car-show" type="hidden">
        </ul>
        <div class="index-carmore">
            <a data-gzlog="tracking_type=click&amp;eventid=0080310000000031" href="/bj/buy/">更多猜您喜欢<i class="iconbg"></i></a></div>
    </div>
    <!--  瓜子保卖车 -->
    <div class="index-carlist-box js-baomai ">
        <ul class="carlist clearfix">
            <li>
                <a href="/bj/ef4106a276d8f449x.htm#fr_page=index&amp;fr_pos=baomai&amp;fr_no=0" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=1010000000000033&amp;carid=14540794@1">
                    <img data-src="https://image1.guazistatic.com/qn1707131017488d3ea2c3aeaa39d3184caf77fcbfffcb.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">Jeep指南者 2014款 2.4L 四驱蛇行珍藏版(进口)</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2014年<span class="icon-pad">|</span>6.2万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>13.90<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><i class="i-red">急售</i><i class="i-blue">保卖车</i><em class="line-through">28.10万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-sale">急降<br>
                        <span>2600</span>元                        </em>

                </a>
            </li>

            <input value="14540794@1_15813484@2_15863314@3_15799852@4_15836787@5_15837524@6_15835740@7_15776461@8_13841090@9_15089360@10_15774403@11_14211223@12_" class="data-js-baomai" show-log="1010000000000032" data-carshow="0" type="hidden">
        </ul>
        <div class="index-carmore">
            <a data-gzlog="tracking_type=click&amp;eventid=1010000000000034" href="/bj/buy/r18/">更多保卖车<i class="iconbg"></i></a></div>
    </div>
    <!-- 最新上架 -->
    <div class="index-carlist-box js-new ">
        <ul class="carlist clearfix">
            <li>
                <a href="/bj/49e83db8ac1efcc2x.htm#fr_page=index&amp;fr_pos=new&amp;fr_no=0" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080140000000032&amp;carid=15843086@1">
                    <img data-src="https://image1.guazistatic.com/qn1708142059026b8c5826cf7f0883735df53e60898400.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">福田蒙派克E 2016款 2.0L快运版 4G634G63</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2017年<span class="icon-pad">|</span>1.4万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>6.40<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><i class="i-green">准新车</i><em class="line-through">8.70万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-new">新上架</em>
                </a>
            </li>
            <li>
                <a href="/bj/5750ac19e709cbf7x.htm#fr_page=index&amp;fr_pos=new&amp;fr_no=1" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080140000000032&amp;carid=15850798@2">
                    <img data-src="https://image1.guazistatic.com/qn1708142057292e080ae08cddd2aafcf6d644b41f4d55.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">长城C50 2012款 1.5T 手动时尚型</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2012年<span class="icon-pad">|</span>5.4万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>3.50<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><em class="line-through">8.60万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-new">新上架</em>
                    <em class="transfer-city">保定过户</em>
                </a>
            </li>
            <li>
                <a href="/bj/6bdd5e16a5e05a44x.htm#fr_page=index&amp;fr_pos=new&amp;fr_no=2" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080140000000032&amp;carid=15842673@3">
                    <img data-src="https://image1.guazistatic.com/qn1708142025221893b8dc37de59a4beb5f94b00e47198.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">中华H330 2013款 1.5L 手动豪华型</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2013年<span class="icon-pad">|</span>3.3万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>4.50<span>万</span></p>
                        <!-- 标签 -->
                        <em class="line-through">7.80万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-new">新上架</em>

                </a>
            </li>
            <li>
                <a href="/bj/874ce07d7d43049ax.htm#fr_page=index&amp;fr_pos=new&amp;fr_no=3" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080140000000032&amp;carid=15871060@4">
                    <img data-src="https://image1.guazistatic.com/qn170814202246a83df6dac353ec979b4c98258b336a0f.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">大众朗逸 2013款 改款经典 1.6L 自动舒适版</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2013年<span class="icon-pad">|</span>2.5万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>9.50<span>万</span></p>
                        <!-- 标签 -->
                        <em class="line-through">15.00万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-new">新上架</em>

                </a>
            </li>
            <li>
                <a href="/bj/26207dd25d13d857x.htm#fr_page=index&amp;fr_pos=new&amp;fr_no=4" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080140000000032&amp;carid=15809764@5">
                    <img data-src="https://image1.guazistatic.com/qn1708142023413f429f733e186ed7f0087ba7330c1e9c.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">铃木启悦 2015款 1.6L 手动乐享型</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2016年<span class="icon-pad">|</span>3.9万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>6.50<span>万</span></p>
                        <!-- 标签 -->
                        <em class="line-through">9.90万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-new">新上架</em>
                    <em class="transfer-city">邯郸过户</em>
                </a>
            </li>
            <li>
                <a href="/bj/6a7690615a2a534dx.htm#fr_page=index&amp;fr_pos=new&amp;fr_no=5" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080140000000032&amp;carid=15864126@6">
                    <img data-src="https://image1.guazistatic.com/qn1708142021071f75f647c25978b592021d05617e0769.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">福特蒙迪欧 2013款 2.0L GTDi200豪华型</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2014年<span class="icon-pad">|</span>2.3万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>14.60<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><em class="line-through">24.20万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-new">新上架</em>

                </a>
            </li>
            <li>
                <a href="/bj/738f7595662522c3x.htm#fr_page=index&amp;fr_pos=new&amp;fr_no=6" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080140000000032&amp;carid=15866119@7">
                    <img data-src="https://image1.guazistatic.com/qn170814201833676c6a04ece33c7f0a8e586bf2d473bd.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">福特蒙迪欧 2013款 2.0L GTDi240豪华运动型</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2013年<span class="icon-pad">|</span>4.7万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>15.00<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><em class="line-through">26.40万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-new">新上架</em>

                </a>
            </li>
            <li>
                <a href="/bj/f0a8c962f855f1d2x.htm#fr_page=index&amp;fr_pos=new&amp;fr_no=7" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080140000000032&amp;carid=15842666@8">
                    <img data-src="https://image1.guazistatic.com/qn170814201621b26a118d2f25692efc76088964a60841.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">长安逸动 2015款 1.6L 手动豪华型 国V</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2016年<span class="icon-pad">|</span>4.8万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>6.50<span>万</span></p>
                        <!-- 标签 -->
                        <em class="line-through">8.80万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-new">新上架</em>
                    <em class="transfer-city">廊坊过户</em>
                </a>
            </li>
            <li>
                <a href="/bj/1dcfdcc1906013dax.htm#fr_page=index&amp;fr_pos=new&amp;fr_no=8" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080140000000032&amp;carid=15859397@9">
                    <img data-src="https://image1.guazistatic.com/qn170814201552195d3c68c7da00c7df16e13552516bcd.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">比亚迪F0 2012款 1.0L 铉酷型</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2012年<span class="icon-pad">|</span>4.7万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>1.59<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><em class="line-through">4.00万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-new">新上架</em>
                    <em class="transfer-city">张家口过户</em>
                </a>
            </li>
            <li>
                <a href="/bj/fbb0529984749f5cx.htm#fr_page=index&amp;fr_pos=new&amp;fr_no=9" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080140000000032&amp;carid=15862032@10">
                    <img data-src="https://image1.guazistatic.com/qn17081420154665b5159ee9f1a3c9685e23ce7db54472.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">大众高尔夫 2011款 1.6 自动时尚型</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2011年<span class="icon-pad">|</span>3.4万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>7.50<span>万</span></p>
                        <!-- 标签 -->
                        <em class="line-through">14.40万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-new">新上架</em>

                </a>
            </li>
            <li>
                <a href="/bj/65e3b0f225fe4252x.htm#fr_page=index&amp;fr_pos=new&amp;fr_no=10" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080140000000032&amp;carid=15800444@11">
                    <img data-src="https://image1.guazistatic.com/qn170814201330203a644be391f73f78cf7856d8b3e5c6.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">宝马X1 2012款 sDrive18i 豪华型</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2012年<span class="icon-pad">|</span>5.1万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>16.00<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><em class="line-through">34.60万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-new">新上架</em>

                </a>
            </li>
            <li>
                <a href="/bj/6f1f8e5243d4146ax.htm#fr_page=index&amp;fr_pos=new&amp;fr_no=11" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080140000000032&amp;carid=15616456@12">
                    <img data-src="https://image1.guazistatic.com/qn1708142013535ce4325b9137cfbd62d26d8ac5f832d6.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">现代悦动 2008款 1.6L MT GLS</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2009年<span class="icon-pad">|</span>10.5万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>3.30<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><em class="line-through">11.90万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-new">新上架</em>

                </a>
            </li>
            <input value="15843086@1_15850798@2_15842673@3_15871060@4_15809764@5_15864126@6_15866119@7_15842666@8_15859397@9_15862032@10_15800444@11_15616456@12_" class="data-js-new" show-log="1010000000000025" data-carshow="0" type="hidden">
        </ul>
        <div class="index-carmore">
            <a data-gzlog="tracking_type=click&amp;eventid=0080140000000033" href="/bj/buy/i7/">更多最新上架<i class="iconbg"></i></a></div>
    </div>
    <!-- 降价急售 -->
    <div class="index-carlist-box js-jiangjia ">
        <ul class="carlist clearfix">
            <li>
                <a href="/bj/ef4106a276d8f449x.htm#fr_page=index&amp;fr_pos=jiangjia&amp;fr_no=0" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080150000000156&amp;carid=14540794@1">
                    <img data-src="https://image1.guazistatic.com/qn1707131017488d3ea2c3aeaa39d3184caf77fcbfffcb.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">Jeep指南者 2014款 2.4L 四驱蛇行珍藏版(进口)</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2014年<span class="icon-pad">|</span>6.2万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>13.90<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><i class="i-red">急售</i><i class="i-blue">保卖车</i><em class="line-through">28.10万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-sale">急降<br>
                        <span>2600</span>元                        </em>

                </a>
            </li>

            <input value="14540794@1_15590136@2_15812959@3_14847158@4_14567614@5_15824911@6_14834560@7_15525534@8_15802216@9_14333236@10_14710799@11_15511654@12_" class="data-js-jiangjia" show-log="1010000000000026" data-carshow="0" type="hidden">
        </ul>
        <div class="index-carmore">
            <a data-gzlog="tracking_type=click&amp;eventid=0080150000000035" href="/bj/buy/a3/">更多降价急售<i class="iconbg"></i></a></div>
    </div>
    <!-- 准新车 -->
    <div class="index-carlist-box js-zhunxin ">
        <ul class="carlist clearfix">
            <li>
                <a href="/bj/67c10adfbe3a4d49x.htm#fr_page=index&amp;fr_pos=zhunxin&amp;fr_no=0" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080320000000036&amp;carid=15813484@1">
                    <img data-src="https://image1.guazistatic.com/qn170814180951822f78e7fb96ea48cb5d3101a71e76f2.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">别克GL8 2014款 2.4L 行政版</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2016年<span class="icon-pad">|</span>1.8万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>18.10<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><i class="i-green">准新车</i><i class="i-blue">保卖车</i><em class="line-through">26.90万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-new">新上架</em>

                </a>
            </li>
            <li>
                <a href="/bj/6b80a4c768df8a18x.htm#fr_page=index&amp;fr_pos=zhunxin&amp;fr_no=1" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080320000000036&amp;carid=15863314@2">
                    <img data-src="https://image1.guazistatic.com/qn17081418204731d5f48c16c46b020228d3c6c3ff2742.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">奥迪Q5 2016款 40 TFSI 技术型</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2016年<span class="icon-pad">|</span>2.5万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>32.00<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><i class="i-green">准新车</i><i class="i-blue">保卖车</i><em class="line-through">46.40万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-new">新上架</em>

                </a>
            </li>
            <li>
                <a href="/bj/11d4778696446727x.htm#fr_page=index&amp;fr_pos=zhunxin&amp;fr_no=2" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080320000000036&amp;carid=15511654@3">
                    <img data-src="https://image1.guazistatic.com/qn170807115615feb3ed6569f588f45eaceb4657d8c6a0.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">奔驰E级 2015款 E 400 L 运动豪华型 4MATIC</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2016年<span class="icon-pad">|</span>1.8万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>50.50<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><i class="i-red">急售</i><i class="i-green">准新车</i><em class="line-through">86.60万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-sale">急降<br>
                        <span>1</span>万                        </em>

                </a>
            </li>
            <li>
                <a href="/bj/a617795bb83fe4bdx.htm#fr_page=index&amp;fr_pos=zhunxin&amp;fr_no=3" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080320000000036&amp;carid=15059646@4">
                    <img data-src="https://image1.guazistatic.com/qn1707251114508da7b3c1b606e6c225a61f1bb86be5f2.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">宝马5系 2014款 528Li 领先型</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2016年<span class="icon-pad">|</span>2.7万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>40.95<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-red">急售</i><i class="i-green">准新车</i><em class="line-through">59.80万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-sale">急降<br>
                        <span>5500</span>元                        </em>

                </a>
            </li>
            <li>
                <a href="/bj/49e83db8ac1efcc2x.htm#fr_page=index&amp;fr_pos=zhunxin&amp;fr_no=4" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080320000000036&amp;carid=15843086@5">
                    <img data-src="https://image1.guazistatic.com/qn1708142059026b8c5826cf7f0883735df53e60898400.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">福田蒙派克E 2016款 2.0L快运版 4G634G63</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2017年<span class="icon-pad">|</span>1.4万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>6.40<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><i class="i-green">准新车</i><em class="line-through">8.70万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-new">新上架</em>

                </a>
            </li>
            <li>
                <a href="/bj/12dbec5c820b86d3x.htm#fr_page=index&amp;fr_pos=zhunxin&amp;fr_no=5" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080320000000036&amp;carid=15563256@6">
                    <img data-src="https://image1.guazistatic.com/qn17080620135281259fa5d8d83d6e76a23359653d8f14.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">奔驰AMG GT 2015款 AMG GT S</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2017年<span class="icon-pad">|</span>1.0万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>160.00<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-red">急售</i><em class="line-through">183.20万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-sale">急降<br>
                        <span>10</span>万                        </em>

                </a>
            </li>
            <li>
                <a href="/bj/060eb832d2308795x.htm#fr_page=index&amp;fr_pos=zhunxin&amp;fr_no=6" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080320000000036&amp;carid=15592841@7">
                    <img data-src="https://image1.guazistatic.com/qn170807155045163ea7750f8400b918053418ca4a0c67.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">北汽新能源EV系列 2016款 EV160 轻快版</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2016年<span class="icon-pad">|</span>0.4万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>6.50<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><i class="i-green">准新车</i><em class="line-through">19.30万</em>                    </div>
                    <!-- 上侧标签 -->

                </a>
            </li>
            <li>
                <a href="/bj/6f7724b62a9eeb76x.htm#fr_page=index&amp;fr_pos=zhunxin&amp;fr_no=7" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080320000000036&amp;carid=15433208@8">
                    <img data-src="https://image1.guazistatic.com/qn170804162221afe3f76877846ef9279e0abcf5456193.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">斯柯达明锐 2016款 TSI280 DSG智行版</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2016年<span class="icon-pad">|</span>2.9万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>11.60<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><i class="i-red">急售</i><i class="i-green">准新车</i><em class="line-through">18.10万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-sale">急降<br>
                        <span>2000</span>元                        </em>

                </a>
            </li>
            <li>
                <a href="/bj/344c940d315388ccx.htm#fr_page=index&amp;fr_pos=zhunxin&amp;fr_no=8" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080320000000036&amp;carid=15614836@9">
                    <img data-src="https://image1.guazistatic.com/qn170808095201a4f90c2544ef210869d0e2fa253332ca.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">大众CC 2015款 2.0TSI 至尊型</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2016年<span class="icon-pad">|</span>2.0万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>23.60<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><i class="i-red">急售</i><i class="i-green">准新车</i><em class="line-through">33.00万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-sale">急降<br>
                        <span>9000</span>元                        </em>

                </a>
            </li>
            <li>
                <a href="/bj/825b032e90a99996x.htm#fr_page=index&amp;fr_pos=zhunxin&amp;fr_no=9" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080320000000036&amp;carid=15703922@10">
                    <img data-src="https://image1.guazistatic.com/qn1708091644553d2234f3d47c38ff4b51d38c8a0c0151.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">东风风行风行CM7 2016款 2.0T 手动尊享型</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2016年<span class="icon-pad">|</span>1.8万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>12.00<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-green">准新车</i><em class="line-through">17.40万</em>                    </div>
                    <!-- 上侧标签 -->

                </a>
            </li>
            <li>
                <a href="/bj/2094cf656607cecdx.htm#fr_page=index&amp;fr_pos=zhunxin&amp;fr_no=10" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080320000000036&amp;carid=15860935@11">
                    <img data-src="https://image1.guazistatic.com/qn170814152138b080c9226baac0cff51dea5ea4fa38f9.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">丰田凯美瑞 2016款 2.5G 十周年纪念豪华导航版</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2017年<span class="icon-pad">|</span>1.3万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>19.00<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-green">准新车</i><em class="line-through">23.90万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-new">新上架</em>

                </a>
            </li>
            <li>
                <a href="/bj/22269adf587c2430x.htm#fr_page=index&amp;fr_pos=zhunxin&amp;fr_no=11" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080320000000036&amp;carid=15265624@12">
                    <img data-src="https://image1.guazistatic.com/qn17073017295601c4ad0b6d3a89d8e6cfa40c5b70b9bb.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">奔驰E级 2016款 E 300 L 运动时尚型</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2017年<span class="icon-pad">|</span>0.4万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>48.50<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-red">急售</i><i class="i-green">准新车</i><em class="line-through">51.50万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-sale">急降<br>
                        <span>3000</span>元                        </em>

                </a>
            </li>
            <input value="15813484@1_15863314@2_15511654@3_15059646@4_15843086@5_15563256@6_15592841@7_15433208@8_15614836@9_15703922@10_15860935@11_15265624@12_" class="data-js-zhunxin" show-log="1010000000000027" data-carshow="0" type="hidden">
        </ul>
        <div class="index-carmore">
            <a data-gzlog="tracking_type=click&amp;eventid=0080320000000037" href="/bj/buy/c4/">更多准新车<i class="iconbg"></i></a></div>
    </div>
    <!-- 练手车 -->
    <div class="index-carlist-box js-lianshou ">
        <ul class="carlist clearfix">
            <li>
                <a href="/bj/1c3f501b96ca8397x.htm#fr_page=index&amp;fr_pos=lianshou&amp;fr_no=0" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080330000000038&amp;carid=15772963@1">
                    <img data-src="https://image1.guazistatic.com/qn170812112020c6a63d062da68641a45d79192fd9bfed.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">北汽新能源EV系列 2014款 E150EV 科技版</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2014年<span class="icon-pad">|</span>4.5万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>4.80<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><em class="line-through">25.10万</em>                    </div>
                    <!-- 上侧标签 -->

                </a>
            </li>

            <input value="15772963@1_15854963@2_15604194@3_15811449@4_15585078@5_15547291@6_8327261@7_15653684@8_15472631@9_15836211@10_15567531@11_15690573@12_" class="data-js-lianshou" show-log="1010000000000028" data-carshow="0" type="hidden">
        </ul>
        <div class="index-carmore">
            <a data-gzlog="tracking_type=click&amp;eventid=0080330000000039" href="/bj/buy/r8/">更多练手车<i class="iconbg"></i></a></div>
    </div>
    <!-- SUV -->
    <div class="index-carlist-box js-suv ">
        <ul class="carlist clearfix">
            <li>
                <a href="/bj/ef4106a276d8f449x.htm#fr_page=index&amp;fr_pos=suv&amp;fr_no=0" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080340000000040&amp;carid=14540794@1">
                    <img data-src="https://image1.guazistatic.com/qn1707131017488d3ea2c3aeaa39d3184caf77fcbfffcb.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">Jeep指南者 2014款 2.4L 四驱蛇行珍藏版(进口)</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2014年<span class="icon-pad">|</span>6.2万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>13.90<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><i class="i-red">急售</i><i class="i-blue">保卖车</i><em class="line-through">28.10万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-sale">急降<br>
                        <span>2600</span>元                        </em>

                </a>
            </li>

            <li>
                <a href="/bj/6b80a4c768df8a18x.htm#fr_page=index&amp;fr_pos=suv&amp;fr_no=2" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080340000000040&amp;carid=15863314@3">
                    <img data-src="https://image1.guazistatic.com/qn17081418204731d5f48c16c46b020228d3c6c3ff2742.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">奥迪Q5 2016款 40 TFSI 技术型</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2016年<span class="icon-pad">|</span>2.5万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>32.00<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><i class="i-green">准新车</i><i class="i-blue">保卖车</i><em class="line-through">46.40万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-new">新上架</em>

                </a>
            </li>

            <li>
                <a href="/bj/be7167907e8a0218x.htm#fr_page=index&amp;fr_pos=suv&amp;fr_no=8" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080340000000040&amp;carid=15867626@9">
                    <img data-src="https://image1.guazistatic.com/qn17081420105702952cae8c082d1f4d95050c7993f359.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">马自达CX-5 2014款 2.0L 自动两驱都市型</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2014年<span class="icon-pad">|</span>4.0万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>14.00<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><em class="line-through">21.00万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-new">新上架</em>

                </a>
            </li>
            <li>
                <a href="/bj/d83c9e001b3f9f6cx.htm#fr_page=index&amp;fr_pos=suv&amp;fr_no=9" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080340000000040&amp;carid=15836787@10">
                    <img data-src="https://image1.guazistatic.com/qn170813182711cf85b7c61d8d66bf54e5c38bce53a091.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">奥迪Q3 2015款 35 TFSI 舒适型</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2015年<span class="icon-pad">|</span>3.0万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>19.88<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><i class="i-blue">保卖车</i><em class="line-through">34.30万</em>                    </div>
                    <!-- 上侧标签 -->

                </a>
            </li>

            <li>
                <a href="/bj/27d62b706deb1a1ex.htm#fr_page=index&amp;fr_pos=suv&amp;fr_no=11" target="_blank" class="car-a" data-gzlog="tracking_type=click&amp;eventid=0080340000000040&amp;carid=15837877@12">
                    <img data-src="https://image1.guazistatic.com/qn1708141755529366a9c9e2a28e35b95472c7c351677a.jpg?imageView2/1/w/287/h/192/q/88" src="https://image.guazistatic.com/files/pc_default.jpg">
                    <div class="t">日产奇骏 2010款 2.5L CVT豪华版 4WD</div>
                    <!-- 年款里程 -->
                    <div class="t-i">2011年<span class="icon-pad">|</span>5.5万公里</div>
                    <div class="t-price">
                        <!-- 价格 -->
                        <p>11.20<span>万</span></p>
                        <!-- 标签 -->
                        <i class="i-orange">超值</i><em class="line-through">26.00万</em>                    </div>
                    <!-- 上侧标签 -->
                    <em class="icon-new">新上架</em>

                </a>
            </li>
            <input value="14540794@1_15833808@2_15863314@3_14847158@4_14834560@5_15800444@6_15837142@7_15697112@8_15867626@9_15836787@10_15835740@11_15837877@12_" class="data-js-suv" show-log="1010000000000029" data-carshow="0" type="hidden">
        </ul>
        <div class="index-carmore">
            <a data-gzlog="tracking_type=click&amp;eventid=0080340000000041" href="/bj/buy/h2/">更多SUV<i class="iconbg"></i></a></div>
    </div>
</div>
{{--友情图片--}}
<div class="index-foot-buysell">
    <div class="w1200 clearfix">
        <p class="foot-buysell-tel fl"><span class="iconbg"></span>免费咨询电话：400-023-1529</p>
        <div class="foot-buysell-btn fl">
            <a href="/bj/buy/" class="foot-btn-buy" data-gzlog="tracking_type=click&amp;eventid=1010000000000016">我要买车</a>
            <a href="/bj/sell/" class="foot-btn-sell" data-gzlog="tracking_type=click&amp;eventid=1010000000000017">我要卖车</a>
        </div>
    </div>
</div>
@endsection