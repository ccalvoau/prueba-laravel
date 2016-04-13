<?php

namespace Novus\Http\Controllers;


use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Novus\Http\Requests;
use Novus\Http\Controllers\Controller;

class PdfController extends Controller
{
    public function invoice()
    {
        /*$data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  \View::make('pdf.invoice', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');*/
/*
        $pdf = \Novus\App::make('snappy.pdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->download('invoice.pdf');

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();

Media media = new Media();


media.setLoanItem("Yes");
*/


        //$pdf = \PDF::loadView('auth.login');

        //WORK FINE
        $pdf = \PDF::loadHTML('<h1>HOLA CARLOS</h1>');
        //$pdf = \PDF::loadFile('http://www.github.com')->inline('github.pdf');

        $pdf->setPaper('a4')
            ->setOrientation('landscape')
            ->setOption('margin-bottom', 0)
            ->save('myfile1.pdf');

        return $pdf->stream();
        //return $pdf->download('mecagoentodo.pdf');
    }

    public function getData()
    {
        $data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;
    }
}
