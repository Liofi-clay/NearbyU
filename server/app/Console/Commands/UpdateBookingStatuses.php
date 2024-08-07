<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Booking;
use Carbon\Carbon;

class UpdateBookingStatuses extends Command
{
    protected $signature = 'bookings:update-statuses';

    protected $description = 'Update booking statuses based on check-in and check-out times';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $currentDateTime = Carbon::now();

        // Update bookings from "Booking" to "Active"
        Booking::whereHas('orderDetail', function ($query) use ($currentDateTime) {
            $query->where('status_id', 1) // Booking status ID
                  ->where('day', '<=', $currentDateTime->toDateString())
                  ->where('check_in', '<=', $currentDateTime->toTimeString())
                  ->where('check_out', '>=', $currentDateTime->toTimeString());
        })->each(function ($booking) {
            $booking->orderDetail->status_id = 3; // Active status ID
            $booking->orderDetail->save();

            // Decrease product quota
            $booking->product->kuota -= 1;
            $booking->product->save();
        });

        // Update bookings from "Active" to "Completed"
        Booking::whereHas('orderDetail', function ($query) use ($currentDateTime) {
            $query->where('status_id', 3) // Active status ID
                  ->where('day', '<=', $currentDateTime->toDateString())
                  ->where('check_out', '<', $currentDateTime->toTimeString());
        })->each(function ($booking) {
            $booking->orderDetail->status_id = 2; // Completed status ID
            $booking->orderDetail->save();

            // Increase product quota
            $booking->product->kuota += 1;
            $booking->product->save();
        });

        $this->info('Booking statuses updated successfully.');
    }
}
