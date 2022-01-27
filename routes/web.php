<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('queue', function () {
   /*\App\Jobs\LogJob::dispatch('dogukan_14072002@hotmail.com')->onQueue('high');
    \App\Jobs\LogJob::dispatch('Myfa_96@hotmail.com')->onQueue('medium');
    \App\Jobs\LogJob::dispatch('test@hotmail.com')->onQueue('high');
    \App\Jobs\LogJob::dispatch('zingo@hotmail.com');*/

    $user = \App\Models\User::find(2);
    \App\Jobs\MailSendJob::dispatch($user)->delay(now()->addSeconds(1));

    dd('tamamlandı');

});


