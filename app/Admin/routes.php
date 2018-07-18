<?php

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Define your dashboard here.';
	return AdminSection::view($content, 'Dashboard');
}]);

Route::get('information', ['as' => 'admin.information', function () {
	$content = 'Define your information here.';
	return AdminSection::view($content, 'Information');
}]);


Route::get('shop', ['as' => 'admin.shop', function () {
    $content = 'Информация о товарах';
    return AdminSection::view($content, 'Магазин');
}]);

Route::get('post', ['as' => 'admin.post', function () {
    $content = 'Информация о постах';
    return AdminSection::view($content, 'Блог');
}]);

Route::get('users', ['as' => 'admin.users', function () {
    $content = 'Информация о пользователях';
    return AdminSection::view($content, 'Пользователи');
}]);

Route::get('page', ['as' => 'admin.page', function () {
    $content = 'Информация об отдельных станицах';
    return AdminSection::view($content, 'Отдельные страницы');
}]);