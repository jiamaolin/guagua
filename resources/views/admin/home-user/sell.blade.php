@extends('layouts.admin')
@section('content')
<body>
    <!--面包屑导航 开始-->
    
    <!--面包屑导航 结束-->

	<!--结果页快捷搜索框 开始-->
	<div class="search_wrap">
        <form action="{{url('admin/homesell')}}" method="get">
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
                        <th>品牌</th>
                        <th>车型</th>
                        <th>款式</th>
                        <th>排放</th>
                        <th>添加时间</th>
                        <th>图片</th>
                        <th>状态</th>
                        <th>操作</th>

                    </tr>
                    @foreach($sell as $k=>$v)
                    <tr>
                       
                        <td class="tc">{{ $v->id }}</td>
                        <td>
                            <a href="#">{{ $v->home_user_name }}</a>
                        </td>
                        <td>{{ $v->p_name }}</td>
                        <td>{{ $v->car_type }}</td>
                        <td>{{ $v->car_name }}</td>
                        <td>{{ $v->car_paiFang }}</td>
                        <td>{{ $v->created_at }}</td>
                        <td><img src="http://oubnp8yh1.bkt.clouddn.com/{{ $v->cars_img }}" alt="" width="80"></td>
                        
                        <td>
                            @if ( $v->status == 1 )
                                待审核
                            @elseif ($v->status == 2 )
                                审核通过
                           
                            @endif
                        </td>

                        <td>
                            
                             <a href="{{url('admin/homesell/'.$v->id.'/edit')}}">修改</a>
                           
                           </td>
                                           
                    </tr>
                    @endforeach
                </table>
                

                <div class="page_list">
                   
                    {!! $sell->appends(['keywords' => $keyword])->render() !!}
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