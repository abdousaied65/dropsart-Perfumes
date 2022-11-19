<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static where(string $string, $id)
 * @method static findOrFail($admin_id)
 */
class Course extends Model
{
    protected $table = "courses";
    protected $fillable = [
        'course_name','course_price','course_pic','course_description'
        ,'date','seats','completed','admin_id'
    ];
    public function admin(){
        return $this->belongsTo('\App\Models\Admin','admin_id','id');
    }

}
