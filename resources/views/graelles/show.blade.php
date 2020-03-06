@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header"> Graella </div>
                <div class="card-body">
                    @foreach($graella->programas as $programa )
                    <p><b>Id: </b>{{$graella->id}}</p>
                    <p><b>Canal: </b>
                                        {{ $programa->canal->nom }}
                                        
                    </p>
                    <a href="{{route('programes.show',$programa->id)}}"><p><b>Programa: </b>
                        {{ $programa->nom }}
                    </p></a>
                    <p><b>Dia: </b>{{$graella->dia}}</p>
                    <p><b>Hora: </b>{{$graella->hora}}</p>
                    @endforeach
                    <a href="{{route('graelles.index')}}" class="btn btn-primary"> Tornar <i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection