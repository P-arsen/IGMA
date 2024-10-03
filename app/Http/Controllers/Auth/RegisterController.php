<?php

namespace App\Http\Controllers\Auth;

use App\Entity\Adverts\Category;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\UseCases\Auth\RegisterService;

class RegisterController extends Controller
{
    private $service;

    public function __construct(RegisterService $service)
    {
        $this->middleware('guest');
        $this->service = $service;
    }

    public function showRegistrationForm()
    {
        $categories = Category::with('attributes')->get();

        // Prepare the data as an array
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
        $locale = app()->getLocale();
        return view('auth.register', compact('locale','categoriesArray'));
    }

    public function register(RegisterRequest $request)
    {

        $this->service->register($request);
        return redirect()->route('login')
            ->with('success', 'Check your email and click on the link to verify.');
    }

    public function verify($token)
    {
        if (!$user = User::where('verify_token', $token)->first()) {
            return redirect()->route('login')
                ->with('error', 'Sorry your link cannot be identified.');
        }

        try {
            $this->service->verify($user->id);
            return redirect()->route('login')->with('success', 'Your e-mail is verified. You can now login.');
        } catch (\DomainException $e) {
            return redirect()->route('login')->with('error', $e->getMessage());
        }
    }
}
