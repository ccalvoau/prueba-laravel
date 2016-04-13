<?php

namespace Novus\Http\Controllers;

use Illuminate\Http\Request;

use Novus\Http\Requests;
use Novus\Http\Controllers\Controller;
use Novus\State;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Searching the instance into DB given an ID
        $states = State::all();

        $labels = $states->lists('name');   // barChartData labels
        $values = $states->lists('id');     // barChartData values

        // Setting $data to pass the data into the View
        $arrData['data'] = array();

        // Push the data into the array     // pieChartData array
        foreach($states as $state) {
            array_push($arrData['data'], array(
                    'label' => $state->name,
                    'value' => $state->id,
                )
            );
        }

        $data = [
            'pieChartData' => $arrData['data'], // pieChartData array
            'labelsBarChart' => $labels,                // pieChartData array labels
            'valuesBarChart' => $values,                // pieChartData array values
        ];

        //dd($data);

        // Redirect to Show View with the $data
        return \View::make('chart', $data);
    }
}
