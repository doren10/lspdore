<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard()
    {
        return view('admin.dashboard', [
            "aspirasis" => Aspirasi::all()
        ]);
    }

    function view()
    {
        return view('admin.aspirasi.view', [
            "aspirasis" => Aspirasi::all()
        ]);
    }

    function export()
    {
        return view('admin.aspirasi.tableExport', [
            "aspirasis" => Aspirasi::all()
        ]);
    }
}
