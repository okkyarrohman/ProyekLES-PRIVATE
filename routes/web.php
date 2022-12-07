<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\TentorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


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

// Routing untuk Jetstream

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('user/user-dashboard');
    })->name('dashboard');
});




// Routing Untuk Umum

Route::get('/', function () {
    return view('general/homePage');
});

Route::get('/index', function () {
    return view('general/homePage');
});



Route::get('/profile', function () {
    return view('profile/show');
});









// Roting Untuk Admin
Route::get('/admin-dashboard', function () {
    return view('admin/dashboard');
})->name('homeAdmin');

route::middleware('role:admin')->get('/admin-dashboard', function()
{
    return view ('admin/dashboard');
})->name('homeAdmin');



Route::middleware('role:admin')->get('/admin-datamurid',[MuridController::class,'ShowDatamurid']); 
route::middleware('role:admin')->get('/admin-datamurid',[MuridController::class,'tampilUsermurid']);
route::middleware('role:admin')->post('/admin-datamurid',[MuridController::class,'AddUsermurid'])->name('murid_create');
route::middleware('role:admin')->get('/admin-deletemurid/{id}',[MuridController::class,'HapusUserMurid']);
route::middleware('role:admin')->get('/admin-datamapel',[MapelController::class,'ShowDatamapel']); 
route::middleware('role:admin')->get('/admin-datatentor',[TentorController::class,'ShowDatatentor']); 
route::middleware('role:admin')->get('/admin-editmurid/{id}',[MuridController::class,'EditUserMurid']);
route::middleware('role:admin')->post('/admin-update-post',[MuridController::class,'UpdateUserMurid'])->name('user.update');

route::middleware('role:admin')->get('/admin-materi',[MateriController::class,'showMateriAdmin']);
route::middleware('role:admin')->get('/admin-materi-ipa',[MateriController::class,'showMateriAdminIPA']);
route::middleware('role:admin')->post('/admin-materi-ipa',[MateriController::class,'addMateriAdminIPA'])->name(
    'ipa.create'
);
route::middleware('role:admin')->get('/admin-materi-ipa/{foto}',[MateriController::class,'DownloadFile']);
route::middleware('role:admin')->get('/admin-materi-ipa/{id}',[MateriController::class,'delete_file']);
route::middleware('role:admin')->get('/admin-materi-ipa',[MateriController::class,'tampilMateriAdminIPA']);





// End Route Untuk Admin

Auth::routes();



// Routing Untuk Tentor
route::middleware('role:tentor')->get('/homeTentor', function()
{
    return view ('tentor/tentor-dashboard');
})->name('homeTentor');

route::middleware('role:tentor')->get('/tentor-dashboard', function()
{
    return view ('tentor/tentor-dashboard');
})->name('dsh');

route::middleware('role:tentor')->get('/tentor-materi',[MateriController::class,'show']);

route::middleware('role:tentor')->get('/tentor-datamurid',[MuridController::class,'TentorTampilDatamurid'])->name('tentor-datamurid');
// End Route Untuk Tentor






//Routing Untuk User

route::middleware('role:user')->get('/user-dashboard', function()
{
    return view ('user/user-dashboard');
});
route::middleware('role:user')->get('/user-materi', function () {
    return view('user/materi/user-materi');
});
route::middleware('role:user')->get('/user-materi-ipa', function () {
    return view('user/materi/user-materi-ipa');
});
route::middleware('role:user')->get('/user-materi-ipa',[MateriController::class,'tampilMateriAdminIPAUser']);
route::middleware('role:user')->get('/user-materi-ipa/{foto}',[MateriController::class,'DownloadFile']);
route::middleware('role:user')->get('/user-materi-bin', function () {
    return view('user/materi/user-materi-bin');
});
route::middleware('role:user')->get('/user-materi-big', function () {
    return view('user/materi/user-materi-big');
});




// End Route Untuk User


Route::get('/user-materi', function () {
    return view('user/materi/user-materi');
});
route::get('/user-materi-ipa',[MateriController::class,'tampilMateriAdminIPAUser']);
route::get('/user-materi-ipa/{foto}',[MateriController::class,'DownloadFile']);

route::get('/user-dashboard', function()
{
    return view ('user/user-dashboard');
});