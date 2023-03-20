<?php

namespace App\Http\Controllers;

use App\Services\PdfService;
use Illuminate\Http\Request;
use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf as PDF;
use Mpdf\MpdfException;

class CLHGPDFController extends Controller
{
    public function showBanglaPdf(){
        $data["paragraphContent"] = (new PdfService())->getPdfContents();

        $pdf = PDF::loadView('pdf.pdf-read', $data);

        return $pdf->stream('YourPdfRename.pdf');
    }
}
