<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static where(string $string, $id)
 * @method static findOrFail($admin_id)
 */
class Testimonial extends Model
{
    protected $table = "testimonials";
    protected $fillable = [
        'testimonial_name','testimonial_text','admin_id'
    ];
    public function admin(){
        return $this->belongsTo('\App\Models\Admin','admin_id','id');
    }

}
