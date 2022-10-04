<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        // return view('categories.index', [
        //     'categories' => $categories
        // ]);

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

<<<<<<< HEAD
    public function store(Request $request)
    {
        $data=[
            'name' => $request->name,
            'price' => $request->price,
            'unit' => $request->unit,
=======
    public function store(CategoryRequest $request)
    {
        $data = [
            'name' => $request->name,
>>>>>>> 8c71e4fe4da87e01cacd24dd1bf932a9cef256bd
            'is_active' => $request->is_active ? true : false
        ];

        Category::create($data);
<<<<<<< HEAD
        //dd($request->all());

        return redirect()
        ->route('categories.index')
        ->withmMessage('Add Successfully!');
=======

        return redirect()
            ->route('categories.index')
            ->withMessage('Created Successfully!');
>>>>>>> 8c71e4fe4da87e01cacd24dd1bf932a9cef256bd
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('categories.edit', compact('category'));
    }

<<<<<<< HEAD
    public function update(Request $request, $id)
    {
        //dd('Updated Mtod');
        $category = Category::find($id);

        $data=[
            'name' => $request->name,
            'price' => $request->price,
            'unit' => $request->unit,
=======
    public function update(CategoryRequest $request, $id)
    {

        $category = Category::find($id);

        $data = [
            'name' => $request->name,
>>>>>>> 8c71e4fe4da87e01cacd24dd1bf932a9cef256bd
            'is_active' => $request->is_active ? true : false
        ];

        $category->update($data);
<<<<<<< HEAD
        //dd($request->all());

        return redirect()
        ->route('categories.index')
        ->withmMessage('Update Successfully!');
=======

        return redirect()
            ->route('categories.index')
            ->withMessage('Updated Successfully!');
>>>>>>> 8c71e4fe4da87e01cacd24dd1bf932a9cef256bd
    }

    public function show($id)
    {
        $category = Category::find($id);

        return view('categories.show', compact('category'));
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        // Session::flash('message', 'Deleted Successfully!');

        // return redirect()
        //       ->route('categories.index')
        //       ->with('message', 'Deleted Successfully!');

        return redirect()
            ->route('categories.index')
            ->withMessage('Deleted Successfully!');
    }
}
