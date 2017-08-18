@extends('layouts.home')
@section('title','瓜子首页')
@section('content')
	<!-- body体 -->
    <div class="person-main">
        <div class="person-left js-left-side">
            <p class="user-img"></p>
            <p class="user-info">
                个人中心
                <span>手机号：15732050659</span>
            </p>
            <ul class="user-menu">
                <li>
                    <a class="active" data-gzlog="tracking_type=click&eventid=1016123400000001" href="/bj/userstore">收藏车辆</a>
                </li>
                <li>
                    <a data-gzlog="tracking_type=click&eventid=1016123400000003" href="/bj/userreduce">降价提醒</a>
                </li>
                <li>
                     <a data-gzlog="tracking_type=click&eventid=1016123400000006" href="/bj/userhistory">浏览记录</a>
                </li>
            </ul>
        </div>
        <div class="person-right js-info-body" data-souce="Store" last-page="1" deal-puid="0;">
            <div class="person-source js-carList active">
                <ul class="person-list clearfix">
                    <li class="list-infoBox js-oneInfo" store-id="37831722" puid="3002125784">
                        <a class="info-img" href="/bj/b75c8dab862a92a4x.htm">
                        <img src="https://image1.guazistatic.com/qn170808152459a218224a14080e6563c694ca8f07657e.jpg?imageView2/1/w/280/h/180/q/88" alt="">
                        </a>
                        <p class="info-mile">
                            2015年1月上牌
                            <em>|</em>
                            行驶8.4万公里
                        </p>
                        <p class="info-price">
                            <span class="price-curr">18.80万</span>
                            <span class="price-through">27.10万</span>
                        </p>
                    </li>
                </ul>
                <div class="loading-more active">已到最后一页</div>

            </div>
            <div class="person-source-no js-load ">
                <div class="source-none js-load-text">暂无收藏车辆</div>
                <div class="source-btn">
                    <a href="/bj/buy/">去逛逛瓜子海量车源 ></a>
                </div>
            </div>

        </div>
    </div>

@endsection