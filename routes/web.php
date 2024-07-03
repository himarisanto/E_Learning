<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    EnrollmentController,
    GradeController,
    DiscussionController,
    ReplyController,
    NotificationController,
    PaymentController,
    CourseController,
    CategoryController,
    LessonController,
    QuizController,
    QuestionController,
    OptionController,
    AuthController,
    AdminController,
    StudentController,
    UserController,
    HomeController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home Route
Route::view('/', 'welcome')->name('home');
Route::view('/dashboard', 'dashboard')->middleware('auth')->name('dashboard');

require __DIR__ . '/auth.php';

// Authentication Routes
Route::prefix('auth')->group(function () {
    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Courses Routes
Route::prefix('courses')->name('courses.')->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('index');
    Route::get('/create', [CourseController::class, 'create'])->name('create');
    Route::post('/', [CourseController::class, 'store'])->name('store');
    Route::get('/{id}', [CourseController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [CourseController::class, 'edit'])->name('edit');
    Route::put('/{id}', [CourseController::class, 'update'])->name('update');
    Route::delete('/{id}', [CourseController::class, 'destroy'])->name('destroy');
});

// Categories Routes
Route::prefix('categories')->name('categories.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/', [CategoryController::class, 'store'])->name('store');
    Route::get('/{id}', [CategoryController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
});

// Lessons Routes
Route::prefix('lessons')->name('lessons.')->group(function () {
    Route::get('/', [LessonController::class, 'index'])->name('index');
    Route::get('/create', [LessonController::class, 'create'])->name('create');
    Route::post('/', [LessonController::class, 'store'])->name('store');
    Route::get('/{id}', [LessonController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [LessonController::class, 'edit'])->name('edit');
    Route::put('/{id}', [LessonController::class, 'update'])->name('update');
    Route::delete('/{id}', [LessonController::class, 'destroy'])->name('destroy');
});

// Quizzes Routes
Route::prefix('quizzes')->name('quizzes.')->group(function () {
    Route::get('/', [QuizController::class, 'index'])->name('index');
    Route::get('/create', [QuizController::class, 'create'])->name('create');
    Route::post('/', [QuizController::class, 'store'])->name('store');
    Route::get('/{id}', [QuizController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [QuizController::class, 'edit'])->name('edit');
    Route::put('/{id}', [QuizController::class, 'update'])->name('update');
    Route::delete('/{id}', [QuizController::class, 'destroy'])->name('destroy');
});

// Questions Routes
Route::prefix('questions')->name('questions.')->group(function () {
    Route::get('/', [QuestionController::class, 'index'])->name('index');
    Route::get('/create', [QuestionController::class, 'create'])->name('create');
    Route::post('/', [QuestionController::class, 'store'])->name('store');
    Route::get('/{id}', [QuestionController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [QuestionController::class, 'edit'])->name('edit');
    Route::put('/{id}', [QuestionController::class, 'update'])->name('update');
    Route::delete('/{id}', [QuestionController::class, 'destroy'])->name('destroy');
});

// Options Routes
Route::prefix('options')->name('options.')->group(function () {
    Route::get('/', [OptionController::class, 'index'])->name('index');
    Route::get('/create', [OptionController::class, 'create'])->name('create');
    Route::post('/', [OptionController::class, 'store'])->name('store');
    Route::get('/{id}', [OptionController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [OptionController::class, 'edit'])->name('edit');
    Route::put('/{id}', [OptionController::class, 'update'])->name('update');
    Route::delete('/{id}', [OptionController::class, 'destroy'])->name('destroy');
});

// Grades Routes
Route::prefix('grades')->name('grades.')->group(function () {
    Route::get('/', [GradeController::class, 'index'])->name('index');
    Route::get('/create', [GradeController::class, 'create'])->name('create');
    Route::post('/', [GradeController::class, 'store'])->name('store');
    Route::get('/{grade}', [GradeController::class, 'show'])->name('show');
    Route::get('/{grade}/edit', [GradeController::class, 'edit'])->name('edit');
    Route::put('/{grade}', [GradeController::class, 'update'])->name('update');
    Route::delete('/{grade}', [GradeController::class, 'destroy'])->name('destroy');
});

// Discussions Routes
Route::prefix('discussions')->name('discussions.')->group(function () {
    Route::get('/', [DiscussionController::class, 'index'])->name('index');
    Route::get('/create', [DiscussionController::class, 'create'])->name('create');
    Route::post('/', [DiscussionController::class, 'store'])->name('store');
    Route::get('/{discussion}', [DiscussionController::class, 'show'])->name('show');
    Route::get('/{discussion}/edit', [DiscussionController::class, 'edit'])->name('edit');
    Route::put('/{discussion}', [DiscussionController::class, 'update'])->name('update');
    Route::delete('/{discussion}', [DiscussionController::class, 'destroy'])->name('destroy');
});

// Replies Routes
Route::prefix('replies')->name('replies.')->group(function () {
    Route::post('/', [ReplyController::class, 'store'])->name('store');
    Route::get('/{reply}/edit', [ReplyController::class, 'edit'])->name('edit');
    Route::put('/{reply}', [ReplyController::class, 'update'])->name('update');
    Route::delete('/{reply}', [ReplyController::class, 'destroy'])->name('destroy');
});

// Notifications Routes
Route::prefix('notifications')->name('notifications.')->group(function () {
    Route::get('/', [NotificationController::class, 'index'])->name('index');
    Route::view('/create', 'notifications.create')->name('create');
    Route::post('/', [NotificationController::class, 'store'])->name('store');
    Route::get('/{notification}/edit', [NotificationController::class, 'edit'])->name('edit');
    Route::put('/{notification}', [NotificationController::class, 'update'])->name('update');
    Route::delete('/{notification}', [NotificationController::class, 'destroy'])->name('destroy');
    Route::put('/{notification}/mark-as-read', [NotificationController::class, 'markAsRead'])->name('markAsRead');
});

// Payments Routes
Route::prefix('payments')->name('payments.')->group(function () {
    Route::get('/', [PaymentController::class, 'index'])->name('index');
    Route::get('/create', [PaymentController::class, 'create'])->name('create');
    Route::post('/', [PaymentController::class, 'store'])->name('store');
    Route::get('/{payment}', [PaymentController::class, 'show'])->name('show');
    Route::get('/{payment}/edit', [PaymentController::class, 'edit'])->name('edit');
    Route::put('/{payment}', [PaymentController::class, 'update'])->name('update');
    Route::delete('/{payment}', [PaymentController::class, 'destroy'])->name('destroy');
});

// Enrollments Routes
Route::prefix('enrollments')->name('enrollments.')->group(function () {
    Route::get('/', [EnrollmentController::class, 'index'])->name('index');
    Route::get('/create', [EnrollmentController::class, 'create'])->name('create');
    Route::post('/', [EnrollmentController::class, 'store'])->name('store');
    Route::get('/{enrollment}', [EnrollmentController::class, 'show'])->name('show');
    Route::get('/{enrollment}/edit', [EnrollmentController::class, 'edit'])->name('edit');
    Route::put('/{enrollment}', [EnrollmentController::class, 'update'])->name('update');
    Route::delete('/{enrollment}', [EnrollmentController::class, 'destroy'])->name('destroy');
});

// Admin Routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('/users', UserController::class);
});

// Student Routes
Route::middleware(['auth', 'role:student'])->prefix('student')->name('student.')->group(function () {
    Route::get('/dashboard', [StudentController::class, 'index'])->name('dashboard');
});

// Regular User Routes
Route::middleware(['auth', 'role:user'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
});
