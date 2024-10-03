<?php

namespace App\Http\Controllers\Admin\Adverts;

use App\Entity\Adverts\Category;
use App\Http\Controllers\Controller;
use App\Models\Categoryfilter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
class CategoryNameController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage-adverts-categories');
    }

    public function index()
    {
        $categories = Category::where('active', 1)->get();
        $categoriesFilter   =   Categoryfilter::all();
        $allcategories = Category::where('active', 0)->get();
        $columns = Schema::getColumnListing('Categoryfilters');
dd($columns);
//        dd($categoriesFilter);
        return view('admin.adverts.settoindex.index', compact('categories', 'allcategories', 'categoriesFilter'));
    }

    public function create()
    {
        $parents = Category::defaultOrder()->withDepth()->get();

        return view('admin.adverts.categories.create', compact('parents'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_am' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:categories,id',
            'attribute_id' => 'integer|exists:attributes,id',
        ]);

        $category = Category::create([
            'name_am' => $request['name_am'],
            'name_ru' => $request['name_ru'],
            'name_en' => $request['name_en'],
            'category_id' => $request['category_id'],
            'attribute_id' => $request['attribute_id'],
        ]);

        return redirect()->route('admin.adverts.categories.show', $category);
    }

    public function show(Category $category)
    {
        $parentAttributes = $category->parentAttributes();
        $attributes = $category->attributes()->orderBy('sort')->get();

        return view('admin.adverts.categories.categoryname', compact('category', 'attributes', 'parentAttributes'));
    }

    public function edit(Category $category)
    {
        $parents = Category::defaultOrder()->withDepth()->get();

        return view('admin.adverts.categories.edit', compact('category', 'parents'));
    }

    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name_am' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'parent' => 'nullable|integer|exists:advert_categories,id',
        ]);

        $category->update([
            'name_am' => $request['name_am'],
            'name_ru' => $request['name_ru'],
            'name_en' => $request['name_en'],
            'slug' => $request['slug'],
            'parent_id' => $request['parent'],
        ]);

        return redirect()->route('admin.adverts.categories.show', $category);
    }

    public function first(Category $category)
    {
        if ($first = $category->siblings()->defaultOrder()->first()) {
            $category->insertBeforeNode($first);
        }

        return redirect()->route('admin.adverts.categories.index');
    }

    public function up(Category $category)
    {
        $category->up();

        return redirect()->route('admin.adverts.categories.index');
    }

    public function down(Category $category)
    {
        $category->down();

        return redirect()->route('admin.adverts.categories.index');
    }

    public function last(Category $category)
    {
        if ($last = $category->siblings()->defaultOrder('desc')->first()) {
            $category->insertAfterNode($last);
        }

        return redirect()->route('admin.adverts.categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.adverts.categories.index');
    }}
