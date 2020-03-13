
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">                    
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Canal</th>
                                <th>Programa</th>
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

                                
                            </tr>
                                    
                            @endforeach
                        </tbody>
                    </table>
                    
                    


            </div>
        </div>
    </div>
</div>

