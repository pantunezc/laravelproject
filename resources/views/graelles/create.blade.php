@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header card-border"><a href="{{route('graelles.index')}}"
                        class="btn btn-light btm-sm p-1 m-0"><i class="mdi mdi-backspace-outline  p-1"></i></a>
                    <span class="h4 font-weight-bold text-cmsbase  ">Crear Graella</span>
                </div>
                <div class="card-body">
                    {{ Form::open(['route' => 'graelles.store']) }}

                    @include('graelles.partials.form')

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection