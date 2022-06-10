@extends('layouts.app')

@section('content')
<div style="text-align: right;width:220px">
@foreach($r as $d)
    <a href="/trabajos/{{$d->idEmpresa}}" class="btn btn-primary btn-sm">Regresar</a>
@endforeach
</div>
<br>

<div class ="container">
    <div class="row">
        <div class="col-xl-8">
            <div class="card" >
                <div class="card-body">
                    @foreach($r as $e) 
                    <h5 class="card-title">{{$e->nombreVacante}}</h5>
                    <hr>
                    <b>Requisitos</b>
                    <ul>
                        @foreach($req as $r)
                        <li>{{$r}}</li>
                        @endforeach
                    </ul>
                    <hr>
                    <b>Detalle del Puesto</b>
                    <ul>
                        @foreach($pu as $p)
                        <li>{{$p}}</li>
                        @endforeach
                    </ul>
                    <hr>
                    <center>
                    <a id="vacante" href="/postular/{{$e->id}}" type="button" class="btn btn-primary">Postularme</a>
                    </center>
                    @endforeach 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection