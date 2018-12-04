<?php

namespace App\Http\Controllers;

use App\CutOffMark;
use Illuminate\Http\Request;

class CutOffMarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cutoffmark = CutOffMark::all()->toArray();
        $cutoffmarks = array();
        foreach ($cutoffmark as $key => $value) {
            $cutoffmarks[$value['department']][$value['module']][$value['submodule']] = $value['mark'];
        }
        return view('cut-off-mark')->with('cutoffmarks', $cutoffmarks);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usm = $request->only(['usm']);
        $input = $request->except(['_token', 'usm']);
        foreach ($usm as $key => $type) {
            foreach ($type as $module => $moduleValue) {
                $cutoffmark = CutOffMark::updateOrCreate(
                    ['department' => $key, 'module' => $module, 'submodule' => ''],
                    ['mark' => $moduleValue]
                );
            }
        }
        foreach ($input as $department => $type) {
            foreach ($type as $module => $moduleType) {
                foreach ($moduleType as $submodule => $value) {
                    $cutoffmark = CutOffMark::updateOrCreate(
                        ['department' => $department, 'module' => $module, 'submodule' => $submodule],
                        ['mark' => $value]
                    );
                }
            }
        }
        return redirect()->route('cut-off-mark.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CutOffMark  $cutOffMark
     * @return \Illuminate\Http\Response
     */
    public function show(CutOffMark $cutOffMark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CutOffMark  $cutOffMark
     * @return \Illuminate\Http\Response
     */
    public function edit(CutOffMark $cutOffMark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CutOffMark  $cutOffMark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CutOffMark $cutOffMark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CutOffMark  $cutOffMark
     * @return \Illuminate\Http\Response
     */
    public function destroy(CutOffMark $cutOffMark)
    {
        //
    }
}
