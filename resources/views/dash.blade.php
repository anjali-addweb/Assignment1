@extends('layouts.display')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@section('content')
<div class="single-product" >

	<div class="product-image">
	@foreach($data as $d)
    <img src="{{asset('images/'.$d->image)}}" alt="Product-image" style="width: 250px; height: 250px; ">
	</div>
	<div class="single-product-info">

    	<h2>{{$d->p_name}}</h2>
   
    	<div class="product-price-box">
   
  			<h3><span class="new-price">₹{{$d->price}}</span></h3>
  	<h3>{{$d->brand}}</h3>
    	</div>
  
  
	</div>

</div>
@endsection
@section('filter')

<div class="price-checkbox">
     <form method="post" action="{{url('filter.index',$d->id)}}">
      <select name="priceto">
        <option value="500">500</option>
        <option value="750">750</option>
        <option value="1000">1000</option>
        <option value="1500">1500</option>
      </select>
      To
      
      <select name="pricefrom">
        
        <option value="750">750</option>
        <option value="1000">1000</option>
        <option value="1500">1500</option>
        <option value="2500+">2500 more</option>
      </select>
      <input type="submit"value="Go" id="btnCheck" style="background-color: pink; color: grey; margin-left: 40px; width: 60px;">
     </form>
 
</div>
@endsection
@section('brand')

 @endsection
 
</body>
</html>

