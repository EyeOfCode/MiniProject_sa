<?php

namespace App\Http\Controllers\Minicon;

use App\Http\Controllers\Controller;

class register extends Controller
{

    public function getregister()
    {
        return view('viewsminisa_pj.register');
    }
    public function postregister()
    {   
        $register = new \App\registers();
        $register->name = \Input::get('name');
        $register->username = \Input::get('username');
        $register->password = \Input::get('password');
        
        if ($register->username !="" && $register->password !="" && $register->name!="") {
                $register->save();
                echo "<script>window.top.window.showResult('1');</script>";
            }else{
            	echo "<script>window.top.window.showResult('2');</script>";
            }
    }
}
?>