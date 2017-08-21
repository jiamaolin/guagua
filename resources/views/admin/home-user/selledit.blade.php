@extends('layouts.admin')
@section('content')
<body>
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">用户管理</a> &raquo; 修改用户
    </div>
    <!--面包屑导航 结束-->

    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">
        <div class="result_title">
            
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="#"><i class="fa fa-plus"></i>新增用户</a>
                <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->
    
    <div class="result_wrap">
        <form action="{{url('admin/homesell/'.$sell->id)}}" method="post">
            <table class="add_tab">
                {{csrf_field()}}
                {{--将提交方式修改为put方式--}}
                <input type="hidden" name="_method" value="put">
{{--                {{method_field('put')}}--}}
                <tbody>
                <tr>
                    <th>用户名：</th>
                    <td>
                        <input type="text" name="user_name" value="{{$sell->home_user_name}}" readonly="reload">
                        
                    </td>
                </tr>
                <tr>
                    <th>品牌：</th>
                    <td>
                        <input type="text" name="cars_pp" value="{{$sell->p_name}}" readonly="reload">
                    </td>
                </tr>
                <tr>
                    <th>车型：</th>
                    <td>
                        <input type="text" name="car_type" value="{{$sell->car_type}}" readonly="reload">
                    </td>
                </tr>
                <tr>
                    <th>款式：</th>
                    <td>
                        <input type="text" name="car_name" value="{{$sell->car_name}}" readonly="reload">
                    </td>
                </tr>
                 <tr>
                    <th>排放：</th>
                    <td>
                        <input type="text" name="cars_paiFang" value="{{$sell->car_paiFang}}" readonly="reload">
                    </td>
                </tr>
                <tr>
                    <th>图片：</th>
                    <td>
                        <img name="cars_img" src="http://oubnp8yh1.bkt.clouddn.com/{{ $sell->cars_img }}" alt="" width="500">
                        <input type="hidden" name="car_imgs" value="{{ $sell->cars_img }}">
                    </td>
                </tr>
                <tr>
                    <th>价格：</th>
                    <td>
                        <input type="text" name="cars_baojia">
                    </td>
                </tr>
                <tr>
                    <th>状态：</th>
                    <td>
                        <input type="radio" name="user_status" value="1" >审核通过
                        <input type="radio" name="user_status" value="2" >禁止发布
                        
                    </td>
                </tr>

                    <tr>
                        <th></th>
                        <td>
                            <input type="submit" value="提交">
                            <input type="button" class="back" onclick="history.go(-1)" value="返回">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

</body>
@endsection