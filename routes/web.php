<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\MapelController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Admin\Datamurid\Show;
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

Route::get('/', function () {
    return view('general/berita');
});

Route::get('/berita', function () {
    return view('general/berita');
});



Route::get('/admin-pendataan', function () {
    return view('admin/pendataan');
});

Route::get('/profile', function () {
    return view('profile/show');
});





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin/dashboard');
    })->name('dashboard');
});

route::get('/berita',function()
{
return view('general/berita');
}
);





// Roting Untuk Admin
Route::get('/admin-dashboard', function () {
    return view('admin/dashboard');
})->name('homeAdmin');

route::middleware('role:admin')->get('/admin-dashboard', function()
{
    return view ('admin/dashboard');
})->name('homeAdmin');

route::get('/admin-datamurid',[MuridController::class,'ShowDatamurid']); 
route::get('/admin-datamurid',[MuridController::class,'TampilDatamurid']);
route::post('/admin-datamurid',[MuridController::class,'AddDatamurid'])->name('murid_create');
route::get('/admin-deletemurid/{id}',[MuridController::class,'HapusDatamurid']);
route::get('/admin-datamapel',[MapelController::class,'ShowDatamapel']); 



Auth::routes();



// Routing Untuk Tentor
route::middleware('role:tentor')->get('/homeTentor', function()
{
    return view ('tentor/homeTentor');
})->name('homeTentor');

route::middleware('role:tentor')->get('/tentor-dashboard', function()
{
    return view ('tentor/tentor-dashboard');
})->name('dsh');








//Routing Untuk User

route::get('/homeUser',[HomeController::class,'homeUser'])->name('homeUser');
route::middleware('role:user')->get('/user-dashboard', function()
{
    return view ('user/user-dashboard');
})->name('dsh');





