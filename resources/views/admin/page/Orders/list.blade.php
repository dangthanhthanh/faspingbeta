@extends("admin.layout.list")
@section("page_title","Danh sách Đơn hàng")

{{-- title --}}
@section("title")
<li class="breadcrumb-item"><a href="{{route("order.index")}}">Orders</a></li>
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
    <form  method="GET" action="{{ route('order.index') }}">
        <button type="submit" class="btn btn-outline-primary form-control rounded">All Order</button>
    </form>
</div>
@endsection
@if(isset($orders) && $orders != [])
    @section("search_form")
        <div class="input-group" style="max-width: 600px">
            <form  method="GET" action="{{ route('order.index') }}" class="d-inline-flex">
                <select style="max-width: 100px" class="form-select form-control rounded mx-1" aria-label="Default select example" name="search_with">
                    <option {{ request()->search_with == "user" ? "selected" :""}} value="user">User</option>
                    <option {{ request()->search_with == "id" ? "selected" :""}} value="id">Id</option>
                    <option {{ request()->search_with == "status" ? "selected" :""}} value="status">Status</option>
                    <option {{ request()->search_with == "address.district.city" ? "selected" :""}} value="address.district.city">City</option>
                    <option {{ request()->search_with == "address.district" ? "selected" :""}} value="address.district">District</option>
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
            <th scope="col">User</th>
            <th scope="col">Address</th>
            <th scope="col">Price</th>
            <th scope="col">
                <a  
                href="{{ request()->fullUrlWithQuery(['keyword' => request()->keyword ?? '','sort-by' => 'status','sort-type' => $sortType])}}">
                    Status
                </a>
            </th>
            <th scope="col">Decription</th>
            <th scope="col">Create</th>
            <th scope="col">Update</th>
            <th scope="col">Handle</th>
        </tr>
    @endsection
    @section("tbody")
            @forelse ($orders as  $order)
                <tr>
                    <td>
                        <input type="checkbox" 
                        class="checkbox-itemt itemt_{{$order->id}}"
                        data-id="{{$order->id}}" >
                    </td>
                    <td>{{$order->id}}</td>
                    <td style="min-width: 200px;">
                        {{$order->user->user_name}}
                    </td>
                    <td style="min-width: 400px;">
                        {{$order->address->address}}/
                        {{$order->address->district->name}}/
                        {{$order->address->district->city->name}}
                    </td>
                    <td>
                        @php
                            $total_price = 0;
                            foreach ($order->orders as $order_itemt) {
                                $total_price += $order_itemt->price * $order_itemt->quantity;
                            }
                        @endphp  
                        {{number_format($total_price,2)}}
                    </td>
                    @php
                        $background="#808080";
                            switch ($order->status  ) {
                                case 'dang luu kho':$background="#80ff00";break;
                                case 'dang cho xac nhan':$background="#40ff00";break;
                                case 'dang giao hang':$background="#00ff40";break;
                                case 'da giao hang':$background="#00ff80";break;
                                case 'da nhan hang':$background="#00ffbf";break;
                                case 'da thanh toan':$background="#00ffff";break;
                                case 'cho huy don':$background="#ff8000";break;
                                case 'da huy don':$background="#ff4000";break;
                                case 'cho tra hang':$background="#bf00ff";break;
                                case 'da tra hang':$background="#ff00ff";break;
                            }
                    @endphp
                    <td style="min-width: 170px;background:{{$background}};">
                        {{$order->status}}
                    </td>
                    <td style="min-width: 200px;background:{{$order->decription ? "" : "#f3e1e1"}}">{{$order->decription}}</td>
                    <td style="min-width: 200px;">{{$order->created_at}}</td>
                    <td style="min-width: 200px;">{{$order->updated_at}}</td>
                    <td style="min-width: 200px;">
                        <a class="btn btn-primary" href="{{route('order.show',[$order->id])}}">Show</a>
                        <a class="btn btn-primary" href="{{route('order.destroy',[$order->id])}}">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">Requested not found in Database</td>
                </tr>
            @endforelse
    @endsection
    @section("pagination")
            {{ $orders->links() }}
    @endsection
@else
    @section("thead")
        <div>
            Requested not found in Database
        </div>
    @endsection
@endif
{{--end --}}
