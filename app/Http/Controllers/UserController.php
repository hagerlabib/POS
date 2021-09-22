<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Hash;


class UserController extends Controller
{

    public function index(){
        $users = User::paginate(5);
        return view('users.index' ,['users' =>$users]);

    }

    public function store(Request $request){
        $users = new User ;
        $users->name =$request->name;
        $users->email =$request->email;
        $users->password = md5($request->password);
        $users->is_admin =$request->is_admin;
        $users->save();

        if($users){
            return redirect()->back()->with('User Created Succeffuly' );
        }
        return redirect()->back()->with('User Fail Created' );

}
 public function update(Request $request, $id)
{
    $users = User::find($id);
    if(!$users){
        return back()->with('Error','User not found');
    }
    $users->update($request->all());
    return back()->with('Success','User Updated successfully');
}
public function destroy($id)
{
    $users = User::find($id);
    if(!$users){
        return back()->with('Error','User not found');
    }
    $users->delete();
    return back()->with('Success','User Deleted successfully');
}
}
