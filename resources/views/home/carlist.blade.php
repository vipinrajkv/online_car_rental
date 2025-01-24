<div class="row">
    @foreach ($carDetails as $carDetail)
    <div class="col-md-4 car-book-block">
        <figure class="card card-product-grid">
            <div class="img-wrap"> 
                            <img src="{{asset('images/cars/'.$carDetail->car_image)}}" class="img-fluid">
                <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i>{{$carDetail->car_name}}</a>
            </div> <!-- img-wrap.// -->
            <figcaption class="info-wrap">
                <div class="fix-height">
                    <a href="#" class="title">{{$carDetail->car_name}}</a>
                    <div class="price-wrap mt-2">
                        <span class="price">$1280 </span>
                    </div> <!-- price-wrap.// -->
                </div>
                <input type="hidden" class="booking-car-id" name="car_id" value="{{$carDetail->id}}">
                 {{-- {{ dump(Auth::user()->id ?? '') }} --}}
                <button type="button" class="btn btn-block btn-primary add_book" {{ $carDetail->status == 'available' ? '' : 'disabled' }}>Add to cart </button>	
            </figcaption>
        </figure>
    </div>
    @endforeach

</div> <!-- row end.// -->