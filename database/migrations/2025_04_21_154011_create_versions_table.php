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
        Schema::create('versions', function (Blueprint $table) {
            $table->id()->comment('Primary Key');
            $table->integer('main')->default(1);
            $table->float('minor_patch')->default(0.0);
            $table->integer('build')->default(0);
            $table->string('name', 30)->default('alpha')->index();
            $table->text('description')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->date('release_date')->nullable()->useCurrent();
            $table->time('release_time')->nullable()->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('versions');
    }
};
