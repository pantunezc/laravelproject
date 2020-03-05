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

                <div class="card-header">
                    <h3>Canals
                        <a href="{{ route('graelles.create')}}" class="btn btn-success float-right">
                            Crear
                        </a>
                    </h3>


                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Canal</th>
                                <th>Programa</td>
                                <th>Dia</th>
                                <th>Hora</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($graelles as $graella)
                            <tr class="table-tr" data-url="{{ route('graelles.show', $graella->id) }}">
                                <td>{{ $graella->id }}</td>
                                <td>{{ $graella->programa_id}}</td>
                                <td></td>
                                <td>{{ $graella->dia }}</td>
                                <td>{{ $graella->hora }}</td>

                                <td width="70px">
                                    <a href="{{route('graelles.edit',$graella->id)}}">
                                        <button class="btn btn-sm btn-primary ">Editar<i
                                                class="ml-2 fas fa-pen"></i></button>
                                    </a>
                                </td>
                                <td width="90px">
                                    {!!Form::open(['route' =>['graelles.destroy', $graella->id],
                                    'method'=> 'DELETE'])!!}
                                    <button class="btn btn-sm btn-danger ">Eliminar<i
                                            class="ml-2 fas fa-trash"></i></button>
                                    {!!Form::close()!!}
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    <div class="float-right">
                        {{ $graelles->render() }}
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
    $(function() {
  $('table').on("click", "tr.table-tr", function() {
    window.location = $(this).data("url");
  });
});
</script>