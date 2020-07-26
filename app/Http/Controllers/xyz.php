<?php

namespace App\Http\Controllers;
use App\product;
use Illuminate\Http\Request;
use Session;
class filterController extends Controller
{
    public function index(Request $request){

		$pricefrom = $request->input('pricefrom');
		$priceto = $request->input('priceto');
		

    if(!empty($pricefrom && $priceto))
          {
            
            $data=product::where('sub_id',1)
           ->whereBetween('price', [$pricefrom, $priceto])
           
           ->get();
          return view('saree',compact('data','pricefrom','priceto'));

          }
          
		
    }
    public function store(Request $request){
    	$brandname=$request->input('brand');
		if(!empty($brandname)){
		$data=product::where('sub_id',1)
		->where('brand',$brandname) 
          ->get();
          return view('saree',['data'=>$data]);
        }
    }
    public function search(Request $request){

		$pricefrom = $request->input('pricefrom');
		$priceto = $request->input('priceto');
		
           $data=product::where('sub_id',4)
           ->whereBetween('price', [$pricefrom, $priceto])
           
           ->get();
        	return view('kurta',['data'=>$data]);
		
    }
    public function show(Request $request){
    	$brandname=$request->input('brand');
		
		$data=product::where('sub_id',4)
		->where('brand',$brandname) 
          ->get();
          return view('kurta',['data'=>$data]);
    }
}
