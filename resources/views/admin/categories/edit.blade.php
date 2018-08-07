@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

      @if (count($errors)>0)
        <div class="col-md-6 col-md-offset-3">
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <ul>
              @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      @endif

        <div class="col-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Categoría
                    
                      <a href="{{ route('categories.index') }}" class="pull-right btn btn-sm btn-primary">
                          Inicio
                      </a>
                </div>

                <div class="panel-body">
                    {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}

                        @include('admin.categories.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
