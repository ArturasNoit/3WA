<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $users = User::all();

      return view('user.index')->with('users', $users);
    }

    public function show($id){
     $user = User::find($id);
     return view('user.profile', compact('user'));
    }

    public function store($id)
    {
       $user = User::find($id);
      return view('user.store', compact('user'));
    }

    public function update(Request $request, $id)
    {

        User::find($id)->update($request->all());
        return redirect()->route('user.all');
    }
    public function delete(Request $request, $id){
      $user = User::find($id);
      $user->delete();

      return redirect()->route('user.all');
    }
}
