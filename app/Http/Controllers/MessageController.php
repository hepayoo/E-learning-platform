<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student; // Ensure Student model is included
use Illuminate\Support\Facades\DB; // Ensure DB facade is included

class MessageController extends Controller
{
    public function enroll(Request $request)
    {
        $data = $request->validate([
            'name' => 'nullable|string|max:191',
            'email' => 'required|email|max:191',
            'spec' => 'nullable|string|max:191',
            'course_id' => 'required|exists:courses,id',
        ]);

        $student = Student::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'spec' => $data['spec'],
        ]);

        $student_id = $student->id;

        DB::table('course_student')->insert([
            'course_id' => $data['course_id'],
            'student_id' => $student_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back();
    }
}
