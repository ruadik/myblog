<?php

namespace App\Http\Controllers;

use App\Mail\SubscriptionsMail;
use App\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscriptions,email'
        ]);

        $subs = Subscription::add($request->email);
        $subs->generateToken();
        Mail::to($subs)->send(new SubscriptionsMail($subs));

        return redirect()->back()->with('status', 'Данные отправлены! Проверьте почту для подверждения!');
    }

    public function verify($token)
    {
        $verify = new Subscription();
        $verify->verify($token);

        return redirect()->route('home')->with('status', 'Вы подписаны. Спасибо!!');
    }
}
