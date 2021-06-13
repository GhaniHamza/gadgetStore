<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\s_powerbank;

class PowerbankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $powerbank = s_powerbank::all()->toArray();
        return view('powerbank.index', compact('powerbank'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('powerbank.create');
    }

    /**
     * Store a newly created resource in powerbank.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'powerbank_name' => 'required',
            'powerbank_brand' => 'required',
            'powerbank_remarks' => 'required',
            'powerbank_price' => 'required',
            'staff_id' => 'required'
        ]);

        $powerbank = new s_powerbank([
            'powerbank_name' => $request->get('powerbank_name'),
            'powerbank_brand' => $request->get('powerbank_brand'),
            'powerbank_remarks' => $request->get('powerbank_remarks'),
            'powerbank_price' => $request->get('powerbank_price'),
            'staff_id' => $request->get('staff_id')
        ]);

        $powerbank->save();

        return redirect()->route('powerbank.index')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $powerbank = s_powerbank::find($id);
        return view('powerbank.edit', compact('powerbank', 'id'));
    }

    /**
     * Update the specified resource in powerbank.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'powerbank_name' => 'required',
            'powerbank_brand' => 'required',
            'powerbank_remarks' => 'required',
            'powerbank_price' => 'required',
            'staff_id' => 'required'
        ]);

        $powerbank = s_powerbank::find($id);
        $powerbank->powerbank_name = $request->get('powerbank_name');
        $powerbank->powerbank_brand = $request->get('powerbank_brand');
        $powerbank->powerbank_mah_level = $request->get('powerbank_mah_level');
        $powerbank->powerbank_remarks = $request->get('powerbank_remarks');
        $powerbank->powerbank_price = $request->get('powerbank_price');
        $powerbank->staff_id = $request->get('staff_id');
        $powerbank->save();
        return redirect()->route('powerbank.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from powerbank.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $powerbank = s_powerbank::find($id);
        $powerbank->delete();
        return redirect()->route('powerbank.index')->with('success', 'Data Deleted');
    }
}
