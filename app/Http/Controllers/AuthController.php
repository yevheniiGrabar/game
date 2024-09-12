<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'phonenumber' => 'required|numeric',
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->phonenumber = $request->phonenumber;
        $user->link = Str::random(32);
        $user->link_expiry = Carbon::now()->addDays(7);
        $user->save();

        return redirect('/page/' . $user->link);
    }
}
