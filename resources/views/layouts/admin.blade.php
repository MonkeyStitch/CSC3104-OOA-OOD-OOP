<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ระบบประมวลผลรายงานการบรรทุกอ้อย') }}</title>

    <!-- Styles -->
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/admin2/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!--  sweet alert  -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-sweetalert/dist/sweetalert.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>

<div id="wrapper">


    <!-- Navigation -->
    @include('layouts._header_admin')

    <!-- Page Content -->
    <div id="page-wrapper">
        @yield('contents')
        {{--@include('test')--}}
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


<!-- jQuery -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('vendor/metisMenu/metisMenu.min.js') }}"></script>


<!-- Morris Charts JavaScript -->
<script src="{{ asset('vendor/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('vendor/morrisjs/morris.min.js') }}"></script>
<script src="{{ asset('data/morris-data.js') }}"></script>


<!-- DataTables JavaScript -->
<script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-responsive/dataTables.responsive.js') }}"></script>

<!-- Flot Charts JavaScript -->
<script src="{{ asset('vendor/flot/excanvas.min.js') }}"></script>
<script src="{{ asset('vendor/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('vendor/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('vendor/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('vendor/flot/jquery.flot.time.js') }}"></script>
<script src="{{ asset('vendor/flot-tooltip/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('data/flot-data.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('assets/admin2/js/sb-admin-2.js') }}"></script>


<!-- sweetalert.js -->
<script src="{{ asset('vendor/bootstrap-sweetalert/dist/sweetalert.js') }}"></script>


@if(Session::has('success'))
    <script>
        swal("Success!", "{{ Session::get('success') }}", "success");
    </script>
@endif
@if(Session::has('cancelled'))
    <script>
        swal("Cancelled!", "{{ Session::get('cancelled') }}", "error");
    </script>
@endif
@if(Session::has('error'))
    <script>
        swal("Error!", "{{ Session::get('error') }}", "error");
    </script>
@endif

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

<script>

    $('.btn-delete').click(function(e){
        e.preventDefault();
        var id = $(this).attr('data-id');
        swal({
                title: "คุณต้องการลบข้อมูลนี้หรือไม่",
                text: "No: ยกเลิก, Yes: ลบข้อมูล",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes",
                cancelButtonText: "No",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    $('#frmDel' + id).submit();
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
        });
    });
</script>
</body>
</html>
