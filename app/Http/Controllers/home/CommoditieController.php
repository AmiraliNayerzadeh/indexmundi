<?php

namespace App\Http\Controllers\home;

use App\Charts\CategoryChart;
use App\Charts\Chart;
use App\Charts\SalesChart;
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


    public function categoryy(Category $category , Request $request)
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


    public function category(Category $category)
    {
        // بارگذاری داده‌ها از پایگاه داده
        $salesData = Item::select('year', 'month', 'sale_price_average')
            ->where('category_id', $category->id) // فیلتر بر اساس دسته‌بندی
            ->orderBy('year')
            ->orderByRaw("FIELD(month, 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December')")
            ->get();

        // بررسی داده‌ها با dd
        // dd($salesData);


        $chart = new SalesChart();

        // برچسب‌های محور x (ماه و سال)
        $chart->labels($salesData->map(function ($item) {
            return $item->month . ' ' . $item->year; // ماه و سال به عنوان برچسب
        }));

        // داده‌های محور y (میانگین قیمت‌ها) بدون فرمت‌دهی
        $chart->dataset('Average Sale Price', 'line', $salesData->pluck('sale_price_average')->map(function ($value) {
            return (float) $value; // اطمینان از تبدیل به عدد شناور
        })->toArray());

        return view('home.category', compact('category', 'chart'));

    }








}
