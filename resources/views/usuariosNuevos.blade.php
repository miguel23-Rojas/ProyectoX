@extends('layouts.app')

@section('content')

<div style="text-align: right;width:220px">
    <a href="/postulacion/{{Auth::user()->id}}" class="btn btn-primary btn-sm">Mis Postulaciones</a>
</div>

<div class ="container">
    <div class="row">
        
@foreach($em as $e)  
<div class="col-m3 m-3">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/images/{{$e->imagen}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$e->nombre_Empresa}}</h5>
                    <p class="card-text">Verificar vacantes disponibles</p>
                    <a href="/trabajos/{{$e->id}}" class="btn btn-primary">Ver más</a>
                </div>
        </div>
</div>
@endforeach       
    </div>
</div>
@endsection