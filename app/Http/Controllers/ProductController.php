<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
        
        
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $product=array(

        'image'=>$new_name,
        'p_name' =>$request->pname,
        'sub_id'=>$request->said,
        'price'=>$request->price,
        'brand'=>$request->brand,
        'status'=>1,
);
        product::create($product);
        
        
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    
        $data=product::all();
    return view('layouts.display',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data=product::where('sub_id',1)->get();
        return view('layouts.display',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function apply()
    {
       $data=product::where('sub_id',3)->get();
        return view('layouts.display',['data'=>$data]); 
    }
    public function share()
    {
       $data=product::where('sub_id',2)->get();
        return view('layouts.display',['data'=>$data]); 
    }

    public function find()
    {
       $data=product::where('sub_id',4)->get();
        return view('layouts.display',['data'=>$data]); 
    }
    
    public function brand()
    {
        
       $data=product::where('sub_id',1)
       ->where('brand','asopalav')
        ->get();
        return view('/asopalav',['data'=>$data]); 
    }
     public function carry()
    {
        
       $data=product::where('sub_id',1)
       ->where('brand','gulab')
        ->get();
        return view('/gulab',['data'=>$data]); 
    }
    public function retry()
    {
        
       $data=product::where('sub_id',1)
       ->where('brand','Biba')
        ->get();
        return view('/biba',['data'=>$data]); 
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
