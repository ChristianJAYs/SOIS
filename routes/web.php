<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AdminController;
use App\Http\Controllers\PresidentController;
use App\Http\Controllers\VicePresidentController;
use App\Http\Controllers\AuditorController;
use App\Http\Controllers\TreasurerController;
use App\Http\Controllers\RepresentativeController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\UploadEvent;
use App\Http\Controllers\EventUpdateController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('SOIS.about');
    return view('about');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/upload', [App\Http\Controllers\UploadEvent::class, 'index'])->name('upload');
// Route::get('/create', [App\Http\Controllers\UploadEvent::class, 'create'])->name('create');
// Route::post('/destroy', [App\Http\Controllers\UploadEvent::class, 'destroy'])->name('destroy');

// Route::get('/edit', [App\Http\Controllers\UploadEvent::class, 'edit'])->name('edit');

// Route::post('/store', [App\Http\Controllers\UploadEvent::class, 'store'])->name('store');

// Route::put('/update', [App\Http\Controllers\UploadEvent::class, 'edit'])->name('update');

// Route::get('/show', [App\Http\Controllers\UploadEvent::class, 'show'])->name('show');

// ---------------------------- START ADMIN ROUTES ---------------------------
Route::group(['prefix'=>'admin','middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/settings', [App\Http\Controllers\AdminController::class, 'settings'])->name('admin.settings');
    Route::get('/listofevents', [App\Http\Controllers\AdminController::class, 'listofevents'])->name('admin.listofevents');
    Route::get('/functions', [App\Http\Controllers\AdminController::class, 'functions'])->name('admin.functions');
    Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile');
});
Route::get('/admincreate', [App\Http\Controllers\AdminController::class, 'create'])->name('admincreate');
Route::get('/adminupload', [App\Http\Controllers\AdminController::class, 'show'])->name('adminupload');
Route::post('/adminstore', [App\Http\Controllers\AdminController::class, 'store'])->name('adminstore');
Route::delete('/admindestroy{users}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admindestroy');
Route::get('/adminedit{users}', [App\Http\Controllers\AdminController::class, 'edit'])->name('adminedit');
Route::get('/adminview{users}', [App\Http\Controllers\AdminController::class, 'view'])->name('adminview');
Route::put('/adminupdate/{users}', [App\Http\Controllers\AdminController::class, 'update'])->name('adminupdate');
// Route::get('/adminshow{users}', [App\Http\Controllers\AdminController::class, 'show'])->name('adminshow');
// ---------------------------- END ADMIN ROUTES ---------------------------





// ---------------------------- START PRESIDENT ROUTES ---------------------------
Route::group(['prefix'=>'president','middleware'=>['isPresident','auth','PreventBackHistory']], function(){
    Route::get('/dashboard', [App\Http\Controllers\PresidentController::class, 'index'])->name('president.dashboard');
    Route::get('/profile', [App\Http\Controllers\PresidentController::class, 'profile'])->name('president.profile');
    Route::get('/functions', [App\Http\Controllers\PresidentController::class, 'functions'])->name('president.functions');
    Route::get('/listofevents', [App\Http\Controllers\PresidentController::class, 'listofevents'])->name('president.listofevents');
    Route::get('/settings', [App\Http\Controllers\PresidentController::class, 'settings'])->name('president.settings');
    // Route::get('/upload', [App\Http\Controllers\UploadEvent::class, 'upload'])->name('president.upload');
});
Route::get('/upload', [App\Http\Controllers\UploadEvent::class, 'index'])->name('upload');
Route::get('/create', [App\Http\Controllers\UploadEvent::class, 'create'])->name('create');
Route::delete('/destroy/{events}', [App\Http\Controllers\UploadEvent::class, 'destroy'])->name('destroy');
Route::get('/edit/{events}', [App\Http\Controllers\UploadEvent::class, 'edit'])->name('edit');
Route::post('/store', [App\Http\Controllers\UploadEvent::class, 'store'])->name('store');
Route::put('/update/{events}', [App\Http\Controllers\UploadEvent::class, 'update'])->name('update');
Route::post('/show', [App\Http\Controllers\UploadEvent::class, 'show'])->name('show');
// ---------------------------- END PRESIDENT ROUTES ---------------------------






