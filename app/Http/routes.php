<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home.index');
});

//后台登录页面
Route::get('admin/login','Admin\LoginController@login');

//验证码
Route::get('admin/yzm','Admin\LoginController@yzm');
Route::get('/code/captcha/{tmp}', 'Admin\LoginController@captcha');

//表单验证 业务逻辑
Route::post('admin/login','Admin\LoginController@dologin');
//加密、测试扩展
Route::get('admin/crypt','Admin\LoginController@crypt');

//后台路由组 prefix-url前缀  namespace命名空间 middleware中间件
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'login.admin'],
    function(){
//  后天登录首页 业务逻辑
    Route::get('index','IndexController@index');
    Route::get('info','IndexController@info');
//  退出后台
    Route::get('quit','IndexController@quit');
//  修改密码
    Route::get('pass','IndexController@pass');
//  修改密码业务逻辑
    Route::post('pass','IndexController@dopass');

//  用户模块
    Route::resource('user','UserController');
//  上传头像的逻辑处理
    Route::post('upload','UserController@picUpload');
    Route::put('upload','UserController@picUpload');

//  商品管理业务逻辑
    Route::resource('cars','CarsController');
    Route::post('sort','CarsController@sort');
    Route::get('suv','CarsController@suv');
    Route::post('images','CarsController@picUpload');
    Route::put('cars','CarsController@picUpload');


//  前台用户管理
    Route::resource('homeuser','HomeuserController');
    // 前台用户搜索
    Route::get('homeuser','HomeuserController@index');

    // 前台用户发布车辆信息审核管理
    Route::resource('homesell','HomesellController');
    // 发布信息搜索
    Route::get('homesell','HomesellController@index');



   















//后台的瓜子问题
//瓜子问题添加
Route::get('create','QuestionsController@create');
//瓜子问题插入
Route::post('insert','QuestionsController@insert');
//瓜子问题列表
Route::get('que/index','QuestionsController@index');
//瓜子问题删除
Route::get('delete/{id}','QuestionsController@delete');

Route::get('rep/rep/{id}','QuestionsController@rep');
//回复的数据添加
Route::post('re/insert','QuestionsController@repin');



});
















//前台业务逻辑组
//前台首页
Route::get('home/index','Home\IndexController@index');

// 获取验证码
Route::get('/phoneregister','Home\PhoneregisterController@sendCode');




Route::group(['prefix'=>'home','namespace'=>'Home'],
    function(){
        // 前台登陆页面
        Route::resource('login','LoginController');
        // 前台注册页面
        Route::resource('phoneregister','PhoneregisterController');

         // 前台退出按钮
        Route::get('quit','IndexController@quit');

//=============================================================== 

            // 中间件 如果登陆了就让他继续执行
            Route::group(['middleware'=>'login.home'],
            function(){
                // 前台个人信息（修改）
                Route::resource('detail','DetailController');
                // 卖车
                Route::resource('sell','SellController');

                // 卖车上传图片
                Route::post('imgs','SellController@picUpload');

                

            });



});


















//我要买车
Route::resource('home/buy','Home\BuyController');














//个人问答
Route::get('home/ask','Home\WendaController@index');
