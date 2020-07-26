<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
@include('admin.sidebar')
<div class="main">
  <div class="row">
    <div class="col-3">
    </div>
    <div class="col-6">
    <form action="photo" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
       	
        Select Subcategory:-
        <select name="said" class="form-control">
          @foreach($data as $p)
          <option value="{{$p->id}}">{{$p->sub_name}}</option>
          @endforeach
        </select><br>
        <label for="product name">Product Name:-</label>
       	<input type="text" name="pname" placeholder="Enter Productname" class="form-control"><br>
        <label for="price">Price:-</label>
        <input type="text" name="price" placeholder="Enter Price" class="form-control"><br>
        <label for="brand name">Brand Name:-</label>
        <input type="text" name="brand" placeholder="Enter Brandname" class="form-control"><br>
        <label for="image">Image:-</label>
        <input id="image" name="image" multiple type="file" class="form-control"><br>
        <input type="submit">
    </form>
  </div>
  <div class="col-3">
  </div>
</div>
</div>
</body>
</html>