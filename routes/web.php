<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\PayController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Output\StreamOutput;


Route::Redirect('/', '/fr');

    Route::group(['prefix'=>'{language}'], function(){


    //login zone
    Route::get('/', [HomeController::class, "login"])->name('login-init');
    Route::get('/verify', [LoginController::class, "verify"])->name('verify');
    Route::get('/reset-password-api', [LoginController::class, "resetPassword"])->name('reset-password-api');
    Route::get('/logout', [LoginController::class, "logout"])->name('logout');

    //home zone
    Route::get('/shop', [HomeController::class, "home"])->middleware(['xauthapi','xverifyapi'])->name('home');
    Route::get('/about-us', [HomeController::class, "aboutUs"])->name('about-us');
    Route::get('/contact-us', [HomeController::class, "contactUs"])->name('contact-us');

    // Stock categories zone
    Route::get('/category/{slug}', [StockController::class, "showCategories"])->name('show-category');

    // paiement zone --------------------------------------
    Route::get('/paiement', [PayController::class, "paiementView"])->name('paiement');


     // seller profile area--------------------------------------
    // Route::get('/manage-profile/{id?}',[AdminController::class, "adminManageProfile"])->name('admin-manage-profile');

    // });// end seller zone--------------------------------------







    // ----------------------------------------------------------------------------
    // maintenance zone

			Route::get('/php-info', function() {

				return view('php-info');
			});

			Route::get('/route-cache', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('route:cache', [
                    // '--path' => 'database/migrations/customer',
                    // '--force' => true,
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h1>response artisan:   $callResponse  </h1>";
			});

			Route::get('/schedule-work', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('schedule:work', [
                    // '--path' => 'database/migrations/customer',
                    // '--force' => true,
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h1>response artisan:   $callResponse  </h1>";
			});

			Route::get('/config-cache', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('config:cache', [
                    // '--path' => 'database/migrations/customer',
                    // '--force' => true,
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h1>response artisan:   $callResponse  </h1>";
			});

			Route::get('/optimize', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('optimize', [
                    // '--path' => 'database/migrations/customer',
                    // '--force' => true,
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h1>response artisan:   $callResponse  </h1>";
			});

			Route::get('/migrate', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('migrate', [
                    // '--path' => 'database/migrations/customer',
                    // '--force' => true,
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h1>response artisan:   $callResponse  </h1>";
			});

			Route::get('/storage-link', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('storage:link', [
                    // '--path' => 'database/migrations/customer',
                    // '--force' => true,
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h1>response artisan:   $callResponse  </h1>";
			});

			Route::get('/cache-clear', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('cache:clear', [
                    // '--path' => 'database/migrations/customer',
                    // '--force' => true,
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h1>Cache cleared ,   $callResponse  </h1>";
			});
			Route::get('/config-clear', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('config:clear', [
                    // '--path' => 'database/migrations/customer',
                    // '--force' => true,
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h1>Cache cleared ,   $callResponse  </h1>";
			});
			Route::get('/view-clear', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('view:clear', [
                    // '--path' => 'database/migrations/customer',
                    // '--force' => true,
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h1>Cache cleared ,   $callResponse  </h1>";
			});
			Route::get('/route-clear', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('route:clear', [
                    // '--path' => 'database/migrations/customer',
                    // '--force' => true,
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h1>Cache cleared ,   $callResponse  </h1>";
			});


			Route::get('/passport-install', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('passport:install', [
                    // '--connection' => 'database',
                    //  '--queue' => 'default',
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h5>$callResponse</h5>";
			});

			Route::get('/key-generate', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('key:generate', [
                    // '--connection' => 'database',
                    //  '--queue' => 'default',
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h5>$callResponse</h5>";
			});

			Route::get('/queue-work', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('queue:work', [
                    // '--connection' => 'database',
                    //  '--queue' => 'default',
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h5>$callResponse</h5>";
			});

			Route::get('/queue-monitor', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('queue:monitor database:default', [
                    // '--connection' => 'database',
                    //  '--queue' => 'default',
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h5>$callResponse</h5>";
			});

			Route::get('/queue-listen', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('queue:listen', [
                    // '--connection' => 'database',
                    //  '--queue' => 'default',
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h5>$callResponse</h5>";
			});

            Route::get('/queue-clear', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('queue:clear', [
                    // '--connection' => 'database',
                    //  '--queue' => 'default',
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h5>$callResponse</h5>";
			});



}); // end group lang prefix


