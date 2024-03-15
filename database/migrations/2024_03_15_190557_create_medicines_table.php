<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('quantity')->default(0);
            $table->string('dosage_form')->nullable(); // dosage form of the medicine, such as tablet, capsule, liquid, etc
            $table->string('strength')->nullable(); // stores the strength or concentration of the active ingredient in the medicine. 
            $table->date('expiry_date')->nullable();
            $table->string('manufacturer')->nullable(); // supplier of the medicine.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
