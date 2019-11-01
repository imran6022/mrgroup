<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\count;
use App\Party;
use App\RowcottonType;

class settingController extends Controller
{
    public function count(){
    	$counts = count::get();
    	return view('setting.count', compact('counts'));
    }

    function count_add(){
    	return view('setting.count_add');
    }

    function create_count(Request $request){
    	$request->validate([
    		'count' => 'required',
    		'desctiption' => 'required',
    		]);

    	$count = new count;

    	$count->count = $request->count;
    	$count->desctiption = $request->desctiption;

    	$count->save();

    	session()->flash('success', 'Count insert successfully');
    	return redirect()->route('count');

    }

    function edit_count($id){
    	$count = count::find($id);
    	return view('setting.count_edit', compact('count'));
    }

    function update_count(Request $request, $id){
    	$request->validate([
    		'count' => 'required',
    		'desctiption' => 'required',
    		]);

    	$count = count::find($id);
    	$count->count = $request->count;
    	$count->desctiption = $request->desctiption;

    	$count->save();

    	session()->flash('success', 'Count update successfully');
    	return redirect()->route('count');
    }

    function delete_count($id){
    	$count = count::find($id);
    	$count->delete();
    	session()->flash('success', 'Count delete successfully');
    	return redirect()->route('count');
    }

    // Party controller

    function party(){
        $partys = Party::get();
    	return view('setting.party', compact('partys'));
    }

    function party_add(){
    	return view('setting.add_party');
    }

    function create_party(Request $request){
    	$request->validate([
    		'name' => 'required',
    		'mobile' => 'required',
    		'address' => 'required',
    		]);

        $party = new Party;

        $party->name = $request->name;
        $party->mobile = $request->mobile;
        $party->address = $request->address;

        $party->save();

        session()->flash('success', 'Party insert successfully !');
        return redirect()->route('party');

    }

    function edit_party($id){
        $party = Party::find($id);
        return view('setting.edit_party', compact('party'));
    }

    function update_party(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            ]);

        $party = Party::find($id);

        $party->name = $request->name;
        $party->mobile = $request->mobile;
        $party->address = $request->address;

        $party->save();

        session()->flash('success', 'Party Update successfully !');
        return redirect()->route('party');
    }

    function delete_party($id){
        $party = Party::find($id);
        $party->delete();

        session()->flash('success', 'Party delete successfully');
        return back();
    }


    // Raw Cotton type

    function rawcottontype(){
        $rowcottonTypes = RowcottonType::get();
        return view('setting.rawcottontype', compact('rowcottonTypes'));
    }

    function rawcottontype_add(){
        return view('setting.rawcottontype_add');
    }

     function create_rowtype(Request $request){
        $request->validate([
            'name' => 'required',
            'desctiption' => 'required',
            ]);

        $RrowcottonType = new RowcottonType;

        $RrowcottonType->name = $request->name;
        $RrowcottonType->desctiption = $request->desctiption;

        $RrowcottonType->save();

        session()->flash('success', 'Rawcottontype insert successfully');
        return redirect()->route('rawcottontype');

    }




}
