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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("title")->unique();
            $table->text("description")->nullable();
            $table->string("image")->nullable();
            $table->date("release_date");
            $table->foreignIdFor(\App\Models\Ganre::class, "ganre_id")->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Author::class, "author_id")->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
