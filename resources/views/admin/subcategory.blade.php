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
    <form action="plus" method="post">
        @csrf
        
       	Select Category:-
        
       	<select name="cid" class="form-control">
          @foreach($cat as $q)
       		<option value="{{$q->id}}">{{$q->cate_name}}</option>
          @endforeach
       	</select><br>
        <label for="subcategory">Subcategory Name:-</label>
       	<input type="text" name="subcategory" placeholder="Enter Subcategory" class="form-control"><br>

        <input type="submit">

    </form>
  </div>
  <div class="col-3">
  </div>
</div>
</body>
</html>