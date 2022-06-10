@extends('layouts.app')

@section('content')

<div style="text-align: right;width:220px">
    <a href="/home" class="btn btn-primary btn-sm">Regresar</a>
</div>
<br>
<div style="text-align: right;width:350px">
    <h3><b>Mis Postulaciones</b></h3>
</div>


<div class ="container">
    <div class="row">
        
@foreach($pos as $p) 
<div class="col-m3 m-3">
        <div class="card" style="width: 18rem;">
                <div class="card-body">
                @foreach($r as $d) 
                    @if($p->idRequisicion == $d->id && $p->idAspirante == $id)
                    <h5 class="card-title">{{$d->nombreVacante}}</h5>
                    <hr>
                    <p class="card-text">Postulado para esta vacante</p>
                    <p>{{$p->id}}</p>
                    <a href="/aspiranteDo/{{$p->id}}" class="btn btn-primary">Subir documentos</a>
                    @else
                    @endif
                @endforeach 
                </div>
        </div>
</div>

@endforeach       
    </div>
</div>
@endsection