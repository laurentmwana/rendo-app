<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'firstname',
        'lastname',
        'phone',
        'registration_number',
        'grade_id',
        'happy',
        'sex',
    ];

    public function grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }
}
