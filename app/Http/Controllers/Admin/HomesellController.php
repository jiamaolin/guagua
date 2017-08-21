<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Model\UserSell;
use Input;
use App\Http\Model\HomeUser;
use App\Http\Model\Carpp;
// use App\Http\Model\Carsort;

class HomesellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // return 111;
        $sell = DB::table('user_sell')
            ->join('home_carpp', 'pp_id', '=', 'p_id')
            
            ->where('home_user_name','like','%'.$request['keywords'].'%')
            ->paginate(5);
            // dd($sell);
        $keyword = $request->input('keywords');
        return view('admin.home-user.sell',compact('sell','keyword'));
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
        // $sell = UserSell::find($id);
        $sell = DB::table('user_sell')
            ->join('home_carpp', 'pp_id', '=', 'p_id')
            
            ->where('id',$id)
            ->first();

            // ->paginate(5);
        // dd($sell);
        return view('admin.home-user.selledit',compact('sell'));

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
        $input = Input::all();
        // $user = HomeUser::find($id);
        // dd($user);
        // $carpp = Carpp::find('p_name',$input['cars_pp']);

        $carpp = \DB::table('home_carpp')
                ->where('p_name',$input['cars_pp'])
                ->first();
        dd($carpp->p_id);



        // $input = Input::except('_token','_method');
        // dd($input);
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
