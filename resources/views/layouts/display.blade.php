<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from preview.hasthemes.com/elly-v1/shop-right.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2019 07:00:23 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
        <!-- Place favicon.ico in the root directory -->
	    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">	
		<!-- all CSS hear -->		
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('css/slick.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/mainmenu.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">	
        <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. Thanks</p>
        <![endif]-->
        <!-- Add your application content here -->
        
        <div class="wrapper">
           
            
            <!-- shop-page-wrapper start -->
            <div class="shop-page-wrapper">
                <div class="shop-category-area shop-category-bg">
                    <!-- shop-category-titel start-->
                    <div class="shop-category-titel">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Shop</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop-category-titel end -->
                </div>
                <!-- breadcrumb-area start  -->
                <div class="breadcrumb-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="breadcrumb-list">
                                    <li class="breadcrumb-item"><a href=""></a></li>
                                    <li class="breadcrumb-item active">Shop</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- breadcrumb-area end  -->
                
                <!-- shop-page-main-content start -->
                <div class="shop-page-main-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 order-1 order-lg-1">
                                <!-- archive-border-area start -->
                                <div class="archive-border-area">
                                    <!-- shop-item-filter start -->
                                    <div class="shop-item-filter">
                                        <!-- shop-item-filter-list start -->
                                        <ul role="tablist" class="nav shop-item-filter-list">
                                            <li role="presentation" class="active"><a href="#grid-view" aria-controls="grid-view" role="tab" data-toggle="tab" class="active show" aria-selected="true"><i class="fa fa-list-ul"></i></a></li>
                                            
                                        </ul>
                                        
                                    </div>
                                    <!-- shop-item-filter start -->
                                    
                                    
                                    <!-- shop-products-wrapper start -->
                                    <div class="shop-products-wrapper">
                                        <div class="tab-content">
                                            <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                                <div class="shop-product-area">
                                                    <div class="row">
                                                        <div class="single-product">
 
                                                            <div class="product-image">
                                                            @foreach($data as $w)
                                                            <img src="{{asset('images/'.$w->image)}}" alt="Product-image" style="width: 250px; height: 250px; ">
                                                            </div>

                                                            <div class="single-product-info">

                                                                <h2>{{$w->p_name}}</h2>
   
                                                                <div class="product-price-box">
   
                                                                    <h3><span class="new-price">₹{{$w->price}}</span></h3>
                                                                    <h3>Brand:-{{$w->brand}}</h3>
                                                                </div>
                                                                @endforeach
                                                                </div>

                                                            </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>         
                                </div>
                            </div>        
                            <div class="col-lg-3 order-2 order-lg-2">
                                <!-- sidebar-shop start -->
                                <div class="sidebar-shop">
                                    <!-- sinlge-block-categories start -->
                                    <div class="sinlge-block-categories mb-30">
                                        <div class="secton-titel-three">
                                            <h3>Category</h3>
                                        </div>
                                        <!-- category-sub-menu start -->
                                        <div class="category-sub-menu">
                                            <ul>
                                                <li class="has-sub"><a href="">Women</a>
                                                    <ul>
                                                        <li><a href="saree">Saree</a></li>
                                                        <li><a href="kurti">Kurti</a></li>
                                                        
                                                    </ul>
                                                </li>
                                                <li class="has-sub"><a href="#">Men</a>
                                                    <ul>
                                                        <li><a href="suit">Suit</a></li>
                                                        <li><a href="kurta">Kurta</a></li>
                                                        
                                                    </ul>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        <!-- category-sub-menu end -->
                                    </div>
                                    <!-- sinlge-block-categories end -->
                                    <!-- sinlge-block-categories start -->
                                    <div class="sinlge-block-categories">
                                        <div class="secton-titel-three">
                                            <h3>Filter By</h3>
                                        </div>
                                        
                                        <!-- filter-sub-area start -->
                                        <div class="filter-sub-area">
                                             <h5  class="filter-sub-titel">Price</h5>
                                            <div class="price-checkbox">
                                            @foreach($data as $w)
                                            <form method="post" action="{{action('filterController@index',$w->id)}}">
                                                @endforeach
                                            @csrf

                                            @php
                                            if (isset($pricefrom)) {

                                                $selected_choice = $pricefrom;

                                            }
                                            else {

                                                $selected_choice = "none";

                                            }
                                            @endphp

                                            <select name="pricefrom" id="pricefrom" >

                                                <option <?php if($selected_choice == "500"){ print "selected='selected'";} ?>>500</option>
        

                                                <option  <?php if($selected_choice == "750"){ print "selected='selected'";} ?>>750</option>
                                                <option <?php if($selected_choice == "1000"){ print "selected='selected'";} ?> >1000</option>
                                                <option  <?php if($selected_choice == "1500"){ print "selected='selected'";} ?>>1500</option>
                                            </select>
                                        To
                                        @php
                                        if (isset($priceto)) {

                                            $select_choice = $priceto;

                                        }
                                        else {

                                            $select_choice = "none";

                                        }
                                        @endphp
                                        <select name="priceto" id="priceto">

                                            <option <?php if($select_choice == "750"){ print "selected='selected'";} ?>>750</option>
                                            <option <?php if($select_choice == "1000"){ print "selected='selected'";} ?>>1000</option>
                                            <option <?php if($select_choice == "1500"){ print "selected='selected'";} ?>>1500</option>
                                            <option  <?php if($select_choice == "2500"){ print "selected='selected'";} ?>>2500+</option>
                                        </select><br><br>
                                        <input type="submit" value="Go" id="btnCheck" style="background-color: pink; color: grey; margin-left: 40px; width: 60px;">
                                    </form>
  
                                </div>
  
                            </div>
                        </div>

                                        
                                        <div class="filter-sub-area">
                                             <h5 class="filter-sub-titel">Brand Name</h5>
                                             <div class="size-checkbox">
                                                
                                               <form method="post" action="/brand">
                                                
                                            @csrf
                                            @php
                                                if (isset($brandname)) {

                                                    $selected_choice = $brandname;

                                                }
                                                else {

                                                    $selected_choice = "none";

                                                }
                                                @endphp
                                                <select name="brand" id="">
                                                    <option  <?php if($selected_choice == "asopalav"){ print "selected='selected'";} ?>>Asopalav</option>
                                                    <option <?php if($selected_choice == "gulab"){ print "selected='selected'";} ?> >Gulab</option>
                                                    <option  <?php if($selected_choice == "biba"){ print "selected='selected'";} ?>>Biba</option>
        
                                                    </select>
                                                <input type="submit" value="Go" style="background-color: pink; color: grey; margin-left: 0px; width: 60px;">
                                            </form>
                                            </div>
                                         </div>
                                        <!-- filter-sub-area end -->
                                        
                                        <!-- filter-sub-area start -->
                                        
                                        <!-- filter-sub-area end -->
                                    </div>
                                    <!-- sinlge-block-categories end -->
                                    <!-- sinlge-block-categories start -->
                                       
           
            
        
		<!-- jquery -->		
        <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
		<!-- all plugins JS hear -->		
        <script src="{{asset('js/popper.min.js')}}"></script>	
        <script src="{{asset('js/bootstrap.min.js')}}"></script>	
        <script src="{{asset('js/slick.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.mainmenu.js')}}"></script>	
        <script src="{{asset('js/ajax-email.js')}}"></script>
        <script src="{{asset('js/plugins.js')}}"></script>
		<!-- main JS -->		
        <script src="{{asset('js/main.js')}}"></script>
    </body>

<!-- Mirrored from preview.hasthemes.com/elly-v1/shop-right.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2019 07:00:23 GMT -->
</html>