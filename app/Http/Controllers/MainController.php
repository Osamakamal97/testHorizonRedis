<?php

namespace App\Http\Controllers;

use App\Events\NewStudentRegisterEvent;

class MainController extends Controller
{
    public function index()
    {
        $student = 'samer moner';
        event(new NewStudentRegisterEvent($student));
        return 'done';
    }
}
