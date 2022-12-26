<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiRequests\SaveBookingRequest;
use App\Models\Booking;
use Exception;

class BookingController extends Controller
{
    final public function saveBooking(SaveBookingRequest $request)
    {
        try {
            $booking = Booking::create($request->only(['name', 'phone', 'current_location', 'target_location']));

            return response()->json($booking, 201);
        } catch (Exception $exception) {
            return response()->json($exception->getMessage());
        }
    }
}
