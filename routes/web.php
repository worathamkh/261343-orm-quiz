<?php

use App\Student;
use App\Adviser;
use App\Locker;

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
    // FIXME 5
    $students = Student::___5___();
    
    // print header
    echo "student_id,first_name,last_name<br>,adviser_id,adviser_first_name,adviser_last_name";
    
        foreach ($students as $student) {
            // FIXME 6
            $adviser = $student->___6___;
    
            // FIXME 7-9
            echo "$student->id,$student->first_name,$student->last_name,$adviser->___7___,$adviser->___8___,$adviser->___9___<br>";
        }
});

$router->get('/reports/lockers', function () {
    // FIXME 10
    $lockers = Locker::___10___();

    // print header
    echo "locker_id,student_id,student_first_name<br>";

    foreach ($lockers as $locker) {
        // FIXME 11
        $student = $locker->___11___;
        // FIXME 12-13
        echo "$locker->id,{$student->___12___},{$student->___13___}<br>";
    }
});

$router->get('/reports/advisers', function () {
    // FIXME 14
    $advisers = Adviser::___14___();

    // print header
    echo "adviser_id,adviser_first_name,adviser_last_name,student_id<br>";

    foreach ($advisers as $adviser) {
        // FIXME 15
        $students = $adviser->___15___;

        foreach ($students as $student) {
            // FIXME 16
            echo "$adviser->id,$adviser->first_name,$adviser->last_name,$student->___16___<br>"
        }
    }
})

$router->get('/', function () use ($router) {
    return $router->app->version();
});
