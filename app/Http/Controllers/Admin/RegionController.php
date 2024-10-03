<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Region;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redis;

class RegionController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage-regions');
    }

    public function index()
    {
        $regions = Region::where('parent_id', null)->orderBy('name_am')->get();

        return view('admin.regions.index', compact('regions'));
    }

    public function create(Request $request)
    {
        $parent = null;

        if ($request->get('parent')) {
            $parent = Region::findOrFail($request->get('parent'));
        }
        $regions    =   Region::all();
        return view('admin.regions.create', compact('parent','regions'));
    }

    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'name_am' => [
                'required',
                'string',
                'max:255',
                Rule::unique('regions', 'name_am'),
            ],
            'name_ru' => [
                'required',
                'string',
                'max:255',
                Rule::unique('regions', 'name_ru'),
            ],
            'name_en' => [
                'required',
                'string',
                'max:255',
                Rule::unique('regions', 'name_en'),
            ],
            'slug' => [
                'required',
                'string',
                'max:255',
                Rule::unique('regions', 'slug'),
            ],
            'parent_id' => [
                'integer',
                'max:255',
            ]
        ]);

        // Proceed to create the new region with $validatedData
        $region = Region::create($validatedData);


//        $region = Region::create([
//            'name_am' => $request['name_am'],
//            'name_ru' => $request['name_ru'],
//            'name_en' => $request['name_en'],
//            'slug' => $request['slug'],
//            'parent_id' => $request['parent'],
//        ]);

        return redirect()->route('admin.regions.show', $region);
    }

    public function show(Region $region)
    {
        $regions = Region::where('parent_id', $region->id)->orderBy('name_am')->get();

        return view('admin.regions.show', compact('region', 'regions'));
    }

    public function edit(Region $region)
    {
        $regions = Region::all();

        return view('admin.regions.edit', compact('region' , 'regions'));
    }

    public function update(Request $request, Region $region)
    {
            $this->validate($request, [
                'name_am' => 'required|string|max:255|unique:regions,name_am,' . $region->id . ',id,parent_id,' . $region->parent_id,
                'name_ru' => 'required|string|max:255|unique:regions,name_ru,' . $region->id . ',id,parent_id,' . $region->parent_id,
                'name_en' => 'required|string|max:255|unique:regions,name_en,' . $region->id . ',id,parent_id,' . $region->parent_id,
                'slug' => 'required|string|max:255|unique:regions,slug,' . $region->id . ',id,parent_id,' . $region->parent_id,
                'parent_id' => 'integer',
            ]);

        $region->update([
            'name_am' => $request['name_am'],
            'name_ru' => $request['name_ru'],
            'name_en' => $request['name_en'],
            'slug' => $request['slug'],
            'parent_id' => $request['parent_id'],
        ]);

        return redirect()->route('admin.regions.show', $region);
    }

    public function destroy(Region $region)
    {
        $region->delete();

        return redirect()->route('admin.regions.index');
    }
}
