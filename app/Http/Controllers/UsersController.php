<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view('admin-side.user', compact('users'));
    }

    public function store(Request $request)
    {
        $users = new Users;
        $users->username = $request->username;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->save();
        return redirect('/admin/users')->with('status', 'user added successfully');
    }

    public function destroy($id)
    {
        $user = Users::find($id);
        $user->delete();
        return redirect('/admin/users')->with('status', 'user deleted successfully');
    }
}
