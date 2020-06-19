<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'phone', 'birth'
    ];

    public $timestamps = false;

    public static function validate($data)
    {
       return Validator::make($data,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'birth' => 'required',
        ]);
    }
}
