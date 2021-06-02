<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin Panel</title>
  <link rel="stylesheet" href="{{ asset('adminlt') }}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('adminlt') }}/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">


  @yield('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">

    <!-- Content Wrapper. Contains page content -->
    <div class="wrapper">
        @include('secciones.navbar')
        @include('secciones.navbar-lateral')
        @yield('content')
        @include('secciones.footer')
    </div>



    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
<!-- DataTables -->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script type="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script type="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#categorias").DataTable();
        $("#clientes").DataTable({
          //"ajax": '../ajax/data/arrays.txt',
          "responsive": true,
          "autoWidth": false,
          "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Lo que estas buscando no se encuentra en la base de datos - reintente",
            "info": "Mostrando registros _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros similares a su busqueda",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate": {
              'next': "Siguiente",
              'previous': "Anterior"
            }
        }
        });

      });
    </script>

    <script src="{{asset(
        'adminlt/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('adminlt') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -lt->
<script src="{{ asset('adminlt') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -lt->
<script src="{{ asset('adminlt') }}/js/adminlte.min.js"></script>
<script src="{{ asset('adminlt') }}/js/bs-custom-file-input.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@yield('script')
<script>
  @if(Session::has('success'))
  toastr.success("{{ Session::get('success') }}");
  @endif
  $(document).ready(function () {
    bsCustomFileInput.init()
  })
</script>
</body>
</html>
