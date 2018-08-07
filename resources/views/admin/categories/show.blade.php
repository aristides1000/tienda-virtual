@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ver Categorías
                    @can ('categories.index')
                      <a href="{{ route('categories.index') }}" class="pull-right btn btn-sm btn-primary">
                          Inicio
                      </a>
                    @endcan
                </div>

                <div class="panel-body">
                    <p><strong>ID</strong> {{ $category->id }}</p>
                    <p><strong>Nombre</strong> {{ $category->category }}</p>
                    <p><strong>Subcategorya</strong> {{ $category->subcate }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
