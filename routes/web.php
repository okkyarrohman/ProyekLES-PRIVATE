<?php

use App\Http\Controllers\MuridController;
use App\Http\Controllers\MapelController;
use Illuminate\Support\Facades\Route;
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

Route::get('/admin-dashboard', function () {
    return view('admin/dashboard');
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






route::get('/admin-datamurid',[MuridController::class,'ShowDatamurid']); 
route::get('/admin-datamurid',[MuridController::class,'TampilDatamurid']);
route::post('/admin-datamurid',[MuridController::class,'AddDatamurid'])->name('murid_create');
route::get('/admin-deletemurid/{id}',[MuridController::class,'HapusDatamurid']);

route::get('/admin-datamapel',[MapelController::class,'ShowDatamapel']); 