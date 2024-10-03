<?php

namespace App\Http\Controllers\Cabinet;

use App\Entity\Adverts\Category;
use App\Entity\Region;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ProfileEditRequest;
use App\UseCases\Profile\ProfileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    private $service;

    public function __construct(ProfileService $service)
    {
        $this->service = $service;
    }

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
        $user = Auth::user();
        $locale = app()->getLocale();
        $region = Region::where('id', $user->id)->first();
        return view('cabinet.profile.home', compact('user','locale','categoriesArray','region'));
    }

    public function edit()
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
        $user = Auth::user();
        $locale = app()->getLocale();
        $regions = Region::all();
        return view('cabinet.profile.edit', compact('user','locale','categoriesArray','regions'));
    }

    public function update(ProfileEditRequest $request)
    {
        try {
            $this->service->edit(Auth::id(), $request);
        } catch (\DomainException $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        return redirect()->route('cabinet.profile.home');
    }
}
