@extends('layouts.admin')
@section('content')
<body>
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{ url('admin/index') }}" target="_parent">首页</a> &raquo; <a href="#">前台用户管理</a> &raquo; 用户列表
    </div>
    <!--面包屑导航 结束-->

	<!--结果页快捷搜索框 开始-->
	<div class="search_wrap">
        <form action="{{url('admin/homeuser')}}" method="get">
            <table class="search_tab">
                <tr>
                    <th width="70">关键字:</th>
                    <td><input type="text" name="keywords" value="{{isset($keyword)?$keyword:''}}" placeholder="关键字"></td>
                    <td><input type="submit"  value="查询"></td>
                </tr>
            </table>
        </form>
    </div>
    <!--结果页快捷搜索框 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="{{ url('admin/user/create') }}"><i class="fa fa-plus"></i>新增用户</a>
                    <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                    <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
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
                        <th>用户名</th>
                        <th>联系电话</th>
                        <th>创建时间</th>
                        <th>修改时间</th>
                        <th>状态</th>
                        <th>操作</th>

                    </tr>
                    @foreach($user as $k=>$v)
                    <tr>
                        {{--<td>
                            <input type="checkbox" name="user[]" value="{{ $u->ad_id }}">
                        </td>--}}
                        <td class="tc">{{ $v->user_id }}</td>
                        <td>
                            <a href="#">{{ $v->user_name }}</a>
                        </td>
                        <td>{{ $v->user_phone }}</td>
                        <td>{{ $v->created_at }}</td>
                        <td>{{ $v->updated_at }}</td>
                        <td>
                            @if ( $v->user_status === 1 )
                                允许登陆
                            @elseif ($v->user_status === 2 )
                                禁止登陆
                           
                            @endif
                        </td>

                        <td>
                            
                             <a href="{{url('admin/homeuser/'.$v->user_id.'/edit')}}">修改</a>
                           
                           </td>
                                           
                    </tr>
                    @endforeach
                </table>
                

                <div class="page_list">
                    {!! $user->appends(['keywords' => $keyword])->render() !!}
                    
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