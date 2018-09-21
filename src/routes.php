<?php

Route::group(['prefix' => 'cms/builder'],function($router) {
    $router->get( 'make', 'Edarkzero\CMSBuilder\Http\Controllers\BuilderController@make' )->name( 'cms.builder.make' );
});