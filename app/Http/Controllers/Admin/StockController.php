<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Stock;
use Illuminate\Http\Request;
use Validator;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::all();
        return view('admin.pages.stock', ['stocks' => $stocks]);
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
            'qty'          => 'required|min:0',
            'import_price' => 'required|min:1',
            'product_id'   => 'required|exists:products,id',
        ];
        $messages = [
            'qty.required'          => 'Enter quantity',
            'qty.min'               => 'Min is 0',
            'import_price.required' => 'Enter import price',
            'product_id.required'   => 'Enter product',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if (!$validator->fails()) {
            Stock::create($request->all());
            return redirect()->route('admin.stock.index')->with('statusCreateStock', 'success');
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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'qty'          => 'required|min:0',
            'import_price' => 'required|min:1',
        ];
        $messages = [
            'qty.required'          => 'Enter quantity',
            'qty.min'               => 'Min is 0',
            'import_price.required' => 'Enter import price',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if (!$validator->fails()) {
            $stock = Stock::find($id);
            if ($stock) {
                $stock->update($request->all());
                return redirect()->route('admin.stock.index')->with('statusUpdateStock', 'success');
            }

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
    public function destroy($id)
    {
        $stock = Stock::find($id);
        if ($stock) {
            $stock->delete();
            return redirect()->route('admin.stock.index')->with('statusDeleteStock', 'success');
        }
    }
}
