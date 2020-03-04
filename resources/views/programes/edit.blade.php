@extends('layouts.app')
@section('info')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Canal </div>
                <div class="card-body">
                    {!!Form::model($programa,['route'=>['programes.update',$programa->id],
                    'method'=> 'PUT']) !!}

                        @include('programes.partials.form')

                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection