<div class="row">
    @foreach ($carDetails as $carDetail)
    <div class="col-md-4">
        <figure class="card card-product-grid">
            <div class="img-wrap"> 
                            <img src="{{asset('images/cars/'.$carDetail->car_image)}}" class="img-fluid">
                <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i>{{$carDetail->car_name}}</a>
            </div> <!-- img-wrap.// -->
            <figcaption class="info-wrap">
                <div class="fix-height">
                    <a href="#" class="title">{{$carDetail->car_name}}</a>
                    <div class="price-wrap mt-2">
                        <span class="price">$1280</span>
                    </div> <!-- price-wrap.// -->
                </div>
                <a href="#" class="btn btn-block btn-primary">Add to cart </a>	
            </figcaption>
        </figure>
    </div>
    @endforeach

</div> <!-- row end.// -->