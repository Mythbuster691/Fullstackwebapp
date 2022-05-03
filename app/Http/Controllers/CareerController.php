<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = DB::table('city')->pluck('name','id');
        return view('career.create',compact('districts'));
    }

    public function getinterviewdestination(Request $request)
    {
        $centerid = DB::table('city_center')
                    ->where('cityid',$request->centerid)
                    ->pluck('centerid');

        $cities = DB::table('centers')->whereIn('id',$centerid)->get()->pluck('name','id');
        return response()->json($cities);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "fname" =>'required',
            "dob" => 'required|date',
            "contact" => 'required|numeric',
            "email" => 'required|unique:careers,email',
            "district" => 'required',
            "center" => 'required',
            "resume" => 'required',
            "center"=> 'required',
        ]);


        $career = new Career;
        $career->name = $request->name;
        $career->fathers_name = $request->fname;
        $career->date_of_birth = $request->dob;
        $career->contact_no = $request->contact;
        $career->email = $request->email;
        $career->district = DB::table('city')->where('id', $request->district)->first()->name;
        $career->interview_destination = DB::table('centers')->where('id', $request->center )->first()->name;
        $career->apply_for = $request->applyfor;
        if($request->hasFile('resume')){
            $career->resume = $request->file('resume')->store('pdf');
        }
        $career->booking_id = substr(md5(mt_rand()), 0, 6);

        $slots = DB::table('slots')->where('centerid', $request->center)->get();
        $slotdate = "";
        $slottiming = "";
        foreach($slots as $key => $slot){
            if($slot->max_seats > $slot->seats){
                $slotdate = $slot->slot_date;
                $slottiming = $slot->timing;
                break;
            }
        }

        $career->slotdate = $slotdate;
        $career->slottiming = $slottiming;




        $career->save();



        return redirect()->route('razorpay.index',encrypt($career->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit(Career $career)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        //
    }

    public function success(){
        return view('career.successpage');
    }

}
