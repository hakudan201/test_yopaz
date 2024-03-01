<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:32',
            'email' => 'required|email',
            'message' => 'required|string|required|max:255'
        ]);
        $newUser = new User();
        $newUser->name = $request->input('name');
        $newUser->email = $request->input('email');
        $newUser->message = $request->input('message');
        $newUser->save();

        // Additional logic or redirection after successful data storage

        return redirect()->back();
    }
}
