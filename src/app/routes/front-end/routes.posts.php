<?php

Route::get('{type?}/{langCode?}/{slug?}', ['middleware' => ['web'], 'uses' => 'HCPostsFrontEndController@showData']);
