@extends('layouts.home')
@section('title','我要卖车')
@section('content')

<div class="pop-box pop-sell js-pop-sell-01 show">
    <div class="pop-close"></div>
    <p class="sell-tit">只差<em>2</em>步，最高多卖<em>20%</em>，平均<em>7</em>天成交</p>
    <form id="user_info" action="{{url('/home/sell')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
    <ul class="form">
        <li>
            <h2>品牌：<select name="pp_id" id="carsPP">
                                <option  value="null">==请选择==</option>
                                @foreach($carspp as $v)
                                <option class="cars_pp" value="{{ $v->p_id }}">{{ $v->p_name }}</option>
                                    @endforeach
                      </select></h2>
        </li>
        <li>
            <h2>车型：<input type="text" name="car_name"></h2>
        </li>
        <li>
            <h2>款式：<input type="text" name="car_type"></h2>
        </li>
        <li>
            <h2>排量：<input type="text" name="car_paiFang"></h2>
        </li>
        <li>
            <h2>变速箱：<input type="text" name="car_biansu"></h2>
            <input type="hidden" name="status" value="1" >
        </li>
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
                                    url: "/home/imgs",
                                    data: formData,
                                    /*dataType:'json',我传的不是json数据*/
                                    type: "POST",
                                    async: true,
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    success: function(data) {
                                       console.log(data);
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
        
    </ul>
    <button class="sub-btn" id="step1" data-gzlog="tracking_type=click&amp;eventid=0220050000000127">下一步</button>
    </form>
    <p class="form-error"></p>
    
    
</div>
@endsection