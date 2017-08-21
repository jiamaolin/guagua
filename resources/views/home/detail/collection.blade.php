@extends('layouts.home')
@section('title','个人详情')
@section('content')
	<!-- body体 -->
    <div class="person-main">
        <div class="person-left js-left-side">
            <p class="user-img"></p>
                <div style="width:800px;height:3000px;border:1px solid white
                ;margin-left:500px;margin-top:350px;">
                    
                    
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
                        <form action="{{url('home/collection/'.$v->cars_id)}}" method="post">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit"> 删除</button>

                        </form>
                        
                        </div>
                        @endforeach
                    </div>
                    





                </div>

        </div>
    </div>
        <script>

        function delUser(id){
//            参数1 要请求的服务器路由
//            参数2 请求要携带的参数数据  _method：delete  _token
//              参数3 回调函数,回调函数的参数data表示服务器返回的数据
//            $.post(URL,data,callback);
//询问框   
            // alert(123);
            confirm('确认删除吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
//            layer.msg('删除成功', {icon: 1});
                $.post("{{url('home/collection/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){
//                console.log(data);
                    if(data.status == 0){
                        location.href = location.href;
                        layer.msg('删除成功', {icon: 5});
                    }else{
                        location.href = location.href;
                        layer.msg('删除失败', {icon: 6});
                    }

                });

            }, function(){

            });

        }


    </script>

@endsection