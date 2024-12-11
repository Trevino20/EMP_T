<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\emp;
use Yajra\DataTables\Facades\DataTables;
class EmpController extends Controller
{

    public function showEmp(Request $request)
{
    if ($request->ajax()) {
        $gender = $request->get('filter_gender'); 
        $designation = $request->get('filter_designation'); 


        
        $emps = emp::query();

        
        if ($gender) {
            $emps->where('gender', $gender);
        }
        if ($designation) {
            $emps->where('desig', $designation);
        }

        
        return DataTables::eloquent($emps)->make(true);
    }

    return view('emp');
}

    public function query(emp $model): QueryBuilder{
        return $model ->newQuery();
    }
   
}
