<?php

namespace App\Http\Controllers\Minicon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class index extends Controller
{

    public function getindex(Request $request)
    {
        $st = \App\statususers::where('username', Session::get('name'))->get();
        $status = \App\statususers::findOrNew($st[0]['id']);
        return view('viewsminisa_pj.index')->with('st',$status);
    }
}
?>