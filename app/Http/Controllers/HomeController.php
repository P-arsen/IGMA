<?php

namespace App\Http\Controllers;

use App\Entity\Adverts\Attribute;
use App\Entity\Adverts\Category;
use App\Entity\Region;
use App\Models\General;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Support\Facades\App;
use phpseclib3\File\ASN1\Maps\Attributes;

class HomeController extends Controller
{
    public function index()
    {
//        $categories = Category::with('attributes')->get();
        $categories = Category::with(['attributes', 'parentCategory', 'childCategories'])->get();


        $categoriesArray = $categories->map(function ($category) {
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




        $busineses = User::where('businese_page', 1)->inRandomOrder()->limit(10)->get();
        $active_categories  =   Category::where('active',1)->get();
        $active_attributes = Attribute::inRandomOrder()->limit(8)->get();
        $locale = App::getLocale();
        $regions = Region::all();
//        dd($categoriesArray[0]['children']);

        return view('home', compact('regions','categoriesArray', 'locale','busineses', 'active_categories', 'active_attributes'));
    }

    public function single()
    {
        $categories = Category::with('attributes')->get();

        $categoriesArray = $categories->map(function ($category) {
            return [
                'id' => $category->id,
                'name_an' => $category->name_am,
                'name_ru' => $category->name_ru,
                'name_en' => $category->name_en,
                'attributes' => $category->attributes->map(function ($attribute) {
                    return [
                        'id' => $attribute->id,
                        'name_am' => $attribute->name_am,
                        'name_ru' => $attribute->name_ru,
                        'name_en' => $attribute->name_en,
                        'value' => $attribute->value,
                    ];
                })->toArray(),
            ];
        })->toArray();

//dd($categoriesArray);
        $attr_id = Subcategory::all();
        $locale = App::getLocale();
        $regions = Region::all();

        return view('uniq-product', compact('regions','categoriesArray', 'locale','attr_id'));
    }


    public function bajin()
    {
        $categories = Category::with('attributes')->get();

        // Prepare the data as an array
        $categoriesArray = $categories->map(function ($category) {
            return [
                'id' => $category->id,
                'name_an' => $category->name_am,
                'name_ru' => $category->name_ru,
                'name_en' => $category->name_en,
                'attributes' => $category->attributes->map(function ($attribute) {
                    return [
                        'id' => $attribute->id,
                        'name_am' => $attribute->name_am,
                        'name_ru' => $attribute->name_ru,
                        'name_en' => $attribute->name_en,
                        'value' => $attribute->value,
                    ];
                })->toArray(),
            ];
        })->toArray();

//dd($categoriesArray);
        $getCategoryId  =   General::select('attribute_id')->orderBy('sort_id','ASC')->get();
        $attr_id = Subcategory::all();
        $locale = App::getLocale();
        $regions = Region::all();

        return view('bajin', compact('regions','categoriesArray', 'locale','attr_id'));
    }
}
