<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 28/04/2019
 * Time: 21:28
 */

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Ajax Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "ajax" middleware group. Enjoy building your API!
|
*/
/**
 * TODO Gunakan signed URL
 */
Route::name('ajax.buku.')->group(function (){
    Route::get('/buku/search', 'AjaxBuku@search')->name('search');
    Route::get('/buku/count-all', 'AjaxBuku@countAll')->name('count-all');
});

