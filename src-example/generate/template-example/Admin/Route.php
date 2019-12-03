<?php


$this->group(['middleware' => 'uaa.auth', 'as' => 'admin.'], function ($router) {
    $router->get('{replace_sm}', 'Admin\{replace}Controller@index')->name('{replace_sm}.index')->middleware('permission:{replace_sm}.list');
    $router->get('{replace_sm}/create', 'Admin\{replace}Controller@create')->middleware('permission:{replace_sm}.create');
    $router->post('{replace_sm}', 'Admin\{replace}Controller@store')->middleware('permission:{replace_sm}.create')->name('{replace_sm}.store');
    $router->get('{replace_sm}/{id}/edit', 'Admin\{replace}Controller@edit')->middleware('permission:{replace_sm}.update');
    $router->put('{replace_sm}/{id}', 'Admin\{replace}Controller@update')->middleware('permission:{replace_sm}.update')->name('{replace_sm}.update');
    $router->delete('{replace_sm}/{id}', 'Admin\{replace}Controller@destroy')->middleware('permission:{replace_sm}.delete');
});