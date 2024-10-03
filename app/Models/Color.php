<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Color extends Model
{
    use NodeTrait;

    protected $table = 'colors';

    protected $fillable =   ['name_am','name_ru','name_en'];
}
