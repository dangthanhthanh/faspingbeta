@extends("admin.layout.admin")

@section("content")
<div class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
              @yield("data_title")
            </h5>
            <!-- Table with stripped rows -->
            <table class="table">
              @yield("messeger")
              <thead>
                @yield("thead")
              </thead>
              <tbody>
                @yield("tbody")
              </tbody>
            </table>
            <!-- End Table with stripped rows -->
          </div>
        </div>
      </div>
    </div>
</div>
@endsection