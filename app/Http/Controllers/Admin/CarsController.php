<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Cars;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CarsController extends Controller
{
//    处理品牌-车系-suv类别业务逻辑
    public function sort(Request $request)
    {
        /*json数据：
        1） 并列的数据之间用逗号（”,”）分隔。
        2） 映射用冒号（”:”）表示。
        3） 并列数据的集合（数组）用方括号(“[]”)表示。
        4） 映射的集合（对象）用大括号（”{}”）表示。
        */
        $pid = $request->all();
        $data = DB::table('home_carsort')->where('pid','=',$pid['pid'])->get();

        return $data;
    }
//    处理车型
    public function suv()
    {
        $car_id = $_GET['car_id'];
        $data = DB::table('home_carsort')->where('car_id','=',$car_id)->get();
        return $data;
    }
//    上传车辆图片业务处理
//    protected $filepath = '';
    public function picUpload()
    {
        $file = \Input::file('cars_img1');
//      检查文件是否有效
        if($file->isValid()){
//            文件后缀名
            $ext = $file->getClientOriginalExtension();
//            保存在服务器上的新文件名
            $newName = date('YmdHis').mt_rand(11111,99999).'.'.$ext;
//            将文件从临时目录移动到指定目录
//            $file->move(public_path().'/uploads',$newName);
//          将上传的文件存储在七牛云上
            $disk = \Storage::disk('qiniu');
            \Storage::disk('qiniu')->writeStream('uploads/'.$newName, fopen($file->getRealPath(), 'r'));
            $filepath = 'uploads/'.$newName;
//            OSS上传
//            $filepath = 'uploads/'.$newName;
//            OSS::upload($filepath,$file->getRealPath());

            return  $filepath;
        }
    }
//    添加详细图片的业务处理
    public function imgDetail()
    {
        return view('');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cars = Cars::all();
        $keyword = $request->input('keywords');
//        dd($keyword);
        return view('admin.cars.list',compact('cars','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pp = DB::table('home_carpp')->get();//品牌
        $sort = DB::table('home_carsort')->get();//车系
        $kuanShi = DB::table('home_kuanShi')->get();//款式
        $paiLiang = DB::table('home_paiLiang')->get();//排量
        $bianSu = DB::table('home_bianSu')->get();//变速箱
        $shuShi = DB::table('home_shuShi')->get();//舒适类型
        $paiFang = DB::table('home_paiFang')->get();//排放标准
        $suv = DB::table('cars_suv')->get();//suv类别
        $address = DB::table('home_city')->orderBy('firstCase')->get();

        return view('admin.cars.add',compact('pp','sort','kuanShi','paiLiang','paiFang','bianSu','shuShi','suv','address'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        处理上传的数据
        $input = $request->except('_token','cars_img1');

        //        处理接收数据的业务逻辑
//    1、获取接收数据 头像另做处理 picUpload()
        $preg = '/^1[3578]\d{9}$/';
        $rule = [
            'user_name'=>'required|between:5,18',
            'user_phone'=>'required|regex:'.$preg,
        ];
        $mess = [
            'user_name.required'=>'用户名必须输入',
            'user_name.between'=>'用户名必须在5-18位之间',
            'user_name.alpha'=>'用户名必须为字母',
            'user_phone.required'=>'工号必须输入',
            'user_phone.regex'=>'手机号必须符合长度',
        ];
        $validator = Validator::make($input,$rule,$mess);
//        如果表单验证失败
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
//    2、表单验证 Validator::make($input, $rule, $mess);
//    3、发送ajax
//    4、如果验证失败，返回继续填写

//    5、成功则更新用户表 同时更新用户角色表 role_user
        $res = Cars::create($input);

//    6、返回用户列表页
        if($res){
            return redirect('admin/cars');
        }else{
            return back()->with('errors','商品添加失败')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
