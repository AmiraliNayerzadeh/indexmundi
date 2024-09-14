<?php

namespace App\Http\Controllers\home;

use App\Charts\CategoryChart;
use App\Charts\Chart;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommoditieController extends Controller
{
    use SEOTools ;

    public function commodities()
    {
        $this->seo()->setTitle('commodities');
        return view('home.commodities');
    }


    public function category(Category $category , Request $request)
    {
        $this->seo()->setTitle('commodities - '.$category->title);

        // گرفتن سال انتخاب شده از فیلتر
        $yearFilter = $request->input('year', null);

        // ایجاد کوئری اصلی
        $query = Item::where('category_id', $category->id);

        if ($yearFilter) {
            // اگر فیلتر سال وجود داشته باشد، فیلتر بر اساس سال و گروه‌بندی بر اساس ماه
            $query->where('year', $yearFilter);
            $items = $query
                ->select('month', DB::raw('SUM(sale_price_average) as total_value'))
                ->groupBy('month')
                ->orderByRaw("FIELD(month, 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December')")
                ->get();

            // برچسب‌ها بر اساس ماه
            $labels = $items->pluck('month')->toArray();
        } else {
            // اگر فیلتر سال وجود نداشته باشد، فیلتر بر اساس سال
            $items = $query
                ->select('year', DB::raw('SUM(sale_price_average) as total_value'))
                ->groupBy('year')
                ->orderBy('year')
                ->get();

            // برچسب‌ها بر اساس سال
            $labels = $items->pluck('year')->toArray();
        }

        // ایجاد نمودار
        $chart = new CategoryChart();
        $chart->labels($labels); // برچسب‌ها بر اساس ماه یا سال
        $chart->dataset('Total Sales', 'line', $items->pluck('total_value')->toArray()); // نوع نمودار خطی

        return view('home.category', compact('category', 'chart'));
    }
}
