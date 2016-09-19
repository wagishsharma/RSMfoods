<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use Illuminate\Support\Facades\Input;

use DB;
use Excel;

class MaatwebsiteDemoController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');

        
    }
    public function importExport()
	{
		return view('importExport');
	}
	public function downloadExcel($type)
	{
		$data = Product::get()->toArray();
		return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
	public function importExcel(Request $request)
	{
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();
			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					
					$request->user()->products()->create (['item' => $value->item,'varietySeed' => $value->varietyseed,'harvestedDate'=>date('Y-m-d',strtotime($value->harvesteddate)),'receivedDate'=> date('Y-m-d',strtotime($value->receiveddate)),'receivedFrom'=> $value->receivedfrom,'certification'=> $value->certification,'lotNo'=> $value->lotno]);
					 
				}
				return back();
			}
		}
		return back();
	}
}
