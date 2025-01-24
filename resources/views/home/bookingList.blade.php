
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
                    @php
                        $grandTotal = 0;
                    @endphp
                    @forelse ($bookingList as $bookingItems)
                    @php 
                    $totalAmountPerDay = $bookingItems['item_price_day'] *  $bookingItems['booking_days'];
                    $grandTotal += $bookingItems['item_price_day'] *  $bookingItems['booking_days'];
                    @endphp
                     <div class="row main align-items-center">
                         <div class="col-2"><img class="img-fluid f-pro-img" src="{{ asset('images/cars/'. $bookingItems['item_image']) }}"></div>
                         <div class="col">
                             <div class="row text-muted">{{ $bookingItems['item_name'] }}</div>
                         </div>
                         <div class="col" style="font-size: 15px;">
                            <div class="col">{{ $bookingItems['item_startDate'] }} - {{ $bookingItems['item_endDate'] }}</div>
                         </div>
                         <div class="col">{{ $bookingItems['item_price_day'] }} x {{ $bookingItems['booking_days'] }} = {{ $totalAmountPerDay }} </div>
                         <div class="col">
                            <span value="" data-value="" class="close remove_cart_item">&#10005;</span>
                        </div>
                    </div>
                    @empty
                    <div class="row main align-items-center">
                        <p>No items found</p>
                    </div>
                    @endforelse
                 </div>
                 
                 
                 <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to List</span></div>
             </div>
             <div class="col-md-4 summary">
                 <div class="f-h5"><h5><b>Summary</b></h5></div>
                 <hr>
                

                <div class="cart-totals">
                    <h3>Cart Totals</h3>
                    <form action="#" method="get" accept-charset="utf-8">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Subtotal</td>
                                    <td class="subtotal">$2,589.00</td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td class="free-shipping">Free Shipping</td>
                                </tr>
                                <tr class="total-row">
                                    <td>Total</td>
                                    <td class="price-total">Rs {{$grandTotal}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-cart-totals">
                            <a href="{{route('stripe.payment')}}" class="checkout round-black-btn" title="">Proceed to Checkout</a>
                        </div>
                        <!-- /.btn-cart-totals -->
                    </form>
                    <!-- /form -->
                </div>





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
