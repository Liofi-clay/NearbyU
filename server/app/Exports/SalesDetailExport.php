<?php

namespace App\Exports;

use App\Models\Booking;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class SalesDetailExport implements FromCollection, WithHeadings, WithColumnFormatting
{
    public function headings(): array
    {
        return [
            'Month',
            'Total Sales (Rp)',
        ];
    }

    public function collection()
    {
        $salesData = Booking::selectRaw('MONTH(order_details.day) as month, SUM(order_details.total_cost) as total_sales')
            ->join('order_details', 'bookings.order_detail_id', '=', 'order_details.id')
            ->groupByRaw('MONTH(order_details.day)')
            ->get();

        // Array untuk mengkonversi nomor bulan ke nama bulan
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
            12 => 'December'
        ];

        // Menghitung total dan rata-rata
        $totalSales = $salesData->sum('total_sales');
        $averageSales = $salesData->avg('total_sales');

        $mappedData = $salesData->map(function($data) use ($monthNames) {
            return [
                'month' => $monthNames[$data->month],
                'total_sales' => $data->total_sales,
            ];
        });

        // Menambahkan total dan rata-rata ke dalam koleksi data
        $mappedData->push([
            'month' => 'Total',
            'total_sales' => $totalSales,
        ]);

        $mappedData->push([
            'month' => 'Average',
            'total_sales' => $averageSales,
        ]);

        return $mappedData;
    }

    public function columnFormats(): array
    {
        return [
            'B' => '"Rp"#,##0.00',
        ];
    }
}

