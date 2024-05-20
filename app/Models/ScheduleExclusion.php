<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleExclusion extends Model
{
    protected function casts()
    {
        return [
            'starts_at' => 'date',
            'ends_at' => 'date',
            'monday_starts_at' => 'timestamp',
        ];
    }
}
