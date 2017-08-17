@extends('layouts.home')
@section('title','车辆详情')
@section('content')
    @parent
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
                <a href="//www.guazi.com/bj/dazhong/" data-gzlog="tracking_type=click&eventid=0220050000099000">北京大众二手车</a>
                >
                <a href="//www.guazi.com/bj/maiteng/" data-gzlog="tracking_type=click&eventid=0220050000099000">北京二手大众迈腾</a>
                > 大众迈腾 2017款 330TSI DSG 豪华型
            </div>
            <div class="right-carnumber">
                车源号：HC-13607509
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
                        <i class="f22">急降</i>
                        <i class="f18">2000元</i>
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
                            <img data-src="https://image1.guazistatic.com/qn170619143034dc5642f9cd3e64bb2c8f5e80d018ccf7.jpg?imageView2/1/w/600/h/400/q/88" alt="大众迈腾 2017款 330TSI DSG 豪华型" src="https://image1.guazistatic.com/qn170619143034dc5642f9cd3e64bb2c8f5e80d018ccf7.jpg?imageView2/1/w/600/h/400/q/88" data-gzlog="tracking_type=click&eventid=0220050000099001">
                        </li>
                        <li class="js-bigpic" data-role="img" data-index="1" style="display: none;">
                            <img data-src="https://image1.guazistatic.com/qn170619143033379770d71d679fbf7d762e6f869f06b6.jpg?imageView2/1/w/600/h/400/q/88" alt="大众迈腾 2017款 330TSI DSG 豪华型" src="https://image1.guazistatic.com/qn170619143033379770d71d679fbf7d762e6f869f06b6.jpg?imageView2/1/w/600/h/400/q/88" data-gzlog="tracking_type=click&eventid=0220050000099001">
                        </li>
                    </ul>
                </div>

                <div class="smallimgbox">
                    <div class="wrapper" data-role="thumbWrapper" style="overflow: hidden;">
                        <div data-role="thumbContainer" style="width: 3720px;">
                            <ul class="clearfix" data-role="tabImgGroup" data-tab="1" style="position:relative;">
                                <li class="js-hover active onimg" data-role="thumb" data-hover="" data-click="">
                                    <span class="green-border"></span>
                                    <img src="https://image1.guazistatic.com/qn170619143034dc5642f9cd3e64bb2c8f5e80d018ccf7.jpg?imageView2/1/w/120/h/80/q/88">
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
                    <p>大众迈腾 2017款 330TSI DSG 豪华型</p>
                    <span class="labels">降价急售</span>
                    <span class="labels">准新车</span>
                    <span class="labels">0过户</span>
                </div>

                <ul class="assort clearfix">
                    <li class="one">
                        <span>2017-03</span>
                        上牌时间
                    </li>
                    <li class="two">
                        <span>0.43万公里</span>
                        表显里程
                    </li>
                    <li class="three">
                        <span>北京</span>
                        上牌地
                    </li>
                    <li class="four em-sta detailHoverTips js-detailHoverTips">
                        <span>
                            国五
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
                        <span>自动</span>
                        变速箱
                    </li>
                </ul>

                <div class="pricebox js-disprice">
                    <i class="ico-type">车主报价：</i>
                    <span class="pricestype">
                        ¥23.00
                        <span class="f14">万</span>
                    </span>
                    <span class="newcarprice"> 新车指导价25.50万(含税)</span>
                    <span class="tip-icon js-tip-icon3">
                        <span class="layer-tip bottom-layer js-layer-tip3" style="display:none">
                            <i class="icon-small-sanjiao"></i>
                                新车指导价(含税) = 厂商公布的指导价 + 购置税费，该价格仅供参考。
                        </span>
                    </span>
                </div>

                <div class="js-loan">
                    <a class="loanbox" href="javascript:void();" data-role="viewjr" source-id="2112100" city-domain="bj" data-gzlog="tracking_type=click&eventid=0460310000000073&carid=13607509">
                        <span class="icon-man"></span>首付
                        <span class="f22">6.9</span>万
                        <span class="monthpad">月供5814元</span>
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
                        <span>9200元（车价x4%，最低3500元） </span>
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
    </div>
@endsection