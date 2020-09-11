<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'user_id',
        'marca',
        'modelo',
        'ano',
        'cor',
        'portas',
        'cambio',
        'velocidade',
        'KmRodados',
        'combustivel',
        'motor',
        'valor',
        'descricao',
        'path'
    ];

    public function getOneCar($id)
    {
        $car = $this->find($id);
        return $car;
    }

    public function carUpdate($car)
    {
        $this->where('id', $car['id'])->update($car);
        return true;
    }

    public function getAll()
    {
        return $this->all();
    }

    public function recentsCar()
    {
        return $this->orderBy('id', 'DESC')->take(6)->get();
    }

    public function carUpdated($car)
    {
        $this->where('id', $car['id'])->update($car);
        return true;
    }

    public function deleteCar($id)
    {
        $this->where('id', $id)->delete();
        return true;
    }
}
