<?php

namespace App\Http\Controllers\Cabinet\Add;

use App\Entity\Adverts\Category;
use App\Entity\Region;
use App\Http\Controllers\Controller;
use App\Models\Categoryfilter;
use App\Models\Flattype;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class AddPostController extends Controller
{
    public function index()
    {
        $categories = Category::with(['attributes', 'parentCategory', 'childCategories'])->get();


        $categoriesArray = $categories->map(function ($category) {
            return [
                'id' => $category->id,
                'name_an' => $category->name_am,
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
        $locale =   app()->getLocale();
        return view('cabinet.add.post',compact('locale','categoriesArray'));
    }

    public function add(Request $request)
    {
        $categories = Category::with(['attributes', 'parentCategory', 'childCategories'])->get();


        $categoriesArray = $categories->map(function ($category) {
            return [
                'id' => $category->id,
                'name_an' => $category->name_am,
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
        $locale =   app()->getLocale();
        $id = $request->id;
        $cat_id = Categoryfilter::where('subcategory_id',$id)->first();
        $regions =   Region::all();
        $buildings = Flattype::all();
        return view('cabinet.add.add',compact('locale','categoriesArray','id','regions','buildings','cat_id'));
    }

}
