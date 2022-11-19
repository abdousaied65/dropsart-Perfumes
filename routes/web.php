<?php

use App\Models\Course;
use App\Models\Information;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('site.index');
})->name('index');
Route::get('/about', function () {
    $testimonials = Testimonial::all();
    return view('site.about',compact('testimonials'));
})->name('about');

Route::get('/courses', function () {
    $courses = Course::all();
    return view('site.courses',compact('courses'));
})->name('courses');
Route::get('/course-details/{id?}','Admin\CourseController@get_course')->name('course_details');
Route::get('/contact', function () {
    $informations = Information::first();
    return view('site.contact',compact('informations'));
})->name('contact');

Route::post('/send-message','Site\ContactController@send_message')->name('send.message');


// *********  Admin Routes ******** //
Route::group(
    [
        'namespace' => 'Admin'
    ], function () {
    Auth::routes(
        [
            'verify' => false,
            'register' => false,
        ]
    );
    Route::GET('admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::POST('admin/login', 'Auth\LoginController@login');
    Route::POST('admin/logout', 'Auth\LoginController@logout')->name('admin.logout');
    Route::GET('admin/password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('admin.password.confirm');
    Route::POST('admin/password/confirm', 'Auth\ConfirmPasswordController@confirm');
    Route::POST('admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::GET('admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::POST('admin/password/reset', 'Auth\ResetPasswordController@reset')->name('admin.password.update');
    Route::GET('admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
});
Route::group(
    ['middleware' => ['auth:admin-web'],
        'prefix' => 'admin',
        'namespace' => 'Admin'
    ], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::get('/home', 'HomeController@index')->name('admin.home');


    // AdminProfile Routes
    Route::get('profile/edit/{id}', 'AdminProfileController@edit')->name('admin.profile.edit');
    Route::patch('profile/edit/{id}', 'AdminProfileController@update')->name('admin.profile.update');
    Route::patch('profile/store/{id}', 'AdminProfileController@store')->name('admin.profile.store');


    // Courses Routes
    Route::resource('courses', 'CourseController')->names([
        'index' => 'admin.courses.index',
        'create' => 'admin.courses.create',
        'update' => 'admin.courses.update',
        'destroy' => 'admin.courses.destroy',
        'edit' => 'admin.courses.edit',
        'store' => 'admin.courses.store',
    ]);


    // Contacts Routes
    Route::resource('contacts', 'ContactController')->names([
        'index' => 'admin.contacts.index',
        'show' => 'admin.contacts.show',
        'destroy' => 'admin.contacts.destroy'
    ]);
    Route::patch('contacts-make-as-read', 'ContactController@makeAsRead')->name('admin.contacts.make.as.read');
    Route::patch('contacts-make-as-important', 'ContactController@makeAsImportant')->name('admin.contacts.make.as.important');
    Route::patch('contacts-make-as-destroy', 'ContactController@makeAsDestroy')->name('admin.contacts.make.as.destroy');
    Route::patch('contacts-make-sent-as-destroy', 'ContactController@makeSentAsDestroy')->name('admin.contacts.make.sent.as.destroy');
    Route::patch('contacts-print', 'ContactController@print')->name('admin.contacts.print');
    Route::get('contacts-important', 'ContactController@showImportant')->name('admin.contacts.important');

    // testimonials Routes
    Route::resource('testimonials', 'TestimonialController')->names([
        'index' => 'admin.testimonials.index',
        'create' => 'admin.testimonials.create',
        'update' => 'admin.testimonials.update',
        'destroy' => 'admin.testimonials.destroy',
        'edit' => 'admin.testimonials.edit',
        'store' => 'admin.testimonials.store',
    ]);

    Route::get('informations-get','InformationController@index')->name('informations.get');
    Route::post('informations-post','InformationController@post')->name('informations.post');



});
?>
