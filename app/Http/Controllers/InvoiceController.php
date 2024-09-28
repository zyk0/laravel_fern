<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Item;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
	
class InvoiceController extends Controller
{
	/*
	public function generate(){
		return view('invoice.gen');
	}
	*/
	
    /*	
    public function generate($cat, $product_id){
        $item = Product::where('id', $product_id)->first();

        return view('invoice.gen',[
            'item' => $item
        ]);
    }
	*/
	

	public function generate()
	{
		
		$data = [
			'to' => 'invoice',
			'price' => '1000.00',
			'pdf' => '.pdf',
		];
		
		$pdf = Pdf::loadView('invoice.gen', $data);
		return $pdf->stream();
        //return $pdf->download('invoice.gen');
		
		
		
		//return view('invoice.gen', $data);
	}
}

