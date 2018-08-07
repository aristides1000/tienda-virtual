@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Lista de Categorías

                        <div class="btn-group pull-right" role="group">
                           
                                <a href="{{ route('categories.create') }}" class="btn  btn-secondary active">
                                    Crear
                                </a>
                            
                             
                          
                        </div>

                        <div class="row">
                            <div class="page-header pull-left">
                                {{ Form::open(['route'=> 'categories.index', 'method' => 'GET', 'class' => 'form-inline pull-right'])}}
                                <div class="form-group">
                                    {{ Form::text('category', null, ['class' => 'form-control', 'placeholder'=> 'Nombre']) }}
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-default">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Sub Categoría</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->category }}</td>
                                    <td>{{ $category->subcate }}</td>
                                   
                                        <td width="10px">
                                            <a href="{{ route('categories.show', $category->id) }}"
                                               class="btn btn-sm btn-default">Ver</a>
                                        </td>
                                  
                                        <td width="10px">
                                            <a href="{{ route('categories.edit', $category->id) }}"
                                               class="btn btn-sm btn-default">Editar</a>
                                        </td>
                                    
                                        <td width="10px">
                                            {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">
                                                Eliminar
                                            </button>
                                            {!! Form::close() !!}
                                        </td>

                                   
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $categories->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
