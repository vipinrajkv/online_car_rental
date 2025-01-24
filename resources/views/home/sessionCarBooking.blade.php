<ul class="dropdown-menu dropdown-menu-right dropdown-cart">
    @forelse ($cartItems as $items) 
    @php 
        $amountPerDay = $items['item_price_day'] *  $items['booking_days'];
        $amountPerHr = $items['item_price_hr'] *  $items['booking_hours'];
        $startDate = date('d-m-y', strtotime($items['item_startDate']));
        $endDate = date('d-m-y', strtotime($items['item_endDate']));
    @endphp  
    <table class="table">
        <thead>
            <tr style="font-size: 13px">
                <th>Image</th>
                <th>Car Name</th>
                <th>Date</th>
                <th style="width: 90px">Price (day / hr)</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>
                    <span>{{ $items['item_name'] }}</span>
                </td>
                <td>
                    <img class="img-fluid f-pro-img" src="{{ asset('images/cars/'.$items['item_image']) }}" alt="" />
                </td>
                <td style="width: 80px;font-size: 12px;">
                    <span>{{ $startDate }} - {{ $endDate }}</span>
                </td>
                <td style="">
                    <span>{{'Rs- '. $amountPerDay. '/ Rs- '. $amountPerHr }}</span>
                </td>
                <td>
                    <button style=" float: right;
    font-size: 10px;
    padding: 3px 6px 4px 6px;
    margin-right: 4px;" class="btn btn-sm btn-danger">x</button>
                </td>
            </tr>
        </tbody>
    </table>

    <li class="divider"></li>
    <li style="text-align: center"><a class="text-center" href="{{route('booking.list')}}">View Cart</a></li>

    @empty
    <li style="text-align: center"><a class="text-center" href="">No items in Cart</a></li>
    @endforelse
</ul>