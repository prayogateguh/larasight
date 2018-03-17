<?php

Route::get('/', 'PostController@getIndex')->name('blog.index');

Route::get('post/{id}', 'PostController@getPost')->name('blog.post');

Route::get('post/{id}/like', 'PostController@getLikePost')->name('blog.post.like');

Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::group(['prefix' => 'admin'], function () {
    Route::get('', 'PostController@getAdminIndex')->name('admin.index');
    
    Route::get('create', 'PostController@getAdminCreate')->name('admin.create');
    
    Route::post('create', 'PostController@postAdminCreate')->name('admin.create');
    
    Route::get('edit/{id}', 'PostController@getAdminEdit')->name('admin.edit');

    Route::get('delete/{id}', 'PostController@getAdminDelete')->name('admin.delete');
    
    Route::post('edit', 'PostController@postAdminUpdate')->name('admin.update');
});
