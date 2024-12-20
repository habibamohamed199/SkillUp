<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\confirm;

class EditCourseController extends Controller
{
    public function index(Course $course)
    {
        if (Auth::user() && Auth::user()->role == 'admin') {
            return view('edit_course', ['course' => $course]);
        } else {
            return back()->withErrors("You are not allowed to access this page");
        }
    }

    public function delete(Course $course)
    {
        if (Auth::user() && Auth::user()->role == 'admin') {
            return $course->id;
    } else {
        return back()->withErrors("You are not allowed to access this page");
    }
        return $course->id;
    }

    public function update(Course $course)
    {
        return "TBD";
    }


}
