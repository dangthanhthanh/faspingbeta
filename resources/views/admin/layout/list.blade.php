@extends("admin.layout.admin")
@section("cssstyle")
<style>
        .toggle-label {
        cursor: pointer;
        background: transparent;
        }

        .toggle-checkbox {
        display: none;
        }

        .toggle-slider {
        width: 50px;
        height: 25px;
        background-color: gray;
        position: relative;
        border-radius: 25px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        }

        .toggle-slider-before {
        content: "";
        position: absolute;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: white;
        top: 2.5px;
        left: 2.5px;
        transition: transform 0.3s ease;
        }
    </style>
@endsection
@section("content")
<div class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body" style="overflow-x: scroll;
          overscroll-behavior-x: none;">
            <h5 class="card-title">
              @yield("data_title")
            </h5>
            <!-- Table with stripped rows -->
            @yield("messeger")
            <div class="my-2">
              @yield("search_form")
            </div>
            <table class="table table-bordered table-striped table-hover">
              <thead>
                @yield("thead")
              </thead>
              <tbody>
                @yield("tbody")
              </tbody>
            </table>
            <!-- End Table with stripped rows -->
          </div>
          <div class="mx-5">
            @yield("pagination")
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
@section("javascript")
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            function checkAllcheckbox(){
                $('.toggle-checkbox').each(function(index) {
                    let id=$(this).data("id");
                    if ($(this).is(':checked')) {
                        $('.toggle-slider.itemt_'+id).css('backgroundColor', 'green');
                        $(".toggle-slider-before.itemt_"+id).css('transform', 'translateX(25px)');;
                    } else {
                        $('.toggle-slider.itemt_'+id).css('backgroundColor', 'gray');
                        $(".toggle-slider-before.itemt_"+id).css('transform', 'translateX(0)');;
                    }
                });
            };
            checkAllcheckbox()
            $('.toggle-checkbox').change(function() {
                alert('chac chua ku');
                let status = $(this).is(':checked') ? 0 : 1;
                let url = $(this).data("url")+"/"+status;
                $.ajax({
                    type:"GET",
                    url: url,
                    success: function(res) {
                        alert('xong nha ku');
                        checkAllcheckbox();
                        console.log(res);
                    }
                });
            });

            function array_checkbox() {
                var array_itemt = Array.from($(".checkbox-itemt:checked"), function (checkbox) {
                return $(checkbox).data("id");
                });
                console.log(array_itemt);
            }

            $(".checkbox-all").click(function () {
                var isChecked = $(this).is(":checked");
                $(".checkbox-itemt").prop("checked", isChecked).change();
                array_checkbox();
            });

            $(".checkbox-itemt").click(function () {
                array_checkbox();
            }).change(function () {
                if (!$(this).is(":checked")) {
                    $(".checkbox-all").prop("checked", false);
                }
            });
        });
    </script>
@endsection