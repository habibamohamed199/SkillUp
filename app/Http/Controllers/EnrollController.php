<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\User_Course;

class EnrollController extends Controller
{
    public function enroll()
    {
        $userId=Auth::user()->id;
        $enrollments = User_Course::where('user_id', $userId)->get();
        $courses = [];
        foreach ($enrollments as $enrollment) {
            $courses[] = $enrollment->course;
            }
        
        return view('/enrollcourses', ["courses"=> $courses ]);
    }
}


