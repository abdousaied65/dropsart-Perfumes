<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('admin.courses.index',compact('courses'));
    }
    public function create()
    {
        return view('admin.courses.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'course_name' => 'required',
            'course_price' => 'required',
            'course_pic' => 'required',
            'date' => 'required',
            'seats' => 'required',
            'completed' => 'required',
            'course_description' => 'required',
        ]);
        $data = $request->all();
        $admin_id = Auth::user()->id;
        $data['admin_id'] = $admin_id ;
        $course = Course::create($data);
        if ($request->hasFile('course_pic')) {
            $image = $request->file('course_pic');
            $fileName = $image->getClientOriginalName();
            $uploadDir = 'uploads/courses/' . $course->id;
            $image->move($uploadDir, $fileName);
            $course->course_pic = $uploadDir . '/' . $fileName;
            $course->save();
        }
        return redirect()->route('admin.courses.index')
            ->with('success', 'تم اضافة الدورة بنجاح');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('admin.courses.edit', compact('course'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'course_name' => 'required',
            'date' => 'required',
            'seats' => 'required',
            'completed' => 'required',
            'course_description' => 'required',
            'course_price' => 'required'
        ]);
        $input = $request->all();
        $course = Course::findOrFail($id);
        $admin_id = Auth::user()->id;
        $input['admin_id'] = $admin_id;
        $course->update($input);
        if ($request->hasFile('course_pic')) {
            $image = $request->file('course_pic');
            $fileName = $image->getClientOriginalName();
            $uploadDir = 'uploads/courses/' . $course->id;
            $image->move($uploadDir, $fileName);
            $course->course_pic = $uploadDir . '/' . $fileName;
            $course->save();
        }
        return redirect()->route('admin.courses.index')
            ->with('success', 'تم تعديل بيانات الدورة بنجاح');
    }
    public function destroy(Request $request)
    {
        $course = course::findOrFail($request->courseid);
        $course->delete();
        return redirect()->route('admin.courses.index')
            ->with('success', 'تم حذف الدورة بنجاح');
    }
    public function get_course($id){
        $course = Course::FindOrFail($id);
        return view('site.course_details',compact('course'));
    }
}
