<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sales;

class SalesController extends Controller
{
    function salesmamage(){
    	$seles = Sales::orderBy('id', 'desc')->get();
    	return view('sales.salesmanage', compact('seles'));
    }

    function salesadd(){
    	return view('sales.salesadd');
    }

    function SalesCreate(Request $request){
    	$request->validate([
    		'party_id' => 'required',
    		'date' => 'required',
    		'count_id' => 'required',
    		'pound' => 'required',
    		'rate' => 'required',
    		'amount' => 'required',
    		]);

    	$sales = new Sales;

    	$sales->party_id = $request->party_id;
    	$sales->date = $request->date;
    	$sales->count_id = $request->count_id;
    	$sales->pound = $request->pound;
    	$sales->rate = $request->rate;
    	$sales->amount = $request->amount;

    	$sales->save();
    	session()->flash('success', 'Yarn sales successfully');
    	return redirect()->route('salesmamage');

    }

    function editSales($id){
    	$sale = Sales::find($id);
    	return view('sales.editSale', compact('sale'));
    }

    function SalesUpdate(Request $request, $id){
    	$request->validate([
    		'party_id' => 'required',
    		'date' => 'required',
    		'count_id' => 'required',
    		'pound' => 'required',
    		'rate' => 'required',
    		'amount' => 'required',
    		]);

    	$sales = Sales::find($id);

    	$sales->party_id = $request->party_id;
    	$sales->date = $request->date;
    	$sales->count_id = $request->count_id;
    	$sales->pound = $request->pound;
    	$sales->rate = $request->rate;
    	$sales->amount = $request->amount;

    	$sales->save();
    	session()->flash('success', 'Yarn sales update successfully');
    	return redirect()->route('salesmamage');
    }

    function deleteSale($id){
    	$sale = Sales::find($id);
    	$sale->delete();
    	session()->flash('success', 'Yarn sales delete successfully');
    	return redirect()->route('salesmamage');
    }


}
