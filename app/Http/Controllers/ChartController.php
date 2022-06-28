<?php

namespace App\Http\Controllers;

use App\Charts\ChartTest;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    /**
     * @Description: Chart Line 
     * @Edition: 27/06/2022 v1
=     */
    public function lineChart($x_data, $y_data, $fill = false, $color = '#51C1C0', $tension = '0.1')
    {
        $chart = new ChartTest;

        $chart->labels($y_data);

        // Vérifie si on doit afficher plusieurs lines
        if (count($x_data) > 0 && isset($x_data[0]['data']) && isset($x_data[1]['data'])) {
            foreach ($x_data as $key => $data) {
                $chart->dataset($data['title'], 'line', $data['data'])
                    ->options([
                        'fill' => $fill,
                        'borderColor' => isset($data['color']) ? $data['color'] : $color,
                        'tension' => isset($data['tension']) ? $data['tension'] : $tension,
                    ]);
            }
        } else {
            $chart->dataset($x_data['title'], 'line', $x_data['data'])
                ->options([
                    'fill' => $fill,
                    'borderColor' => isset($x_data['color']) ? $x_data['color'] : $color,
                    'tension' => isset($x_data['tension']) ? $x_data['tension'] : $tension,
                ]);
        }
        return $chart;
    }

    /**
     * @Description: Doughtnut Chart 
     * @Edition: 27/06/2022 v1
=     */
    public function doughnutChart($x_data, $y_data, $backgroundColor = 'rgba(54, 162, 235, 0.2)', $borderColor = 'rgb(54, 162, 235)')
    {
        $chart = new ChartTest;

        $chart->labels($y_data);

        // Vérifie si on doit afficher plusieurs lines
        if (count($x_data) > 0 && isset($x_data[0]['data']) && isset($x_data[1]['data'])) {
            foreach ($x_data as $key => $data) {
                $chart->dataset($data['title'], 'doughnut', $data['data'])
                    ->options([
                        'borderColor' => isset($data['borderColor']) ? $data['borderColor'] : $borderColor,
                        'backgroundColor' => isset($data['backgroundColor']) ? $data['backgroundColor'] : $backgroundColor,
                    ]);
            }
        } else {
            $chart->dataset($x_data['title'], 'doughnut', $x_data['data'])
                ->options([
                    'borderColor' => isset($x_data['borderColor']) ? $x_data['borderColor'] : $borderColor,
                    'backgroundColor' => isset($x_data['backgroundColor']) ? $x_data['backgroundColor'] : $backgroundColor,
                ]);
        }
        return $chart;
    }

    /**
     * @Description: Pie Chart 
     * @Edition: 27/06/2022 v1
=     */
    public function pieChart($x_data, $y_data, $backgroundColor = 'rgba(54, 162, 235, 0.2)', $borderColor = 'rgb(54, 162, 235)')
    {
        $chart = new ChartTest;

        $chart->labels($y_data);

        // Vérifie si on doit afficher plusieurs lines
        if (count($x_data) > 0 && isset($x_data[0]['data']) && isset($x_data[1]['data'])) {
            foreach ($x_data as $key => $data) {
                $chart->dataset($data['title'], 'pie', $data['data'])
                    ->options([
                        'borderColor' => isset($data['borderColor']) ? $data['borderColor'] : $borderColor,
                        'backgroundColor' => isset($data['backgroundColor']) ? $data['backgroundColor'] : $backgroundColor,
                    ]);
            }
        } else {
            $chart->dataset($x_data['title'], 'pie', $x_data['data'])
                ->options([
                    'borderColor' => isset($x_data['borderColor']) ? $x_data['borderColor'] : $borderColor,
                    'backgroundColor' => isset($x_data['backgroundColor']) ? $x_data['backgroundColor'] : $backgroundColor,
                ]);
        }
        return $chart;
    }

    /**
     * @Description: Bar Chart 
     * @Edition: 27/06/2022 v1
=     */
    public function barChart($x_data, $y_data, $backgroundColor = 'rgba(54, 162, 235, 0.2)', $borderColor = 'rgb(54, 162, 235)')
    {
        $chart = new ChartTest;

        $chart->labels($y_data);

        // Vérifie si on doit afficher plusieurs lines
        if (count($x_data) > 0 && isset($x_data[0]['data']) && isset($x_data[1]['data'])) {
            foreach ($x_data as $key => $data) {
                $chart->dataset($data['title'], 'bar', $data['data'])
                    ->options([
                        'borderColor' => isset($data['borderColor']) ? $data['borderColor'] : $borderColor,
                        'backgroundColor' => isset($data['backgroundColor']) ? $data['backgroundColor'] : $backgroundColor,
                    ]);
            }
        } else {
            $chart->dataset($x_data['title'], 'bar', $x_data['data'])
                ->options([
                    'borderColor' => isset($x_data['borderColor']) ? $x_data['borderColor'] : $borderColor,
                    'backgroundColor' => isset($x_data['backgroundColor']) ? $x_data['backgroundColor'] : $backgroundColor,
                ]);
        }
        return $chart;
    }
}
