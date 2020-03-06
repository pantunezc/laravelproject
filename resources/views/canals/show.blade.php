@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header"> Canal </div>
                <div class="card-body">
                    <p><b>Id: </b>{{$canal->id}}</p>
                    <p><b>Nom: </b>{{$canal->nom}}</p>
                    <a href="{{route('canals.index')}}" class="btn btn-primary"> Tornar <i class="fas fa-sign-out-alt"></i></a>
                </div>
            
            </div>
        </div>
    </div>
</div>
@endsection