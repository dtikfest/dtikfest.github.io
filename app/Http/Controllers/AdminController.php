<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Ramsey\Uuid\Rfc4122\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __invoke()
    {
        return view('admin.login');
    }

    public function loginAuth(Request $req)
    {
        // $rules = [
        //     'username' => 'required|string',
        //     'password' => 'required|string',
        // ];
        // $messages = [
        //     'email.required' => 'Email wajib Diisi',
        //     'password.required' => 'Password wajib Diisi',
        // ];
        // $validator = Validator::make($req->all(), $rules, $messages);
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator);
        // }
        // $data = [
        //     'username'     => $request->input('username'),
        //     'password'  => $request->input('password'),
        // ];
        // Auth::attempt($data);
        $nama = $req->username;
        $pass = $req->password;

        if ($nama == 's' && $pass == 's') {
            return view('admin.dashboard', compact('nama'));
        } else {
            return view('admin.login');
        }
    }
}
