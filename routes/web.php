<?php

Route::get('', 'ContentController@index')->name("home");

Route::get('producten', 'ContentController@products')->name("products");
Route::get('producten/{product}', 'ContentController@product')->name("product");

Route::get('cart', 'ContentController@cart')->name("cart");
Route::get('cart/{id}/delete', 'ContentController@deleteFromCart')->name("cart.delete");
Route::post('cart/{id}/update', 'ContentController@updateInCart')->name("cart.update");
Route::post('addToCart/{product}', 'ContentController@addToCart')->name("addToCart");
Route::get('order', 'ContentController@order')->name("order");
Route::post('order/complete', 'ContentController@cartToOrder')->name("order.complete");
Route::post('order/delete/{order}', 'ContentController@deleteOrder')->name("order.delete");

Auth::routes();

Route::get('/orders', 'ContentController@orders')->name('orders')->middleware('auth');
