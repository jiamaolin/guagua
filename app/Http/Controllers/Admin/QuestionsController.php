<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Questions;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//require_once app_path().'/Org/code/Code.class.php';
//use App\Org\code\Code;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class QuestionsController extends Controller
{
    /*
        问题添加    
    */
        public function create()
        {
             $questions = Questions::select()->get();
             // dd($questions);

              return view('admin.questions.create',compact('questions'));
        }

        //问题的插入
        public function insert(Request $request)
        {
            $res = $request->except('_token');

            $res['q_time'] = time();

            //添加问题到数据库
            $ques = DB::table('questions')->insert($res);

            //  成功返回列表页 不成功返回添加页面
            if($ques)
            {
                return redirect('admin/que/index');
            }else{
                return back()->with('errors','问题添加失败')->withInput();
            }
        }


        //问题的列表页面
        public function index()
        {
           $ques = DB::table('questions')
            ->join('question_type', 'questions.q_id', '=', 'question_type.q_id')
          
            ->select('questions.*', 'question_type.*')
            ->paginate(10);

            // dd($ques);
             return view('admin.questions.index',compact('ques'));
        }


        //问题删除
       public function delete($id)
    {
//        
        

        $res = DB::table('questions')->where('qu_id',$id)->delete();
//        删除成功
        if($res){
//            Storage::delete("/".$photo);
            return redirect('admin/que/index');
        }else{
//            Storage::delete('/'.$photo);
           return back();
        }
        //问题回复
}
    
         public function rep($id)
    {
//        
        

        $res = DB::table('questions')->where('qu_id',$id)->first();
//      
        
        if($res){
//            Storage::delete("/".$photo);
            return view('admin.questions.rep',compact('res'));
        }else{
//            Storage::delete('/'.$photo);
           return back();
        }


       
//          return $data;
//          return response()->json($data);
//          dd($data);
//          return  json_parse($data);
    }

//回复的内容的添加
    public function repin(Request $request)
    {
         $res = $request->except('_token','q_name');
//插入数据到数据库
        $res['so_time'] = time();
        
        $ress = DB::table('solutions')->insert($res);

        if($ress)
        {
            return redirect('admin/que/index');
        }else{
             return back()->with('errors','回复添加失败')->withInput();
        }
    }
   
    

// 
}

