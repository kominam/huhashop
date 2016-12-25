<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use File;
use Illuminate\Http\Request;
use Validator;
use App\AloneSale;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.pages.product', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'name'        => 'required|unique:products,name',
            'price'       => 'required|min:0',
            'unit'        => 'required',
            'description' => 'required',
            'is_new'      => 'required',
            'is_hot'      => 'required',
            'image'       => 'required|image',
            'category_id' => 'required|exists:categories,id',
        ];
        $messages = [
            'name.required'   => 'Enter the name of product',
            'name.unique'     => "Product existing",
            'unit.required'   => 'requied unit',
            'is_new.required' => 'Required new',
            'is_hot.requied'  => 'required hot',
            'image.required'  => 'Required Image',
            'image.image'     => 'Not valid image',
            'unit.required'   => 'Required Unit',
            'description'     => 'Required description',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if (!$validator->fails()) {
            $image    = $request->file('image');
            $name     = $request->name . '.' . $image->getClientOriginalExtension();
            $zoomName = $request->name . '_big.' . $image->getClientOriginalExtension();
            $image->move(config('upload.orgin_image_path'), $name);
            File::copy(config('upload.orgin_image_path') . $name, config('upload.big_image_path') . $zoomName);
            $request->merge([
                'url_image'  => $name,
                'zoom_image' => $zoomName,
            ]);
            $inputs = $request->only([
                'name',
                'category_id',
                'is_hot',
                'is_new',
                'unit',
                'price',
                'description',
                'url_image',
                'zoom_image',
            ]);
            Product::create($inputs);
            return redirect()->route('admin.product.index')->with('statusCreateProduct', 'success');
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
        $product = Product::findBySlugOrFail($slug);
        $rules = [
            'name'        => 'required|unique:products,name,'.$product->id,
            'price'       => 'required|min:0',
            'unit'        => 'required',
            'description' => 'required',
            'is_new'      => 'required',
            'is_hot'      => 'required',
            'category_id' => 'required|exists:categories,id',
        ];
        $messages = [
            'name.required'   => 'Enter the name of product',
            'name.unique'     => "Product existing",
            'unit.required'   => 'requied unit',
            'is_new.required' => 'Required new',
            'is_hot.requied'  => 'required hot',
            'unit.required'   => 'Required Unit',
            'description'     => 'Required description',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if (!$validator->fails())
        {
        if ($request->hasFile('image')) {
            $image    = $request->file('image');
            $name     = $request->name . '.' . $image->getClientOriginalExtension();
            $zoomName = $request->name . '_big.' . $image->getClientOriginalExtension();
            $image->move(config('upload.orgin_image_path'), $name);
            File::copy(config('upload.orgin_image_path') . $name, config('upload.big_image_path') . $zoomName);
            $request->merge([
                'url_image'  => $name,
                'zoom_image' => $zoomName,
            ]);
            $inputs = $request->only([
                'name',
                'category_id',
                'is_hot',
                'is_new',
                'unit',
                'price',
                'description',
                'url_image',
                'zoom_image',
            ]);
        } else {
            $inputs = $request->only([
                'name',
                'category_id',
                'is_hot',
                'is_new',
                'unit',
                'price',
                'description',
            ]);
        }
        $product->update($inputs);
        return redirect()->route('admin.product.index')->with('statusUpdateProduct', 'success');
    } else {
         return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
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
        $product = Product::findBySlugOrFail($slug);
        if ($product) {
            $product->delete();
            return redirect()->route('admin.product.index')->with('statusDeleteProduct', 'success');
        }
    }


    public function markAsSaleFromNow(Request $request, $slug)
    {
       $product = Product::findBySlugOrFail($slug);
        if ($product) {
           $alone_sale = AloneSale::create($request->all());
            return redirect()->route('admin.product.index')->with('statusCreateEvent', 'success');
        }
    }
}
