<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserDetail;

class UserDetailController extends Controller
{
    public function show($id)
    {
        // $user = User::find($id);
        // dd($user->userDetail);

        $user_detail = UserDetail::find($id)->user;
        dd($user_detail);
    }
}
