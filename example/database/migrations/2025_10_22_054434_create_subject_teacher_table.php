<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subject_teacher', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->constrained()->onDelete('cascade');
            $table->foreignId('teacher_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subject_teacher');
    }
};




use App\Models\Teacher;
use App\Models\Subject;

Route::get('/factory-fill', function () {
    $teachers = Teacher::factory(10)->create();
    $subjects = Subject::factory(6)->create();

    foreach ($subjects as $subject) {
        $subject->teachers()->attach(
            $teachers->random(2)->pluck('id')->toArray()
        );
    }

    return "Teachers, subjects va pivot ma'lumotlar yaratildi!";
});