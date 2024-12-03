<?php

namespace App\Http\Controllers;

use DateTime;
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
        $rentData = DB::table('rent_rates')->where('car_id',$carId)->first();
        $carName = $carData->car_name;

        if (Session::has('Booking')) {
            $bookingData = Session::get('Booking');
         
            if (array_key_exists($carId, $bookingData)) {

                if ($bookingData[$carId]['item_id'] ===  $carId) {
                    $bookingData[$carId]['item_startDate'] === $startDate;
                    $bookingData[$carId]['item_endDate'] === $endDate;
                    $itemName = $bookingData[ $carId]['item_name'];
                    session::put('Booking', $bookingData);

                    return response()->json(['status' => '"' . $itemName . '" Already Added to Cart']);
                }
            } else {
                $bookingData = Session::get('Booking');
                $bookingData[$carData->id] = $this->setBookingData($carData, $rentData, $startDate, $endDate);
                $cartItems =  $bookingData;
                Session::forget('Booking');
                session::put('Booking', $bookingData);

                return response()->json(['status' => '"' . $carName . '" Added to cart']);
            }
        } else {
            $itemListArray[$carData->id] = $this->setBookingData($carData, $rentData, $startDate, $endDate);
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
        $updatedStartDate = new DateTime($startDate);
        $updatedEndDate= new DateTime($endDate);
        $interval = $updatedStartDate->diff($updatedEndDate);
        $totalDays = $interval->days;
        $hoursDifference = $interval->days * 24 + $interval->h;
        $minutesDifference = $interval->i;
        $totalHours = $hoursDifference + ($minutesDifference / 60); 

        return $cart =  [
                'item_id' => $carData->id,
                'item_name' => $carData->car_name,
                'item_image' => $carData->car_image,
                'item_price_hr' => $rentData->rate_per_hr,
                'item_price_day' => $rentData->rate_per_day,
                'item_startDate' => $startDate,
                'item_endDate' => $endDate,
                'booking_days' => $totalDays,
                'booking_hours' => $totalHours,
            ];
    }
    
    /**
     * List Page
     */
    public function carBookedList(){
        // $productData = DB::table('tbl_product')->get();
        // Session::forget('Booking');
        // session()->forget('Booking');
        $bookingList = Session::get('Booking') ? : '';
        dump($bookingList);
        Session::forget('Booking');
        Session::flush();
        dd($bookingList);
        return view('home.bookingList', compact(['bookingList'])); 
    }

    
    /**
     * List Page
     */
    public function checkOut(){
        $cartProduct = Session::get('Booking') ? : '';
        return view('home.checkout', compact(['cartProduct'])); 
    }
    
}
