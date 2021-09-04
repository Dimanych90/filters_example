<?php

namespace App\Http\Controllers;

use App\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index()
    {
        $buildings = Building::all();

        return view('jkh/buildings', [
            'buildings' => $buildings,
        ]);
    }

    public function filter(Request $request)
    {

        if (isset($request)) {

            $buildings = Building::query()
                ->where(['filter_id' => $request->deadline])
                ->where(['class_filter_id' => $request->class])
                ->get();

            return view('jkh/buildings', [
                'buildings' => $buildings,
            ]);
        } else {

            $buildings = Building::all();

            return view('jkh/buildings', [
                'buildings' => $buildings,
            ]);
        }
//можно было и дальше продолжать фильтрацию, это как пример больше
    }
}
