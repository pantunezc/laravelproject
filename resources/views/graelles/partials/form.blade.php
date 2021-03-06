<div class="form-row">
    <div class="col-lg-6">
        {{Form::label('programa_id','Programa:')}}
        {{Form::select('programas',$programas, null,['placeholder'=>'Seleccionar un Programa','class'=>'form-control'])}}
    </div>
</div>

<div class="form-row">
    <div class="col-lg-4">
        {{ Form::label('dia','Dia:') }}
        {{Form::date('dia',null,['class'=>'form-control'])}}
    </div>
    <div class="col-lg-4">
        {{Form::label('hora','Hora:')}}
        {{Form::time('hora',null,['class'=>'form-control'])}}
    </div>
</div>

<div class="form-row pt-4">
    {{ Form::submit('Guardar',['class'=>'btn btn-primary']) }}
    <a href="{{ route('graelles.index')}}" class="btn btn-danger">Cancelar</a>
</div>