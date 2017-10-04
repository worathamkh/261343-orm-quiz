<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/reports/students', function () {
    // FIXME
    $students = App\Models\Student::___3___;
    
    // print header
    echo "student_id,first_name,last_name<br>";

    foreach ($students as $student) {
        echo "$student->id,$student->first_name,$student->last_name<br>";
    }
});

$router->get('/reports/lockers', function () {
    // FIXME
    $lockers = App\Models\Locker::___4___;

    // print header
    echo "locker_id,student_id,student_first_name<br>";

    foreach ($lockers as $locker) {
        // FIXME
        $student = $locker->___5___;
        // FIXME
        echo "$locker->id,{$student->___6___},{$student->___7___}<br>";
    }
});

$router->get('/', function () use ($router) {
    return $router->app->version();
});
