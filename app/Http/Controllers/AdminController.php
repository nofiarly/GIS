<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function table()
    {
        $data = [
            'list' => Feature::all(),
            'title' => 'Table'
        ];

        return view('admin/table', $data);
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard'
        ];

        return view('admin/dashboard', $data);
    }

    public function add_data()
    {
        $data = [
            'title' => 'Add Data'
        ];

        return view('admin/add_data', $data);
    }

    public function update_data($id)
    {
        $data = [
            'title' => 'Update',
            'list' => Feature::find($id)
        ];

        // dd($data);

        return view('admin.update_data', $data);
    }
}
