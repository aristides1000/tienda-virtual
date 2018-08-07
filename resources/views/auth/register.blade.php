@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="type_document_emp" class="col-4 col-form-label text-right">{{ __('Documento') }}</label>

                            <div >
                             
                                {{ Form::select ('type_document_emp', array('', 'V','E','G','J'),['class'=>'multiple' ]) }}
                                    
                                      @if ($errors->has('type_document_emp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('type_document_emp') }}</strong>
                                    </span>
                                @endif
                               </div>
                               
                                 <input id="nro_document_emp" type="text" class="form-control col-md-3 {{ $errors->has('nro_document_emp') ? ' is-invalid' : '' }}" name="nro_document_emp" value="{{ old('nro_document_emp') }}" required autofocus>

                                @if ($errors->has('nro_document_emp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nro_document_emp') }}</strong>
                                    </span>
                                @endif
                           
                                 
                            </div>
                        


                        <div class="form-group row">
                            <label for="name_emp" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name_emp" type="text" class="form-control{{ $errors->has('name_emp') ? ' is-invalid' : '' }}" name="name_emp" value="{{ old('name_emp') }}" required autofocus>

                                @if ($errors->has('name_emp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name_emp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                           <div class="form-group row">
                            <label for="tlf_local_emp" class="col-md-4 col-form-label text-md-right">{{ __('Telefono Local') }}</label>

                            <div class="col-md-6">
                                <input id="tlf_local_emp" type="text" class="form-control{{ $errors->has('tlf_local_emp') ? ' is-invalid' : '' }}" name="tlf_local_emp" value="{{ old('tlf_local_emp') }}" required>

                                @if ($errors->has('tlf_local_emp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tlf_local_emp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tlf_movil_emp" class="col-md-4 col-form-label text-md-right">{{ __('Telefono Movil') }}</label>

                            <div class="col-md-6">
                                <input id="tlf_movil_emp" type="text" class="form-control{{ $errors->has('tlf_movil_emp') ? ' is-invalid' : '' }}" name="tlf_movil_emp" value="{{ old('tlf_movil_emp') }}" required>

                                @if ($errors->has('tlf_movil_emp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tlf_movil_emp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row ">
                            {{ Form::label('fecha_contrato_ini', 'Fecha contrato inicial', ['class'=> 'col-md-4 col-form-label text-md-right']) }}

                            <div class="col-md-6">
                                   {{ Form::date('fecha_contrato_ini', null, ['class' => 'form-control', 'id' => 'datepicker']) }}

                                @if ($errors->has('tlf_movil_emp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tlf_movil_emp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                       <div class="form-group row">
                            {{ Form::label('fecha_contrato_final', 'Fecha contrato Final',  ['class'=> 'col-md-4 col-form-label text-md-right']) }}
                              <div class="col-md-6">
                            {{ Form::date('fecha_contrato_final', null, ['class' => 'form-control', 'id' => 'datepicker']) }}
                        </div>
                           </div>
                           
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
