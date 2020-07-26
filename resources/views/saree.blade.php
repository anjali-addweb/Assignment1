@extends('layouts.display')
<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
  <script src="{{asset('js/jquery.mainmenu.js')}}"></script>
  <script src="{{asset('js/jquery.js')}}"></script>
  <script type="text/javascript">
    

        $(function() {
          $('#btnCheck').click(function() {
        var txt1 = $('#pricefrom'); 
        var txt2 = $('#priceto');
        if ( txt2.val()<=txt1.val()) {
        alert('Price from'+txt1.val() 'to'  +txt2.val() 'not possible')
      }
      
    })
   });

</script>

   
	<title></title>
</head>
<body>
@section('content')

@endsection
@section('filter')

@endsection
@section('brand')
<div class="size-checkbox">
  
 </div>   
 @endsection                                               

</body>
</html>