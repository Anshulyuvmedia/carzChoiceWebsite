<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\CarListsImport;
use Excel;
class ExcelCarList extends Controller
{
    public function import(Request $request)
    {
        // dd($request->all());
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        // Get the uploaded file
        $file = $request->file('file');

        // Process the Excel file
        Excel::import(new CarListsImport, $file);

        return redirect()->back()->with('success', 'Excel file imported successfully!');
    }
}
