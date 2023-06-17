<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use DataTables;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.role.index');
    }
    /**
     * Getting list of roles using AJAX
     */

    public function ajaxAll()
    {
        $roles = Role::all();
        return response()->json(['roles' => $roles]);
    }

    /**
     * Getting list of roles using AJAX
     */

    public function datatableAll(Request $request)
    {
        if ($request->ajax()) {
            $data = Role::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<div class="btn-group">
                                <a href="javascript:void(0)" class="edit btn btn-outline-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                            </div>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = new Role();
        $role->title = $request->title;
        $role->description = $request->description;
        $role->save();
        return response()->json(['res' => "SAVED"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }
}
