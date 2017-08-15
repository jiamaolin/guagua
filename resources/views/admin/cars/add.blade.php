@extends('layouts.admin')
@section('content')
<body>
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">商品管理</a> &raquo; 添加商品
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
                <a href="/admin/cars"><i class="fa fa-plus"></i>商品列表</a>
                <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->
    
    <div class="result_wrap">
        <form id="user_info" action="{{ url('admin/cars') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th><i class="require">*</i>用户名：</th>
                        <td>
                            <input type="text" name="user_name" value="{{ old('user_name') }}">
                        </td>
                        <th><i class="require">*</i>用户电话：</th>
                        <td>
                            <input type="text" name="user_phone" value="{{ old('user_phone') }}">
                            <span><i class="fa fa-exclamation-circle yellow"></i>请准确填写用户联系方式</span>
                            <p>请准确填写用户联系方式</p>
                        </td>
                    </tr>
                    <tr>
                        <th width="120"><i class="require">*</i>品牌-车系-车型：</th>
                        <td>
                            <select name="cars_pp" id="carsPP">
                                <option  value="null">==请选择==</option>
                                @foreach($pp as $v)
                                <option class="cars_pp" value="{{ $v->p_id }}">{{ $v->p_name }}</option>
                                    @endforeach
                            </select>
                            <select name="cars_sort" id="carssort">
                                <option value="">==请选择==</option>
                                {{--@foreach($sort as $k=>$v)
                                    <option value="{{ $v->car_id }}">{{ $v->car_name }}</option>
                                @endforeach--}}
                            </select>
                        </td>
                        
                        <th><i class="require">*</i>车型：</th>
                        <td>
                            <input type="text" id="car_type" name="cars_suv" value="" disabled>
                        </td>

                        <script type="text/javascript">
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            var index = null;
                            $('#carsPP').change(function () {
//                                初始化车系
                                $('#carssort').html('<option value="">==请选择==</option>');
                                index = $(this).val();//pid
                                $.ajax({
//                                        注意路由不要写错,字母不要写错
                                    url: "/admin/sort",
                                    type: "POST",
                                    data: "pid="+index,
//                                    dateType:'json',
                                    success: function(data){
                                        {{--{{json_decode(data)}}--}}
                                        console.log(data);
                                        for (var i = 0; i < data.length; i++) {
                                            $('#carssort').append("<option value="+data[i].car_id+">"+data[i].car_name+'</option>');
                                        }

                                    },
                                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                        alert("选择失败，请检查网络后重试");
                                    },
                                    async:true,
                                });
                            });
                            $('#carssort').change(function(){
                                index = $(this).val();//car_id
                                $.ajax({
//                                        注意路由不要写错,字母不要写错
                                    url: "/admin/suv",
                                    type: "get",
                                    data: "car_id="+index,
//                                    dateType:'json',
                                    success: function(data){
                                        {{--{{json_decode(data)}}--}}
                                        console.log(data);
                                        $('#car_type').attr('disabled',null);
                                        $('#car_type').val(data[0].car_type);
                                    },
                                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                        alert("选择失败，请检查网络后重试");
                                    },
                                    async:true,
                                });
                            });
                    </script>

                    </tr>
                    <tr>
                        <th width="120"><i class="require">*</i>年款：</th>
                        <td>
                            <select name="cars_kuanShi" class="require">
                                <option value="">==请选择==</option>
                                @foreach($kuanShi as $v)
                                <option value="{{ $v->kuan_type }}">{{ $v->kuan_type }}</option>
                                    @endforeach
                            </select>
                        </td>
                        <th width="120"><i class="require">*</i>排量：</th>
                        <td>
                            <select name="cars_paiLiang">
                                <option value="">==请选择==</option>
                                @foreach($paiLiang as  $v)
                                <option value="{{ $v->pai_type }}">{{ $v->pai_type }}</option>
                                    @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th width="120"><i class="require">*</i>变速箱：</th>
                        <td>
                            <select name="cars_bianSu">
                                <option value="">==请选择==</option>
                                @foreach($bianSu as $v)
                                <option value="{{ $v->bian_type }}">{{ $v->bian_type }}</option>
                                    @endforeach
                            </select>
                        </td>
                        <th width="120"><i class="require">*</i>舒适类型：</th>
                        <td>
                            <select name="cars_shuShi" class="require">
                                <option value="">==请选择==</option>
                                @foreach($shuShi as $v)
                                <option value="{{ $v->shu_type }}">{{ $v->shu_type }}</option>
                                    @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th width="120"><i class="require">*</i>排放标准：</th>
                        <td>
                            <select name="cars_paiFang">
                                <option value="">==请选择==</option>
                                @foreach($paiFang as $v)
                                <option value="{{ $v->fang_type }}">{{ $v->fang_type }}</option>
                                    @endforeach
                            </select>
                        </td>
                        <th><i class="require">*</i>上牌时间：</th>
                        <td>
                            <input class="easyui-datebox" name="cars_time" required="required" height="20" data-options="formatter:myformatter,parser:myparser">
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>过户次数：</th>
                        <td>
                            <input type="text" class="sm" name="cars_guoHu" value="{{ old('cars_guoHu') }}">次
                            <span><i class="fa fa-exclamation-circle yellow"></i>这里是短文本长度</span>
                        </td>
                        <th><i class="require">*</i>行驶里程：</th>
                        <td>
                            <input type="text" name="cars_liCheng" value="{{ old('cars_liCheng') }}"><span>万公里</span>
                        </td>
                    </tr>
                    <tr>
                        <th>上牌地：</th>
                        <td>
                            <select name="cars_shangPai">
                                <option value="">==请选择==</option>
                                @foreach($address as $v)
                                    <option value="{{ $v->city_name }}">{{ $v->city_name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <th>看车地址：</th>
                        <td>
                            <select name="cars_kanChe">
                                <option value="">==请选择==</option>
                                @foreach($address as $v)
                                    <option value="{{ $v->city_name }}">{{ $v->city_name }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>新车价格：</th>
                        <td>
                            <input type="text" class="sm" name="cars_yuanJia" value="{{ old('cars_yuanJia') }}">万元
                            <span><i class="fa fa-exclamation-circle yellow"></i>这里是短文本长度</span>
                        </td>
                        <th>车主报价：</th>
                        <td>
                            <input type="text" class="sm" name="cars_baoJia" value="{{ old('cars_baoJia') }}">万元
                            <span><i class="fa fa-exclamation-circle yellow"></i>这里是默认长度</span>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>强险到期：</th>
                        <td>
                            <input class="easyui-datebox" value="{{ old('cars_qiangXian') }}" name="cars_qiangXian" data-options="formatter:myformatter,parser:myparser" required="required">
                        </td>
                        <th><i class="require">*</i>商业险到期：</th>
                        <td>
                            <input type="text" value="{{ old('cars_shangYe') }}" name="cars_shangYe" class="easyui-datebox" required="required" data-options="formatter:myformatter,parser:myparser">
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>年检到期：</th>
                        <td>
                            <input class="easyui-datebox" value="{{  old('cars_nianJian') }}" name="cars_nianJian" required="required" height="20" data-options="formatter:myformatter,parser:myparser">
                        </td>
                        <th><i class="require">*</i>状态(status)：</th>
                        <td>
                            <select name="cars_status">
                                <option value="">==请选择==</option>
                                <option value="1">上架</option>
                                <option value="0">下架</option>
                                <option value="2">已售</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>主图：</th>
                        <td>
                            <input id="pic_upload" type="file" name="cars_img1" multiple="true">
                            <p><img id="img" title="pic" alt="上传后显示图片"></p>
                            <input id="images" type="hidden" name="cars_img" value="">
                        </td>
                        <th></th>
                        <td></td>
                        {{--<th>请添加车辆详细图片：</th>
                        <td><input type="button" class="back" onclick="addImg()" value="添加"></td>--}}
                        <script type="text/javascript">

                            $(function () {
                                $('#pic_upload').change(function () {
                                    uploadImage();
                                });
                            });
                            function uploadImage() {
                                /*1、判断是否有文件上传
                                 2、检验文件后缀名是否符合标准
                                 3、成功后发送ajax*/
                                var imgPath = $('#pic_upload').val();
                                if(imgPath == ""){
                                    alert("请选择上传的图片！");
                                    return;
                                }

                                var strExt = imgPath.substr(imgPath.lastIndexOf('.') + 1);
                                if(strExt != 'jpeg' && strExt != 'jpg' && strExt != 'png' && strExt != 'gif' && strExt != 'bmp'){
                                    alert("请选择图片格式上传！");
                                    return;
                                }
                                var formData = new FormData($('#user_info')[0]);
                                formData.append('_token', '{{ csrf_token() }}');
                                {{-- console.log(formData);--}}
                                $.ajax({
                                    url: "/admin/images",
                                    data: formData,
                                    /*dataType:'json',我传的不是json数据*/
                                    type: "POST",
                                    async: true,
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    success: function(data) {
//                                        console.log(data);
                                        alert("上传成功");
                                        $('#images').val(data);
                                        $('#img').attr({src:'http://oubnp8yh1.bkt.clouddn.com/'+data, width:"100"});
                                    },
                                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                        alert("上传失败，请检查网络后重试");
                                    }
                                });
                            }

                        </script>
                    </tr>
                    <tr>
                        <th></th>
                        <td colspan="3">
                            <input type="hidden" name="cars_addTime" value="{{ time() }}">
                            <input type="submit" name="" value="提交">
                            <input type="button" class="back" onclick="history.go(-1)" value="返回">
                        </td>

                    </tr>
                </tbody>
            </table>
        </form>
    </div>

    <style>
        table.add_tab tr td span{height:22px;}
    </style>
    <script type="text/javascript">
        function myformatter(date){
            var y = date.getFullYear();
            var m = date.getMonth()+1;
            var d = date.getDate();
            return y+'-'+(m<10?('0'+m):m)+'-'+(d<10?('0'+d):d);
        }
        function myparser(s){
            if (!s) return new Date();
            var ss = (s.split('-'));
            var y = parseInt(ss[0],10);
            var m = parseInt(ss[1],10);
            var d = parseInt(ss[2],10);
            if (!isNaN(y) && !isNaN(m) && !isNaN(d)){
                return new Date(y,m-1,d);
            } else {
                return new Date();
            }
        }
        function doCheck()
        {
            var add = document.getElementById('myform');
            if (add.name.value == ''){
                alert('收货人不能为空');
                return false;
            }
            if (add.phone.value.match(/^1[34578]\d{9}$/) == null){
                alert('手机号格式不对');
                return false;
            }
            if (add.province.value == ''||add.province.value == '---请选择---'){
                alert('请选择所在地');
                return false;
            }
            if (add.city.value == ''||add.city.value == '---请选择---'){
                alert('请选择所在地');
                return false;
            }
            if (add.county.value == ''||add.county.value == '---请选择---'){
                alert('请选择所在地');
                return false;
            }
            if (add.info.value == ''){
                alert('不能为空');
                return false;
            }
            return true;
        }
    </script>
</body>
@endsection