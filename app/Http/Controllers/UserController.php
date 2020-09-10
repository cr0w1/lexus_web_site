<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return view('site.home');
    }

    public function store(Request $request)
    {
        $userData = $request->all();
        $userData['password'] = Hash::make($userData['password']);
        $this->user->create($userData);

        return redirect()->route('site.login');
    }

    public function verifyEmail(Request $request)
    {
        $user = $this->user->where('email', '=', $request->email)->get();

        if ($user) {
            return true;
        }

        return false;
    }
}
