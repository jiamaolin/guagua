<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Http\Model\UserSell;
// use DB;


class SellController extends Controller
{

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


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $carspp = DB::table('home_carpp')->get();
        // dd($carspp);
        return view('home.sell.index',compact('carspp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return 111;

        $user = Session::get('user');
        // dd($user['user_id']);
        $input = Input::except('_token','cars_img1');
        // dd($input);
        // $input['status'] = 1;
        $input['home_user_id'] = $user['user_id'];
        $input['home_user_name'] = $user['user_name'];
        $res = UserSell::create($input);

        // dd($res);
        if( $res ){
            return redirect('/home/detail');
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
