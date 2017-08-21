<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Cars;
use Session;
use DB;
use App\Http\Model\UserCars;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Session::get('user');
        // dd($user['user_id']);
        $users = DB::table('user_cars')
                ->where('user_id',$user['user_id'])
                ->get();
        // dd($users->cars_id);
        $arr = [];
        foreach ($users as $v) {
            // echo ($v->cars_id).'</br>';
            $cars = DB::table('home_cars')->where('cars_id',$v->cars_id)->get();

            $arr[] = $cars;
        };
        // dd($arr->cars_id);
        $str = [];
        foreach ($arr as $key => $value) {
            // dd($value);
            // $str = $value;
            foreach ($value as $aa => $bb) {
               
                    $str[] = $bb;
              
            }
        }
       

        return view('home.detail.collection',compact('str'));
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
        // dd($id);
         $user = Session::get('user'); 
        // dd($user_id['user_id']);
         $user_id = $user['user_id'];
         // dd($user_id);
         $arr = ['user_id'=>$user_id,'cars_id'=>$id];
        $res =  DB::table('user_cars')
            ->where($arr)->delete();
        // dd($res);
            if ( $res ){
                return back();
            }

    }
    
}
