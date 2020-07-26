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
    <form action="add" method="post">
        @csrf
        <label for="category">Add Category:-</label>
        	<input type="text" name="category" class="form-control" placeholder="Enter Category">
        <input type="submit">
    </form>
</div>
<div class="col-3">
</div>
</div>
</body>
</html>