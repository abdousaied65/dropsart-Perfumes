<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AdminProfile;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:صلاحيات المستخدمين');
    }
    public function index(Request $request)
    {
        $data = Admin::all();
        return view('admin.admins.index', compact('data'));
    }

    public function create()
    {
        $company_id = Auth::user()->company_id;
        $company = Company::FindOrFail($company_id);
        $roles = Role::pluck('name', 'name')->all();
        return view('admin.admins.create', compact('roles','company','company_id'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|same:confirm-password',
            'role_name' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $admin = Admin::create($input);
        $admin->assignRole($request->input('role_name'));
        $profile = AdminProfile::create([
            'phone_number' => '',
            'city_name' => '',
            'age' => '',
            'gender' => '',
            'profile_pic' => 'assets/img/user.png',
            'admin_id' => $admin->id
        ]);
        return redirect()->route('admin.admins.index')
            ->with('success', 'تم اضافة موظف بنجاح');
    }
    public function show($id)
    {
        $admin = Admin::findorfail($id);
        return view('admin.admins.show', compact('admin'));
    }
    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        $roles = Role::pluck('name', 'name')->all();
        $adminRole = $admin->roles->pluck('name', 'name')->all();
        return view('admin.admins.edit', compact('admin', 'roles', 'adminRole'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'same:confirm-password',
            'role_name' => 'required'
        ]);
        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = array_except($input, array('password'));
        }
        $admin = Admin::findOrFail($id);
        $admin->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $admin->assignRole($request->input('role_name'));
        return redirect()->route('admin.admins.index')
            ->with('success', 'تم تعديل بيانات الموظف بنجاح');
    }
    public function destroy(Request $request)
    {
        Admin::findOrFail($request->admin_id)->delete();
        return redirect()->route('admin.admins.index')
            ->with('success', 'تم حذف الموظف بنجاح');
    }
}
