<?php

namespace App\Http\Controllers\Minicon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class login extends Controller
{

    public function getlogin()
    {
        return view('viewsminisa_pj.login');
    }

    public function postLogin(Request $request)
    {
        $getuser = \App\users::where('email', $request->input('email'))->get();
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|max:12',
        ]);
        $user = \App\users::All();
        $useremail = $request->input('email');
        $userpassword = $request->input('password');
        foreach ($user as $user):
            $ckuser = $user->email;
            $ckpass = $user->password;
            $name = $user->name;
            $id = $user->id;
            $status = $user->status;
            if ($useremail == $ckuser && $userpassword == $ckpass) {
                Session::set('id', $id);
                Session::set('email', $ckuser);
                Session::set('status', $status);
                Session::set('name', $name);
                Session::set('logout', "logout");
                if (Session::get('status') == 1) {
                    return redirect('/admin');
                } else {
                    return redirect('/index/' . $name);
                }
            }
        endforeach;
        return redirect('/');
    }

public
function getLogout()
{
    Session::flush();
    return redirect('/');
}
}

?>