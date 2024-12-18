<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('vaccine_dates', function (Blueprint $table) {
        $table->id();
        $table->string('c_name');
        $table->string('p_username');
        $table->string('name');
        $table->date('v_date');
        $table->time('timing');
        $table->string('status');
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccine_dates');
    }
};
