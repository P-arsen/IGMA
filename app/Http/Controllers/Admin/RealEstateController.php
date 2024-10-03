<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Adverts\Category;
use App\Http\Controllers\Controller;
use App\Models\Flattype;
use Illuminate\Http\Request;

class RealEstateController extends Controller
{

    private array $categoriesArray;

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
        $flat_types = Flattype::all();
        return view('admin.realEstate.type.index', compact('categoriesArray','flat_types'));
    }

    public function add_form()
    {
        $categoriesArray = $this->categoriesArray;

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_am' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
        ]);
        $category = Flattype::create([
            'name_am' => $request['name_am'],
            'name_ru' => $request['name_ru'],
            'name_en' => $request['name_en'],
        ]);
        return route('admin.real-estates.type.index');
    }
    public function edit(Request $request)
    {
        $this->validate($request,[
            'name_am' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
        ]);

        $edit = Flattype::update([
            'name_am' => $request['name_am'],
            'name_ru' => $request['name_ru'],
            'name_en' => $request['name_en'],
        ]);

        return route('admin.real-estates.type.index');
    }

    public function destroy(Flattype $flat_type)
    {
        $flat_type->delete();
        return redirect()->route('admin.real-estates.index');
    }
}
