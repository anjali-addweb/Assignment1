@extends('layouts.display')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@section('content')
<div class="single-product">

	<div class="product-image">
	@foreach($data as $w)
    <img src="{{asset('images/'.$w->image)}}" alt="Product-image" style="width: 250px; height: 250px; ">
	</div>

	<div class="single-product-info">

    	<h2>{{$w->p_name}}</h3=2>
   
    	<div class="product-price-box">
   
  			<h3><span class="new-price">₹{{$w->price}}</span></h3>
  			<h3>Brand:-{{$w->brand}}</h3>
    	</div>
    	@endforeach
	</div>

</div>
@endsection
@section('filter')
<div class="price-checkbox">
     <ul> 
     
     <li><a href="hundred">₹1999.00-2999.00</a></li>
     <li><a href="thousand">₹2999.00-3999.00</a></li>
    <li><a href="filter"> ₹3999.00-₹4999.00</a></li>
                                                        
   </ul>
  
</div>
@endsection
@section('brand')
<div class="size-checkbox">
    <ul>
     <li><a href="asopalav">Asopalav</a></li>
    <li><a href="gulab">Gulab</a></li>
    <li><a href="biba">Biba </a></li>
   </ul>
 </div>
 @endsection                                               

</body>
</html>