<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\entries;
use Illuminate\Http\Request;

use App\Http\Requests;

class homeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|size:10'
        ]);
        $entry = New entries();
        $id = $entry->create($request->all())->id;
        Session::flash('id',$id);

        return redirect('/success');
    }

    public function success(Request $request)
    {
        if (!Session::has('id')):
            return redirect('/');
        endif;

        $user_id = Session::get('id');
        $data = DB::table('entries')->where('id', '=', $user_id)->get();

        return view('home.success',compact('data'));
    }
}
