<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules\Exists;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\DashboardController;
use App\Http\Livewire\CreateAccidentForm;
use App\Http\Livewire\CreateAddressForm;
use App\Http\Livewire\CreateVehicleForm;
use App\Http\Livewire\ViewAccidentForm;
use App\Http\Livewire\ViewVehicleForm;
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

Route::controller(DashboardController::class)->group(function(){
    Route::get('/', 'index')->middleware('auth')->name('dashboard');
    Route::get('/dashboard', 'index')->middleware('auth')->name('dashboard');
    Route::get('/roads', 'roadIndex')->middleware('auth')->name('roads.manage');
    Route::get('/vehicles', 'vehicleIndex')->middleware('auth')->name('vehicles.manage');

});

Route::get('/generateAPIKey', [DashboardController::class,'generateAPIKey'])->middleware('auth')->name('generateAPIKey');

Route::get('/statistics', [UserController::class, 'showStatistics'])->name('statistics');

Route::get('/record-selection', function(){
    return view('create-new-record');
})->middleware('auth')->name('newRecordSelection');

Route::get('/create-accident', function(){
    return view('create-accident-form');
})->middleware('auth')->name('newRecord');
Route::get('/create-vehicle', function(){
    return view('create-vehicle-form');
})->middleware('auth')->name('newRecord');
Route::get('/create-address', function(){
    return view('create-address-form');
})->middleware('auth')->name('newRecord');

Route::get('/create-new-vehicle',   CreateVehicleForm::class)->middleware('auth');
Route::get('/create-new-address',   CreateAddressForm::class)->middleware('auth');
Route::get('/create-new-accident', CreateAccidentForm::class)->middleware('auth');
Route::controller(UserController::class)->group(function (){
    Route::get('/register', 'create')->middleware('guest');
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::get('/users/update/{user}','fetchUser')->middleware('auth');
    Route::get('/users/edit/{userid}', 'editUserForm')->middleware('auth')->name('editUserForm');
    Route::get('/users/view/{user}', 'viewUser')->middleware('auth')->name('users.view');
    Route::get('/users/manage', 'loadUsers')->middleware('auth')->name('users.manage');
    //register user in the database
    Route::post('/users', 'store');
    //login
    Route::post('/users/authenticate',  'authenticate');
    //logout
    Route::post('/logout','logout');

    //update user
    Route::put('/users/update/{user}','updateUser')->middleware('auth');

    //delete user
    Route::delete('/users/delete/{userid}', 'deleteUser')->middleware('auth');
});

/*
    Αντί να έχω

    Route::get('/some-route', [Controller::class, 'function'])->middleware('middleware');
    Πλέον στο Laravel 9 υπάρχει το controller grouping feature κι έτσι όλες οι διαδρομές που έχουν
    να κάνουν με ένα κοινό Controller όπως π.χ. τα UserController και RecordController
    τα έχω κάνει Group, εκτός από την αφαίρεση του ονόματος του controller μέσα από τα ορισμένα routes
    δεν αλλάζει κατι, παραμόνο μας βοηθά στην ομαδοποίηση του κώδικα και έτσι τον κάνει και ευανάγνωστο.
*/
Route::get('/accidents/view/{id}', ViewAccidentForm::class)->middleware('auth')->name('accidents.view');
Route::get('/vehicles/view/{id}', ViewVehicleForm::class)->middleware('auth')->name('vehicles.view');
Route::controller(RecordController::class)->group(function (){
    Route::get('/create-new-accident',  'loadAccidentForm')->middleware('auth')->name('newRecord');


    Route::get('/accidents/edit/{accident}', 'editAccidentForm')->middleware('auth')->name('editAccidentForm');
    Route::get('/vehicles/edit/{vehicle}', 'editVehicleForm')->middleware('auth')->name('editVehicleForm');
    Route::get('/roads/edit/{road}', 'editRoadForm')->middleware('auth')->name('editRoadForm');

    //view routes


    Route::get('/roads/view/{road}', 'viewRoad')->middleware('auth')->name('roads.view');

    //post routes

    // Route::post('/create-accident', 'postAccidentForm')->middleware('auth');
    //Route::post('/create-road', 'postAddressForm')->middleware('auth');
    //Route::post('/create-vehicle', 'postVehicleForm')->middleware('auth');

    //DELETE ROUTES

    Route::delete('/accident/delete/{accident}', 'deleteAccident')->middleware('auth');
    Route::delete('/roads/delete/{roadid}', 'deleteRoad')->middleware('auth');
    Route::delete('/vehicles/delete/{vehicle}', 'deleteRoad')->middleware('auth');

    //PUT ROUTES

    Route::put('/accidents/edit/{accident}', 'updateAccident')->middleware('auth');
    Route::put('/vehicles/edit/{vehicle}', 'updateVehicle')->middleware('auth');
    Route::put('/roads/edit/{roadid}', 'updateRoad')->middleware('auth');

});


