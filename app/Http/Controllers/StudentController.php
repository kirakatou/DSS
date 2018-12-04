<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student')->with('student', null);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = [
            "no_pendaftaran"    => $request->no_pendaftaran,         
            "nama"              => $request->nama,
            "batch"             => $request->batch,
            "department"        => $request->department,
            "submodule"         => $request->submodule
        ];
        if(!$request->usm) {
            $additional = [
                "mate_10"           => $request->mate_10, 
                "inggris_10"        => $request->inggris_10,
                "first_module_10"   => $request->first_module_10,
                "second_module_10"  => $request->second_module_10,
                "third_module_10"   => $request->third_module_10,
                "mate_11"           => $request->mate_11,
                "inggris_11"        => $request->inggris_11, 
                "first_module_11"   => $request->first_module_11,
                "second_module_11"  => $request->second_module_11,
                "third_module_11"   => $request->third_module_11,
                "mate_12"           => $request->mate_12,
                "inggris_12"        => $request->inggris_12,
                "first_module_12"   => $request->first_module_12,
                "second_module_12"  => $request->second_module_12,
                "third_module_12"   => $request->third_module_12,
                "mate_13"           => $request->mate_13,
                "inggris_13"        => $request->inggris_13,
                "first_module_13"   => $request->first_module_13,
                "second_module_13"  => $request->second_module_13,
                "third_module_13"   => $request->third_module_13
            ];
            $input = array_merge($input,$additional);
        } else {
            $additional = [
                "usm"               => $request->usm,
                "usm_mate"          => $request->usm_mate,
                "usm_inggris"       => $request->usm_inggris,
                "usm_tpa"           => $request->usm_tpa
            ];
            $input = array_merge($input,$additional);
        }
        $student = Student::create($input);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $input = [
            "no_pendaftaran"    => $request->no_pendaftaran,         
            "nama"              => $request->nama,
            "batch"             => $request->batch,
            "department"        => $request->department,
            "submodule"         => $request->submodule
        ];
        if(!$request->usm) {
            $additional = [
                "mate_10"           => $request->mate_10, 
                "inggris_10"        => $request->inggris_10,
                "first_module_10"   => $request->first_module_10,
                "second_module_10"  => $request->second_module_10,
                "third_module_10"   => $request->third_module_10,
                "mate_11"           => $request->mate_11,
                "inggris_11"        => $request->inggris_11, 
                "first_module_11"   => $request->first_module_11,
                "second_module_11"  => $request->second_module_11,
                "third_module_11"   => $request->third_module_11,
                "mate_12"           => $request->mate_12,
                "inggris_12"        => $request->inggris_12,
                "first_module_12"   => $request->first_module_12,
                "second_module_12"  => $request->second_module_12,
                "third_module_12"   => $request->third_module_12,
                "mate_13"           => $request->mate_13,
                "inggris_13"        => $request->inggris_13,
                "first_module_13"   => $request->first_module_13,
                "second_module_13"  => $request->second_module_13,
                "third_module_13"   => $request->third_module_13
            ];
            $input = array_merge($input,$additional);
        } else {
            $additional = [
                "usm"               => $request->usm,
                "usm_mate"          => $request->usm_mate,
                "usm_inggris"       => $request->usm_inggris,
                "usm_tpa"           => $request->usm_tpa
            ];
            $input = array_merge($input,$additional);
        }
        $student->update($input);
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
