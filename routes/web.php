<?php

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
Route::get('/abc', function () {
    return view('abc');
});
Route::get("khoahoc", function (){
    return "xin chào các bạn";
});
Route::get("khoapham/laravel", function (){
   echo "<h1>Khóa học ralavel</h1>";
});
Route::get("hoten/{ten}", function ($ten){
    echo "Tên của bạn là: ".$ten;
});
Route::get("thuthuy/{ngay}", function ($ngay){
    echo "Sinh nhật của bạn là ngày: ".$ngay;
}) -> where (["ngay"=> "[a-zA-Z]+"]);