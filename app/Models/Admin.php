<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Notifications\ResetPasswordNotification;
use App\Notifications\VerifyEmailNotification;

/**
 * @method static create(array $array)
 * @method static findOrFail($id)
 */
class Admin extends Authenticatable
{
    use Notifiable,HasRoles;
    protected $table = 'admins';
    protected $guard = 'admin-web';
    protected $fillable = [
        'company_id','name', 'email', 'password','role_name','Status','phone_number'
    ];
    protected $hidden = [
        'password', 'remember_token',
        'email_verified_at'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'role_name' => 'array',
    ];
    public function company(){
        return $this->belongsTo('\App\Models\Company','company_id','id');
    }
    public function profile()
    {
        return $this->hasOne('\App\Models\AdminProfile');
    }
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token, 'admin.password.reset', 'admins'));
    }
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmailNotification('admin.verification.verify'));
    }

}
