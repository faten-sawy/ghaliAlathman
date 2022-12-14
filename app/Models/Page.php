<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $appends = ['image_path','name', 'description'];

  public function getImagePathAttribute()
    {
        // return asset('images/pages/' . $this->image);
        return asset('images/auth-background.jpg');

    }//end of get image path
    public function scopeSearch($query, $term)
    {

        $term = "%$term";
        $query->where(function ($query) use ($term) {
            $query->where('name_ar', 'like', $term)
                ->OrWhere('name_en', 'like', $term);
        });
    }


    public function getNameAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->name_ar : $this->name_en;
    }// end of get name

    public function getDescriptionAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->description_ar : $this->description_en;
    }// end of get description
}
