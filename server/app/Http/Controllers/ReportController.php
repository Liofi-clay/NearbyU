<?php

namespace App\Http\Controllers;

use App\Exports\SalesDetailExport;
use App\Exports\ActiveOrdersExport;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function downloadSalesReport()
    {
        return Excel::download(new SalesDetailExport, 'pendapatan_detail.xlsx');
    }

    public function downloadActiveOrdersReport()
    {
        return Excel::download(new ActiveOrdersExport, 'pesanan_detail.xlsx');
    }
}
