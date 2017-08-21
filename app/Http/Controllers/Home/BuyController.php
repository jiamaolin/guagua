<?php

namespace App\Http\Controllers\Home;


use App\Http\Model\Cars;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Session;
use App\Http\Model\UserCars;


class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $cars = DB::table('home_cars')->leftJoin('home_carpp','home_cars.cars_pp','=','home_carpp.p_id')->leftJoin('home_carsort','home_cars.cars_sort','=','home_carsort.car_id')->get();
//        dd($cars);
        return view('home.buy',['cars'=>$cars]);

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

    public function show($id,Request $request)
    {
        $cars = $request->all();
        $data = Cars::find($id);
//        dd($cars);
        session(['id'=>$id]);
        return view('home.detail', compact('cars', 'data'));

        // session(['id'=>$id]);
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

    public function shoucang(Request $request)
    {
        // return 11;
        // $url = $request->all();
        // dd($url);
        $cars_id = $request->session()->get('id');
        // dd($cars_id);
        $user_id = $request->session()->get('user');
        // dd($user_id->user_id);
        $res = UserCars::create( ['user_id' => $user_id->user_id , 'cars_id' => $cars_id ] );
        return back();

    }
}
