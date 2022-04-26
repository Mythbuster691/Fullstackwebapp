<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class StatusController extends Controller
{
    public function status($id){
        $career = Career::findOrFail($id);
        $career->status = !$career->status;
        $career->save();
        return redirect()->back();
    }
}
