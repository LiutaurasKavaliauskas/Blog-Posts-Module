<?php

Route::get('blog/{langCode?}/{slug?}', ['middleware' => ['web'], 'uses' => 'HCPostsFrontEndController@showBlog']);
Route::get('posts/{langCode?}/{slug?}', ['middleware' => ['web'], 'uses' => 'HCPostsFrontEndController@showPost']);
