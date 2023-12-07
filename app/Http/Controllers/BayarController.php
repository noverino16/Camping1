<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class BayarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('frontend.pdf.detailbayar');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function export_bayar(){
        $pdf = 'PDF'::loadView('frontend.pdf.detailbayar');
        return $pdf->stream();
        // return $pdf->download('invoice.pdf');
    }




}

$path = public_path(). '/images/complate2.png';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$image = 'data:image/'.$type. ';base64.'.base64_encode($data);  
