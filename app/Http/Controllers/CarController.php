<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Images;
use App\Models\User;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function __construct(Car $car, User $user)
    {
        $this->car = $car;
        $this->user = $user;
    }

    public function index()
    {
        if (session()->exists('user_loged')) {
            return view('site.cad_new_car');
        } else {
            return view('site.login');
        }
    }

    public function store(Request $request)
    {
        $files = $request->image;

        $carData = $request->all();
        $carData['path'] = $files->store("cars");

        Car::create($carData);

        return redirect()->route('site.home');
    }

    public function show(Request $request)
    {
        $data = $request->all();
        $car = $this->car->getOneCar($data['id']);
        $user = $this->user->getOneUser($car->user_id);

        $car->email = $user->email;
        $car->telefone = $user->telefone;

        return view('site.details', compact('car'));
    }

    public function showCarUpdate(Request $request)
    {
        $data = $request->all();
        $car = $this->car->getOneCar($data['id']);
        $user = $this->user->getOneUser($car->user_id);

        $car->email = $user->email;
        $car->telefone = $user->telefone;
        $car->user_id = $user->id;

        return view('site.cad_car_update', compact('car'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);

        $this->car->carUpdated($data);
        $user = $this->user->getOneUser($data['user_id']);
        $car = $this->car->getOneCar($data['id']);

        $car->email = $user->email;
        $car->telefone = $user->telefone;
        $car->user_id = $user->id;

        return view('site.details', compact('car'));
    }

    public function deleteCar(Request $request)
    {
        $data = $request->all();
        $this->car->deleteCar($data['id']);
        return redirect()->route('site.home');
    }
}
