@extends('layouts.ap', ['activePage' => 'user-management', 'titlePage' => __(' Lista de Usuarios ')])
@section('content')

<div class="right_col" role="main">
    <div class="">
   <div class="row">



        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                <h2>Gestiones Registrados en Sistema <small>Users</small></h2>

                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                <p class="text-muted font-13 m-b-30">
                  Años registrados en sistema, para mantener informacion constante en el sistema
                </p>
                <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>Numeracion</th>
                      <th>Año</th>
                      <th>Fecha Inicio</th>
                      <th>Fecha Final</th>
                      <th>Cursos</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($select as $sel)
                        <tr>
                            <td class="text-center">
                                {{ $loop->iteration }}
                              </td>
                              <td>
                                  {{ $sel->año }}
                              </td>
                              <td>
                                {{ $sel->fecha_ini }}
                            </td>
                            <td>
                                {{ $sel->fecha_fin }}
                            </td>
                            <td>
                                <a href="{{ route('cursosges',$id=$sel->id_gest) }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Ver Cursos </a>
                                </td>
                              <td>
                                <a href="{{ route('editargest',$id=$sel->id_gest) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                </td>
                        </tr>

                    @endforeach
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
            </div>
          </div>
      </div>


            </div>

            </div>
         </div>



@endsection
@push('links')

<link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <link href="{{ asset('gentelella') }}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->

    <link href="{{ asset('gentelella') }}/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('gentelella') }}/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('gentelella') }}/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('gentelella') }}/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('gentelella') }}/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

@endpush
@push('scripts')
<!-- NProgress -->
<!-- iCheck -->
<script src="{{ asset('gentelella') }}/vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="{{ asset('gentelella') }}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('gentelella') }}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="{{ asset('gentelella') }}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('gentelella') }}/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="{{ asset('gentelella') }}/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{ asset('gentelella') }}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('gentelella') }}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('gentelella') }}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="{{ asset('gentelella') }}/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="{{ asset('gentelella') }}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('gentelella') }}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="{{ asset('gentelella') }}/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="{{ asset('gentelella') }}/vendors/jszip/dist/jszip.min.js"></script>
<script src="{{ asset('gentelella') }}/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="{{ asset('gentelella') }}/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
@endpush
