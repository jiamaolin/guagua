@extends('layouts.home')
@section('title','个人详情')
@section('content')
	<!-- body体 -->
    <div class="person-main">
        <div class="person-left js-left-side">
            <p class="user-img"></p>
                <div style="width:800px;height:3000px;border:1px solid white;margin-left:500px;margin-top:350px;">
                    
                    <h1>发布中心</h1>
                    <a href="{{url('/home/collection')}}"><h1>&nbsp;&nbsp;&nbsp;&nbsp;收藏中心</h1></a>
                    <div style="margin-top:50px;margin-left:0px;"><h2>已发布车辆：</h2>
                        @foreach ( $sell as $k => $v)
                        <div>
                        <!-- 图片 -->
                        <img src="http://oubnp8yh1.bkt.clouddn.com/{{$v->cars_img}}" width="400px;" height="300px;">
                        <!-- 车型 -->
                        <div class="t"><h3>{{$v->car_name}}&nbsp;{{$v->car_type}} &nbsp; {{$v->car_paiFang}} &nbsp; {{$v->car_biansu}}</h3></div>
                        <!-- 审核状态 -->
                        <div class="t-i">
                         @if( $v->status == 1 )
                            <h2>审核已通过</h2>
                         @elseif ( $v->status == 2 )
                            <h2>禁止发布</h2>
                         @elseif ( $v->status ==3 )
                            <h2>待审核</h2>
                         @endif
                        </div>
                        <div style="height:50px;"></div>
                        </div>
                        @endforeach
                    </div>





                </div>

        </div>
    </div>



@endsection