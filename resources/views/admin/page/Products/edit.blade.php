@extends("admin.layout.admin")
@section("content")
<!-- General Form Elements -->
<form>
  <div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control">
    </div>
  </div>
  <label for="inputNumber" class="col-sm-2 col-form-label"><strong>Price to</strong></label>
  <div class="row mb-3">
    <label for="inputNumber" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="number" class="form-control">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputNumber" class="col-sm-2 col-form-label">Deal Price</label>
    <div class="col-sm-10">
      <input type="number" class="form-control">
    </div>
  </div>
  <label for="inputDate" class="col-sm-2 col-form-label"><strong>Deal to</strong></label>
  <div class="row mb-3">
    <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
    <div class="col-sm-10">
      <input type="time" class="form-control">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
    <div class="col-sm-10">
      <input class="form-control" type="file" id="formFile">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword" class="col-sm-2 col-form-label">Decription</label>
    <div class="col-sm-10">
      <textarea class="form-control" style="height: 100px"></textarea>
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Add</label>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>

</form><!-- End General Form Elements -->
@endsection