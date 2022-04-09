<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Http\Requests\StoreemployeeRequest;
use App\Http\Requests\UpdateemployeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Http\Resources\FileGroupResource;
use App\Models\FileGroup;
use Exception;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // to get all employees with there files using eager loading
        // $employees = employee::with(['files']);
        // return EmployeeResource::collection($employees)->response();
        // return employee::all();
        return EmployeeResource::collection(employee::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreemployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreemployeeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateemployeeRequest  $request
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateemployeeRequest $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        //
    }
    public function uploadfile(StoreemployeeRequest $request)
    {
        try {
        $file = file_get_contents($request->textFile);
        $file = str_replace('“', '"', $file);
        $file = str_replace('”', '"', $file);
        $jsonFile = json_decode($file);

        foreach ($jsonFile as $key => $jsons) { // This will search in the 2 jsons
            foreach($jsons as $key => $value) {
                if (empty($key) or empty($value)) {
                    continue;
                }
                $checkEmployee = employee::firstorCreate([
                    'name' => $value
                ]);
                $employeeFile = FileGroup::firstorCreate([
                    'name' => $key,
                    'employee_id' => $checkEmployee->id
                ]);
    }
}
        }
        catch (Exception $e) {
            return response( ["message" => "enter text file or text file with json array"] , 400);
        }
        return EmployeeResource::collection(employee::all());
    }
}