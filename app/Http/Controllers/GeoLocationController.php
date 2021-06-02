<?php

namespace App\Http\Controllers;

use App\Models\GeoLocation;
use App\Models\Employee;
use Illuminate\Http\Request;

class GeoLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jsonGeo = json_decode(file_get_contents('https://d2ad6b4ur7yvpq.cloudfront.net/naturalearth-3.3.0/ne_110m_admin_1_states_provinces_shp.geojson'), true);
        $employees = Employee::with(['department', 'position'])->get()->toArray();
        $employeeGeo = [];
        $employeeGeo['type'] = 'FeatureCollection';
        $employeeGeo['features'] = [];
        $i = 0;


        foreach ($jsonGeo['features'] as $key => $value) {
            if ($i != 10) {
                $empDept = [];
                $empDept = $value;
                $empDep['properties']['employee'] = [];
                $empDept['properties']['employee']['fullname'] = $employees[$i]['fname'] .' '. $employees[$i]['lname'];
                $empDept['properties']['employee']['department'] = $employees[$i]['department'][0]['name'];

                $i++;
                array_push($employeeGeo['features'], $empDept);
            } else {
                break;
            }
        }
        
        return response()->json($employeeGeo);
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
     * @param  \App\Models\GeoLocation  $geoLocation
     * @return \Illuminate\Http\Response
     */
    public function show(GeoLocation $geoLocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GeoLocation  $geoLocation
     * @return \Illuminate\Http\Response
     */
    public function edit(GeoLocation $geoLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GeoLocation  $geoLocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GeoLocation $geoLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GeoLocation  $geoLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeoLocation $geoLocation)
    {
        //
    }
}
