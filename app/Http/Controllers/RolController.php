<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RolController extends Controller
{
    private $request;

    function __construct(Request $request){
        $this->request = $request;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("roles_index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("roles_index");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $data_rol = $this->request->only(['name','abbr']);

        $is_valid = Validator::make($data_rol, [
            'name' => 'required|min:6|max:50|unique:roles,name',
            'abbr' => 'required|min:3|max:20|unique:roles,abbr' 
        ]);

        if($is_valid->fails())
            return back();

        $data_rol['token'] = Str::random(50);
        
        Rol::create($data_rol);
        return view('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rol $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rol $rol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rol $rol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rol $rol)
    {
        //
    }
}
