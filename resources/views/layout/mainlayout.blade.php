<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ URL::asset('feather/feather.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ URL::asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('js/select.dataTables.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ URL::asset('css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ URL::asset('images/favicon.png') }}" />
</head>
<body>
    <div class="container-scroller">
        @include('partials.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('partials.settings-panel')
            @include('partials.sidebar')
            @yield('content')
           
        </div>
        
    </div>
    @include('partials.footer')
    <script src="{{ URL::asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ URL::asset('vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('js/dataTables.select.min.js') }}"></script>
  
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ URL::asset('js/off-canvas.js') }}"></script>
    <script src="{{ URL::asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ URL::asset('js/template.js') }}"></script>
    <script src="{{ URL::asset('js/settings.js') }}"></script>
    <script src="{{ URL::asset('js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ URL::asset('js/dashboard.js') }}"></script>
    <script src="{{ URL::asset('js/Chart.roundedBarCharts.js') }}"></script>
</body>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ URL::to('/all-pages') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'title', name: 'title'},
            {data: 'description', name: 'description'},
            {data: 'meta', name: 'meta'},
            {data: 'slug', name: 'slug'},
            {data: 'created_at', name: 'created_at'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
</script>
</html>