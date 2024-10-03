<?php

namespace App\Http\Controllers;

use App\Entity\Adverts\Category;
use App\Models\Announcement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class BusinessController extends Controller
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
        $categoriesArray = $this->categoriesArray;
        $business   =   User::where('businese_page',1)->get();
        $locale = App::getLocale();
        return view('business.index',compact('business','locale','categoriesArray'));
    }

    public function current($id)
    {
        $categoriesArray = $this->categoriesArray;
        $locale = App::getLocale();
        $current = User::where('id', $id)->first();
        $count = Announcement::where('id',$id)->get();
        $announcements = Announcement::with(['category', 'subcategory'])->get();
        dd($announcements);
        return view('business.current', compact('current','locale','categoriesArray','count'));
    }
}
