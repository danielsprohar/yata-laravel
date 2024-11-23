<?php

use App\Models\Project;
use App\Models\Section;
use App\Models\Task;
use App\Models\Workspace;
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title', 512);
            $table->dateTimeTz('due_date')
                ->nullable();
            $table->enum('priority', ['none', 'low', 'medium', 'high'])
                ->default('none');
            $table->string('rrule', 512)
                ->nullable();
            $table->boolean('completed')
                ->default(false);
            $table->boolean('all_day')
                ->default(true);

            $table->timestamps();

            // Relationships
            $table->foreignIdFor(Workspace::class, 'workspace_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignIdFor(Project::class, 'project_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignIdFor(Section::class, 'section_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignIdFor(Task::class, 'parent_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
