<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Trainer;
use App\Models\Student;


class HomepageController extends Controller
{
    public function index()
    {
        $data['courses'] = Course::select('id', 'name', 'small_desc', 'cat_id', 'trainer_id', 'img', 'price')
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();

            $data['courses_count'] = Course::count();
            $data['trainers_count'] = Trainer::count();
            $data['students_count'] = student::count();
    
        return view('front.index')->with($data);
    }
    
}
