<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\s_case;

class CaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $case = s_case::all()->toArray();
        return view('case.index', compact('case'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('case.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'case_name' => 'required',
            'case_brand' => 'required',
            'case_inv_level' => 'required',
            'case_remarks' => 'required',
            'case_price' => 'required',
            'staff_id' => 'required'
        ]);

        $case = new s_case([
            'case_name' => $request->get('case_name'),
            'case_brand' => $request->get('case_brand'),
            'case_inv_level' => $request->get('case_inv_level'),
            'case_remarks' => $request->get('case_remarks'),
            'case_price' => $request->get('case_price'),
            'staff_id' => $request->get('staff_id')
        ]);

        $case->save();

        return redirect()->route('case.index')->with('success', 'Data Added');
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
        $case = s_case::find($id);
        return view('case.edit', compact('case', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'case_name' => 'required',
            'case_brand' => 'required',
            'case_inv_level' => 'required',
            'case_remarks' => 'required',
            'case_price' => 'required',
            'staff_id' => 'required'
        ]);

        $case = s_case::find($id);
        $case->case_name = $request->input('case_name');
        $case->case_brand = $request->input('case_brand');
        $case->case_inv_level = $request->input('case_inv_level');
        $case->case_remarks = $request->input('case_remarks');
        $case->case_price = $request->input('case_price');
        $case->staff_id = $request->input('staff_id');
        $case->save();
        return redirect()->route('case.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $case = s_case::find($id);
        $case->delete();
        return redirect()->route('case.index')->with('success', 'Data Deleted');
    }
}
