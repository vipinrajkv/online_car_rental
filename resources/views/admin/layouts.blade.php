<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<html lang="en">
<head>
  <title>Navbar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/custom_style.css') }}">
  <link rel="stylesheet" href="https://fontawesome.com/v4.7.0/assets/font-awesome/css/font-awesome.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.min.css">
</head>
  <body>

    <nav class="navbar navbar-expand-sm   navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown dmenu">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Our Service
            </a>
            <div class="dropdown-menu sm-menu">
              <a class="dropdown-item" href="#">service2</a>
              <a class="dropdown-item" href="#">service 2</a>
              <a class="dropdown-item" href="#">service 3</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Call</a>
          </li>
           <!-- <li class="nav-item dropdown dmenu">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Dropdown link
            </a>
            <div class="dropdown-menu sm-menu">
              <a class="dropdown-item" href="#">Link 1</a>
              <a class="dropdown-item" href="#">Link 2</a>
              <a class="dropdown-item" href="#">Link 3</a>
              <a class="dropdown-item" href="#">Link 4</a>
              <a class="dropdown-item" href="#">Link 5</a>
              <a class="dropdown-item" href="#">Link 6</a>
            </div>
          </li> -->
          </ul>
          <div class="social-part">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </div>
        </div>
      </nav>
	<!------ Include the above in your HEAD tag ---------->
		<div class="container-fluid">
			<div class="row">
			<aside class="col-md-3">
				
		<div class="card">
			<article class="filter-group">
				<header class="card-header">
					<a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
						<i class="icon-control fa fa-chevron-down"></i>
						<h6 class="title">Product type</h6>
					</a>
				</header>
				<div class="filter-content collapse show" id="collapse_1" style="">
					<div class="card-body">
						<form class="pb-3">
						<div class="input-group">
						<input type="text" class="form-control" placeholder="Search">
						<div class="input-group-append">
							<button class="btn btn-light" type="button"><i class="fa fa-search"></i></button>
						</div>
						</div>
						</form>
						
						{{-- <ul class="list-menu">
						<li><a href="#">People  </a></li>
						<li><a href="#">Watches </a></li>
						<li><a href="#">Cinema  </a></li>
						<li><a href="#">Clothes  </a></li>
						<li><a href="#">Home items </a></li>
						<li><a href="#">Animals</a></li>
						<li><a href="#">People </a></li>
						</ul> --}}
		
					</div> <!-- card-body.// -->
				</div>
			</article> <!-- filter-group  .// -->
			<article class="filter-group">
				<header class="card-header">
					<a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
						<i class="icon-control fa fa-chevron-down"></i>
						<h6 class="title">Brands </h6>
					</a>
				</header>
				<div class="filter-content collapse show" id="collapse_2" style="">
					<div class="card-body">
						<label class="custom-control custom-checkbox">
						<input type="checkbox" checked="" class="custom-control-input">
						<div class="custom-control-label">Mercedes  
							<b class="badge badge-pill badge-light float-right">120</b>  </div>
						</label>
						<label class="custom-control custom-checkbox">
						<input type="checkbox" checked="" class="custom-control-input">
						<div class="custom-control-label">Toyota 
							<b class="badge badge-pill badge-light float-right">15</b>  </div>
						</label>
						<label class="custom-control custom-checkbox">
						<input type="checkbox" checked="" class="custom-control-input">
						<div class="custom-control-label">Mitsubishi 
							<b class="badge badge-pill badge-light float-right">35</b> </div>
						</label>
						<label class="custom-control custom-checkbox">
						<input type="checkbox" checked="" class="custom-control-input">
						<div class="custom-control-label">Nissan 
							<b class="badge badge-pill badge-light float-right">89</b> </div>
						</label>
						<label class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input">
						<div class="custom-control-label">Honda 
							<b class="badge badge-pill badge-light float-right">30</b>  </div>
						</label>
			</div> <!-- card-body.// -->
				</div>
			</article> <!-- filter-group .// -->
			<article class="filter-group">
				<header class="card-header">
					<a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
						<i class="icon-control fa fa-chevron-down"></i>
						<h6 class="title">Price range </h6>
					</a>
				</header>
				<div class="filter-content collapse show" id="collapse_3" style="">
					<div class="card-body">
						<input type="range" class="custom-range" min="0" max="100" name="">
						<div class="form-row">
						<div class="form-group col-md-6">
						<label>Min</label>
						<input class="form-control" placeholder="$0" type="number">
						</div>
						<div class="form-group text-right col-md-6">
						<label>Max</label>
						<input class="form-control" placeholder="$1,0000" type="number">
						</div>
						</div> <!-- form-row.// -->
						<button class="btn btn-block btn-primary">Apply</button>
					</div><!-- card-body.// -->
				</div>
			</article> <!-- filter-group .// -->
			<article class="filter-group">
				<header class="card-header">
					<a href="#" data-toggle="collapse" data-target="#collapse_4" aria-expanded="true" class="">
						<i class="icon-control fa fa-chevron-down"></i>
						<h6 class="title">Sizes </h6>
					</a>
				</header>
				<div class="filter-content collapse show" id="collapse_4" style="">
					<div class="card-body">
					<label class="checkbox-btn">
						<input type="checkbox">
						<span class="btn btn-light"> XS </span>
					</label>
		
					<label class="checkbox-btn">
						<input type="checkbox">
						<span class="btn btn-light"> SM </span>
					</label>
		
					<label class="checkbox-btn">
						<input type="checkbox">
						<span class="btn btn-light"> LG </span>
					</label>
		
					<label class="checkbox-btn">
						<input type="checkbox">
						<span class="btn btn-light"> XXL </span>
					</label>
				</div><!-- card-body.// -->
				</div>
			</article> <!-- filter-group .// -->
			<article class="filter-group">
				<header class="card-header">
					<a href="#" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false" class="">
						<i class="icon-control fa fa-chevron-down"></i>
						<h6 class="title">More filter </h6>
					</a>
				</header>
				<div class="filter-content collapse in" id="collapse_5" style="">
					<div class="card-body">
						<label class="custom-control custom-radio">
						<input type="radio" name="myfilter_radio" checked="" class="custom-control-input">
						<div class="custom-control-label">Any condition</div>
						</label>
		
						<label class="custom-control custom-radio">
						<input type="radio" name="myfilter_radio" class="custom-control-input">
						<div class="custom-control-label">Brand new </div>
						</label>
		
						<label class="custom-control custom-radio">
						<input type="radio" name="myfilter_radio" class="custom-control-input">
						<div class="custom-control-label">Used items</div>
						</label>
		
						<label class="custom-control custom-radio">
						<input type="radio" name="myfilter_radio" class="custom-control-input">
						<div class="custom-control-label">Very old</div>
						</label>
					</div><!-- card-body.// -->
				</div>
			</article> <!-- filter-group .// -->
		</div> <!-- card.// -->
		
			</aside>
			<main class="col-md-9">
		
		<header class="border-bottom mb-4 pb-3">
			<form id="demoForm" action="success.html" method="POST">
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Date</label>
					<div class="col-md-4">
						<input type="text" class="form-control" name="date" />
						<i class="fa fa-calendar"></i>
					</div>
				</div>
			</form>
		</header><!-- sect-heading -->
		
		<div class="row">
			<div class="col-md-4">
				<figure class="card card-product-grid">
					<div class="img-wrap"> 
						<span class="badge badge-danger"> NEW </span>
										<img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/7.jpg" class="img-fluid">
						<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
					</div> <!-- img-wrap.// -->
					<figcaption class="info-wrap">
						<div class="fix-height">
							<a href="#" class="title">Great item name goes here</a>
							<div class="price-wrap mt-2">
								<span class="price">$1280</span>
								<del class="price-old">$1980</del>
							</div> <!-- price-wrap.// -->
						</div>
						<a href="#" class="btn btn-block btn-primary">Add to cart </a>
					</figcaption>
				</figure>
			</div> <!-- col.// -->
		
			<div class="col-md-4">
				<figure class="card card-product-grid">
					<div class="img-wrap"> 
									<img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/7.jpg" class="img-fluid">
						<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
					</div> <!-- img-wrap.// -->
					<figcaption class="info-wrap">
						<div class="fix-height">
							<a href="#" class="title">Product name goes here just for demo item</a>
							<div class="price-wrap mt-2">
								<span class="price">$1280</span>
							</div> <!-- price-wrap.// -->
						</div>
						<a href="#" class="btn btn-block btn-primary">Add to cart </a>	
					</figcaption>
				</figure>
			</div> <!-- col.// -->
		
			<div class="col-md-4">
				<figure class="card card-product-grid">
					<div class="img-wrap"> 
										<img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/7.jpg" class="img-fluid">
						<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
					</div> <!-- img-wrap.// -->
					<figcaption class="info-wrap">
						<div class="fix-height">
							<a href="#" class="title">Product name goes here just for demo item</a>
							<div class="price-wrap mt-2">
								<span class="price">$1280</span>
							</div> <!-- price-wrap.// -->
						</div>
						<a href="#" class="btn btn-block btn-primary">Add to cart </a>	
					</figcaption>
				</figure>
			</div> <!-- col.// -->
		
			<div class="col-md-4">
				<figure class="card card-product-grid">
					<div class="img-wrap"> 
									<img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/7.jpg" class="img-fluid">
						<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
					</div> <!-- img-wrap.// -->
					<figcaption class="info-wrap">
						<div class="fix-height">
							<a href="#" class="title">Product name goes here just for demo item</a>
							<div class="price-wrap mt-2">
								<span class="price">$1280</span>
							</div> <!-- price-wrap.// -->
						</div>
						<a href="#" class="btn btn-block btn-primary">Add to cart </a>	
					</figcaption>
				</figure>
			</div> <!-- col.// -->
		
			<div class="col-md-4">
				<figure class="card card-product-grid">
					<div class="img-wrap"> 
									<img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/7.jpg" class="img-fluid">
						<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
					</div> <!-- img-wrap.// -->
					<figcaption class="info-wrap">
						<div class="fix-height">
							<a href="#" class="title">Product name goes here just for demo item</a>
							<div class="price-wrap mt-2">
								<span class="price">$1280</span>
							</div> <!-- price-wrap.// -->
						</div>
						<a href="#" class="btn btn-block btn-primary">Add to cart </a>	
					</figcaption>
				</figure>
			</div> <!-- col.// -->
		
			<div class="col-md-4">
				<figure class="card card-product-grid">
					<div class="img-wrap"> 
									<img src="{{asset('images/tiago.png')}}" class="img-fluid">
						<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
					</div> <!-- img-wrap.// -->
					<figcaption class="info-wrap">
						<div class="fix-height">
							<a href="#" class="title">Product name goes here just for demo item</a>
							<div class="price-wrap mt-2">
								<span class="price">$1280</span>
							</div> <!-- price-wrap.// -->
						</div>
						<a href="#" class="btn btn-block btn-primary">Add to cart </a>	
					</figcaption>
				</figure>
			</div> <!-- col.// -->
		
			<div class="col-md-4">
				<figure class="card card-product-grid">
					<div class="img-wrap"> 
									<img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/7.jpg" class="img-fluid">
						<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
					</div> <!-- img-wrap.// -->
					<figcaption class="info-wrap">
						<div class="fix-height">
							<a href="#" class="title">Product name goes here just for demo item</a>
							<div class="price-wrap mt-2">
								<span class="price">$1280</span>
							</div> <!-- price-wrap.// -->
						</div>
						<a href="#" class="btn btn-block btn-primary">Add to cart </a>	
					</figcaption>
				</figure>
			</div> <!-- col.// -->
		
			<div class="col-md-4">
				<figure class="card card-product-grid">
					<div class="img-wrap"> 
						<img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/7.jpg" class="img-fluid">
						<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
					</div> <!-- img-wrap.// -->
					<figcaption class="info-wrap">
						<div class="fix-height">
							<a href="#" class="title">Product name goes here just for demo item</a>
							<div class="price-wrap mt-2">
								<span class="price">$1280</span>
							</div> <!-- price-wrap.// -->
						</div>
						<a href="#" class="btn btn-block btn-primary">Add to cart </a>	
					</figcaption>
				</figure>
			</div> <!-- col.// -->
		</div> <!-- row end.// -->
		
		
		<nav class="mt-4" aria-label="Page navigation sample">
		<ul class="pagination">
			<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
			<li class="page-item active"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#">Next</a></li>
		</ul>
		</nav>
		
			</main>
			</div>
		</div>

{{-- 
        @yield('account_details')  --}}
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });
});
</script>
<script>
	document.addEventListener('DOMContentLoaded', function(e) {
    $('[name="date"]')
        .datepicker({
            format: 'dd/mm/yyyy'
        })
        .on('changeDate', function(e) {
            // do somwthing here
        });
});
</script>
</html>