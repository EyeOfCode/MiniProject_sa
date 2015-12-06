<?php

namespace App\Http\Controllers\Minicon;

use App\Http\Controllers\Controller;
use Session;

class index extends Controller
{

    public function getindex()
    {
        $user = \App\users::All();
        return view('viewsminisa_pj.index')->with('users',$user);
    }
}
?>