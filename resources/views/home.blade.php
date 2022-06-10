@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="card">
					<div class="card-body d-flex justify-content-between align-items-center">
						Requisiciones
						<a href="/requisicion" class="btn btn-primary btn-sm">Ver más</a>
					</div>
				</div>
			</div>
		</div>
</div>

<div style="text-align: right; width:1250px">
    <h4>Listado de Requisiciones</h4>
</div>
<br>

<center>
<div style="text-align: center; width:1250px;">
<table border="1" width="100%" align="center" cellpadding="10px" class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre del puesto</th>
            <th scope="col">Folio</th>
            <th scope="col">Motivo de cobertura</th>
            <th scope="col">Área</th>
            <th scope="col">Puesto</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($re as $r)
        <tr>
            <td>{{$r->id}}</td>
            <td>{{$r->nombreVacante}}</td>
            <td>{{$r->folio}}</td>
            <td>{{$r->motivo}}</td>
            @foreach($area as $a)
            @if($r->idArea == $a->id)
            <td>{{$a->nombre}}</td>
            @endif
            @endforeach
            @foreach($puesto as $p)
            @if($r->idPuesto == $p->id)
            <td>{{$p->nombre}}</td>
            @endif
            @endforeach

            <td>
                <a href="/aspirante/{{$r->id}}" class="btn btn-warning">Ver Aspirantes</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</center>
@endsection
