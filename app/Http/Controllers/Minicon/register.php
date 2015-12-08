<?php

namespace App\Http\Controllers\Minicon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class register extends Controller
{

    public function getregister()
    {
        return view('viewsminisa_pj.register');
    }

    public function postregister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|max:12',
        ]);
        $user = new \App\users();
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->name = $request->input('name');
        $user->save();
        $status = new \App\statususers();
        $status->username = $request->input('name');
        $status->save();
        Session::set('id', $user->id);
        Session::set('email', $user->email);
        Session::set('status', $user->status);
        Session::set('name', $user->name);
        Session::set('logout', "logout");
        if(Session::get('status')==1) {
            return redirect('/admin');
        }else{
            return redirect('/index/'.Session::get('name'));
        }
    }
}

?>