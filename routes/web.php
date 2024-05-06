<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodclassController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OptionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('timetea');
// });

Route::get('/timetea2/{tableNumber?}', [FoodclassController::class, 'timetea2']);

// Route::get('/foodclassadd', function () {
//     return view('foodclassadd', [FoodclassController::class, 'index']);
// });

Route::get('/foodclassadd', [FoodclassController::class, 'foodclassadd']);

Route::get('/foodclassadd/foodclassupdate/{id}', [FoodclassController::class, 'foodclassupdate']);

Route::post('/foodclassadd/foodclassupdatesuccess/{id}', [FoodclassController::class, 'foodclassupdatesuccess']);

Route::get('/foodclassedit/{id}', [FoodclassController::class, 'foodclassedit']);

Route::get('/additem/{id}', [FoodclassController::class, 'foodclassedit']);

Route::post('/foodadd/addsuccess/{id}', [FoodclassController::class, 'foodaddsuccess']);

Route::get('/foodedit/{cid}/{fid}', [FoodclassController::class, 'foodedit']);

Route::post('/foodedit/foodeditsuccess/{cid}/{fid}', [FoodclassController::class, 'foodeditsuccess']);

Route::post('/foodclassadd/addsuccess', [FoodclassController::class, 'addsuccess']);

Route::post('/submitCartData', [CartController::class, 'submitCartData']);

Route::get('/foodpicedit/{cid}/{fid}', [FoodclassController::class, 'foodpicedit']);

Route::post('/foodpicedit/uploadimage/{cid}/{fid}', [FoodclassController::class, 'uploadimage']);

// Route::get('main1', function () {
//     return view('main1');
// });

// 原本想簡化成一條但失敗，一條一條打吧
// Route::get('/main{id}', [FoodclassController::class, 'main']);

Route::get('/main1', [FoodclassController::class, 'main1']);

Route::get('/main2', [FoodclassController::class, 'main2']);

Route::get('/main3', [FoodclassController::class, 'main3']);

Route::get('/main4', [FoodclassController::class, 'main4']);

Route::get('/main5', [FoodclassController::class, 'main5']);

Route::get('/main6', [FoodclassController::class, 'main6']);

Route::get('/main7', [FoodclassController::class, 'main7']);

Route::get('/main8', [FoodclassController::class, 'main8']);

Route::get('/main9', [FoodclassController::class, 'main9']);

Route::get('/main10', [FoodclassController::class, 'main10']);


// 設定附加屬性的視圖
Route::get('/setoption', [OptionController::class, 'setoption']);

Route::post('/addoptionsuccess', [OptionController::class, 'addoptionsuccess']);

Route::post('/setoptionsuccess/{id}', [OptionController::class, 'setoptionsuccess']);

Route::get('/selectoptionedit/{cid}/{fid}', [OptionController::class, 'selectoptionedit']);

Route::post('/selectoptioneditsuccess/{cid}/{fid}', [OptionController::class, 'selectoptioneditsuccess']);

Route::get('/submit', [CartController::class, 'submit']);

Route::post('/updateRestQuantity', [CartController::class, 'updateRestQuantity']);
