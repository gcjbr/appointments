<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'employee_id',
        'starts_at',
        'ends_at',
        'monday_starts_at',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    protected function casts()
    {
        return [
            'starts_at' => 'date',
            'ends_at' => 'date',
            'monday_starts_at' => 'timestamp',
        ];
    }
}
