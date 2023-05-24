<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\District;
use App\Models\Shop;
use App\Models\ShopProfile;
use App\Models\User;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private $model;

    public function __construct(Shop $shopModel)
    {
        $this->model = $shopModel;
    }
    public function index(Request $request)
    {
        $sortBy = $request->input('sort-by') ?? 'id';
        $sortType = $request->input('sort-type');
        $sort = ['desc', 'asc'];
        if (!empty($sortType) && in_array($sortType, $sort)) {
            $sortType = $sortType === 'desc' ? 'asc' : 'desc';
        } else {
            $sortType = 'desc';
        }
        $filter = [];
        $shops=[];
        if (!empty($request->search)&&!empty($request->search_with)) {
            $search=$request->search;
            $search_With=$request->search_with;
            if ($search_With==="shop_profile.address.district.city"||
                $search_With==="shop_profile.address.district"||
                $search_With==="category"||
                $search_With==="user"
                ) {
                $shops= Shop::whereHas($search_With, function ($query) use ($search,$search_With) {
                    $query->where($search_With==="user" ? 'user_name' : 'name','like', '%'.$search.'%');
                })->orderBy($sortBy, $sortType)->paginate(10);
            }else{
                $filter[] = [$request->search_with, 'like', '%' . $request->search . '%'];
                $shops = Shop::where($filter)->orderBy($sortBy, $sortType)->paginate(10);
            }
        }else{
            $shops = Shop::where($filter)->orderBy($sortBy, $sortType)->paginate(10);
        }
        return view("admin.page.Shops.list",compact('shops', 'sortBy', 'sortType'));
    }
    public function setStatus($id,$status)
    {   
        $rep='';
        $user=Shop::find($id);
        $active=$user->active;
        if($active == $status){
            $status=!$active;
            $user->update(["active"=>$status]);
            $rep=("phan tu da duoc cap nhat");
        }else{
            $rep=("phan tu da duoc cap nhat truoc do boi mot tai khoan admin khac");
        }
        return response()->json(["rep"=>$rep]);
    }
    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function show(string $id)
    {
        $shop=Shop::find($id);
        return view('admin.page.Shops.detail',compact('shop'));
    }

    public function edit(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(string $id)
    {
        $shop=Shop::find($id);
        $shop->delete();
    }
}
