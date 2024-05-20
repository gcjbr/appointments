<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('schedule_exclusions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->date('start_at');
            $table->date('ends_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('schedule_exclusions');
    }
};
