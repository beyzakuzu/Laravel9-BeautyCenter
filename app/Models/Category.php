<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    #onetomany
    public function service()
    {
        return $this->hasMany(Service::class);
    }
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');

    }
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');

    }
}
