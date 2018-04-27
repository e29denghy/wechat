<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class IndexController extends Controller
{
    //
    public function course()
    {
        $course = new Course;
        $data = $course->courseData();
        $title = $data['title'];
        $subtitle = $data['subtitle'];
        return view('course.high_effect_com',["title"=>$title,"subtitle"=>$subtitle]);
    }
}
