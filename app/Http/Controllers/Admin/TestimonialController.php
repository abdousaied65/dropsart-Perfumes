<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function index(){
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index',compact('testimonials'));
    }
    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'testimonial_name' => 'required',
            'testimonial_text' => 'required',
        ]);
        $data = $request->all();
        $admin_id = Auth::user()->id;
        $data['admin_id'] = $admin_id ;
        $testimonial = Testimonial::create($data);
        return redirect()->route('admin.testimonials.index')
            ->with('success', 'تم اضافة التوصية بنجاح');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.edit', compact('testimonial'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'testimonial_name' => 'required',
            'testimonial_text' => 'required',
        ]);
        $input = $request->all();
        $testimonial = Testimonial::findOrFail($id);
        $admin_id = Auth::user()->id;
        $input['admin_id'] = $admin_id;
        $testimonial->update($input);
        return redirect()->route('admin.testimonials.index')
            ->with('success', 'تم تعديل بيانات التوصية بنجاح');
    }
    public function destroy(Request $request)
    {
        $testimonial = Testimonial::findOrFail($request->testimonialid);
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')
            ->with('success', 'تم حذف التوصية بنجاح');
    }
}
