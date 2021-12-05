<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employeers;
use Excel;
use App\Imports\EmployeeImport;

class EmployeeController extends Controller
{
    public function importForm()
    {
        return view('index');
    }
    public function import(Request $request)
    {
        Excel::import(new EmployeeImport, $request->file);
        return 'data loaded :) ';
    }
}
