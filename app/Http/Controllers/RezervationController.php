<?php

namespace App\Http\Controllers;

use App\Models\Rezervation;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class RezervationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Rezervation::where('user_id',Auth::id())->get();
        return view('home.user_rezervation',['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $transfers = DB::table('transfers')->get();
        $data = Rezervation::all();
        return view('home.user_rezervation_add', ['transfers' => $transfers,'data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transfer = Transfer::where('id', $request->transfer_id)->first();
        $price = $transfer->base_price + $transfer->km_price;
        $data = new Rezervation;
        $data -> user_id = Auth::id();
        $data -> transfer_id = $request->input('transfer_id');
        $data -> pick_up_location = $request->input('pick_up_location');
        $data -> drop_off_location = $request -> input('drop_off_location');
        $data -> price = $price;
        $data -> pick_up_date = $request -> input('pick_up_date');
        $data -> pick_up_time = $request -> input('pick_up_time');
        $data -> ip = $_SERVER['REMOTE_ADDR'];
        $data -> save();
        return redirect() -> route('user_rezervation')->with('success','Reservation done successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function show(Rezervation $rezervation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function edit(Rezervation $rezervation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rezervation $rezervation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rezervation $rezervation)
    {
        //
    }
}
