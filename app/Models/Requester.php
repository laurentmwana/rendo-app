<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Requester extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'firstname',
        'lastname',
        'phone',
        'happy',
        'sex',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
