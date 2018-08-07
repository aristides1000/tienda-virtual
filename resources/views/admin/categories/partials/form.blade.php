@section('css')

  <style>
    input:valid {
      border-color: green;
      /*border:green;*/
    }
    input:invalid{
      border-color:red;
    }
  </style>

@endsection

<div class="form-group col-6">
  {{ Form::label('category', 'Nombre de la categoría *') }}
  {{ Form::select('category', array('Pintura Domestica'=>'Pintura Domestica','Pintura Industrial' => 'Pintura Industrial', 'Pegamento' => 'Pegamento','Herramientas'=>'Herramientas', 'Materiales'=>'Materiales'), ['class'=>'multiple' ]) }}
</div>

<div class="form-group col-6">
  {{ Form::label('subcate', 'Sub Categoría *') }}
  {{ Form::text('subcate', null, ['class' => 'form-control', 'id' => 'subcate','required',
   'pattern'=>'[a-zA-Z]{2,40}', 'title'=>"Solo letras. Mas de dos letras" ]) }}
</div>

<div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

