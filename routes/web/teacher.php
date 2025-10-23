<?php

use App\Http\Controllers\Common\Ticket\TicketController as TicketTicketController;
use App\Http\Controllers\Teacher\Bootcamp\BootcampController;
use App\Http\Controllers\Teacher\Bootcamp\ManageController;
use App\Http\Controllers\Teacher\Course\CourseController;
use App\Http\Controllers\Teacher\Course\QuizController;
use App\Http\Controllers\Teacher\Dashboard\DashboardController;
use App\Http\Controllers\Teacher\Dashboard\EnrollStudentController;
use App\Http\Controllers\Teacher\Profile\ProfileController;
use App\Http\Controllers\Teacher\Ticket\TicketController;
use Illuminate\Support\Facades\Route;

Route::prefix('teacher')->as('teacher.')->middleware(['auth', 'is_teacher', 'prevent_back_history'])->group(function () {
    // profile
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile/update/{id}', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::post('/pass/update/', [ProfileController::class, 'updatePassword'])->name('update.password');

    // DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Ticket
    Route::resource('/ticket', TicketController::class)->except('edit,update');

    //course
    Route::prefix('course')->as('course.')->group(function () {
        Route::get('/', [CourseController::class, 'index'])->name('index');
        Route::get('create', [CourseController::class, 'create'])->name('create');
        Route::post('store', [CourseController::class, 'store'])->name('store');
        Route::get('/show/{slug}/{lessonUuid?}/{lectureUuid?}', [CourseController::class, 'show'])->name('show');
        Route::post('update', [CourseController::class, 'update'])->name('update');
        Route::get('delete/{uuid}', [CourseController::class, 'delete'])->name('delete');
        Route::get('edit/{uuid}', [CourseController::class, 'edit'])->name('edit');
        Route::get('submit/{uuid}', [CourseController::class, 'submit'])->name('submit');
        // Lesson
        Route::get('edit-content/{uuid}', [CourseController::class, 'editContent'])->name('edit.content');
        Route::post('store-lesson', [CourseController::class, 'storeLesson'])->name('storeLesson');
        Route::post('delete-lesson', [CourseController::class, 'deleteLesson'])->name('deleteLesson');
        Route::get('edit-lesson/{id}', [CourseController::class, 'editLesson']);
        Route::post('update-lesson/{uuid}', [CourseController::class, 'updateLesson'])->name('updateLesson');
        // Lecture
        Route::post('store-lecture', [CourseController::class, 'storeLecture'])->name('storeLecture');
        Route::post('update-lecture', [CourseController::class, 'updateLecture'])->name('updateLecture');
        Route::get('preview-lecture/{id}', [CourseController::class, 'previewLecture']);
        Route::get('edit-lecture/{id}', [CourseController::class, 'editLecture']);
        Route::post('delete-lecture', [CourseController::class, 'deleteLecture'])->name('deleteLecture');
        // Quiz
        Route::get('quizes/{lessonUuid}/{courseUuid}', [QuizController::class, 'index'])->name('quizes');
        Route::post('/quizes/store', [QuizController::class, 'store'])->name('quizes.store');
        Route::post('/quizes/update/{id}', [QuizController::class, 'update'])->name('quizes.update');
        Route::Delete('/quizes/destroy/{id}', [QuizController::class, 'destroy'])->name('quizes.destroy');
        // Course Discussion
        Route::post('submit-discussion', [CourseController::class, 'discussionSubmit'])->name('discussion.submit');
        Route::post('submit-discussion-comment', [CourseController::class, 'discussionCommentSubmit'])->name('discussion.comment.submit');

        // Chunk uploads
        Route::post('/chunk-upload', [CourseController::class, 'storeChunkFile']);
        Route::patch('/chunk-upload', [CourseController::class, 'updateChunkFile']);
        Route::delete('/chunk-upload', [CourseController::class, 'deleteChunkFile']);
    });
    Route::prefix('bootcamp')->as('bootcamp.')->group(function () {
        Route::get('/', [BootcampController::class, 'index'])->name('index');
        Route::get('show/{slug}/{uuid}', [BootcampController::class, 'show'])->name('show');
        Route::get('create', [BootcampController::class, 'create'])->name('create');
        Route::post('store', [BootcampController::class, 'store'])->name('store');
        Route::post('update', [BootcampController::class, 'update'])->name('update');
        Route::get('delete/{uuid}', [BootcampController::class, 'destroy'])->name('delete');
        Route::get('edit/{uuid}', [BootcampController::class, 'edit'])->name('edit');
        Route::get('submit/{uuid}', [BootcampController::class, 'submit'])->name('submit');
        Route::get('edit-content/{uuid}', [BootcampController::class, 'editContent'])->name('edit.content');
        Route::post('store-lesson', [BootcampController::class, 'storeLesson'])->name('storeLesson');
        Route::post('store-lecture', [BootcampController::class, 'storeLecture'])->name('storeLecture');
        Route::post('update-lecture', [BootcampController::class, 'updateLecture'])->name('updateLecture');
        Route::get('preview-lecture/{id}', [BootcampController::class, 'previewLecture']);
        Route::get('edit-lecture/{id}', [BootcampController::class, 'editLecture']);
        Route::post('delete-lecture', [BootcampController::class, 'deleteLecture'])->name('deleteLecture');
        Route::post('delete-lesson', [BootcampController::class, 'deleteLesson'])->name('deleteLesson');
        Route::get('edit-lesson/{id}', [BootcampController::class, 'editLesson']);
        Route::post('update-lesson/{uuid}', [BootcampController::class, 'updateLesson'])->name('updateLesson');
        // Bootcamp Discussion
        Route::post('submit-discussion', [ManageController::class, 'discussionSubmit'])->name('discussion.submit');
        Route::post('submit-discussion-comment', [ManageController::class, 'discussionCommentSubmit'])->name('discussion.comment.submit');
        Route::post('submit-discussion-comment', [ManageController::class, 'discussionCommentSubmit'])->name('discussion.comment.submit');
        // join bootcamp
        Route::get('join/{uuid}', [ManageController::class, 'joinClass'])->name('join');
        // Chunk uploads
        Route::post('/chunk-upload', [BootcampController::class, 'storeChunkFile']);
        Route::patch('/chunk-upload', [BootcampController::class, 'updateChunkFile']);
        Route::delete('/chunk-upload', [BootcampController::class, 'deleteChunkFile']);
    });

    Route::get('zoom/test-create', [BootcampController::class, 'testCreate']);

    // enrolled students
    Route::get('enrolled-students', [EnrollStudentController::class, 'index'])->name('enrolled-students');
    Route::get('community', [EnrollStudentController::class, 'community'])
        ->name('community');
    Route::post('teacher/submit-review', [EnrollStudentController::class, 'reviewSubmit'])
        ->name('review.submit');

    // assign tickets
    Route::get('/assign-tickets', [TicketTicketController::class, 'assignTicket'])->name('assign.ticket');
    Route::patch('/update-ticket-status/{ticket}', [TicketTicketController::class, 'updateStatus'])->name('ticket.status.update');
});
