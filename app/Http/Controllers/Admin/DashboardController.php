<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request){
        if (!empty($request->get('sales'))) {
            $sales_card=$this->getNumberAndPercent($request->get('sales'),"sales");
        }else{
            $sales_card=$this->getNumberAndPercent('week',"sales");
        }
        if (!empty($request->get('revenue'))) {
            $revenue_card=$this->getNumberAndPercent($request->get('revenue'),"revenue");
        }else{
            $revenue_card=$this->getNumberAndPercent('week',"revenue");
        }
        return view("admin.page.Dashboard.dashboard",compact("sales_card","revenue_card"));
    }

    public function getNumberAndPercent($request, $card){
        switch ($request) {
            case 'today':
                $time_recently = Carbon::now()->subDay();
                $time_before = Carbon::now()->subDays(2);
                break;
            case 'week':
                $time_recently = Carbon::now()->subWeek();
                $time_before = Carbon::now()->subWeeks(2);
                break;
            case 'month':
                $time_recently = Carbon::now()->subMonth();
                $time_before = Carbon::now()->subMonths(2);
                break;
            case 'year':
                $time_recently = Carbon::now()->subYear();
                $time_before = Carbon::now()->subYears(2);
                break;
        }
        switch ($card) {
            case 'sales':
                $table = "orders";
                $key = "quantity";
                break;
            case 'revenue':
                $table = "orders";
                $key = ["quantity" , "price"];
                break;
            // case 'customers':
            //     $table = "user";
            //     $key = "quantity";
            //     break;
        }

        $recently_total = 0;
        $component_recently = $this->findCardNumber($table ,$time_recently, $key);//1
        dd($component_recently);
            if($card="sales"){
                foreach ($component_recently as $item) {
                    $recently_total += $item->quantity;
                }
            }
            if($card="revenue"){
                foreach ($component_recently as $item) {
                    $recently_total += $item->quantity * $item->price;
                }
            }

        $before_total = 0;
        $component_before = $this->findCardNumber($table ,$time_before, $key);//1+2
            if($card="sales"){
                foreach ($component_before as $item) {
                    $before_total += $item->quantity;
                }
            }
            if($card="revenue"){
                foreach ($component_before as $item) {
                    $before_total += $item->quantity * $item->price;
                }
            }
        
    $percent=null;
    $before=$before_total - $recently_total;
    if($before){
        $percent=($recently_total)/$before*100;   
    }
    return [
        "number" => $recently_total,
        "percent" => $percent,
        "key" => $key
    ];
}

public function findCardNumber($table , $time, $key)
{
    return DB::table($table)
        ->select($key)
        ->join('order_lists', 'orders.order_list_id', '=', 'order_lists.id')
        ->where('order_lists.status', '=', 'hoan thanh')
        ->where('order_lists.created_at', '>=', $time)
        ->get();
}
}
