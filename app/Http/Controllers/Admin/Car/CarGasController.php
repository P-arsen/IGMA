<?php

namespace App\Http\Controllers\Admin\Car;

use App\Models\Cargas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redis;

class CarGasController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage-regions');
    }

    public function index()
    {
        $cargas= Cargas::orderBy('name_am')->get();

        return view('admin.car.gas.index', compact('cargas'));
    }

    public function create(Request $request)
    {

        if ($request->get('parent')) {
            $parent = Cargas::findOrFail($request->get('parent'));
        }
        $regions    =   Cargas::all();
        return view('admin.car.gas.create');
    }

    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'name_am' => [
                'required',
                'string',
                'max:255',
                Rule::unique('cargas', 'name_am'),
            ],
            'name_ru' => [
                'required',
                'string',
                'max:255',
                Rule::unique('cargas', 'name_ru'),
            ],
            'name_en' => [
                'required',
                'string',
                'max:255',
                Rule::unique('cargas', 'name_en'),
            ],
        ]);

        // Proceed to create the new region with $validatedData
        $region = Cargas::create($validatedData);


//        $region = Region::create([
//            'name_am' => $request['name_am'],
//            'name_ru' => $request['name_ru'],
//            'name_en' => $request['name_en'],
//            'slug' => $request['slug'],
//            'parent_id' => $request['parent'],
//        ]);

        return redirect()->route('admin.car.gas.index');
    }

    public function show(Cargas $cargas)
    {
        $cargas = Cargas::get();

        return view('admin.regions.show', compact('cargas'));
    }

    public function edit(Cargas $cargas)
    {
        $cargas = Cargas::all();

        return view('admin.car.gas.edit', compact('cargas'));
    }

    public function update(Request $request, Cargas $cargas)
    {
        $this->validate($request, [
            'name_am' => 'required|string|max:255|unique:regions,name_am,' . $cargas->id . ',id,parent_id,',
            'name_ru' => 'required|string|max:255|unique:regions,name_ru,' . $cargas->id . ',id,parent_id,',
            'name_en' => 'required|string|max:255|unique:regions,name_en,' . $cargas->id . ',id,parent_id,',
        ]);

        $cargas->update([
            'name_am' => $request['name_am'],
            'name_ru' => $request['name_ru'],
            'name_en' => $request['name_en'],
        ]);

        return redirect()->route('admin.regions.show', $cargas);
    }

    public function destroy(Cargas $cargas)
    {
        $cargas->delete();

        return redirect()->route('admin.car.gas.index');
    }
}
