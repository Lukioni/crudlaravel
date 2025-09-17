<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Employee extends Model
{
   use SoftDeletes;

    protected $fillable = ['name','cpf','birth_date','phone','gender'];

    protected $casts = [
        'birth_date' => 'date',
    ];
}
