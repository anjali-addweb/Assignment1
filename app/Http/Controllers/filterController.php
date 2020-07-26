<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
class filterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
     
        $pricefrom = $request->input('pricefrom');
      $priceto = $request->input('priceto');
    

    if(!empty($pricefrom && $priceto))
          {
            
            $data=product::where('sub_id',$id)
           ->whereBetween('price', [$pricefrom, $priceto])
           
           ->get();
          return view('layouts.display',compact('data','pricefrom','priceto'));

          }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $brandname=$request->input('brand');
          if(!empty($brandname)){
          $data=product::where('sub_id',1)
          ->where('brand',$brandname)->get();
          return view('layouts.display',['data'=>$data]);
        }
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
}
