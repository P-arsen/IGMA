<?php

namespace App\Models;

use App\Entity\Adverts\Attribute;
use App\Entity\Adverts\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Attribute::class);
    }
}
