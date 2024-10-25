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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('cnic_gtba');
            $table->string('p_number');
            $table->string('emailaddress');
            $table->string('password');
            $table->integer('january')->default(0);
            $table->integer('february')->default(0);
            $table->integer('march')->default(0);
            $table->integer('april')->default(0);
            $table->integer('may')->default(0);
            $table->integer('june')->default(0);
            $table->integer('july')->default(0);
            $table->integer('august')->default(0);
            $table->integer('september')->default(0);
            $table->integer('october')->default(0);
            $table->integer('november')->default(0);
            $table->integer('december')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
