<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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

        if (!empty($request->keyword)) {
            $filter[] = ['name', 'like', '%' . $request->keyword . '%'];
        }
        if ($request->status !== '' && !is_null($request->status)) {
            $filter[] = ['status', $request->status];
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
