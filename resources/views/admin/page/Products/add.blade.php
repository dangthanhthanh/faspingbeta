@extends("admin.layout.admin")
@section("content")
  @if (isset($pagination))
        <h2>
          Add {{$pagination}}
        </h2>
  @endif
<!-- General Form Elements -->
  <form class="row g-3" method="POST" action="{{route('admin.create')}}">
    @csrf
    <div class="col-md-12">
      <input type="text" class="form-control" name="name" placeholder="Your Name">
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-primary">Add Product</button>
    </div>
  </form>
<!-- End General Form Elements -->
@endsection




    {{-- <div class="col-md-6">
    <input type="email" class="form-control" placeholder="Email">
  </div>
  <div class="col-md-6">
    <input type="password" class="form-control" placeholder="Password">
  </div>
  <div class="col-12">
    <input type="text" class="form-control" placeholder="Address">
  </div>
  <div class="col-md-6">
    <input type="text" class="form-control" placeholder="City">
  </div>
  <div class="col-md-4">
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <input type="text" class="form-control" placeholder="Zip">
  </div> --}}
