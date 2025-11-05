<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password', 'birth_of_date'];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