// ---------------------------- START VICEPRESIDENT ROUTES ---------------------------
Route::group(['prefix'=>'vice-president','middleware'=>['isVicePresident','auth','PreventBackHistory']], function(){
    Route::get('/dashboard', [App\Http\Controllers\VicePresidentController::class, 'index'])->name('vice-president.dashboard');
    Route::get('/profile', [App\Http\Controllers\VicePresidentController::class, 'profile'])->name('vice-president.profile');
    Route::get('/functions', [App\Http\Controllers\VicePresidentController::class, 'functions'])->name('vice-president.functions');
    Route::get('/listofevents', [App\Http\Controllers\VicePresidentController::class, 'listofevents'])->name('vice-president.listofevents');
    Route::get('/settings', [App\Http\Controllers\VicePresidentController::class, 'settings'])->name('vice-president.settings');
});
Route::get('/viceupload', [App\Http\Controllers\ViceUploadEvent::class, 'index'])->name('viceupload');
Route::get('/vicecreate', [App\Http\Controllers\ViceUploadEvent::class, 'create'])->name('vicecreate');
Route::delete('/vicedestroy/{events}', [App\Http\Controllers\ViceUploadEvent::class, 'destroy'])->name('vicedestroy');
Route::get('/viceedit/{events}', [App\Http\Controllers\ViceUploadEvent::class, 'edit'])->name('viceedit');
Route::post('/vicestore', [App\Http\Controllers\ViceUploadEvent::class, 'store'])->name('vicestore');
Route::put('/viceupdate/{events}', [App\Http\Controllers\ViceUploadEvent::class, 'update'])->name('viceupdate');
Route::post('/viceshow', [App\Http\Controllers\ViceUploadEvent::class, 'show'])->name('viceshow');

// ---------------------------- END VICEPRESIDENT ROUTES ---------------------------



// ---------------------------- START SECRETARY ROUTES ---------------------------

// ---------------------------- END SECRETARY ROUTES ---------------------------




// ---------------------------- START STUDENT AFFAIRS ROUTES ---------------------------
Route::group(['prefix'=>'studentaffairs','middleware'=>['isStudentAffairs','auth','PreventBackHistory']], function(){
    Route::get('/dashboard', [App\Http\Controllers\StudentAffairsController::class, 'index'])->name('studentaffairs.dashboard');
    Route::get('/profile', [App\Http\Controllers\StudentAffairsController::class, 'profile'])->name('studentaffairs.profile');
    Route::get('/functions', [App\Http\Controllers\StudentAffairsController::class, 'functions'])->name('studentaffairs.functions');
    Route::get('/listofevents', [App\Http\Controllers\StudentAffairsController::class, 'listofevents'])->name('studentaffairs.listofevents');
    Route::get('/settings', [App\Http\Controllers\StudentAffairsController::class, 'settings'])->name('studentaffairs.settings');
});
Route::get('/affairsupload', [App\Http\Controllers\StudentAffairsController::class, 'view'])->name('affairsupload');
Route::get('/affairscreate', [App\Http\Controllers\StudentAffairsController::class, 'create'])->name('affairscreate');
Route::delete('/affairsdestroy/{events}', [App\Http\Controllers\StudentAffairsController::class, 'destroy'])->name('affairsdestroy');
Route::get('/affairsedit/{events}', [App\Http\Controllers\StudentAffairsController::class, 'edit'])->name('affairsedit');
Route::post('/affairsstore', [App\Http\Controllers\StudentAffairsController::class, 'store'])->name('affairsstore');
Route::put('/affairsupdate/{events}', [App\Http\Controllers\StudentAffairsController::class, 'update'])->name('affairsupdate');
Route::post('/affairsshow/{events}', [App\Http\Controllers\StudentAffairsController::class, 'show'])->name('affairsshow');
// ---------------------------- END STUDENT AFFAIRS ROUTES ---------------------------




// ---------------------------- START AUDITOR ROUTES ---------------------------
Route::group(['prefix'=>'auditor','middleware'=>['isAuditor','auth','PreventBackHistory']], function(){
    Route::get('/dashboard', [App\Http\Controllers\AuditorController::class, 'index'])->name('auditor.dashboard');
    Route::get('/profile', [App\Http\Controllers\AuditorController::class, 'profile'])->name('auditor.profile');
    Route::get('/functions', [App\Http\Controllers\AuditorController::class, 'functions'])->name('auditor.functions');
    Route::get('/listofevents', [App\Http\Controllers\AuditorController::class, 'listofevents'])->name('auditor.listofevents');
    Route::get('/settings', [App\Http\Controllers\AuditorController::class, 'settings'])->name('auditor.settings');
});
Route::get('/auditorupload', [App\Http\Controllers\AuditorController::class, 'view'])->name('auditorupload');
Route::get('/auditorcreate', [App\Http\Controllers\AuditorController::class, 'create'])->name('auditorcreate');
Route::delete('/auditordestroy/{funds}', [App\Http\Controllers\AuditorController::class, 'destroy'])->name('auditordestroy');
Route::get('/auditoredit/{funds}', [App\Http\Controllers\AuditorController::class, 'edit'])->name('auditoredit');
Route::post('/auditorstore', [App\Http\Controllers\AuditorController::class, 'store'])->name('auditorstore');
Route::put('/auditorupdate/{funds}', [App\Http\Controllers\AuditorController::class, 'update'])->name('auditorupdate');
Route::post('/auditorshow/{funds}', [App\Http\Controllers\AuditorController::class, 'show'])->name('auditorshow');
// ---------------------------- END AUDITOR ROUTES ---------------------------




