<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\CutOffMark;

class HomeController extends Controller
{
    private $directCriteria = [
        "mate_10", "inggris_10", "first_module_10", "second_module_10", "third_module_10", 
        "mate_11", "inggris_11", "first_module_11", "second_module_11", "third_module_11", 
        "mate_12", "inggris_12", "first_module_12", "second_module_12", "third_module_12", 
        "mate_13", "inggris_13", "first_module_13", "second_module_13", "third_module_13", 
    ];

    private $usmCriteria = [
        "mate", "inggris", "tpa"
    ];

    private $usmMax = [
        "mate" => 90, 
        "inggris" => 90, 
        "tpa" => 9
    ];
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('welcome')->with('students', $students);
    }

    public function directNormalisation(Request $request) 
    {
        $department = $request->department ?? 'hospitality';
        $submodule = $request->submodule ?? 'ipa';
        $students = Student::where('usm', 0)
                            ->where('department', $department)
                            ->where('submodule', $submodule)
                            ->get()
                            ->toArray();
        $cutoffmark = CutOffMark::where('department', $department)
                            ->where('submodule', $submodule)
                            ->get()
                            ->toArray();
        $cutoffmarks = array();
        foreach ($cutoffmark as $key => $value) {
            $cutoffmarks[$value['module']] = $value['mark']/array_sum(array_column($cutoffmark, 'mark'));
        }
        $result = array();
        //normalisasi
        foreach ($students as $key => $student) {
            $row = array();
            $row['student'] = $student;
            $poin = $status = 0;
            foreach ($this->directCriteria as $criteria) {
                if($student[$criteria] < ($cutoffmarks[$criteria] * array_sum(array_column($cutoffmark, 'mark')))) {
                    $status = 1;
                }
                $cPoin = $student[$criteria]/max(array_column($students, $criteria));
                $row[$criteria] = round($cPoin,3);
                $poin += ($cPoin * $cutoffmarks[$criteria]);
            }
            $row['poin'] = round($poin, 3);
            $row['status'] = $status;
            array_push($result, $row);
        }


        //rank
        foreach ($result as $key => $row) {
            $point[$key]  = $row['poin'];
        }
        // return $point;
        $before = $result;
        if(isset($point))
        array_multisort($point, SORT_DESC, $result);
        return view('direct-normalisation')->with('befores', $before)->with('results', $result);

    }

    public function usmNormalisation(Request $request) 
    {
        $students = Student::where('usm', 1)
                            ->get()
                            ->toArray();
        $cutoffmark = CutOffMark::where('department', 'usm')
                            ->where('submodule', '')
                            ->get()
                            ->toArray();
        $cutoffmarks = array();
        foreach ($cutoffmark as $key => $value) {
            if($value['module'] === 'tpa') $cutoffmark[$key]['mark'] = $value['mark'] * 10;
        }
        foreach ($cutoffmark as $key => $value) {
            
            $cutoffmarks[$value['module']] = $value['mark']/array_sum(array_column($cutoffmark, 'mark'));
            // echo $value['mark'] . '/' . array_sum(array_column($cutoffmark, 'mark')) . '=' . $cutoffmarks[$value['module']] . ' <br/>'; 
        }
        $result = array();
        //normalisasi
        foreach ($students as $key => $student) {
            $row = array();
            $row['student'] = $student;
            $poin = $status = 0;
            foreach ($this->usmCriteria as $criteria) {
                if($student['usm_' . $criteria] < ($cutoffmarks[$criteria] * array_sum(array_column($cutoffmark, 'mark')))) {

                    
                    if($criteria === 'tpa'){
                        if($student['usm_' . $criteria] < (($cutoffmarks[$criteria] * array_sum(array_column($cutoffmark, 'mark'))) / 10 )) {
                            $status = 1;
                        }
                    }else {
                        $status = 1;
                    }
                }
                $cPoin = $student['usm_' . $criteria]/max(array_column($students, 'usm_' . $criteria));
                $row[$criteria] = round($cPoin,3);
                $poin += $cPoin * $cutoffmarks[$criteria];
            }
            $row['poin'] = round($poin, 3);
            $row['status'] = $status;
            array_push($result, $row);
        }


        //rank
        foreach ($result as $key => $row) {
            $point[$key]  = $row['poin'];
        }
        $before = $result;
        array_multisort($point, SORT_DESC, $result);
        // return $result;
        return view('usm-normalisation')->with('befores', $before)->with('results', $result);

    }
}
