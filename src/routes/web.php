<?php
	// Route::get('contact', function(){
    //     return 'Hello from the contact form package';
    // });

    // Route::get('contact', function(){
    //     return view('contactform::contact');
    // });

    // Route::post('contact', function(){
    //     // logic goes here
    // })->name('contact');

	Route::group(['namespace' => 'Dhanushka\Contactform\Http\Controllers', 'middleware' => ['web']], function(){
        Route::get('contact', 'ContactFormController@index');
        Route::post('contact', 'ContactFormController@sendMail')->name('contact');
    });
?>