
@extends('layouts.inner_page_layouts')
@section('content')
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full" style="text-align: center;">
                     <h3>Cart</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- why section -->
      <div class="card">
         <div class="row">
             <div class="col-md-8 cart">
                 <div class="title">
                     <div class="row">
                         <div class="col"><h4><b>Booking details</b></h4></div>
                         <div class="col align-self-center text-right text-muted">3 items</div>
                     </div>
                 </div>
                  
                 <div class="row border-top border-bottom">
                     <div class="row main align-items-center">
                         <div class="col-2">Image</div>
                         <div class="col">
                             <div class="row text-muted">Item</div>
                         </div>
                         <div class="col">
                            <div class="row text-muted">Booking Date</div>
                         </div>
                         <div class="col">
                         <div class="row text-muted">Amount</div>
                             <!-- <span class="close">&#10005;</span> -->
                            </div>
                        <div class="col">
                            <div class="row text-muted">Remove</div>
                        </div>
                     </div>
                 </div> 
                 
                 <div class="row border-top border-bottom">
                    @foreach($bookingList as $bookingItems)
                    @php 
                    $totalAmountPerDay = $bookingItems['item_price_day'] *  $bookingItems['booking_days'];
                    @endphp
                     <div class="row main align-items-center">
                         <div class="col-2"><img class="img-fluid f-pro-img" src="{{ asset('images/cars/'. $bookingItems['item_image']) }}"></div>
                         <div class="col">
                             <div class="row text-muted">{{ $bookingItems['item_name'] }}</div>
                         </div>
                         <div class="col">
                            <div class="col">{{ $bookingItems['item_startDate'] }} - {{ $bookingItems['item_endDate'] }}</div>
                         </div>
                         <div class="col">{{ $bookingItems['item_price_day'] }} * {{ $bookingItems['booking_days'] }} - {{ $totalAmountPerDay }} </div>
                         <div class="col">
                            <span value="" data-value="" class="close remove_cart_item">&#10005;</span>
                        </div>
                    </div>
                    @endforeach
                 </div>
                 
                 
                 <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to List</span></div>
             </div>
             <div class="col-md-4 summary">
                 <div class="f-h5"><h5><b>Summary</b></h5></div>
                 <hr>
                 <div class="row">
                     <div class="col" style="">TOTAL AMOUNT </div>
                     <div class="col text-right">₹  </div>
                 </div>
                 <form class="f-form">
                     {{-- <p>SHIPPING</p> --}}
                     <select><option class="text-muted">Standard-Delivery- 5.00</option></select>
                     <p>GIVE CODE</p>
                     <input id="code" placeholder="Enter your code">
                 
                 <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                     <div class="col">GRAND TOTAL</div>
                     <div class="col text-right">₹ </div>
                 </div>
                 <button type="button" class="btn-chkout" onclick="handleCheckout()">CHECKOUT</button>
                </form>
             </div>
         </div>
         
     </div>
      <!-- end why section -->
      @endsection
      <script>
        function handleCheckout() {
            window.location.href = '{{ route("checkout") }}';
        }
    </script>
