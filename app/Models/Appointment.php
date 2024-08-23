<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'secretary_id',
        'hourly_id',
        'requester_id',
        'worker_id',
        'time',
        'reason',
        'send_message_approved',
        'approved'
    ];

    public function secretary(): BelongsTo
    {
        return $this->belongsTo(Secretary::class);
    }

    public function hourly(): BelongsTo
    {
        return $this->belongsTo(Hourly::class);
    }

    public function requester(): BelongsTo
    {
        return $this->belongsTo(Requester::class);
    }

    public function worker(): BelongsTo
    {
        return $this->belongsTo(Worker::class);
    }
}
