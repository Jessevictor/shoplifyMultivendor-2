<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class PhonesTabletsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $phones=Product::where('category_id',1)->get();
       //dd($phones);
        return view('categories.phoneandtablets.subcat',compact('phones'));
    }

    public function sumsung_tab()
    {

        // $phones=Product::where('category_id',1)->get();
       //dd($phones);
        return view('categories.phoneandtablets.Tablets.Tablets.samsung_tablets');
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
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function computers(){
        $computers=Product::where('category_id',3)->get();
        //dd($computers);
        return view('categories.electronic.subcat',compact('computers'));

    }
    public function supermarket(){
        $computers=Product::where('category_id',2)->get();
        //dd($computers);
        return view('categories.electronic.subcat',compact('computers'));

    }
    public function fashion(){
        $computers=Product::where('category_id',4)->get();
        //dd($computers);
        return view('categories.electronic.subcat',compact('computers'));

    }
}
