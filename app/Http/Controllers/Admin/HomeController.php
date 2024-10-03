<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Adverts\Advert\Advert;
use App\Entity\Adverts\Category;
use App\Http\Controllers\Controller;
use App\Models\User;
use http\Client\Request;

class HomeController extends Controller
{

private $categoriesArray;
    public function __construct()
    {
        $categories = Category::with(['attributes', 'parentCategory', 'childCategories'])->get();
        $this->categoriesArray = $categories->map(function ($category) {
            return [
                'id' => $category->id,
                'name_am' => $category->name_am,
                'name_ru' => $category->name_ru,
                'name_en' => $category->name_en,
                'parent_id' => $category->parent_id,
                'parent_name_en' => $category->parentCategory ? $category->parentCategory->name_en : null,

                'children' => $category->childCategories->map(function ($child) {
                    return [
                        'id' => $child->id,
                        'name_am' => $child->name_am,
                        'name_ru' => $child->name_ru,
                        'name_en' => $child->name_en,
                        'attributes' => $child->attributes->map(function ($attribute) {
                            return [
                                'id' => $attribute->id,
                                'name_am' => $attribute->name_am,
                                'name_ru' => $attribute->name_ru,
                                'name_en' => $attribute->name_en,
                                'value' => $attribute->value,
                            ];
                        })->toArray(),
                    ];
                })->toArray(),
            ];
        })->toArray();
    }
    public function index()
    {
        $users  =   User::count();
        $categoriesArray =  $this->categoriesArray;
        return view('admin.home',compact('users','categoriesArray'));
    }

}
