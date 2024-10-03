<?php

namespace App\Models;

use App\Entity\Adverts\Attribute;
use App\Entity\Adverts\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    public function attributes()
    {
        return $this->hasMany(Attribute::class, 'subcategory_id', 'id');
    }

    /**
     * Get the parent category for the subcategory.
     */
    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_category_id', 'id');
    }

}
