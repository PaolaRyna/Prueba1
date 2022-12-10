<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function registered(){
        $users = User::all();
        return view('admin.register')-> with('users',$users);
    }

    public function registerEdit(Request $request, $id){

        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users',$users);
    }

    public function registerUpdate(Request $request, $id){
        $users = User::find($id);
        $users -> name = $request->input('username');
        $users -> usertype = $request->input('usertype');
        $users -> update();

        return redirect('/role-register')->with('status', 'Your Data is Updated');
    }

    public function registerDelete ($id){
        $users = User::findOrFail($id);
        $users -> delete();
        return redirect('/role-register')->with('status', 'Your Data is Deleted');

    }
    
}
