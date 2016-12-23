<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.pages.category', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|unique:categories,name',
        ];
        $messages = [
            'name.required' => 'Enter the name',
            'name.unique'   => 'Category exists',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if (!$validator->fails()) {
            Category::create($request->all());
            return redirect()->route('admin.category.index')->with('statusCreateCategory', 'success');
        } else {
             return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), $rules, $messages);
        $category  = Category::findBySlugOrFail($slug);
        if ($category) {
            $rules = [
                'name' => 'required|unique:categories,name,'.$category->id,
            ];
            $messages = [
                'name.required' => 'Enter the name',
                'name.unique'   => 'Category exists',
            ];
            $validator = Validator::make($request->all(), $rules, $messages);
            if (!$validator->fails())
            {
            $category->update($request->all());
            return redirect()->route('admin.category.index')->with('statusUpdateCategory', 'success');
            } else {
                   return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $category = Category::findBySlugOrFail($slug);
        if ($category) {
            $category->delete();
            return redirect()->route('admin.category.index')->with('statusDeleteCategory', 'success');
        }
    }
}
