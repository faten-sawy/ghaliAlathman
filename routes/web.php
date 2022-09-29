<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfumeController;
use App\Http\Controllers\NotificationsController;
use Illuminate\Support\Facades\File;


Route::get('dashboard/charts', '\App\Http\Controllers\HomeController@charts')->name('dashboard.charts');
Route::get('dashboard/chartsorder', '\App\Http\Controllers\HomeController@chartsorder')->name('dashboard.chartsorder');


Route::prefix('upload')->name('upload.')->group(function () {
    Route::post('/image', [HelperController::class, 'upload_image'])->name('image');
    Route::post('/file', [HelperController::class, 'upload_file'])->name('file');
    Route::post('/remove-file', [HelperController::class, 'remove_files'])->name('remove-file');
});
Route::get('manifest.json', [HelperController::class, 'manifest'])->name('manifest');
Route::get('PaymentRequest', '\App\Http\Controllers\Api\PaymentController@Pay');
Route::get('check_payment', '\App\Http\Controllers\Api\PaymentController@check_payment')->name('check_payment');

Route::post('/charge', '\App\Http\Controllers\Api\PaymentController@PaymentRequest')->name('pay.charge');
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
        

Auth::routes();
Route::prefix('notifications')->name('notifications.')->group(function () {
    Route::get('/', [NotificationsController::class, 'index'])->name('index');
    Route::get('/ajax', [NotificationsController::class, 'notifications_ajax'])->name('ajax');
    Route::post('/see', [NotificationsController::class, 'notifications_see'])->name('see');
});


     /*namespace('App\Http\Controllers\Dashboard')-*/


    Route::prefix('admin')->middleware(['auth', 'ActiveAccount'])->name('admin.')->group(function () {

Route::get('PaymentRequest', '\App\Http\Controllers\Api\PaymentController@Pay');
Route::get('check_payment', '\App\Http\Controllers\Api\PaymentController@check_payment')->name('check_payment');

Route::post('/charge', '\App\Http\Controllers\Api\PaymentController@PaymentRequest')->name('pay.charge');
        Route::view('contactlinks', 'contacts');
        Route::view('categories', 'dashboard.categories.index');
        Route::view('education', 'dashboard.education.index');
        Route::view('bankaccounts', 'dashboard.bankaccounts.index');
        Route::view('pages', 'dashboard.pages.index');
        Route::view('perfumerequestlinks', 'dashboard.perfumerequest.index');
        Route::view('cities', 'dashboard.cities.index');
        Route::view('countries', 'dashboard.countries.index');
        //sliders
        Route::view('sliders', 'dashboard.sliders.index');
        //articles
        Route::view('articles', 'dashboard.articles.index');
        //brands
        Route::view('brands', 'dashboard.brands.index');
        //services
        Route::view('services', 'dashboard.services.index');
        //settings
        Route::view('settings', 'dashboard.settings.index');
        //packages
        Route::view('packages', 'dashboard.packages.index');

        Route::view('packagefeatures', 'dashboard.packagefeatures.index');

        //users && roles
        Route::view('users', 'dashboard.users.index');
        Route::view('roles', 'dashboard.roles.index');
//    notes
        Route::view('notes', 'dashboard.notes.index');
        Route::view('tenant', 'dashboard.tenant.index');
        Route::view('coupons', 'dashboard.coupons.index');
        Route::view('partnerrequests', 'dashboard.partnerrequests.index');
        Route::view('perfumerequest', 'dashboard.perfumerequest.index');
        Route::view('merchant', 'dashboard.merchant.index');
        Route::view('position', 'dashboard.position.index');
        Route::view('workshop', 'dashboard.workshop.index');
        Route::view('bill', 'dashboard.bill.index');
        Route::view('accountdetail', 'dashboard.accountdetail.index');
        Route::view('address', 'dashboard.address.index');
        Route::view('order_detail', 'dashboard.order_detail.index');
        Route::view('order', 'dashboard.order.index');
        Route::view('Tickets', 'dashboard.ticket.index');
        Route::view('Downloads', 'dashboard.download.index');
        Route::view('perfume', 'dashboard.perfume.index');



    //     Route::get('/requests_perfumes', function () {
    //         return view('dashboard.requests_perfumes');
    //     })->name('requests_perfumes');

    //     Route::get('/perfumes', function () {
    //         return view('dashboard.perfumes');
    //     })->name('perfumes');

    //     Route::get('/merchantdashboard', function () {
    //         return view('dashboard.merchant');
    //     })->name('merchantdashboard');

    //     Route::get('/trader', function () {
    //         return view('dashboard.trader');
    //     })->name('trader');
         Route::get('/home', function () {
        return view('dashboard.homepage');
    })->name('home');
    // Route::get('/report', function () {
    //     return view('dashboard.Reports.index');
    // })->name('report');

       Route::get('/traffic-statics', 'App\Http\Controllers\Dashboard\TrafficsController@statics')->name('index');
        Route::get('traffics', 'App\Http\Controllers\Dashboard\TrafficsController@index')->name('traffics.index');
        Route::get('traffics/{traffic}/logs', 'App\Http\Controllers\Dashboard\TrafficsController@logs')->name('traffics.logs');
        Route::get('error-reports', 'App\Http\Controllers\Dashboard\TrafficsController@error_reports')->name('traffics.error-reports');
        Route::get('error-reports/{report}', 'App\Http\Controllers\Dashboard\TrafficsController@error_report')->name('traffics.error-report');

    });

    /* End Admin Routes */


// Front End Route

      Route::get('/', function () {
    return view('layouts.front');
});


});
// hanan 2

Route::view('llogin','livewire.home');
Route::view('contactlinks', 'contacts');
Route::get('/post-create',[PerfumeController::class, 'create'])->name('post.create');
Route::post('/post-store',[PerfumeController::class, 'store'])->name('post.store');
Route::get('/post-list',[PerfumeController::class, 'list'])->name('post.list');
Route::get('/post-view/{id}',[PerfumeController::class, 'view'])->name('post.view');
// Route::get('/login', function () {
//     return view('auth.login');
// });

#Manage Review
Route::post('/review-store',[PerfumeController::class, 'reviewstore'])->name('review.store');

// Route::view('perfumerequestlinks', 'perfumerequest');


