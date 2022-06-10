@extends('layouts.app')

@section('content')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<div style="text-align: right;width:220px">
    <a href="/home" class="btn btn-primary btn-sm">Regresar</a>
</div>
<br>
<div style="text-align: right; width:350px">
    <h4>Listado de Aspirantes</h4>
</div>
<br>

<center>
    <div style="text-align: center; width:1250px;">
        <table border="1" width="100%" align="center" cellpadding="10px" class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo electrónico</th>
                    <th scope="col">Estado</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($us as $u)
                @foreach($a as $d)
                @if($d->idUsuario == $u->id)
                <tr>
                    <td>{{$u->id}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->estadoUsuario}}</td>
                    <td>
                        <a href="/documentos/{{$u->id}}/{{$id}}" class="btn btn-warning">Ver Documentos</a>
                    </td>
                    <td>
                        <a id="aspirante" data-id="{{$u->id}}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#correo">Enviar correo
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                            </svg></a>
                    </td>
                    <td>
                        <a id="control" data-as="{{$u->id}}" data-nombre="{{$u->name}}" data-estado="{{$u->estadoUsuario}}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#controlU">Control de usuario</a>
                    </td>
                </tr>
                @endif
                @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</center>

<!-- Correo -->
<div class="modal fade" id="correo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enviar Correo al Aspirante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/correo" method="POST">
                    @csrf
                    <div class="form-group row">
                        <input type="hidden" class="form-control" value="{{$id}}" id="idR" name="idR">
                        <input type="hidden" class="form-control" id="idA" name="idA">
                        <label for="" class="col-sm-2 col-form-label">Título</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="t" name="t" placeholder="Título del correo" ><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Mensaje</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="com" name="com" rows="3"
                                placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Control de usuario -->
<div class="modal fade" id="controlU" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Control de Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/control" method="POST">
                    @csrf
                    <div class="form-group row">
                        <input type="hidden" class="form-control" id="idD" name="idD" value="{{$id}}">
                        <input type="hidden" class="form-control" id="idF" name="idF">
                        <label for="" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="as" name="as" disabled><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Estado</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="slcEstado" id="slcEstado">
                                <option value="" disabled>Seleccione un estado para el usuario...</option>
                                <option value="Empleado">Empleado</option>
                                <option value="Despedido">Despedido</option>
                                <option value="Vacaciones">En vacaciones</option>
                                <option value="Incapacidad">Incapacidad</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<script>
    $(document).ready(function (e) {
            $('body').on('click','#aspirante',function () {
                var data_id = '';
                if (typeof $(this).data('id') !== 'undefined') {
                    data_id = $(this).data('id');
                }
                $('#idA').val(data_id);
            })

            $('body').on('click','#control',function(){
                var data_idA = '';
                var data_nombre = '';
                var data_estado = '';
                if(typeof $(this).data('as') !== 'undefined'){
                    data_idA = $(this).data('as');
                    data_nombre = $(this).data('nombre');
                    data_estado = $(this).data('estado');
                }
                $('#idF').val(data_idA);
                $('#as').val(data_nombre);
                $('#slcEstado').val(data_estado);
            })
        });
</script>
@endsection