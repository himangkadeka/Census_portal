<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\Menu\MenuController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Str;

//Route for Home page
Route::get('/admin-panel/dashboard',[MainController::class,'index'])->name('index');

//adding new page data
Route::get('admin-panel/page/addpage',[PageController::class,'addPage'])->name('addpage');

//adding main menu data/getting data from form
Route::get('admin-panel/menu/mainmenu',[MenuController::class,'mainmenu'])->name('mainmenu');

//saving mainmenu data to database
Route::post('menu/save-mainmenu', [MenuController::class, 'store']);

//View main menu
Route::get('admin-panel/menu/viewmainmenu',[MenuController::class,'show'])->name('viewmainmenu');

//edit main-menu by getting data from id
Route::get('admin-panel/menu/edit-menu/{id}',[MenuController::class,'editMainMenu'])->name('edit-main-menu');

//update main-menu
Route::post('menu/update-main-menu',[MenuController::class,'updateMainMenu']);

//delete main menu
Route::get('admin-panel/menu/delete-main-menu/{id}',[MenuController::class,'destroy'])->name('delete-main-menu');

//add sub-menu
Route::get('admin-panel/menu/submenu',[MenuController::class,'submenu'])->name('submenu');

//saving to database
Route::post('menu/save-submenu',[MenuController::class,'storeSubmenu']);

//view sub menu
Route::get('admin-panel/menu/viewsubmenu',[MenuController::class,'showSubMenu'])->name('viewsubmenu');

//Register user
Route::get('admin-panel/user/add-user',[UserController::class,'index'])->name('add-new-user');

//view user
Route::get('admin-panel/user/view-user',[UserController::class,'userShow'])->name('view-user');

//Route for Dashboard
Route::get('/dashboard', function ()
{
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//Tips : to create demo hash password
//Route::get('test',function (){
//    return Hash::make('password');
    //dd(User::find(1)->roles->toArray());
//});
require __DIR__.'/auth.php';
