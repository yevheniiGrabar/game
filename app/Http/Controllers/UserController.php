<?php

namespace App\Http\Controllers;

use App\Models\GameHistory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function showPage($link)
    {
        $user = User::where('link', $link)->where('link_expiry', '>', Carbon::now())->firstOrFail();
        return view('page', ['user' => $user]);
    }

    public function generateNewLink($link)
    {
        $user = User::where('link', $link)->firstOrFail();
        $user->link = Str::random(32);
        $user->link_expiry = Carbon::now()->addDays(7);
        $user->save();

        return redirect('/page/' . $user->link);
    }

    public function deactivateLink($link)
    {
        $user = User::where('link', $link)->firstOrFail();
        $user->link_expiry = Carbon::now();
        $user->save();

        return redirect('/');
    }

    public function feelingLucky($link)
    {
        $user = User::where('link', $link)->firstOrFail();

        $randomNumber = rand(1, 1000);
        $result = $randomNumber % 2 == 0 ? 'Win' : 'Lose';
        $winAmount = 0;

        if ($result == 'Win') {
            if ($randomNumber > 900) {
                $winAmount = $randomNumber * 0.7;
            } elseif ($randomNumber > 600) {
                $winAmount = $randomNumber * 0.5;
            } elseif ($randomNumber > 300) {
                $winAmount = $randomNumber * 0.3;
            } else {
                $winAmount = $randomNumber * 0.1;
            }
        }

        GameHistory::create([
            'user_id' => $user->id,
            'random_number' => $randomNumber,
            'result' => $result,
            'win_amount' => $winAmount
        ]);

        return view('result', [
            'randomNumber' => $randomNumber,
            'result' => $result,
            'winAmount' => $winAmount,
            'user' => $user
        ]);
    }

    public function history($link)
    {
        $user = User::where('link', $link)->firstOrFail();
        $history = GameHistory::where('user_id', $user->id)->latest()->take(3)->get();

        return view('history', ['history' => $history, 'user' => $user,]);
    }
}
