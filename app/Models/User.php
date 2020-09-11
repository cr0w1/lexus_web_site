<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;

    protected $fillable = [
        'email', 'user', 'password', 'telefone'
    ];

    public function userUpdate($user)
    {
        $this->where('id', $user['id'])->update($user);
        return true;
    }

    public function getOneUser($id)
    {
        return  $this->find($id);
    }

    public function verifyEmail($email)
    {
        if (!User::where('email', $email)->first()) {
            return true;
        }
    }

    public function getUserOfEmail($email)
    {
        return $this->where('email', $email)->first();
    }

    public function verifyPassword($password)
    {
        if (!User::where('password', $password)->first()) {
            return true;
        }
    }
}
