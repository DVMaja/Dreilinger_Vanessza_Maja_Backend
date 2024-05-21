<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('szavaks', function (Blueprint $table) {
            $table->id();
            $table->string('angol');
            $table->string('magyar');
            $table->foreignId('temaId')->references('id')->on('temas');
            $table->timestamps();
        });

        DB::table('szavaks')->insert([
            ['angol' => 'apple', 'magyar' => 'alam', 'temaId' => 1,],
            ['angol' => 'orange', 'magyar' => 'narancs', 'temaId' => 1,],
            ['angol' => 'lion', 'magyar' => 'oroszlán', 'temaId' => 2,],
            ['angol' => 'cat', 'magyar' => 'macska', 'temaId' => 2,],
            ['angol' => 'blue', 'magyar' => 'kék', 'temaId' => 3,],
            ['angol' => 'green', 'magyar' => 'zöld', 'temaId' => 3,],
            ['angol' => 'so', 'magyar' => 'ezért', 'temaId' => 4,],
            ['angol' => 'something', 'magyar' => 'valami', 'temaId' => 4,]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szavaks');
    }
};
