@extends('layouts.admin')
@section('content')
<body>
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{ url('admin/index') }}" target="_parent">首页</a> &raquo; <a href="#">问题管理</a> &raquo; 问题列表
    </div>
    <!--面包屑导航 结束-->

	<!--结果页快捷搜索框 开始-->
	
    <!--结果页快捷搜索框 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="{{ url('admin/create') }}"><i class="fa fa-plus"></i>新增问题</a>
                   
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                        {{--<th class="tc"></th>--}}
                        <th class="tc">ID</th>
                        <th>问题标题</th>
                        <th>问题类型</th>
                        <th>添加时间</th>
                       
                        <th>操作</th>
                    </tr>
                    @foreach($ques as $k=>$u)
                    <tr>
                        {{--<td>
                            <input type="checkbox" name="user[]" value="{{ $u->qu_id }}">
                        </td>--}}
                        <td class="tc">{{ $u->qu_id }}</td>
                        <td>
                            <a href="#">{{ $u->q_name }}</a>
                        </td>
                        <td>{{ $u->q_title }}</td>
                        <td>{{ date('Y-m-d H:i:s', $u->q_time) }}</td>
                       
                        <td>
                          
                            <a href="{{ url('admin/delete') }}/{{ $u->qu_id }}">删除</a>
                             <a href="{{ url('admin/rep/rep') }}/{{ $u->qu_id }}">回复</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
               

                <div class="page_list">
                    {!! $ques->render() !!}
                </div>
                <style>
                    .result_content ul li span{color:red;}
                </style>
            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->
</body>
@endsection