<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    private $model;

    public function __construct(User $userModel)
    {
        $this->model = $userModel;
    }
    public function index(Request $request)
    {   
        $filter = [];
        if (!empty($request->search)&&!empty($request->search_with)) {
            $filter[] = [$request->search_with, 'like', '%' . $request->search . '%'];
        }
        $sortBy = $request->input('sort-by') ?? 'id';
        $sortType = $request->input('sort-type');
        $sort = ['desc', 'asc'];
        if (!empty($sortType) && in_array($sortType, $sort)) {
            $sortType = $sortType === 'desc' ? 'asc' : 'desc';
        } else {
            $sortType = 'desc';
        }
        $users = User::where($filter)->orderBy($sortBy, $sortType)->paginate(10);
        return view('admin.page.Users.list', compact('users', 'sortBy', 'sortType'));
    }
    public function setStatus($id,$status)
    {   
        $rep='';
        $user=User::find($id);
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
