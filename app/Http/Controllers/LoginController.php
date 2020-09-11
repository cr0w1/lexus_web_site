<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function __construct(User $user, Car $car)
    {
        $this->car = $car;
        $this->user = $user;
    }

    public function index()
    {
        $email = '';
        return view('site.login', compact('email'));
    }

    public function auth(Request $request)
    {
        $data = $request->all();

        if ($this->user->verifyEmail($data['email'])) {
            return view('site.login', ['email' => 'invalid']);
        }

        if ($this->user->verifyPassword($data['password'])) {
            return view('site.login', ['senha' => 'invalid']);
        }

        $user = $this->user->getUserOfEmail($data['email']);

        $cars = $this->car->getAll();
        $recents_cars = $this->car->recentsCar();
        session(['user_loged' => $user, 'flag' => 'true']);
        return view('site.home', compact('cars', 'recents_cars'));
    }

    public function logout()
    {
        session()->flush();
        $cars = $this->car->getAll();
        $recents_cars = $this->car->getAll();
        return view('site.home', compact('cars', 'recents_cars'));
    }
}
