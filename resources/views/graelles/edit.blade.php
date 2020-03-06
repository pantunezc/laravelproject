@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                @if (session('info'))
                <div class="pt-4">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('info') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                @endif
                <div class="card-header"> Graella </div>
                <div class="card-body">
                    {!!Form::model($graella,['route'=>['graelles.update',$graella->id],
                    'method'=> 'PUT']) !!}

                    @include('graelles.partials.form')

                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection