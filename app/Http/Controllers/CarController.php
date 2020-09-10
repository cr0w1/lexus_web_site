<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Images;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function __construct(Car $car, Images $images)
    {
        $this->car = $car;
        $this->car_images = $images;
    }

    public function index()
    {
        return view('site.cad_new_car');
    }

    public function store(Request $request)
    {
        $carData = $request->all();
        $car = Car::create($carData);

        for ($i = 0; $i < count($request->images); $i++) {
            $files = $request->images[$i];

            $this->car_images->create([
                'car_id' => $car->id,
                'path' => $files->store("cars")
            ]);
        }

        // return redirect()->route('site.home');
    }
}
