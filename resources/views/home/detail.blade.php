@extends('layouts.home')
@section('title','车辆详情')
@section('content')
    <script src="//hm.baidu.com/hm.js?e6e64ec34653ff98b12aab73ad895002"></script>
    <script type="text/javascript" src="https://sta.guazistatic.com/c2c_web/base.eda2c2138ae85d99fab0.js"></script>
    <script type="text/javascript" src="https://sta.guazistatic.com/c2c_web/detail_v4.1b2cf081fc8355d3e087.js"></script>
    @parent
    <style>
        body{ color:#495056;}
        .center{ margin:0 auto; width:1200px;}
    </style>
    <div class="center js-center">
        <div class="top-nav" style="display: none;">
            <div class="center">
                <div class="basic-infor-header active clearfix">
                    <ul class="nav-l clearfix">
                        <li data-role="item" data-id="#base">
                            <a href="#base" data-gzlog="tracking_type=click&eventid=0090000000000077">基本信息</a>
                        </li>
                        <li data-role="item" data-id="#pic">
                            <a href="#pic" data-gzlog="tracking_type=click&eventid=0090000000000078">车辆图片</a>
                        </li>
                        <li data-role="item" data-id="#report">
                            <a href="#report" data-gzlog="tracking_type=click&eventid=0090000000000079">检测报告</a>
                        </li>
                        <li data-role="item" data-id="#recommend">
                            <a href="#recommend" data-gzlog="tracking_type=click&eventid=0220050000099054">猜你喜欢</a>
                        </li>
                        <li data-role="item" data-id="#qa">
                            <a href="#qa" data-gzlog="tracking_type=click&eventid=0220050000099055">购车问答</a>
                        </li>
                    </ul>
                    <div class="nav-r">
                        <a class="orgbtn js-apt" rel="nofollow" href="javascript:" data-gzlog="tracking_type=click&eventid=0460310000000074&carid=13607509">
                            预约看车
                            <span class="layer-tip bottom-layer js-layer-tip" style="width: 233px; height: 43px; display: none;">
                                <i class="icon-small-sanjiao"></i>
                                    此车已有
                                <i class="fc-green">149</i>
                                    人关注，预计很快售出，建议尽快
                                <i class="fc-green js-apt" data-gzlog="tracking_type=click&eventid=0460310000000074&carid=13607509">预约看车</i>
                            </span>
                        </a>
                        <a class="greenbtn borderbtn js-bargain" rel="nofollow" href="javascript:;" data-gzlog="tracking_type=click&eventid=0460310000000075&carid=36691">我要砍价</a>
                        <a class="freephonebtn js-freePhone" href="javascript:;">免费咨询</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="placeon clearfix">
            <div class="left-nav">
                <a rel="nofollow" href="//www.guazi.com/bj/" data-gzlog="tracking_type=click&eventid=0220050000099000">首页</a>
                >
                <a href="//www.guazi.com/bj/buy/" data-gzlog="tracking_type=click&eventid=0220050000099000">北京二手车</a>
                >
                <a href="//www.guazi.com/bj/dazhong/" data-gzlog="tracking_type=click&eventid=0220050000099000">北京{{ $cars['pp'] }}二手车</a>
                >
                <a href="//www.guazi.com/bj/maiteng/" data-gzlog="tracking_type=click&eventid=0220050000099000">北京二手{{ $cars['pp'].$cars['sort'] }}</a>
                > {{ $cars['pp'].$cars['sort'] }}&nbsp; {{ $data->cars_kuanShi }} &nbsp; {{ $data->paiLiang }} &nbsp; {{ $data->bianSu }} &nbsp; {{ $data->shuShi }}
            </div>
            <div class="right-carnumber">
                车源号：HC-13607214
                <span class="car-error js-feedback" data-gzlog="tracking_type=click&eventid=0220050000099003">
                    <span class="icon-glass"></span>
                    车源信息纠错
                </span>
            </div>
        </div>

        <div class="infor-main service-open">
            <!-- 图片列表 -->
            <div id="page-slide" class="product-detail" data-group-count="4">
                <div class="bigimgbox">
                    <span class="icon-jijiang">
                        @if($data->cars_status ==1 )
                            超值
                        @elseif($data->cars_status == 0)
                            <i class="f22">急降</i>
                            <i class="f18">3000元</i>
                        @else
                            新品
                        @endif


                    </span>
                    <a class="icon-warn js-notice" href="javascript:" data-gzlog="tracking_type=click&eventid=1012123400000003">降价提醒</a>
                    <a class="icon-collect-star js-carcollect " href="javascript:" data-gzlog="tracking_type=click&eventid=1015123400000010"></a>
                    <div class="page-number">
                        <span class="f20" data-role="currentNumber">1</span>
                        /30
                    </div>

                    <a class="prev disable" href="javascript:" data-role="imgArrow"></a>
                    <a class="next" href="javascript:" data-role="imgArrow"></a>

                    <ul class="det-picside js-picside">
                        <li class="js-bigpic" data-role="img" data-index="0" style="display: list-item;">
                            <img data-src="" alt="{{ $cars['pp'].$cars['sort'] }} {{ $data->cars_kuanShi }} {{ $data->cars_paiLiang }} {{ $data->cars_bianSu }} {{ $data->cars_shuShi }}" src="http://oubnp8yh1.bkt.clouddn.com/{{ $data->cars_img }}" data-gzlog="tracking_type=click&eventid=0220050000099001">
                        </li>
                        <li class="js-bigpic" data-role="img" data-index="1" style="display: none;">
                            <img data-src="" alt="{{ $cars['pp'].$cars['sort'] }} {{ $data->cars_kuanShi }} {{ $data->cars_paiLiang }}" src="http://oubnp8yh1.bkt.clouddn.com/{{ $data->cars_img }}" data-gzlog="tracking_type=click&eventid=0220050000099001">
                        </li>
                    </ul>
                </div>

                <div class="smallimgbox">
                    <div class="wrapper" data-role="thumbWrapper" style="overflow: hidden;">
                        <div data-role="thumbContainer" style="width: 3720px;">
                            <ul class="clearfix" data-role="tabImgGroup" data-tab="1" style="position:relative;">
                                <li class="js-hover active onimg" data-role="thumb" data-hover="" data-click="">
                                    <span class="green-border"></span>
                                    <img src="http://oubnp8yh1.bkt.clouddn.com/{{ $data->cars_img }}">
                                </li>
                                <li class="js-hover" data-role="thumb" data-hover="" data-click="">
                                    <span class="green-border"></span>
                                    <img src="https://image1.guazistatic.com/qn170619143033379770d71d679fbf7d762e6f869f06b6.jpg?imageView2/1/w/120/h/80/q/88">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a class="prev-smallimg disable" href="javascript:" data-role="thumbArrowPrev"></a>
                    <a class="next-smallimg" href="javascript:" data-role="thumbArrowNext"></a>
                </div>
            </div>

            <div class="product-textbox">
                <div class="titlebox">
                    <p>{{ $cars['pp'].$cars['sort'] }} {{ $data->cars_kuanShi }} {{ $data->cars_paiLiang }} {{ $data['cars_bianSu'] }} {{ $data->cars_shuShi }}</p>
                    @if($data->cars_status ==1 )
                        <span class="labels">准新车  超值</span>
                    @elseif($data->cars_status == 0)
                        <span class="labels">降价急售</span>
                    @else
                        <span class="labels">准新车</span>
                    @endif


                    <span class="labels">{{ $data->cars_guoHu }}过户</span>
                </div>

                <ul class="assort clearfix">
                    <li class="one">
                        <span>{{ substr($data->cars_time,0,7) }}</span>
                        上牌时间
                    </li>
                    <li class="two">
                        <span>{{ $data->cars_liCheng }}万公里</span>
                        表显里程
                    </li>
                    <li class="three">
                        <span>{{ $data->cars_shangPai }}</span>
                        上牌地
                    </li>
                    <li class="four em-sta detailHoverTips js-detailHoverTips">
                        <span>
                            {{ $data->cars_paiFang }}
                            <em class="tip-icon js-tip-icon1"></em>
                            <span id="layer-tip" class="layer-tip bottom-layer js-layer-tip1" style="width:233px;height:43px;">
                                <i class="icon-small-sanjiao"></i>
                                各地车管所对排放标准认定有差异，结果仅供参考，外迁请详细咨询迁入地车管所。
                            </span>
                        </span>
                        <a class="js-diswaiqian" href="javascript:void(0)" data-gzlog="tracking_type=click&eventid=0220050000099005">
                            外迁查询
                            <i class="icon-green-right7x11"></i>
                        </a>
                    </li>
                    <li class="last">
                        <span>{{ $data->cars_bianSu }}</span>
                        变速箱
                    </li>
                </ul>

                <div class="pricebox js-disprice">
                    <i class="ico-type">车主报价：</i>
                    <span class="pricestype">
                        ¥{{ $data->cars_baoJia }}
                        <span class="f14">万</span>
                    </span>
                    <span class="newcarprice"> 新车指导价{{ $data->cars_yuanJia }}万(含税)</span>
                    <span class="tip-icon js-tip-icon3">
                        <span class="layer-tip bottom-layer js-layer-tip3" style="display:none">
                            <i class="icon-small-sanjiao"></i>
                                新车指导价(含税) = 厂商公布的指导价 + 购置税费，该价格仅供参考。
                        </span>
                    </span>
                </div>

                <div class="js-loan">
                    <a class="loanbox" href="javascript:void(0);" data-role="viewjr" source-id="2112100" city-domain="bj" data-gzlog="tracking_type=click&eventid=0460310000000073&carid=13607509">
                        <span class="icon-man"></span>首付
                        <span class="f22">{{ $data->cars_baoJia *0.3 }}</span>万
                        <span class="monthpad">月供{{ ($data->cars_baoJia +20000)/36 }}元</span>
                        <span class="text-r">
                            贷款详情
                            <i class="icon-green-right7x11"></i>
                        </span>
                    </a>
                </div>

                <div class="service-protect">
                    <div class="service-protect-title clearfix">
                        <i class="icon-service">服务保障升级</i>
                        <i class="label-green">理赔高达6.30万</i>
                        <i class="label-green">保全车12大系统</i>
                        <a class="look-detail" target="_blank" href="/zq_serviceintro/?domain=bj&isEnsure=1&compensation=6.30&serviceUpgrade=1">
                            查看详情
                            <i class="icon-gray-right7x11"></i>
                        </a>
                    </div>

                    <ul class="four-service clearfix">
                        <li class="one">
                            <span>
                                1年2万公里售后保障
                                <i class="icon-triangle-top"></i>
                            </span>
                        </li>
                        <li class="two">
                            <span>
                                14天可退
                                <i class="icon-triangle-top"></i>
                            </span>
                        </li>
                        <li class="three">
                            <span>
                                259项检测
                                <i class="icon-triangle-top"></i>
                            </span>
                        </li>
                        <li class="four">
                            <span>
                                优质个人车
                                <i class="icon-triangle-top"></i>
                            </span>
                        </li>
                    </ul>

                    <div class="car-fuwu">
                        <i class="ico-txt">服务费：</i>
                        <span>{{ $data['cars_baoJia'] }}元（车价x4%，最低3500元） </span>
                    </div>
                </div>

                <div class="btnbox clearfix">
                    <a class="orgbtn js-apt" rel="nofollow" href="javascript:" data-gzlog="tracking_type=click&eventid=0460310000000074&carid=13607509">
                        预约看车
                        <span class="layer-tip js-layer-tip" style="width: 233px; height: 43px; display: none;">
                            <i class="icon-small-sanjiao"></i>
                            此车已有
                            <i class="fc-green">149</i>
                            人关注，预计很快售出，建议尽快
                            <i class="fc-green js-apt" data-gzlog="tracking_type=click&eventid=0460310000000074&carid=13607509">预约看车</i>
                        </span>
                    </a>
                    <a class="greenbtn js-bargain" rel="nofollow" href="javascript:" data-gzlog="tracking_type=click&eventid=0460310000000075&carid=13607509">我要砍价</a>
                    <a class="freephonebtn js-freePhone" href="javascript:;">免费咨询</a>
                </div>
            </div>
        </div>


    {{--认证--}}
    <div class="guazi-renzheng">
        <div class="bgbox">
            <span class="icon-left-top"></span>
            <span class="icon-right-top"></span>
            <span class="icon-left-bottom"></span>
            <span class="icon-right-bottom"></span>
            <dl class="title-test clearfix">
                <dt>
                    <span class="icon-renzheng"></span>
                </dt>
                <dd>
                    <div class="test-titbox">
                        <p class="f30">259项专业检测</p>
                        <span>瓜子要求二手车源必须达到以下标准</span>
                    </div>
                    <ul class="three-type clerafix">
                        <li>
                            <span class="icon-save"></span>
                            无重大事故
                        </li>
                        <li>
                            <span class="icon-fire"></span>
                            无火烧事故
                        </li>
                        <li>
                            <span class="icon-water"></span>
                            无泡水事故
                        </li>
                    </ul>
                </dd>
            </dl>
            <dl class="pinggushi clearfix">
                <dt>
                    <span class="icon-img"></span>
                </dt>
                <dd>
                    <div class="dd-namebox">
                        <div class="test-type">高级车辆评估师</div>
                        <div class="test-name">
                            <a class="ask-car js-askcar" href="javascript:">
                                <i class="icon-phone-white"></i>
                                咨询车况
                                <span class="layer-tip bottom-layer">
                            <i class="icon-small-sanjiao"></i>
                            咨询电话：
                            <i class="fc-green">400-023-1529</i>
                        </span>
                            </a>
                        </div>
                    </div>
                    <div class="test-con">经检测，该车骨架完好，排除事故车、火烧、水泡等特殊车况。发动机舱内部机械部件正常，无拆卸渗漏痕迹。外观有轻微剐蹭划痕，配置有加装，车辆启动正常无抖动。最新排放标准由当地车管所抵挡为准。配置已实车为准。</div>
                </dd>
            </dl>
            <ul class="jiance-con clearfix js-reportTop">
                <li>
                    <strong>事故排查检测</strong>
                    <div class="c-list">
                        <span class="c-name">事故排查</span>
                        <span class="c-number">
                    25项
                    <i class="icon-right"></i>
                </span>
                    </div>
                    <div class="c-list">
                        <span class="c-name">泡水排查</span>
                        <span class="c-number">
                    10项
                    <i class="icon-right"></i>
                </span>
                    </div>
                    <div class="c-list">
                        <span class="c-name">火烧排查</span>
                        <span class="c-number">
                    2项
                    <i class="icon-right"></i>
                </span>
                    </div>
                </li>
                <li>
                    <strong>核心部件检测</strong>
                    <div class="c-list">
                        <span class="c-name">机舱项</span>
                        <span class="c-number">
                13项
                <i class="icon-right"></i>
                </span>
                    </div>
                    <div class="c-list">
                        <span class="c-name">底盘悬架项</span>
                        <span class="c-number">
                5项
                <i class="icon-right"></i>
                </span>
                    </div>
                </li>
                <li>
                    <strong>常用功能检测</strong>
                    <div class="c-list">
                        <span class="c-name">安全系统</span>
                        <span class="c-number">
                19项
                <i class="icon-right"></i>
                </span>
                    </div>
                    <div class="c-list">
                        <span class="c-name">外部配置</span>
                        <span class="c-number">
            13项
            <i class="icon-right"></i>
            </span>
                    </div>
                    <div class="c-list">
                        <span class="c-name">内部配置</span>
                        <span class="c-number">
                13项
                <i class="icon-right"></i>
                </span>
                    </div>
                    <div class="c-list">
                        <span class="c-name">灯光系统</span>
                        <span class="c-number">
            14项
            <i class="icon-right"></i>
            </span>
                    </div>
                    <div class="c-list">
                        <span class="c-name">高科技配置</span>
                        <span class="c-number">
            5项
            <i class="icon-right"></i>
            </span>
                    </div>
                    <div class="c-list">
                        <span class="c-name">随车工具</span>
                        <span class="c-number">
            5项
            <i class="icon-right"></i>
            </span>
                    </div>
                </li>
                <li>
                    <strong>启动驾驶检测</strong>
                    <div class="c-list">
                        <span class="c-name">仪表台指示灯</span>
                        <span class="c-number">
                4项
                <i class="icon-right"></i>
            </span>
                    </div>
                    <div class="c-list">
                        <span class="c-name">发动机状态</span>
                        <span class="c-number">
                4项
                <i class="icon-right"></i>
                </span>
                    </div>
                    <div class="c-list">
                        <span class="c-name">变速箱及转向</span>
                        <span class="c-number">
                2项
                <i class="icon-right"></i>
                </span>
                    </div>
                </li>
                <li>
                    <strong>外观内饰检测</strong>
                    <div class="c-list">
                        <span class="c-name"></span>
                        缺陷项检测
                        <span class="c-number">
                67项
                <i class="icon-yellow-error js-yellow-error ">
                <span class="layer-tip-yellow-top">
                <i class="icon-small-sanjiao"></i>
                缺陷项检测：
                <span class="tip-list">
                <i class="disc"></i>
                有
                <i class="fc-org">2</i>
                处划痕
                </span>
                <a class="look-detail" href="#surface" data-role="secitem" data-id="#surface" data-type="surpic">
                查看详情
                <i class="icon-gray-right7x11"></i>
                </a>
                </span>
                <span class="fc-org-text">2项异常</span>
                </i>
                </span>
                    </div>
                    <div class="c-list">
                        <span class="c-name"></span>
                        漆面修复检测
                        <span class="c-number">
                21项
                <i class="icon-right"></i>
                </span>
                    </div>
                    <div class="c-list">
                        <span class="c-name"></span>
                        钣金修复检测
                        <span class="c-number">
                21项
                <i class="icon-right"></i>
                </span>
                    </div>
                    <div class="c-list">
                        <span class="c-name"></span>
                        外观件更换检测
                        <span class="c-number">
                21项
                <i class="icon-right"></i>
                </span>
                    </div>
                </li>
            </ul>
            <p class="bottom-text">※以上为评估师验车时的车况，交易前会再次检测。</p>
        </div>
    </div>
        {{--详细--}}
        <div class="basic-infor js-basic-infor js-top">
            <div id="base" class="titlediv">
                <span>基本信息</span>
            </div>
            <dl class="people-infor clearfix">
                <dt>
                    <span class="f20">车主：艾先生</span>
                    <a class="ask-car js-askcar1" href="javascript:;">
                        <i class="icon-phone-white"></i>
                        咨询看车
                        <span class="layer-tip bottom-layer">
<i class="icon-small-sanjiao"></i>
咨询电话：
<i class="fc-green">400-023-1529</i>
</span>
                    </a>
                </dt>
                <dd>
                    <span class="type-gray">城市道路行驶</span>
                    <span class="type-gray">日常家用</span>
                    <span class="type-gray">新车未保养</span>
                    <span class="type-gray">因换车卖车</span>
                    <span class="type-gray">加装倒车影像系统</span>
                    <span class="type-gray">加装GPS导航</span>
                    <span class="type-gray">电动天窗</span>
                    <span class="type-gray">全景天窗</span>
                    <span class="type-gray">多功能方向盘</span>
                    <span class="type-gray">倒车雷达</span>
                    <span class="type-gray">真皮座椅</span>
                    <span class="type-gray">前排座椅加热</span>
                </dd>
            </dl>
            <ul class="basic-eleven clearfix">
                <li class="one">
                    <div class="typebox">2017-03</div>
                    上牌时间
                </li>
                <li class="two">
                    <div class="typebox">0.43万公里</div>
                    表显里程
                </li>
                <li class="three">
                    <div class="typebox">北京</div>
                    上牌地
                </li>
                <li class="four">
                    <div class="typebox">
                        国五
                        <a href="javascript:">
                            <em class="tip-icon js-tip-icon"></em>
                        </a>
                        <span id="layer-tip" class="layer-tip bottom-layer js-layer-tip2" style="width: 233px; height: 43px; display: none;">
<i class="icon-small-sanjiao"></i>
各地车管所对排放标准认定有差异，结果仅供参考，外迁请详细咨询迁入地车管所。
</span>
                    </div>
                    <a class="js-diswaiqian" href="javascript:" data-gzlog="tracking_type=click&eventid=0220050000099006">
                        外迁查询
                        <i class="icon-green-right7x11"></i>
                    </a>
                </li>
                <li class="five">
                    <div class="typebox">自动</div>
                    变速箱
                </li>
                <li class="six">
                    <div class="typebox">1.8</div>
                    排量
                </li>
                <li class="seven">
                    <div class="typebox">0</div>
                    过户次数
                </li>
                <li class="eight">
                    <div class="typebox">西城</div>
                    看车地址
                </li>
                <li class="nine">
                    <div class="typebox">2019-3</div>
                    年检到期
                </li>
                <li class="ten">
                    <div class="typebox">2018-3</div>
                    交强险
                </li>
                <li class="last">
                    <div class="typebox">
                        2018-3
                        <span class="tip-icon js-tip-icon4">
<span class="layer-tip bottom-layer">
<i class="icon-small-sanjiao"></i>
保险是否随车赠送，需要在交易过程中与车主确认。
</span>
</span>
                    </div>
                    商业险到期
                </li>
            </ul>
            <div class="detailcontent clearfix js-detailcontent active">
                <table class="param-table one" width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                    <tr>
                        <th colspan="2">基本参数</th>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">厂商</td>
                        <td class="td2" width="50%">一汽-大众</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">级别</td>
                        <td class="td2" width="50%">中型车</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">发动机</td>
                        <td class="td2" width="50%">1.8T 180马力 L4</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">变速箱</td>
                        <td class="td2" width="50%">7档双离合变速箱(DCT)</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">车身结构</td>
                        <td class="td2" width="50%">4门5座三厢车</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">长*宽*高(mm)</td>
                        <td class="td2" width="50%">4866/1832/1464</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">轴距(mm)</td>
                        <td class="td2" width="50%">2871</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">行李箱容积(L)</td>
                        <td class="td2" width="50%">533</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">整备质量(kg)</td>
                        <td class="td2" width="50%">1540</td>
                    </tr>
                    </tbody>
                </table>
                <table class="param-table " width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                    <tr>
                        <th colspan="2">发动机参数</th>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">排量(L)</td>
                        <td class="td2" width="50%">1.8</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">进气形式</td>
                        <td class="td2" width="50%">涡轮增压</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">气缸</td>
                        <td class="td2" width="50%">L4</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">最大马力(Ps)</td>
                        <td class="td2" width="50%">180</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">最大扭矩(N*m)</td>
                        <td class="td2" width="50%">300</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">燃料类型</td>
                        <td class="td2" width="50%">汽油</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">燃油标号</td>
                        <td class="td2" width="50%">95号</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">供油方式</td>
                        <td class="td2" width="50%">直喷</td>
                    </tr>
                    <tr title="各地车管所对排放标准认定有差异，结果仅供参考，外迁请详细咨询迁入地车管所。">
                        <td class="td1" width="50%">排放标准</td>
                        <td class="td2" width="50%">国五</td>
                    </tr>
                    </tbody>
                </table>
                <table class="param-table " width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                    <tr>
                        <th colspan="2">底盘及制动</th>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">驱动方式</td>
                        <td class="td2" width="50%"></td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">助力类型</td>
                        <td class="td2" width="50%">电动助力</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">前悬挂类型</td>
                        <td class="td2" width="50%">麦弗逊式独立悬架</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">后悬挂类型</td>
                        <td class="td2" width="50%">多连杆独立悬架</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">前制动类型</td>
                        <td class="td2" width="50%">通风盘式</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">后制动类型</td>
                        <td class="td2" width="50%">盘式</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">驻车制动类型</td>
                        <td class="td2" width="50%">-</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">前轮胎规格</td>
                        <td class="td2" width="50%">215/55 R17</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">后轮胎规格</td>
                        <td class="td2" width="50%">215/55 R17</td>
                    </tr>
                    </tbody>
                </table>
                <table class="param-table one" width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                    <tr>
                        <th colspan="2">安全配置</th>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">主副驾驶安全气囊</td>
                        <td class="td2" width="50%">正常/正常</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">前后排侧气囊</td>
                        <td class="td2" width="50%">正常/正常</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">前后排头部气囊</td>
                        <td class="td2" width="50%">正常/正常</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">胎压检测</td>
                        <td class="td2" width="50%">标配</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">车内中控锁</td>
                        <td class="td2" width="50%">标配</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">儿童座椅接口</td>
                        <td class="td2" width="50%">标配</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">无钥匙启动</td>
                        <td class="td2" width="50%">标配</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">防抱死系统(ABS)</td>
                        <td class="td2" width="50%">标配</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">车身稳定控制(ESP)</td>
                        <td class="td2" width="50%">标配</td>
                    </tr>
                    </tbody>
                </table>
                <table class="param-table " width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                    <tr>
                        <th colspan="2">外部配置</th>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">电动天窗</td>
                        <td class="td2" width="50%">标配</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">全景天窗</td>
                        <td class="td2" width="50%">标配</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">电动吸合门</td>
                        <td class="td2" width="50%">无</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">感应后备箱</td>
                        <td class="td2" width="50%">无</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">感应雨刷</td>
                        <td class="td2" width="50%">无</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">后雨刷</td>
                        <td class="td2" width="50%">无</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">前后电动车窗</td>
                        <td class="td2" width="50%">标配/标配</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">后视镜电动调节</td>
                        <td class="td2" width="50%">标配</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">后视镜加热</td>
                        <td class="td2" width="50%">标配</td>
                    </tr>
                    </tbody>
                </table>
                <table class="param-table " width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                    <tr>
                        <th colspan="2">内部配置</th>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">多功能方向盘</td>
                        <td class="td2" width="50%">标配</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">定速巡航</td>
                        <td class="td2" width="50%">标配</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">空调</td>
                        <td class="td2" width="50%">标配</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">自动空调</td>
                        <td class="td2" width="50%">标配</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">GPS导航</td>
                        <td class="td2" width="50%">加装</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">倒车雷达</td>
                        <td class="td2" width="50%">标配</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">倒车影像系统</td>
                        <td class="td2" width="50%">加装</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">真皮座椅</td>
                        <td class="td2" width="50%">标配</td>
                    </tr>
                    <tr>
                        <td class="td1" width="50%">前后排座椅加热</td>
                        <td class="td2" width="50%">标配/无</td>
                    </tr>
                    </tbody>
                </table>
                <div class="text-ins">以上基本信息为车辆初评时录入，实际情况以看车时为准</div>
            </div>
        </div>


        <!-- 车辆详细 -->
        <div id="pic" class="car-picture-infor">
            <div class="titlediv">
                <span>车辆图片</span>
            </div>
            <div class="small-tit-center">车辆外观</div>

            <ul class="carpic-big clearfix">
                <!-- 四张 -->
                <li class="fl js-bigpic" data-index="0" data-gzlog="tracking_type=click&eventid=0220050000099027&position=0">
                    <img src="https://image1.guazistatic.com/qn170619143034dc5642f9cd3e64bb2c8f5e80d018ccf7.jpg?imageView2/1/w/600/h/400/q/88">
                </li>
            </ul>
            <ul class="carpic-small clearfix">
                <li class="js-bigpic" data-index="2" data-gzlog="tracking_type=click&eventid=0220050000099027&position=4">
                    <div class="img-border">
                        <img src="https://image1.guazistatic.com/qn1706191430323494dbf2e82033426ce98fccc7288498.jpg?imageView2/1/w/600/h/400/q/88">
                    </div>
                </li>
                <!-- 三张 -->
                <li class="last js-bigpic" data-index="0" data-gzlog="tracking_type=click&eventid=0220050000099027&position=7">
                    <div class="img-border">
                        <img class="blur" src="https://image1.guazistatic.com/qn170619143034dc5642f9cd3e64bb2c8f5e80d018ccf7.jpg?imageView2/1/w/600/h/400/q/88">
                    </div>
                    <a class="morepic-text">
                        查看10张
                        <span class="f18">外观图</span>
                    </a>
                </li>
            </ul>
            <div class="small-tit-center">车辆内饰</div>
            <ul class="carpic-big clearfix">
                <li class="fl js-bigpic" data-index="12" data-gzlog="tracking_type=click&eventid=0220050000099033&position=0">
                    <img src="https://image.guazistatic.com/gz01170619/14/05/20cb4337fbb7505844c7160748ea2d1e.jpg@base@tag=imgScale&w=600&h=400&c=1&m=2&q=88">
                </li>
            </ul>
            <ul class="carpic-small clearfix">
                <li class="js-bigpic" data-index="16" data-gzlog="tracking_type=click&eventid=0220050000099033&position=6">
                    <div class="img-border">
                        <img src="https://image.guazistatic.com/gz01170619/14/05/ef2bd23a4d7793a689cc37d54c0368a3.jpg@base@tag=imgScale&w=600&h=400&c=1&m=2&q=88">
                    </div>
                </li>
                <li class="last js-bigpic" data-index="12" data-gzlog="tracking_type=click&eventid=0220050000099033&position=9">
                    <div class="img-border">
                        <img class="blur" src="https://image.guazistatic.com/gz01170619/14/05/20cb4337fbb7505844c7160748ea2d1e.jpg@base@tag=imgScale&w=600&h=400&c=1&m=2&q=88">
                    </div>
                    <a class="morepic-text">
                        查看13张
                        <span class="f18">内饰图</span>
                    </a>
                </li>
            </ul>
        </div>
</div>
@endsection