<?php

use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
Route::get('/admin/users',function(){
    $listUsers= DB::table('users')->get();
    // dd($listUsers[0]);// dump and die
    return view('admin/user/index');
});
Route::post('/admin/users',function(){
    dd($_REQUEST);
});
Route::view('/welcome','welcome');
Route::get('/',function(){
    return view('welcome');
});
Route::get('user/all',function(){
    // $data = [
    //     'name'=>'viet',
    //     'email'=>'vietcone@gmail.com',
    //     'password'=>'@ewwqere',        
    // ];
    // DB::table('users')
    //     ->where('id','20')
    //     ->dump();
    $data = DB::table('users')->Paginate(15)->getUrlRange(1,5);
    dd($data);
});

Route::get('test',[testController::class,'show']);
Route::view('/layout','layout');
Route::get('admin/users',function(){
    $listUsers = DB::table('users')->get();
    return view('admin/user/index',[
        'data'=>$listUsers
    ]);
});
Route::view('admin/users/create','admin/user/create');
