@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header"> Canal </div>
                <div class="card-body">
                    <p><b>Id: </b>{{$programa->id}}</p>
                    <p><b>Nom: </b>{{$programa->nom}}</p>
                    <p><b>Descripció: </b>{{$programa->descripcio}}</p>
                    <p><b>Tipus: </b>{{$programa->tipus}}</p>
                    <p><b>Classificació: </b>{{$programa->classificacio}}</p>
                    <p><b>Canal: </b>{{$programa->canal->nom}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection