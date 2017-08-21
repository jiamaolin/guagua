<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SMS\M3Result;
use App\SMS\SendTemplateSMS;
use Input;
use Session;
use Illuminate\Support\Facades\Validator;
use Crypt;
use App\Http\Model\HomeUser;

class PhoneregisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // echo '12231';

        return view('home.phoneregister.register');
    }

    /**
     *
     *获取验证码
     *
     */
    public function sendCode(Request $request)
    {

    // 调用SendTemplateSMS的sendTemplateSMS($to,$datas,$type)这个方法
        // 参数1 发送到的手机号是： 参数2 模板中需要的变量（随机数和时间）参数3模板id

        // 参数1手机号
        $phone = $request['phone'];

        // 参数2 随机数 和 时间
       $r =  rand(1000,9999);
       session(['phone'=>$r]);
        $templateSms = new SendTemplateSMS();

        $M3Result = new M3Result();
        $M3Result =  $templateSms->sendTemplateSMS($phone,array($r,5),1);
    //  将短信平台返回的对象数据格式化为json格式
        return $M3Result->toJson();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return 111;
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
        
        // $input = Input::except('_token');

        // $input['code'] = Session::get('phone');
        // // dd($input);
        // $input = Input::except('user_copass','_token');
        $input = Input::all();
        // dd($input);
        $rule = [
            'user_name'=>'required',
            'user_pass'=>'required|between:6,18',
            'user_copass'=>'same:user_pass',
            ];

        $msg = [
            'user_name.required'=>'请输入账号',
            'user_pass.required'=>'请输入密码',
            'user_pass.between:6,18'=>'密码请在6~18位',
            'user_copass.same:user_pass'=>'两次密码请输入一致',
            ];

        if(strtoupper($input['code'])  != session('phone')){
           return back()->with('error','验证码错误');
        }

        
        // dd($input);
        $input = Input::except('user_copass','_token','code');
        $input['user_pass'] = Crypt::encrypt($input['user_pass']);
        $input['user_status']=1;
        $validator = Validator::make($input,$rule,$msg);

        // dd($input);
        $res = HomeUser::create($input);
        // dd($res);
        if( $res ){
            return redirect('/home/login');
        }else{
            return back()->with('errors','用户注册失败');
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
