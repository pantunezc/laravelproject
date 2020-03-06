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
                    <h3>Programes
                    @role('admin')<a href="{{ route('programes.create')}}" class="btn btn-success float-right">@endrole
                            Crear
                        </a>
                    </h3>


                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Canal</td>
                                <th>Descripio</th>
                                <th>Classificacio</th>
                                <th>Tipus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($programes as $programa)
                            <tr class="table-tr" data-url="{{ route('programes.show', $programa->id) }}">
                                <td>{{ $programa->id }}</td>
                                <td>{{ $programa->nom }}</td>
                                <td>{{$programa->canal->nom}}</td>
                                <td>{{ $programa->descripcio }}</td>
                                <td>{{ $programa->classificacio }}</td>
                                <td>{{ $programa->tipus }}</td>
                                <td width="70px">
                                @role('admin')<a href="{{route('programes.edit',$programa->id)}}">
                                        <button class="btn btn-sm btn-primary ">Editar<i
                                                class="ml-2 fas fa-pen"></i></button>
                                    </a>@endrole
                                </td>
                                @role('admin')<td width="90px">
                                    {!!Form::open(['route' =>['programes.destroy', $programa->id],
                                    'method'=> 'DELETE'])!!}
                                    <button class="btn btn-sm btn-danger ">Eliminar<i
                                            class="ml-2 fas fa-trash"></i></button>
                                    {!!Form::close()!!}
                                </td>@endrole
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    <div class="float-right">
                        {{ $programes->render() }}
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