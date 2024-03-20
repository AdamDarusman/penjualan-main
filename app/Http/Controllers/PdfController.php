<?php
// app/Http/Controllers/PdfController.php

namespace App\Http\Controllers;

use PDF;
use App\Models\YourModel;

class PdfController extends Controller
{
    public function generatePDF()
    {
        $data = YourModel::all();

        $pdf = PDF::loadView('pdf.report', compact('data'));

        return $pdf->download('report.pdf');
    }
}

