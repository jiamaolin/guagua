@extends('layouts.home')
@section('title','个人详情')
@section('content')
	<!-- body体 -->
    <div class="person-main">
        <div class="person-left js-left-side">
            <p class="user-img"></p>
                <div style="width:800px;height:3000px;border:1px solid white;margin-left:500px;margin-top:350px;">
                    
                    
                    <h1>收藏中心</h1>
                    <a href="{{url('/home/detail')}}"><h1>&nbsp;&nbsp;&nbsp;&nbsp;发布中心</h1></a>
                  
                    <div style="margin-top:50px;margin-left:0px;"><h2>收藏车辆：</h2>
                          @foreach($str as $v)
                        <div>
                        <!-- 图片 -->
                        <img src="http://oubnp8yh1.bkt.clouddn.com/{{$v->cars_img}}" width="400px;" height="300px;">
                        <!-- 车型 -->
                        <div class="t"><h3>{{$v->cars_shuShi}}&nbsp;{{$v->cars_paiFang}}&nbsp; {{$v->cars_bianSu}}&nbsp;{{$v->cars_baoJia}}万&nbsp;</h3></div>
                        <!-- 审核状态 -->
                        
                        
                        </div>
                        @endforeach
                    </div>
                    





                </div>

        </div>
    </div>

@endsection