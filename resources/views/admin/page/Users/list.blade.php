@extends("admin.layout.list")
@section("page_title","Danh sách người dùng")

{{-- title --}}
@section("title")
<li class="breadcrumb-item"><a href="{{route("user.index")}}">Users</a></li>
<li class="breadcrumb-item active">
    List
</li>
@endsection
{{-- end title --}}
{{-- messenger --}}
@if (session("message"))
    @section("messeger")
        <div class="alert alert-success">
                {{session("message")}}
        </div>
    @endsection
@endif
{{-- end messenger --}}

@section("data_title")
<div class="d-flex align-items-center" style="max-width: 600px;">
    <form  method="GET" action="{{ route('user.index') }}">
        <button type="submit" class="btn btn-outline-primary form-control rounded">All User</button>
    </form>
    <a href="{{route('user.create')}}" class="btn btn-outline-primary mx-1"> Create New Admin Account</a>
</div>
@endsection
@if(isset($users) && $users != [])
    @section("search_form")
        <div class="input-group" style="max-width: 600px">
            <form  method="GET" action="{{ route('user.index') }}" class="d-inline-flex">
                <select style="max-width: 100px" class="form-select form-control rounded mx-1" aria-label="Default select example" name="search_with">
                    <option {{ request()->search_with == "user_name" ? "selected" :""}} value="user_name">Name</option>
                    <option {{ request()->search_with == "id" ? "selected" :""}} value="id">Id</option>
                    <option {{ request()->search_with == "email" ? "selected" :""}} value="email">Email</option>
                    <option {{ request()->search_with == "created_at" ? "selected" :""}} value="created_at">Created</option>
                </select>
                <input type="search" class="form-control rounded mx-1" name="search" placeholder="search" aria-label="Search" value="{{ request()->search ?? '' }}"/>
                <button type="submit" style="max-width: 100px" class="btn btn-outline-primary form-control rounded mx-1">search</button>
            </form>
        </div>
    @endsection
    @section("thead")
        <tr class="table-active">
            <th><input type="checkbox" class="checkbox-all"></th>
            <th scope="col">
                <a  
                href="{{ request()->fullUrlWithQuery(['keyword' => request()->keyword ?? '','sort-by' => 'id','sort-type' => $sortType])}}">
                    ID
                </a>
            </th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">
                <a  
                href="{{ request()->fullUrlWithQuery(['keyword' => request()->keyword ?? '','sort-by' => 'email_verified_at','sort-type' => $sortType])}}">
                    Verification
                </a>
            </th>
            <th scope="col">
                <a  
                href="{{ request()->fullUrlWithQuery(['keyword' => request()->keyword ?? '','sort-by' => 'active','sort-type' => $sortType])}}">
                    Active
                </a>
            </th>
            <th scope="col">Shop</th>
            <th scope="col">Create</th>
            <th scope="col">Handle</th>
        </tr>
    @endsection
    @section("tbody")
            @forelse ($users as  $user)
                <tr>
                    <td>
                        <input type="checkbox" 
                        class="checkbox-itemt itemt_{{$user->id}}"
                        data-id="{{$user->id}}" 
                        >
                    </td>
                    <td>{{$user->id}}</td>
                    <td style="min-width: 200px;">{{$user->user_name}}</td>
                    <td style="min-width: 200px;">{{$user->email}}</td>
                    <td>
                        <div style="width: 110px;" class="btn btn-{{$user->email_verified_at ? 'success' : 'warning'}} btn-radius">
                            {{$user->email_verified_at ? 'verified' : 'unverified'}}
                        </div>
                    </td>
                    <td>
                        <label for="itemt_toggle_{{$user->id}}" class="toggle-label itemt_{{$user->id}}">
                            <div class="toggle-slider itemt_{{$user->id}}">
                                <div class="toggle-slider-before itemt_{{$user->id}}">
                                </div>
                            </div>
                        </label>
                        <input type="checkbox" id="itemt_toggle_{{$user->id}}" 
                        {{$user->active ? "checked" : ""}}
                         class="toggle-checkbox itemt_{{$user->id}}" 
                         data-url="{{route("user.setStatus",[$user->id])}}" 
                         data-id="{{$user->id}}" 
                         >
                    </td>
                    <td>
                        <a href="{{$user->shop_id ? route("shop.show",$user->shop_id):"# "}}" class="btn btn-{{$user->shop_id ? 'success' : 'primary'}} btn-radius">
                            {{$user->shop_id ? 'Show Shop' : 'Unregistered'}}
                        </a>
                    </td>
                    <td style="min-width: 200px;">{{$user->created_at}}</td>
                    <td style="min-width: 200px;">
                        <a class="btn btn-primary" href="{{route('user.show',[$user->id])}}">Show</a>
                        <a class="btn btn-primary" href="{{route('user.destroy',[$user->id])}}">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">Requested not found in Database</td>
                </tr>
            @endforelse
    @endsection
    @section("pagination")
            {{ $users->links() }}
    @endsection
@else
    @section("thead")
        <div>
            Requested not found in Database
        </div>
    @endsection
@endif
{{--end --}}
