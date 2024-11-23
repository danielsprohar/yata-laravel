<?php

use App\Models\Tag;
use App\Models\Task;
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
        Schema::create('tag_task', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignIdFor(Tag::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignIdFor(Task::class)
                ->constrained()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_task');
    }
};
