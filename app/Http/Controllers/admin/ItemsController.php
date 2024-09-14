<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ItemsController extends Controller
{
    use  SEOTools ;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->seo()->setTitle('items') ;

        $items = Item::all();

        return view('admin.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->seo()->setTitle('ایجاد آیتم جدید') ;


        return view('admin.items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'year' => 'required|integer',
            'month' => 'required|string',
            'sale_price_average' => 'required|numeric'
        ]);

        Item::create([
            'category_id' => $request['category_id'] ,
            'year' => $request['year'] ,
            'month' => $request['month'] ,
            'sale_price_average' => $request['sale_price_average'] ,
        ]);

        Alert::success("Created successfully");
        return back() ;


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
