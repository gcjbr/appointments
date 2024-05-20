<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    protected $guarded = [];

    protected $casts = [

        'start_at' => 'datetime',
        'end_at' => 'datetime',

    ];

    public static function booted()
    {
        static::creating(function ($appointment) {
            $appointment->uuid = str()->uuid();
        });
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
