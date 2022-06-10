@extends('layouts.app')

@section('content')
<div style="text-align: right;width:220px">
    <a href="/home" class="btn btn-primary btn-sm">Regresar</a>
</div>

<div class ="container">
    <div class="row">
   
@foreach($pue as $e) 
<div class="col-m3 m-3">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/images/work.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$e->nombreVacante}}</h5>
                    <hr>
                    <a id="vacante" href="/requisitos/{{$e->id}}" type="button" class="btn btn-primary">Ver requisitos</a>
                </div>
        </div>
</div>
@endforeach 
    </div>
</div>
@endsection