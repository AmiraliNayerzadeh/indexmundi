<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Highcharts\Chart;

class SalesChart extends Chart
{
    public function __construct()
    {
        parent::__construct();

        // تنظیمات اولیه چارت
        $this->title('Average Sale Price Over Time');
//        $this->labels([]); // برچسب‌ها در اینجا خالی هستند
//        $this->dataset('Average Sale Price', 'line', []); // مجموعه داده‌ها نیز در اینجا خالی هستند
    }


}
