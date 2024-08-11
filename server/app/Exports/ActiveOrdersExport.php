<?php

namespace App\Exports;

use App\Models\Booking;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ActiveOrdersExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return [
            'Month',
            'Total Bookings',
            'Total Payments',
            'Total Active',
        ];
    }

    public function collection()
    {
        $currentMonth = \Carbon\Carbon::now()->month;

        $data = Booking::selectRaw('
            MONTH(order_details.day) as month,
            SUM(CASE WHEN status_id = 1 THEN 1 ELSE 0 END) as total_bookings,
            SUM(CASE WHEN status_id = 2 THEN 1 ELSE 0 END) as total_payments,
            SUM(CASE WHEN status_id = 3 THEN 1 ELSE 0 END) as total_active
        ')
        ->join('order_details', 'bookings.order_detail_id', '=', 'order_details.id')
        ->whereMonth('order_details.day', $currentMonth)
        ->groupByRaw('MONTH(order_details.day)')
        ->get();

        return $data->map(function($data) {

            $monthNames = [
                1 => 'January',
                2 => 'February',
                3 => 'March',
                4 => 'April',
                5 => 'May',
                6 => 'June',
                7 => 'July',
                8 => 'August',
                9 => 'September',
                10 => 'October',
                11 => 'November',
                12 => 'Dece'
            ];

            return [
                'month' => $monthNames[$data->month],
                'total_bookings' => $data->total_bookings,
                'total_payments' => $data->total_payments,
                'total_active' => $data->total_active,
            ];
        });
    }
}
