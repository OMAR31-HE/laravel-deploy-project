<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\TestJob;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-job', function () {
    TestJob::dispatch();

    return 'Job dispatched!';
});
