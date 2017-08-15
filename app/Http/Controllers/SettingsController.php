<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{
    public function profile() {
    	return view('backend.akun.index');
	}
	public function editProfile()
    {
        return view('backend.akun.edit');
    }
    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:users,email,'.$user->id
        ]);

        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->save();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Profil Berhasil Diubah"]);
        return redirect('settings/profile');
    }
    public function editPassword()
    {
        return view('backend.akun.edit-password');
    }
    public function updatePassword(Request $request)
    {
        $user = Auth::user();
        $this->validate($request,[
            'password'=>'required|passcheck:'.$user->password,
            'new_password'=>'required|confirmed|min:6',
        ],
        [
            'password.passcheck'=>'Password Lama Tidak Sesuai'
        ]);

        $user->password=bcrypt($request->get('new_password'));
        $user->save();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Password Berhasil Diubah"]);
        return redirect('settings/profile');
    }
}
