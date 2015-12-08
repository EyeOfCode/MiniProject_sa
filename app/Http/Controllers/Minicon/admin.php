<?php

namespace App\Http\Controllers\Minicon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class admin extends Controller
{

    public function getadmin()
    {
        $user = \App\users::All();
        return view('viewsminisa_pj.Admin')->with('user', $user);
    }

    public function getaddadmin($id)
    {
        $user = \App\users::find($id);
        return view('viewsminisa_pj.addAdmin')->with('user', $user);
    }

    public function postadd(Request $request, $id)
    {
        $this->validate($request, [
            'username' => 'required',
            'FBS' => 'required|integer',
            'BPmax' => 'required|numeric',
            'BPmin' => 'required|numeric',
            'Complications' => '',
        ]);
        $user = \App\users::find($id);

        $st = \App\statususers::where('username', $user->name)->get();

        $status = \App\statususers::findOrNew($st[0]['id']);
        $status->FBS = $request->input('FBS');
        $status->BPmax = $request->input('BPmax');
        $status->BPmin = $request->input('BPmin');
        $status->complications = $request->input('Complications');
        $status->comment = $request->input('comment');
        $status->save();
        return redirect('/admin');
    }

    public function postDeleteid($id)
    {
        $user = \App\users::find($id);
        $st = \App\statususers::where('username', $user->name)->get();
        $status = \App\statususers::findOrNew($st[0]['id']);
        $status->delete();
        $user->delete();

        return redirect('/admin');
    }
}

?>