@extends('layouts.app')

@section('content')

<div style="text-align: right;width:220px">
    <a href="/home" class="btn btn-primary btn-sm">Regresar</a>
</div>
<br>

<div style="text-align: right; width:1250px">
    <h4>Listado de requisiciones</h4>
    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Crear nueva requisición</a>
</div>
<br>

<center>
<div style="text-align: center; width:1250px;">
<table border="1" width="100%" align="center" cellpadding="10px" class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre Puesto</th>
            <th scope="col">Folio</th>
            <th scope="col">Motivo de cobertura</th>
            <th scope="col">Área</th>
            <th scope="col">Puesto</th>
            <th scope="col">Requisitos</th>
            <th scope="col">Detalle del Puesto</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($empresa as $em)
        <tr>
            <td>{{$em->id}}</td>
            <td>{{$em->nombreVacante}}</td>
            <td>{{$em->folio}}</td>
            <td>{{$em->motivo}}</td>
            @foreach($area as $a)
            @if($em->idArea == $a->id)
            <td>{{$a->nombre}}</td>
            @endif
            @endforeach
            @foreach($puesto as $p)
            @if($em->idPuesto == $p->id)
            <td>{{$p->nombre}}</td>
            @endif
            @endforeach
            <td>{{$em->requisitos}}</td>
            <td>{{$em->detallePuesto}}</td>
            <td>
                @if($em->iactiva == 0)
                <a href="{{route('verificar',['id'=>$em->id , 'e'=>1])}}" class="btn btn-success">Activar</a>
                @else
                <a href="{{route('verificar',['id'=>$em->id , 'e'=>0])}}" class="btn btn-danger">Desactivar</a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</center>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear nueva requisicion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="/requisicion" method="POST">
          @csrf
              <div class="mb-3">
                  <input type="hidden" id="empresa" name="empresa" value="{{$id}}">
                <label for="" class="form-label">Folio:</label>
                <input type="text" id="folio" name="folio" class="form-control" tabindex="1">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Motivo de Cobertura:</label>
                <input type="text" id="motivo" name="motivo" class="form-control" tabindex="1">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Nombre del puesto:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" tabindex="1">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Requisitos:</label>
                <textarea id="requisitos" name="requisitos" class="form-control" rows="4" tabindex="1">
                </textarea>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Detalle del puesto:</label>
                <textarea id="detallep" name="detallep" class="form-control" rows="4" tabindex="1">
                </textarea>
              </div>
              <div class="mb-3">
                <label for="area" class="form-label">Área:</label><br>
                <select name="area" id="area" class="form-select">
                    <option selected disabled>Seleccione una área...</option>
                    @foreach($area as $a)
                    <option value="{{$a->id}}">{{$a->nombre}}</option>
                    @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="puesto" class="form-label">Puesto:</label><br>
                <select name="puesto" id="puesto" class="form-select">
                    <option selected disabled>Seleccione un puesto...</option>
                    @foreach($puesto as $p)
                    <option value="{{$p->id}}">{{$p->nombre}}</option>
                    @endforeach
                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar Requisicion</button>
              </div>
          </form>
      </div>
    </div>
  </div>
</div>
@endsection
