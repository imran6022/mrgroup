<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rawcottonpur;

class RawcottonController extends Controller
{
    public function rawCottonPurchases(){
    	$rawcottons = Rawcottonpur::get();
    	return view('Rawcotton.index', compact('rawcottons'));
    }

    function rawCottonPurchasesAdd(){
    	return view('Rawcotton.add');
    }

    function rawCottonPurchasescreate(Request $request){
    	$request->validate([
    		'party' => 'required',
    		'date' => 'required',
    		'type' => 'required',
    		'pound' => 'required',
    		'rate' => 'required',
    		'amount' => 'required',
    		]);

    	$rawcotton = new Rawcottonpur;

    	$rawcotton->party = $request->party;
    	$rawcotton->date = $request->date;
    	$rawcotton->type = $request->type;
    	$rawcotton->pound = $request->pound;
    	$rawcotton->rate = $request->rate;
    	$rawcotton->amount = $request->amount;

    	$rawcotton->save();

    	session()->flash('success', 'Raw Cotton purchases successfully');
    	return redirect()->route('rawcotPurchase');
    }

    function rawCottonEdit($id){
        $rowcotton = Rawcottonpur::find($id);
        return view('Rawcotton.edit', compact('rowcotton'));
    }


    function rawCottonPurchaseUpdate(Request $request, $id){
        $request->validate([
            'party' => 'required',
            'date' => 'required',
            'type' => 'required',
            'pound' => 'required',
            'rate' => 'required',
            'amount' => 'required',
            ]);

        $rowUpdate = Rawcottonpur::find($id);

        $rowUpdate->party = $request->party;
        $rowUpdate->date = $request->date;
        $rowUpdate->type = $request->type;
        $rowUpdate->pound = $request->pound;
        $rowUpdate->rate = $request->rate;
        $rowUpdate->amount = $request->amount;

        $rowUpdate->save();

        session()->flash('success', 'Raw Cotton purchases update successfully');
        return redirect()->route('rawcotPurchase');
    }

    function rawCottonDelete($id){
         $rowDelete = Rawcottonpur::find($id);
         $rowDelete->delete();

         session()->flash('danger', 'Raw cotton purchase delete successfully');
         return redirect()->route('rawcotPurchase');
    }


}
