<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Sistema Daniel Salamanca</span></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_pic">
            @if(!empty(session()->get('image')->first()))
            <img {{$ima=session()->get('image')}} src="{{Storage::url($ima[0])}}" class="img-circle profile_img"/>
            @else
            <img src="{{Storage::url('image.gif')}}" class="img-circle profile_img" />
            @endif

        </div>
        <div class="profile_info">
          <span>Bien Venido</span>
          <h2>{{$id=session()->get('nombre')->first()}}</h2>
        </div>
        <div class="clearfix"></div>
      </div>
      <!-- /menu profile quick info -->

      <br />

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>{{session()->get('rol')->first()}}</h3>
          <ul class="nav side-menu">
                @if(session()->get('user_rol')->first()<=3)
                <li><a href="{{route('inicio',$id=session()->get('nombre')->first())}}"><i class="fa fa-laptop"></i>INICIO <span class="label label-success pull-right"></span></a></li>
                @else
                 @if(session()->get('user_rol')->first()==2)
                 <a href=""><i class="ik ik-home"></i><span>Inicio</span></a>
                 @else
                 @if(session()->get('user_rol')->first()>3)
                 <a href="{{ route('inius',$id=session()->get('nombre')->first()) }}"><i class="ik ik-home"></i><span>Inicio</span></a>
                 @endif
                @endif
                @endif

            <li><a id="depst0" style="display: none"><i class="fa fa-edit"></i> LISTA DE USUARIOS <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a id="depst1" style="display: none" href="{{route('list_ad')}}"    >Lista Administradores</a></li>
                <li><a id="depst2" style="display: none" href="{{route('list_em')}}"    >Lista Secretarias</a></li>
                <li><a id="depst3" style="display: none" href="{{route('list')}}"       >Lista Tutores</a></li>
                <li><a id="depst4" style="display: none" href="{{route('listEstu')}}"     >Lista Estudiantes</a></li>
              </ul>
            </li>
            <li><a id="depst5" style="display: none" ><i  class="fa fa-table"></i> Gestion  <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a id="depst6" style="display: none" href="{{ route('addgestion') }}">Agregar Gestion</a></li>
                  <li><a id="depst7" style="display: none" href="{{ route('tabgestion') }}">Gestiones Registrados</a></li>
                </ul>
              </li>


            <li><a id="depst8" style="display: none"><i class="fa fa-bar-chart-o"></i> Formularios <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a id="depst9" style="display: none" href="{{ route('formulario') }}">Agregar Usuario</a></li>
                <li><a id="depst10" style="display: none" href="{{ route('curinicial') }}">Formulario Inicial</a></li>
                <li><a id="depst11" style="display: none" href="{{ route('curinifamiliar') }}">Formulario InicialF</a></li>
                <li><a id="depst12" style="display: none" href="{{ route('estudnuevo') }}">Formulario Nuevo</a></li>
                <li><a id="depst13" style="display: none" href="{{ route('estudfamilia') }}">Formulario Familiar</a></li>
                <li><a id="depst14" style="display: none" href="{{ route('formulatutor') }}">Formulario Tutor</a></li>

            </ul>
            </li>
            <li><a id="depst15" style="display: none" href="{{route('miscursos')}}"><i class="fa fa-inbox"></i>Cursos <span class="label label-success pull-right"></span></a></li>
            <li><a id="depst16" style="display: none" href="{{route('misestude')}}"><i class="fa fa-android"></i>Estudiantes <span class="label label-success pull-right"></span></a></li>


          </ul>
        </div>

      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->

      <!-- /menu footer buttons -->
    </div>
  </div>
