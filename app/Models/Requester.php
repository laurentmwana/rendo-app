<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
