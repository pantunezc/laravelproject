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
                    <h3>Graella
                        @role('admin')<a href="{{ route('graelles.create')}}" class="btn btn-success float-right">@endrole
                            Crear
                        </a>
                    </h3>


                </div>

                <div class="card-body">
                    <nav class="navbar navbar-light float-right">
                        <form class="form-inline">
                          <input name="dia" class="form-control mr-sm-2" type="search" placeholder="Buscar Per dia" aria-label="Search">
                          <input name="hora" class="form-control mr-sm-2" type="search" placeholder="Buscar Per hora" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                      </nav>
                    
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
                                <td>@foreach($graella->programas as $programa )
                                    {{ $programa->canal->nom }}
                                @endforeach</td>
                                <td>@foreach($graella->programas as $programa )
                                        {{ $programa->nom }}
                                    @endforeach</td>
                                <td>{{ $graella->dia }}</td>
                                <td>{{ $graella->hora }}</td>

                                <td width="70px">
                                    @role('admin')<a href="{{route('graelles.edit',$graella->id)}}">
                                        <button class="btn btn-sm btn-primary ">Editar<i
                                                class="ml-2 fas fa-pen"></i></button>
                                    </a>@endrole
                                </td>
                                @role('admin')<td width="90px">
                                    {!!Form::open(['route' =>['graelles.destroy', $graella->id],
                                    'method'=> 'DELETE'])!!}
                                    <button class="btn btn-sm btn-danger ">Eliminar<i
                                            class="ml-2 fas fa-trash"></i></button>
                                    {!!Form::close()!!}
                                </td>@endrole
                            </tr>
                                    
                            @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-success" href="{{ route('graella.pdf') }}">Exportar a PDF<i class="ml-2 mdi mdi-file-pdf"></i></a>
                    <a class="btn btn-outline-dark" href="{{ route('graella.excel') }}">Exportar a Excel<i class="ml-2 far fa-file-excel"></i></a>
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
