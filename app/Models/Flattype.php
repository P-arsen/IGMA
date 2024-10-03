<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
class Flattype extends Model
{
    use NodeTrait;

    protected $table = 'flattypes';

    protected $fillable =   [
        'name_am','name_ru','name_en'
    ];


}
