@extends('layouts.ap', ['activePage' => 'user-management', 'titlePage' => __('User Management')])

@section('content')

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Pagina De Inicio Del USUARIO {{ session()->get('nombre')->first() }} </h3>
        </div>


      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h3>Bienvenido Al Sistema De la Unicdad Educativa Daniel Salamanca</h3>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>

                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                La unidad Educativa te da la bienvenida, te agradecemos su confianza, ayudenos a cambiar el mundo.
                <hr>
                El conocimiento es la clave del cambio
                <hr>
                Una region que no conoce su historia tiene la mala suerte de volverlo a cometer
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 @endsection
