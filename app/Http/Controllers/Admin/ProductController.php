<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $model;

    public function __construct(Product $productModel)
    {
        $this->model = $productModel;
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
        $products=[];
        if (!empty($request->search)&&!empty($request->search_with)) {
            $search=$request->search;
            $search_With=$request->search_with;
            if ($search_With==="category"||
                $search_With==="shop"
                ) {
                $products= Product::whereHas($search_With, function ($query) use ($search,$search_With) {
                    $query->where('name','like', '%'.$search.'%');
                })->orderBy($sortBy, $sortType)->paginate(10);
            }else{
                $filter[] = [$request->search_with, 'like', '%' . $request->search . '%'];
                $products = Product::where($filter)->orderBy($sortBy, $sortType)->paginate(10);
            }
        }else{
            $products = Product::where($filter)->orderBy($sortBy, $sortType)->paginate(10);
        }
        return view("admin.page.Products.list",compact('products', 'sortBy', 'sortType'));
    }
    public function setStatus($id,$status)
    {   
        $rep='';
        $user=Product::find($id);
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
        
    }

    public function edit(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(string $id)
    {
        
    }
}
