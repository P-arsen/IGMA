<?php

namespace App\Http\Controllers\Cabinet;

use App\Entity\Adverts\Advert\Advert;
use App\Entity\Adverts\Category;
use App\Http\Controllers\Controller;
use App\UseCases\Adverts\FavoriteService;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    private $service;

    public function __construct(FavoriteService $service)
    {
        $this->service = $service;
        $this->middleware('auth');
    }

    public function index()
    {
        $adverts = Advert::favoredByUser(Auth::user())->orderByDesc('id')->paginate(20);
        $locale = app()->getLocale();
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

        return view('cabinet.favorites.index', compact('adverts','locale','categoriesArray'));
    }

    public function remove(Advert $advert)
    {
        try {
            $this->service->remove(Auth::id(), $advert->id);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->route('cabinet.favorites.index');
    }
}
