<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\OnlineReportController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\UserController;
use App\Models\OnlineReport;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', function () {
    return view('homepage.index');
});

Route::get('online-portal', function () {
    return view('homepage.online-portal');
});
Route::get('online-reporting', [OnlineReportController::class, 'create']); //create records

Route::post('store', [OnlineReportController::class, 'store']); //store records
Route::get('getData', [SchoolController::class, 'getData']); //store records
// Route::get('online-reporting', [SchoolController::class, 'getData']); //store records




Route::prefix('dashboard')->middleware('auth', 'verified')->group(function () {

    // dashboard endpoint

    Route::get('/', [HomeController::class, 'index'])->name('dashboard'); //show dashboard

    // reports endpoint
    Route::prefix('reports')->group(function () {
        Route::get('online', [OnlineReportController::class, 'index']); //show records
        Route::get('walk-in', [ReportController::class, 'index']); //show records
        Route::get('create', [ReportController::class, 'create']); //create records
        Route::post('store', [ReportController::class, 'store']); //store records
        Route::get('profile/{id}', [ReportController::class, 'profile']); //show profile
        Route::get('create', [SchoolController::class, 'showInCreateRecord']);
    });

    // user management endpoint
    Route::prefix('user')->group(function () {
        Route::get('list', [UserController::class, 'index']); //show records
    });
});

Route::controller(SchoolController::class)->group(function () {
    Route::get('register', 'showInRegister')->name('register'); //show Schools in register
    // Route::get('reports/create', 'showInCreateRecord');

});

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/dashboard');
})->middleware(['auth', 'verified'])->name('verification.verify');

Auth::routes(['verify' => true]);
