@extends('layouts.home')
@section('title','我要买车')
@section('head','tracker="{"pagetype":"list","qpres":"search qpres","cpres":"search cpres","expids":"{ranker_id=0, predictor_id=0, retriever_id=0, rewriter_id=0, rank_sorter_id=0}"}"')
@section('content')


@parent
{{--加载头部信息--}}
</div>
<div class="list-wrap js-post">
    <div id="bread" class="crumbs-search">
        <div class="crumbs">
            <a href="//www.guazi.com/bj/">首页</a>
            >北京二手车
        </div>
        <div class="search js-search">
            <div class="search-box suggestion_widget" data-default-count="9">
                <input class="search-input js_search_input_index" placeholder="搜索您想要的车" data-role="keywordInput" name="keyword" autocomplete="off" data-domain="bj" type="text">
                <button class="search-btn" data-gzlog="tracking_type=click&eventid=0020070000000022"></button>
                <input value="bj" name="hiddenCity" type="hidden">
            </div>
        </div>
    </div>

    <div class="screen">
        <dl class="clearfix">
            <dt>品牌</dt>
            <dd>
                <div class="dd-top">
                        <span class="a-box">
                            <a class="active" href="/bj/buy/#bread">不限</a>
                            <a data-gzlog="tracking_type=click&eventid=0070000000000045&filter=brand&brand=dazhong&type=hot" href="/bj/dazhong/#bread">大众</a>
                        </span>
                    <span class="dd-btn js-disAll js-option-hid " data-local="js-brand">
                            全部
                            <i></i>
                        </span>
                </div>
                {{--遍历 --}}
                <div class="dd-all clearfix js-brand js-option-hid-info" style="display:none">
                    <ul>
                        <li>
                            <label>A</label>
                            <p>
                                <a data-gzlog="tracking_type=click&eventid=0070000000000045&filter=brand&brand=audi" href="/bj/audi/#bread">奥迪</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </dd>
        </dl>

        <dl class="clearfix">
            <dt>车系</dt>
            <dd>
                <div class="dd-top">
                        <span class="a-box">
                            <a class="active" href="/bj/buy/#bread">不限</a>
                            <a data-gzlog="tracking_type=click&eventid=0070000000000045&filter=tag&tag=maiteng&type=hot" href="/bj/maiteng/#bread">迈腾</a>
                        </span>
                </div>
                <div class="dd-car js-tag js-option-hid-info" style="display: none;">
                    <ul> </ul>
                </div>
            </dd>
        </dl>

        <dl class="clearfix">
            <dt>价格</dt>
            <dd>
                <div class="dd-top">
                    <a class="active" data-gzlog="tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=0" href="/bj/buy/#bread">不限</a>
                    <a data-gzlog="tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=11" href="/bj/buy/p11/#bread">3万以下</a>
                    <a data-gzlog="tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=12" href="/bj/buy/p12/#bread">3-5万</a>
                    <a data-gzlog="tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=13" href="/bj/buy/p13/#bread">5-7万</a>
                    <a data-gzlog="tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=14" href="/bj/buy/p14/#bread">7-9万</a>
                    <a data-gzlog="tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=15" href="/bj/buy/p15/#bread">9-12万</a>
                    <a data-gzlog="tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=16" href="/bj/buy/p16/#bread">12-16万</a>
                    <a data-gzlog="tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=17" href="/bj/buy/p17/#bread">16-20万</a>
                    <a data-gzlog="tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=18" href="/bj/buy/p18/#bread">20万以上</a>

                    <div class="rangeFilter" data-url-template="/bj/buy/">
                        <input id="my_price_b" class="screen-price js-begin" value="" data-default-value="0" size="4" maxlength="3" name="b" type="text">
                        <em class="screen-em">-</em>
                        <input id="my_price_e" class="screen-price js-end" value="" data-default-value="999" size="4" maxlength="3" name="e" type="text">
                        <em class="screen-em">万</em>
                        <button class="price-btn js-btn">确定</button>
                    </div>
                </div>

            </dd>
        </dl>

        <dl class="clearfix js-more">
            <dt>更多</dt>
            <dd>
                <ul class="dd-more ">
                    <li class="js-hover">
                        <p class="dd-sel">
                            <i></i>
                            车龄
                        </p>
                        <div class="dd-option">
                            <a href="/bj/buy/#bread">不限</a>
                            <a data-gzlog="tracking_type=click&eventid=0070000000000045&filter=cheling&cheling=1" href="/bj/buy/l1/#bread">1年以内</a>
                        </div>
                    </li>
                </ul>
            </dd>
        </dl>
    </div>

    {{--空行--}}
    <div id="post" class="screen-result js-top">
        <p class="result-p3">共为您找到4920辆好车</p>
    </div>

    <div class="list-filter">
        <div class="list-tab">
            <a class="active" data-gzlog="tracking_type=click&eventid=1011000000000008" href="/bj/buy/#bread">全部</a>
            <em></em>

            <a class="loan" data-gzlog="tracking_type=click&eventid=0070000000000045" href="/bj/buy/r18/#bread">保卖车</a>
            <em></em>

            <a class="loan" data-gzlog="tracking_type=click&eventid=1011001001000007" href="/bj/buy/r19/#bread">付三成
                <i></i>
            </a>
        </div>

        <div class="list-sort">
            <div class="hot-screen js-hover">
                <p class="hot-sel">
                    <i></i>
                    热门筛选
                </p>
                <div class="hot-option">
                    <a href="/bj/buy/r3/#bread" data-gzlog="tracking_type=click&eventid=0070000000000045&filter=tag_types&tag_types=3">
                        <i></i>
                        急售
                    </a>
                    <a href="/bj/buy/r16/#bread" data-gzlog="tracking_type=click&eventid=0070000000000045&filter=tag_types&tag_types=16">
                        <i></i>
                        超值
                    </a>
                </div>
            </div>
            <a class="sort-a " rel="nofollow" data-gzlog="tracking_type=click&eventid=0070000000000056&sort=licheng" href="/bj/buy/i5/#bread">
                里程
                <i class=""></i>
            </a>
            <a class="sort-a " rel="nofollow" data-gzlog="tracking_type=click&eventid=0070000000000056&sort=cheling" href="/bj/buy/i4/#bread">
                车龄
                <i class=""></i>
            </a>
            <a class="sort-a " rel="nofollow" data-gzlog="tracking_type=click&eventid=0070000000000056&sort=price" href="/bj/buy/i1/#bread">
                价格
                <i class=""></i>
            </a>
            <a class="sort-a " data-gzlog="tracking_type=click&eventid=0070000000000056&sort=new" href="/bj/buy/i7/#bread">最新发布</a>
            <a class="sort-a active" data-gzlog="tracking_type=click&eventid=0070000000000056&sort=default" href="/bj/buy/#bread">默认排序</a>
        </div>
    </div>
    {{--商品列表--}}
    <ul class="carlist clearfix js-top">
        @foreach($cars as $k=>$v)
        <li data-scroll-track="14405971@0@0&0120000000000057">
            <a class="car-a" href="{{url('/home/buy').'/'.$v->cars_id.'?pp='.$v->p_name.'&sort='.$v->car_name }}" target="_blank" data-gzlog="tracking_type=click&eventid=0120000000000057&carid=14405971@0">
                <img src="http://oubnp8yh1.bkt.clouddn.com/{{ $v->cars_img }}">
                <div class="t">{{ $v->car_name }}&nbsp;{{ $v->cars_kuanShi }} &nbsp; {{ $v->cars_paiLiang }} &nbsp; {{ $v->cars_shuShi }}</div>
                <input type="hidden" name="cars_id" value="{{ $v->cars_id }}">
                <input type="hidden" name="user_phone" value="{{ $v->user_phone }}">
                <div class="t-i">
                    {{ substr($v->cars_time,0,4) }}年
                    <span class="icon-pad">|</span>
                    {{ $v->cars_liCheng }}万公里
                </div>
                <div class="t-price">
                    <p>
                        {{ $v->cars_baoJia }}
                        <span>万</span>
                    </p>
                    @if($v->cars_status ==1 )
                        <i class="i-orange">超值</i>
                    @elseif($v->cars_status == 0)
                        即将
                        <i class="i-red">急售</i>
                    @else
                        新品
                    @endif

                    <em class="line-through">{{ $v->cars_yuanJia }}万</em>
                </div>
                <em class="icon-sale">
                    @if($v->cars_status ==1 )
                        超值
                    @elseif($v->cars_status == 0)
                        即将
                        <br>
                        <span>3000元</span>
                    @else
                        新品
                    @endif


                </em>
            </a>
        </li>
        @endforeach
    </ul>

    <div class="pageBox" data-widget="app/ms_v2/common/list_page.js#pagination">
        <ul class="pageLink clearfix">
            <li class="link-on">
                <a>
                    <span>1</span>
                </a>
            </li>
            <li>
                <a href="/bj/buy/o2/#bread" data-gzlog="tracking_type=click&eventid=0060000000000060&pageno=2">
                    <span>2</span>
                </a>
            </li>
            <li class="point">
                <a>
                    <span>...</span>
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection


