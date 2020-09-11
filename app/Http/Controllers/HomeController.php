<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    public function index()
    {
        $cars = $this->car->getAll();
        $recents_cars = $this->car->recentsCar();
        return view('site.home', compact('cars', 'recents_cars'));
    }
}
