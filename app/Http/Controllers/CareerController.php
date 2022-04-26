<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

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
        $timing = DB::select('select * from timing');
        $city = DB::select('select  * from city where fstateid=33 LIMIT 5');
        return view('career.create',compact('city','timing'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $career = new Career;
        $career->name = $request->name;
        $career->fathers_name = $request->fname;
        $career->date_of_birth = $request->dob;
        $career->contact_no = $request->contact;
        $career->email = $request->email;
        $career->district = $request->district;
        $career->interview_destination = $request->destination;
        $career->apply_for = $request->applyfor;
        if($request->hasFile('resume')){
            $career->resume = $request->file('resume')->store('images');
            }
        $career->booking_id = substr(md5(mt_rand()), 0, 6);

        $career->save();
        return redirect('/career/create')->with('success', 'Your application  has been Submit  Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        //
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

}
