<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DossiersChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $y_data = ['2015', '2016', '2017', '2018', '2019', '2020'];

        $x_data = [];


        $title = "TEST TITLE";
        $x_label = "user";
        $chart_color = [
            'rgb(255, 99, 132, 0.2)',
            'rgb(54, 162, 235, 0.2)',
            'rgb(94, 255, 238, 0.2)',
            'rgb(54, 162, 235, 0.2)',
            'rgb(255, 205, 86, 0.2)',
            'rgba(153, 102, 255, 0.2)'
        ];
        $border_color = [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(94, 255, 238)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)',
            'rgba(153, 102, 255)'
        ];
        // $border_color = 'rgba(153, 102, 255)';

        return view('dossiersChart', [
            'y_data' => json_encode($y_data, JSON_NUMERIC_CHECK),
            'x_data' => json_encode($x_data, JSON_NUMERIC_CHECK),
            'x_label' =>  json_encode($x_label, JSON_NUMERIC_CHECK),
            'title' => json_encode($title, JSON_NUMERIC_CHECK),
            'chart_type' =>  json_encode('line', JSON_NUMERIC_CHECK),
            'chart_color' =>  json_encode($chart_color, JSON_NUMERIC_CHECK),
            'border_color' =>  json_encode($border_color, JSON_NUMERIC_CHECK)
        ]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
