<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view("admin.page.Users.list");
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
