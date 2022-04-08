<?php

namespace App\Http\Controllers;

use App\Models\FileGroup;
use App\Http\Requests\StoreFileGroupRequest;
use App\Http\Requests\UpdateFileGroupRequest;

class FileGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFileGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFileGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FileGroup  $fileGroup
     * @return \Illuminate\Http\Response
     */
    public function show(FileGroup $fileGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFileGroupRequest  $request
     * @param  \App\Models\FileGroup  $fileGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFileGroupRequest $request, FileGroup $fileGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FileGroup  $fileGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(FileGroup $fileGroup)
    {
        //
    }
}
