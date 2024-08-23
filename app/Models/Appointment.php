<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'secretary_id',
        'requester_id',
        'worker_id',
        'reason',
    ];

    public function secretary(): BelongsTo
    {
        return $this->belongsTo(Secretary::class);
    }

    public function requester(): BelongsTo
    {
        return $this->belongsTo(Requester::class);
    }

    public function worker(): BelongsTo
    {
        return $this->belongsTo(Worker::class);
    }

    public function approved(): HasOne
    {
        return $this->hasOne(Approved::class);
    }
}
