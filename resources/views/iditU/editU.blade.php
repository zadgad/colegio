@extends('layouts.ap', ['activePage' => 'user-management', 'titlePage' => __(' Lista de Usuarios ')])
@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                <h2>Editar Informacion De Usuario</h2>
<hr>
                <span>Los cambios seran guardados en Sistema</span>

                <div class="card-body">
                    <div class="col-md-9 text-right">
                        <a href="{{ route('list_us') }}" class="btn btn-sm btn-primary">{{ __('Volver Atras') }}</a>
                    </div>
                  </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-12">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="profile-pic mb-20">
                            @if(empty($users->foto))
                            <p class="centered"><a {{$id=session()->get('nombre')->first()}} href="{{route('infoRut',$id)}}"><img src="{{Storage::url('image.gif')}}" class="rounded-circle img-150 align-top mr-15" width="200"></a></p>
                            @else
                             <p class="centered"><a {{$id=session()->get('nombre')->first()}} href="{{route('infoRut',$id)}}"><img {{$ima=session()->get('image')}} src="{{Storage::url($users->foto)}}" class="rounded-circle img-150 align-top mr-15" width="200"></a></p>
                            @endif
                             <h4 class="mt-20 mb-0">{{$users->nombre}} {{$users->apepa}} {{$users->apema}}</h4>
                            <a href="#" >{{$users->ro}}</a>
                        </div>
                        </div>
                    <div class='col-md-12'>
                    <form method="post" action="{{ route('editarUs', $users->id_usr) }}" autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('put')

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Nombre') }}</label>
                           <div class="col-sm-7">
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                              <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Nombre') }}" value="{{ old('name', $users->nombre) }}" required="true" aria-required="true"/>
                                @if ($errors->has('name'))
                                  <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                @endif
                              </div>
                            </div>
                         </div>
                         <div class="row">
                              <label class="col-sm-2 col-form-label">{{ __('Apellido P.') }}</label>
                              <div class="col-sm-7">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                  <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="apelliP" id="input-name" type="text" placeholder="{{ __('Apellido Paterno') }}" value="{{ old('apelliP', $users->apepa) }}" required="true" aria-required="true"/>
                                  @if ($errors->has('name'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                  @endif
                                </div>
                              </div>
                            </div>
                            <div class="row">
                                  <label class="col-sm-2 col-form-label">{{ __('Apellido M.') }}</label>
                                  <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="apelliM" id="input-name" type="text" placeholder="{{ __('Apellido Materno') }}" value="{{ old('apelliM', $users->apema) }}" required="true" aria-required="true"/>
                                      @if ($errors->has('name'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                      <label class="col-sm-2 col-form-label">{{ __('Login') }}</label>
                                      <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                          <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Login" id="input-name" type="text" placeholder="{{ __('Login') }}" value="{{ old('Login', $users->login) }}" required="true" aria-required="true"/>
                                          @if ($errors->has('name'))
                                            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                          @endif
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                          <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                          <div class="col-sm-7">
                                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                              <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', $users->email) }}" required />
                                              @if ($errors->has('email'))
                                                <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                                              @endif
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <label for="exampleInputUsername2" class="col-sm-2 col-form-label">{{ __('Num. Telefonico') }}</label>
                                            <div class="col-sm-7">
                                              <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="telefono" id="input-name" type="text" placeholder="{{ __('Numero Telefonico o Celular') }}" value="{{ old('telefono',$users->telefono) }}" required="true" minlength="6" maxlength="9" aria-required="true"/>
                                                @if ($errors->has('name'))
                                                  <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                                @endif
                                              </div>
                                            </div>
                                          </div>
                                        <div class="row">
                                              <label class="col-sm-2 col-form-label">{{ __('Rol de Usuario') }}</label>
                                              <div class="col-sm-7">
                                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                          {{--                         <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required="true" aria-required="true"/>
                           --}}                   <select class="form-control" name="rol" id="input-name" class="form-group " required="true" aria-required="true">
                                                      @foreach($rols as $rol)
                                                      <option value="{{$rol->id_rol}}" > {{$rol->ro}} </option>
                                                      @endforeach
                                                  </select>
                                                  @if ($errors->has('name'))
                                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                                  @endif
                                                </div>
                                              </div>
                                            </div>
                                            {{-- <div class="row">
                                                  <label class="col-sm-2 col-form-label" for="input-password">{{ __(' Nueva Contraseña') }}</label>
                                                  <div class="col-sm-7">
                                                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" input type="password" name="password" id="input-password" placeholder="{{ __('Contraseña') }}" />
                                                      @if ($errors->has('password'))
                                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('password') }}</span>
                                                      @endif
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                      <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirmar Contraseña') }}</label>
                                                      <div class="col-sm-7">
                                                        <div class="form-group">
                                                          <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirmar Contraseña') }}" />
                                                        </div>
                                                      </div>
                                                    </div> --}}

                      <div class="card-footer ml-auto mr-auto">
                          <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                      </div>
                    </form>
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





