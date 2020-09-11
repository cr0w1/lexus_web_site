<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct(User $user, Car $car)
    {
        $this->user = $user;
        $this->car = $car;
    }

    public function index()
    {
        $cars = $this->car->join('images', 'cars.id', '=', 'images.car_id')->get();
        $recents_cars = $this->car->join('images', 'cars.id', '=', 'images.car_id')->get();
        return view('site.home', compact('cars', 'recents_cars'));
    }

    public function store(Request $request)
    {
        $userData = $request->all();
        $this->user->create($userData);

        return redirect()->route('site.login');
    }

    public function show(Request $request)
    {
        $data = $request->all();
        $user = $this->user->getOneUser($data['id']);
        return view('site.user_update', compact('user'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $user = $this->user->getUserOfEmail($data['email']);
        if ($data['password'] == null) {
            $data['password'] = $user->password;
        }

        $data['id'] = $user->id;
        unset($data['_token']);

        $this->user->userUpdate($data);

        $cars = $this->car->getAll();
        $recents_cars = $this->car->recentsCar();

        $user = $this->user->getUserOfEmail($data['email']);

        session()->flush();
        session(['user_loged' => $user, 'flag' => 'true']);

        return view('site.home', compact('cars', 'recents_cars'));
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
