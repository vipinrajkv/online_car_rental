<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class BookingController extends Controller
{
    /**
    * Add Cart Items
    *
    * @param Request $request
    * @return void
    */
    public function addToBooking(Request $request)
    {
        $carId = (int)$request->input('carId');
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        $carData = DB::table('cars')->find($carId);
        $rentData = DB::table('rent_rates ')->find($carId);
        $carName = $carData->name;

        if (Session::has('Booking')) {
            $bookingData = Session::get('Booking');
            
            if (array_key_exists($carId, $bookingData)) {

                if ($bookingData[$carId]['item_id'] ===  $carId) {
                    $bookingData[ $carId]['startDate'] === $startDate;
                    $bookingData[ $carId]['endDate'] === $endDate;
                    $itemName = $bookingData[ $carId]['car_name'];
                    Session::forget('Booking');
                    session::put('Booking', $bookingData);

                    return response()->json(['status' => '"' . $itemName . '" Already Added to Cart']);
                }
            } else {
                $bookingData = Session::get('Booking');
                $bookingData[$carData->id] = $this->setBookingData($carData, $rentData);
                $cartItems =  $bookingData;
                Session::forget('Booking');
                session::put('Booking', $bookingData);

                return response()->json(['status' => '"' . $carName . '" Added to cart']);
            }
        } else {
            $itemListArray[$carData->id] = $this->setBookingData($carData, $rentData);
            $cartItems =  $itemListArray;
            session::put('Booking', $cartItems);

            return response()->json(['status' => '"' . $carName . '" Added to cart']);
        }
    }

    
    
    /**
     * Set Booking Data
     *
     * @param mixed $carData
     * @return array
     */
    protected function setBookingData($carData, $rentData, $startDate, $endDate){
        return $cart =  [
                'item_id' => $carData->id,
                'item_name' => $carData->name,
                'item_image' => $carData->image,
                'item_price_hr' => $rentData->rate_per_hr,
                'item_price_day' => $rentData->rate_per_day,
                'item_startDate' => $rentData->rate_per_day,
                'item_endDate' => $startDate,
                'item_endDate' => $endDate,
            ];
    }
    
}
