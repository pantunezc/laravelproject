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
                    @role('admin')<a href="{{ route('canals.create')}}" class="btn btn-success float-right">@endrole
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($canals as $canal)
                            <tr class="table-tr" data-url="{{ route('canals.show', $canal->id) }}">
                                <td>{{ $canal->id }}</td>
                                <td>{{ $canal->nom }}</td>
                                <td width="70px">
                                @role('admin')<a href="{{route('canals.edit',$canal->id)}}">
                                        <button class="btn btn-sm btn-primary ">Editar<i
                                                class="ml-2 fas fa-pen"></i></button>
                                    </a>@endrole
                                </td>
                                @role('admin')<td width="90px">
                                    {!!Form::open(['route' =>['canals.destroy', $canal->id],
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
                        {{ $canals->render() }}
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