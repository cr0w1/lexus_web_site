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
        'descricao'
    ];

    public function images()
    {
        return $this->hasMany(Images::class, 'car_id', 'id');
    }
}
