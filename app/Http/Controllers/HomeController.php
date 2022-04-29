<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Career;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $careers = Career::paginate(8);
        return view('auth.dashboard.home',compact('careers'));
    }

    public function status(Request $request,$id){
        $career = Career::findOrFail($id);
        $career->status = $request->status;
        $career->save();
        return redirect()->back();
    }
}
