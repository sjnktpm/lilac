<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function getUsers(Request $request)
    {
        if ($request->ajax()) {
            $data = User::with('department', 'designation')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('department', function($row) {
                    return $row->department->name;
                })
                ->addColumn('designation', function($row) {
                    return $row->designation->name;
                })
                ->make(true);
        }
    }
}
