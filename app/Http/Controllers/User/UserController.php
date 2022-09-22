<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    function showUsers(){
        $users = User::all();
        return view('viewUser', compact('users')) ->with('i', (request()->input('page', 1) -1) *5);
    }
    function edit($id){
        $user = User::find($id);
        return view('edituser', ['user' => $user]);
    }

    function create(Request $request){
        $request -> validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'nationalID' => 'required',
            'phone' => 'required',
            'county' => 'required',
            'role' => 'required',
            'password' => 'required',
            'confPassword' => 'required|same:password'
        ]);
        
        User::create($request->all());

        return redirect()->route('user.adduser');
    }

    function update(Request $request){
        $user = User::find($request->id);

        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->nationalID = $request->nationalID;
        $user->phone = $request->phone;
        $user->county = $request->county;
        $user->role = $request->role;
        $user->save();

        return redirect()->route('user.viewUser');
    }

    function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.viewUser');
    }

    function check(Request $request){
        //validate inputs
        $request -> validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ],[
            'email.exists'=>'The email does not exist'
        ]);

        $creds = $request->only('email', 'password');
        if( Auth::guard('web')->attempt($creds) ){
            return redirect()->route('user.dashboard');

        }else{
            return redirect()->route('user.login')->with('fail', 'Incorrect credentials');
        }
    }
    function logout() {
        Auth::guard('web')->logout();
        return redirect( '/');
    }
}
