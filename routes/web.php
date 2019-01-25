<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('templates.dashboard');
});

// Route::get('/stock', function () {
//     return view('templates.stock.view');
// });

Route::resource('/stock','StockInController');

Route::get('/stock_remarks', function () {
    return view('templates.stock_remarks.show');
});