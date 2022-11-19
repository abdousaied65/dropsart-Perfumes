<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminProfile;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
Carbon::setLocale('ar');
class HomeController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth:admin-web');
    }
    public function index()
    {
        $auth_id = Auth::user()->id;
        $user = Admin::findOrFail($auth_id);
        if (AdminProfile::where('admin_id', '=', $auth_id)->count() > 0) {
            //profile found
        } else {
            // profile not found
            $user->assignRole($user->role_name);
            $profile = AdminProfile::create([
                'phone_number' => '',
                'city_name' => '',
                'age' => '',
                'gender' => '',
                'profile_pic' => 'admin-assets/img/admin-avatar.png',
                'admin_id' => $auth_id
            ]);
        }
        return view('admin.home', compact('user'));
    }
}
