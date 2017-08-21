@extends('layouts.admin')
@section('content')
<body>
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{ url('admin/index') }}" target="_parent">首页</a> &raquo; <a href="#">问答管理</a> &raquo; 问题添加
    </div>
    <!--面包屑导航 结束-->

    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
            @if (count($errors) > 0)
                <div class="mark">
                    <ul>
                        @if(is_object($errors))
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        @else
                            <li>{{ session('errors') }}</li>
                        @endif
                    </ul>
                </div>
            @endif
        </div>
        <script>
            $(function(){
                $('.mark').fadeOut(5000, function () {
                    $(this).css('display','none');
                });
            })
        </script>
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{ url('admin/create') }}"><i class="fa fa-plus"></i>问题添加</a>
                <a href="{{ url('admin/que/index') }}"></i>问题列表</a>
            </div>
            
            
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->
    
    <div class="result_wrap">
        <form id="user_info" action="{{ url('admin/insert') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th width="120"><i class="require">*</i>问题类型：</th>
                        <td>
                            <select name="q_id">
                                <option>==请选择==</option>
                                @foreach($questions as $res)
                                <option value="{{ $res->q_id }}">{{ $res->q_title }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>问题标题：</th>
                        <td>
                            <input type="text" name="q_name" value="">
                            <p></p>
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