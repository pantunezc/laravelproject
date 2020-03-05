<div class="form-row">
    <div class="col-lg-4">
        {{ Form::label('nom','Nom Programa:') }}
        {{Form::text('nom',null,['class'=>'form-control'])}}
    </div>
    <div class="col-lg-3">
        {{Form::label('canal_id','Canal:')}}
        {{Form::select('canal_id',$canals, null,['placeholder'=>'Seleccionar un Canal','class'=>'form-control'])}}
        <span class="mdi mdi-information">Canal on s'emitira el programa</span>
    </div>

</div>

<div class="form-row">
    <div class="col-lg-4">
        {{ Form::label('descripcio','Descripció Programa:') }}
        {{Form::text('descripcio',null,['class'=>'form-control'])}}
    </div>
    <div class="col-lg-3">
        {{Form::label('tipus','Tipus Programa:')}}
        {{Form::select('tipus',['Comedia' => 'Comedia', 'Entreteniment' => 'Entreteniment', 'Documental'=> 'Documental', 'Esports'=> 'Esports', 'Informatius'=> 'Informatius'],
         null,['placeholder'=>'Seleccionar un Tipus','class'=>'form-control'])}}


    </div>
    <div class="col-lg-3">
        {{Form::label('classificacio','Classificació Programa:')}}
        {{Form::text('classificacio',null,['class'=>'form-control'])}}
    </div>
</div>

<div class="form-row pt-4">
    {{ Form::submit('Guardar',['class'=>'btn btn-primary']) }}
    <a href="{{ route('programes.index')}}" class="btn btn-danger">Cancelar</a>
</div>
