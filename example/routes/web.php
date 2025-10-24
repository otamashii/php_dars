<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Student;

use App\Models\Teacher;
use App\Models\Subject;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/jobs', function () {
   
    $jobs = Job::all();

    return view('jobs' , [
        'jobs' => $jobs ,
    ]);
});

Route::get('/job/{id}', function ($id) {
     $jobs = Job::all();

   $job = Job::find($id);

   return view('job' , ['job' => $job]);
   
    
});



Route::get('/contact', function () {
    return view('contact');
});



Route::get('/', function () {
    return view('home');
});

Route::get('/students', function () {

    // $students = Student::all();
    $students = Student::paginate(10);
    return view('students', [
        'students' => $students,
    ]);
});

Route::get('/student/{id}', function ($id) {

    $student = Student::find($id);

    return view('student', ['student' => $student]);
});



Route::get('/teachers', function () {
    return view('teachers');
});

Route::get('/users', function () {
    return view('users');
});





// Teachers page
Route::get('/teachers', function () {
    $teachers = Teacher::with('subjects')->get();

    return view('teachers', [
        'teachers' => $teachers,
    ]);
});

// Teacher details
Route::get('/teacher/{id}', function ($id) {
    $teacher = Teacher::with('subjects')->findOrFail($id);

    return view('teacher', ['teacher' => $teacher]);
});

// Subjects page
Route::get('/subjects', function () {
    $subjects = Subject::with('teachers')->get();

    return view('subjects', [
        'subjects' => $subjects,
    ]);
});

// Subject details
Route::get('/subject/{id}', function ($id) {
    $subject = Subject::with('teachers')->findOrFail($id);

    return view('subject', ['subject' => $subject]);
});


// // 🔹 TEACHERS (Lazy Loading)
// Route::get('/teachers', function () {
//     $teachers = Teacher::all(); // ❗ with() yo‘q
//     return view('teachers', ['teachers' => $teachers]);
// });

// // 🔹 TEACHER DETAILS (Lazy Loading)
// Route::get('/teacher/{id}', function ($id) {
//     $teacher = Teacher::findOrFail($id); // ❗ with() yo‘q
//     return view('teacher', ['teacher' => $teacher]);
// });


// // 🔹 SUBJECTS (Lazy Loading)
// Route::get('/subjects', function () {
//     $subjects = Subject::all(); // ❗ with() yo‘q
//     return view('subjects', ['subjects' => $subjects]);
// });

// // 🔹 SUBJECT DETAILS (Lazy Loading)
// Route::get('/subject/{id}', function ($id) {
//     $subject = Subject::findOrFail($id); // ❗ with() yo‘q
//     return view('subject', ['subject' => $subject]);
// });






// routes/web.php

// ... Qolgan routelar

// 💡 Yangi talaba yaratish formasini ko'rsatish uchun GET route
Route::get('/students/create', function () {
    // Agar students.create view fayli to'g'ri joylashgan bo'lsa
    return view('students.create'); 
})->name('students.create'); 

// 💡 Formadan kelgan ma'lumotlarni saqlash uchun POST route
Route::post('/students', function () {
   $attributes = request()->validate([
        'name' => ['required', 'string', 'min:3', 'max:255'],
        'lastname' => ['required', 'string', 'min:5', 'max:255'],
        // ...
    ], 
    [
        // 💡 FAQAT NAME maydoni uchun MIN qoidasiga xabar qo'shish
        'name.min' => 'Ism maydoni kamida 3 ta belgidan iborat bo‘lishi kerak.',
        
        // 💡 FAQAT LASTNAME maydoni uchun MIN qoidasiga xabar qo'shish
        'lastname.min' => 'Familiya maydoni kamida 5 ta belgidan iborat bo‘lishi kerak.',
        
        // Agar talab qilsangiz, required qoidasini ham shunday yozishingiz mumkin:
        // 'name.required' => 'Ism maydoni to‘ldirilishi shart.',
    ]);
    // ... Saqlash logikasi ...
    return back()->with('success', '✅ Yangi talaba muvaffaqiyatli qo‘shildi!');
});

// ... Qolgan routelar