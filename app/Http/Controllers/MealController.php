<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    private function rules(): array
    {
        return [
            'menu_name' => 'required|max:255',
            'price'     => 'required|integer|min:0',
            'rating'    => 'required|integer|between:1,5',
            'memo'      => 'nullable|max:500',
        ];
    }

    public function index()
    {
        $meals = Meal::latest()->get();
        return view('meals.index', compact('meals'));
    }

    public function create()
    {
        return view('meals.create');
    }

    public function store(Request $request)
    {
        Meal::create($request->validate($this->rules()));
        return redirect('/meals');
    }

    public function edit(Meal $meal)
    {
        return view('meals.edit', compact('meal'));
    }

    public function update(Request $request, Meal $meal)
    {
        $meal->update($request->validate($this->rules()));
        return redirect('/meals');
    }

    public function destroy(Meal $meal)
    {
        $meal->delete();
        return redirect('/meals');
    }
}