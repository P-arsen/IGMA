<?php

namespace App\Entity\Adverts;

use App\Models\Announcement;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int|null $parent_id
 *
 * @property int $depth
 * @property Category $parent
 * @property Category[] $children
 * @property Attribute[] $attributes
 */
class Category extends Model
{
    use NodeTrait;

    protected $table = 'advert_categories';

    public $timestamps = false;

    protected $fillable = ['name_am', 'name_ru' , 'name_en','slug', 'parent_id','active','icon'];

    public function getPath(): string
    {
        return implode('/', array_merge($this->ancestors()->defaultOrder()->pluck('slug')->toArray(), [$this->slug]));
    }

    public function parentAttributes(): array
    {
        return $this->parent ? $this->parent->allAttributes() : [];
    }

    /**
     * @return Attribute[]
     */
    public function allAttributes(): array
    {
        return array_merge($this->parentAttributes(), $this->attributes()->orderBy('sort')->getModels());
    }

    public function attributes()
    {
        return $this->hasMany(Attribute::class, 'category_id', 'id');
    }
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class, 'parent_category_id', 'id');
    }
    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_id');

    }
    public function childCategories()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }
}
