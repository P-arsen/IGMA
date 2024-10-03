<?php

namespace App\Entity\Adverts;

use App\Models\Announcement;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $type
 * @property string $default
 * @property boolean $required
 * @property array $variants
 * @property integer $sort
 */
class Attribute extends Model
{
    public const TYPE_STRING = 'string';
    public const TYPE_INTEGER = 'integer';
    public const TYPE_FLOAT = 'float';

    protected $table = 'advert_attributes';

    public $timestamps = false;

    protected $fillable = ['name_am', 'name_ru' , 'name_en' ,'type', 'required', 'default', 'variants', 'sort'];

    protected $casts = [
        'variants' => 'array',
    ];

    public function attributes()
    {
        return $this->hasMany(Attribute::class, 'category_id', 'id');
    }

    public static function typesList(): array
    {
        return [
            self::TYPE_STRING => 'String',
            self::TYPE_INTEGER => 'Integer',
            self::TYPE_FLOAT => 'Float',
        ];
    }

    public function isString(): bool
    {
        return $this->type === self::TYPE_STRING;
    }

    public function isInteger(): bool
    {
        return $this->type === self::TYPE_INTEGER;
    }

    public function isFloat(): bool
    {
        return $this->type === self::TYPE_FLOAT;
    }

    public function isNumber(): bool
    {
        return $this->isInteger() || $this->isFloat();
    }

    public function isSelect(): bool
    {
        return \count($this->variants) > 0;
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id', 'id');
    }
    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }
}
