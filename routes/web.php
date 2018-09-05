<?php

Route::get('/', 'BlogCtrl@show');

Route::post('/hire/imond', 'HireCtrl@hire');

Route::get('/newblog', 'BlogCtrl@create');

Route::post('/newblog', 'BlogCtrl@postCreate');

Route::get('/viewblog/{id}', array('as'=>'viewblog', 'uses'=>'BlogCtrl@showblog'));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/imondwork', function(){
  return view('work');
});

Route::get('/imondcontact', function(){
  return view('imondcontact');
});

Route::get('imond/sms', 'SmsCtrl@sms_init');

Route::post('imond/sms', 'SmsCtrl@imondSend');
<<<<<<< HEAD
=======

Route::get('imond/contact', 'ContactCtrl@index');

Route::post('imond/contact', 'ContactCtrl@saveContact');
>>>>>>> 9a1d843b97b2834a3d59995fb89faa5cd104ee6c
