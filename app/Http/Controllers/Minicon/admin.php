<?php

namespace App\Http\Controllers\Minicon;

use App\Http\Controllers\Controller;
use Session;

class admin extends Controller
{

    public function getadmin()
    {
        $user = \App\users::All();
        return view('viewsminisa_pj.Admin')->with('users',$user);
    }
}
?>