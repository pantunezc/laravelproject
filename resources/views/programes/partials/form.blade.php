

<div class="form-row">
    <div class="col-lg-4">
        {{ Form::label('nom','Nom Programa:') }}
        {{Form::text('nom',null,['class'=>'form-control'])}}
    </div>
    <div class="col-lg-3">
        {{Form::label('canal','Canal:')}}
        {{Form::select('empresa_id',$canals, null, ['placeholder'=>'Seleccionar una Canal',"class"=>'form-control'])}}
        <span class="mdi mdi-information">Canal on s'emitira el programa</span>
    </div>

</div>

<div class="form-row pt-4">
    {{ Form::submit('Guardar',['class'=>'btn btn-primary']) }}
    <a href="{{ route('programes.index')}}" class="btn btn-danger">Cancelar</a>
</div>

