


<div class="form-row">
   <div class="col-lg-12">
          {{Form::label('nom','Nom Canal')}}
          {{Form::text('nom',null,['class'=>'form-control'])}}
   </div>

</div>

<div class="form-row pt-4">
    {{ Form::submit('Guardar',['class'=>'btn btn-primary']) }}
    <a href="{{ route('canals.index')}}" class="btn btn-danger">Cancelar</a>
</div>