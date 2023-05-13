@extends("admin.layout.list")
{{-- title --}}
@section("title")
<li class="breadcrumb-item active">
    Users
</li>
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
<div class="d-flex align-items-center" style="height: 50px ">
    <h4>Users</h4>
    <a href="{{route('user.create')}}" class="btn btn-outline-primary mx-5"> Create New Admin Account</a>
</div>
@endsection
@if(isset($users) && $users != [])
    @section("search_form")
    <div class="input-group" style="max-width: 400px">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <button type="button" class="btn btn-outline-primary">search</button>
    </div>
    @endsection
    @section("thead")
                {{-- <form class="form-inline" method="GET" action="{{ route('user.index') }}">
                    <input type="text" class="form-control" name="keyword" placeholder="search" value="{{ request()->keyword ?? '' }}">
                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                </form> --}}
        <tr>
            <th scope="col"><a href="{{ request()->fullUrlWithQuery(['keyword' => request()->keyword ?? '','sort-by' => 'id','sort-type' => $sortType])}}">ID</a></th>
            <th scope="col"><a href="?sort-by=name&sort-type={{ $sortType }}">Name</a></th>
            <th scope="col">Status</th>
            <th scope="col">Create</th>
            <th scope="col">Handle</th>
        </tr>
    @endsection
    @section("tbody")
            @forelse ($users as  $user)
                <tr>
                    <td>{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->status}}</td>
                    <td>{{$user->create_at}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('user.show',[$user->id])}}">Show</a>
                        <a class="btn btn-primary" href="{{route('user.destroy',[$user->id])}}">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">Requested not found in Database</td>
                </tr>
            @endforelse
            <div>
                {{ $users->links() }}
            </div>
    @endsection
@else
    @section("thead")
        <div>
            Requested not found in Database
        </div>
    @endsection
@endif
{{--end //test --}}