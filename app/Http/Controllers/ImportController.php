<?php

/*
* Creation... (init 2020-09-28)
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ExcelImport;
use Maatwebsite\Excel\Facades\Excel;
use DB;

class ImportController extends Controller
{
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
     * @return \Illuminate\Support\Collection
     */
    public function index()
    {
        return view('import');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function importExcel(Request $request)
    {
        /**
         * code for one new row for each Excel Line
         */
        /* Excel::import(new ExcelImport, 'users.xlsx'); 
        $data =  Excel::import(new ExcelImport, request()->file('file')); */

        $this->validate($request, [
            'file'  => 'required|max:1000000|mimes:xls,xlsx'
        ]);

        Excel::import(new ExcelImport, request()->file('file'));

        DB::table('files');

        return back()->with('success', 'Excel Data Imported successfully.');
    }
}
