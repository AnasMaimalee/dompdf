<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function downloadPDF()
    {
        // Data for the PDF
        $data = [
            'items' => [
                [
                    'quantity' => 1,
                    'description' => '1 Year Subscription',
                    'price' => '129.00'
                ],
                [
                    'quantity' => 2,
                    'description' => '2 Year Subscription',
                    'price' => '258.00'
                ]
            ],
        ];

        $pdf = Pdf::loadView('pdf', $data);
        return $pdf->download('subscription_invoice.pdf');
    }
}
