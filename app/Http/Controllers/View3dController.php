<?php

namespace App\Http\Controllers;

use App\Models\View3d;
use Illuminate\Http\Request;

class View3dController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('view3d.index', ['view3d' => View3d::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  View3d $view3d
     * @return \Illuminate\Http\Response
     */
    public function show(View3d $view3d)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  View3d $view3d
     * @return \Illuminate\Http\Response
     */
    public function edit(View3d $view3d)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  View3d $view3d
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, View3d $view3d)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  View3d $view3d
     * @return \Illuminate\Http\Response
     */
    public function destroy(View3d $view3d)
    {
        //
    }
}