// ---------------------------- START TREASURER ROUTES ---------------------------
Route::group(['prefix'=>'treasurer','middleware'=>['isTreasurer','auth','PreventBackHistory']], function(){
    Route::get('/dashboard', [App\Http\Controllers\TreasurerController::class, 'index'])->name('treasurer.dashboard');
    Route::get('/profile', [App\Http\Controllers\TreasurerController::class, 'profile'])->name('treasurer.profile');
    Route::get('/functions', [App\Http\Controllers\TreasurerController::class, 'functions'])->name('treasurer.functions');
    Route::get('/listofevents', [App\Http\Controllers\TreasurerController::class, 'listofevents'])->name('treasurer.listofevents');
    Route::get('/settings', [App\Http\Controllers\TreasurerController::class, 'settings'])->name('treasurer.settings');
});
Route::get('/treasurerupload', [App\Http\Controllers\TreasurerController::class, 'view'])->name('treasurerupload');
Route::get('/treasurercreate', [App\Http\Controllers\TreasurerController::class, 'create'])->name('treasurercreate');
Route::delete('/treasurerdestroy/{funds}', [App\Http\Controllers\TreasurerController::class, 'destroy'])->name('treasurerdestroy');
Route::get('/treasureredit/{funds}', [App\Http\Controllers\TreasurerController::class, 'edit'])->name('treasureredit');
Route::post('/treasurerstore', [App\Http\Controllers\TreasurerController::class, 'store'])->name('treasurerstore');
Route::put('/treasurerupdate/{funds}', [App\Http\Controllers\TreasurerController::class, 'update'])->name('treasurerupdate');
Route::post('/treasurershow/{funds}', [App\Http\Controllers\TreasurerController::class, 'show'])->name('treasurershow');

// ---------------------------- END TREASURER ROUTES ---------------------------




// ---------------------------- START REPRESENTATIVE ROUTES ---------------------------
Route::group(['prefix'=>'representative','middleware'=>['isRepresentative','auth','PreventBackHistory']], function(){
    Route::get('/dashboard', [App\Http\Controllers\RepresentativeController::class, 'index'])->name('representative.dashboard');
    Route::get('/settings', [App\Http\Controllers\RepresentativeController::class, 'settings'])->name('representative.settings');
    Route::get('/profile', [App\Http\Controllers\RepresentativeController::class, 'profile'])->name('representative.profile');
    Route::get('/functions', [App\Http\Controllers\RepresentativeController::class, 'functions'])->name('representative.functions');
    Route::get('/listofevents', [App\Http\Controllers\RepresentativeController::class, 'listofevents'])->name('representative.listofevents');
    Route::get('/listoffunds', [App\Http\Controllers\RepresentativeController::class, 'listoffunds'])->name('representative.listoffunds');
});
// ---------------------------- END REPRESENTATIVE ROUTES ---------------------------

// ---------------------------- START MEMBER ROUTES ---------------------------
Route::group(['prefix'=>'members','middleware'=>['isMembers','auth','PreventBackHistory']], function(){
    Route::get('/dashboard', [App\Http\Controllers\MembersController::class, 'index'])->name('members.dashboard');
    Route::get('/settings', [App\Http\Controllers\MembersController::class, 'settings'])->name('members.settings');
    Route::get('/profile', [App\Http\Controllers\MembersController::class, 'profile'])->name('members.profile');
    Route::get('/functions', [App\Http\Controllers\MembersController::class, 'functions'])->name('members.functions');
    Route::get('/listofevents', [App\Http\Controllers\MembersController::class, 'listofevents'])->name('members.listofevents');
    Route::get('/listoffunds', [App\Http\Controllers\MembersController::class, 'listoffunds'])->name('members.listoffunds');
});
// ---------------------------- END MEMBER ROUTES ---------------------------