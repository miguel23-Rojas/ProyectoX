@extends('layouts.app')

@section('content')
<div style="text-align: right;width:220px">
    @foreach($us as $u)
    <a href="/aspirante/{{$e}}" class="btn btn-primary btn-sm">Regresar</a>
    @endforeach
</div>
<br>

<div style="text-align: right; width:600px">
    @foreach($us as $u)
    <h4>Documentos de {{$u->name}}</h4>
    @endforeach
</div>
<br>

<center>
    <div style="text-align: center; width:1250px;">
        <table border="1" width="100%" align="center" cellpadding="10px" class="table table-striped table-dark">
            <tr>
                <th>Tipo de Documento</th>
                <th>Documentos</th>
                <th>Estatus</th>
                <th>Comentarios</th>
                <th></th>
            </tr>
            @foreach($doc as $d)
            <tr>
                <td>Acta de Nacimiento</td>
                @if($d->actaNacimiento == '')
                <td>No se encontró Acta de Nacimiento</td>
                <td>{{$d->estatusActa}}</td>
                <td>{{$d->comentarioActa}}</td>
                <td>Nada por mostrar</td>
                @else
                <td>{{$d->actaNacimiento}}</td>
                <td>{{$d->estatusActa}}</td>
                <td>{{$d->comentarioActa}}</td>
                <td>
                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#acta">Verificar</a>
                </td>
                @endif
            </tr>
            <tr>
                <td>Currículum</td>
                @if($d->curriculum == '')
                <td>No se encontró Currículum</td>
                <td>{{$d->estatusCurriculum}}</td>
                <td>{{$d->comCurriculum}}</td>
                <td>Nada por mostrar</td>
                @else
                <td>{{$d->curriculum}}</td>
                <td>{{$d->estatusCurriculum}}</td>
                <td>{{$d->comCurriculum}}</td>
                <td>
                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#curriculum">Verificar</a>
                </td>
                @endif
            </tr>
            <tr>
                <td>Curp</td>
                @if($d->curp == '')
                <td>No se encontró Curp</td>
                <td>{{$d->estatusCurp}}</td>
                <td>{{$d->comCurp}}</td>
                <td>Nada por mostrar</td>
                @else
                <td>{{$d->curp}}</td>
                <td>{{$d->estatusCurp}}</td>
                <td>{{$d->comCurp}}</td>
                <td>
                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#curp">Verificar</a>
                </td>
                @endif
            </tr>
            <tr>
                <td>Número de Seguro Social</td>
                @if($d->nss == '')
                <td>No se encontró Número de Seguro Social</td>
                <td>{{$d->estatusNss}}</td>
                <td>{{$d->comNss}}</td>
                <td>Nada por mostrar</td>
                @else
                <td>{{$d->nss}}</td>
                <td>{{$d->estatusNss}}</td>
                <td>{{$d->comNss}}</td>
                <td>
                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#nss">Verificar</a>
                </td>
                @endif
            </tr>
            <tr>
                <td>Comprobande de Estudios</td>
                @if($d->estudios == '')
                <td>No se encontró Comprobante de Estudios</td>
                <td>{{$d->estatusEstudios}}</td>
                <td>{{$d->comEstudios}}</td>
                <td>Nada por mostrar</td>
                @else
                <td>{{$d->estudios}}</td>
                <td>{{$d->estatusEstudios}}</td>
                <td>{{$d->comEstudios}}</td>
                <td>
                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#estudios">Verificar</a>
                </td>
                @endif
            </tr>
            <tr>
                <td>Comprobande de Domicilio</td>
                @if($d->domicilio == '')
                <td>No se encontró Comprobante de Domicilio</td>
                <td>{{$d->estatusDomicilio}}</td>
                <td>{{$d->comDomicilio}}</td>
                <td>Nada por mostrar</td>
                @else
                <td>{{$d->domicilio}}</td>
                <td>{{$d->estatusDomicilio}}</td>
                <td>{{$d->comDomicilio}}</td>
                <td>
                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#domicilio">Verificar</a>
                </td>
                @endif
            </tr>
            <tr>
                <td>Carta de Recomendación</td>
                @if($d->cartaRecomendacion == '')
                <td>No se encontró Carta de Recomendación</td>
                <td>{{$d->ecartaRecomendacion}}</td>
                <td>{{$d->ccartaRecomendacion}}</td>
                <td>Nada por mostrar</td>
                @else
                <td>{{$d->cartaRecomendacion}}</td>
                <td>{{$d->ecartaRecomendacion}}</td>
                <td>{{$d->ccartaRecomendacion}}</td>
                <td>
                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#carta">Verificar</a>
                </td>
                @endif
            </tr>
            <tr>
                <td>INE</td>
                @if($d->ine == '')
                <td>No se encontró INE</td>
                <td>{{$d->estatusine}}</td>
                <td>{{$d->comentariosIne}}</td>
                <td>Nada por mostrar</td>
                @else
                <td>{{$d->ine}}</td>
                <td>{{$d->estatusine}}</td>
                <td>{{$d->comentariosIne}}</td>
                <td>
                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#ine">Verificar</a>
                </td>
                @endif
            </tr>
            <tr>
                <td>RFC</td>
                @if($d->rfc == '')
                <td>No se encontró RFC</td>
                <td>{{$d->estatusRfc}}</td>
                <td>{{$d->comentariosRfc}}</td>
                <td>Nada por mostrar</td>
                @else
                <td>{{$d->rfc}}</td>
                <td>{{$d->estatusRfc}}</td>
                <td>{{$d->comentariosRfc}}</td>
                <td>
                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#rfc">Verificar</a>
                </td>
                @endif
            </tr>
            <tr>
                <td>Certificado Médico</td>
                @if($d->medico == '')
                <td>No se encontró Certificado Médico</td>
                <td>{{$d->estatusMedico}}</td>
                <td>{{$d->comentariosMedico}}</td>
                <td>Nada por mostrar</td>
                @else
                <td>{{$d->medico}}</td>
                <td>{{$d->estatusMedico}}</td>
                <td>{{$d->comentariosMedico}}</td>
                <td>
                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#medico">Verificar</a>
                </td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>
</center>

<!-- Modales -->
<!-- Acta -->
<div class="modal fade" id="acta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Verificar Acta de nacimiento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/acta" method="POST">
                    @csrf
                    <div class="form-group row">
                        <input type="hidden" class="form-control" value="{{$us[0]->id}}" id="idA" name="idA">
                        <input type="hidden" class="form-control" value="{{$e}}" id="ide" name="ide">
                        <label for="" class="col-sm-2 col-form-label">Acta de Nacimiento</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="{{$d->actaNacimiento}}" disabled><br>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Documento</label>
                        <div class="col-sm-10">
                            <a class="btn btn-primary btn-sm" href="../../Archivos/{{$d->actaNacimiento}}"
                                target="blank_">Ver
                                Documento</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Comentarios</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="com" name="com" rows="3"
                                placeholder="{{$d->comentarioActa}}"></textarea>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Criterio</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="a" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Aceptado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="b">
                                    <label class="form-check-label" for="gridRadios2">
                                        No aceptado
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Curriculum -->
<div class="modal fade" id="curriculum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Verificar Currículum</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/curriculum" method="POST">
                    @csrf
                    <div class="form-group row">
                        <input type="hidden" class="form-control" value="{{$us[0]->id}}" id="idA" name="idA">
                        <input type="hidden" class="form-control" value="{{$e}}" id="ide" name="ide">
                        <label for="" class="col-sm-2 col-form-label">Currículum</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="{{$d->curriculum}}" disabled><br>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Documento</label>
                        <div class="col-sm-10">
                            <a class="btn btn-primary btn-sm" href="../../Archivos/{{$d->curriculum}}"
                                target="blank_">Ver
                                Documento</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Comentarios</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="com" name="com" rows="3"
                                placeholder="{{$d->comCurriculum}}"></textarea>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Criterio</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="a" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Aceptado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="b">
                                    <label class="form-check-label" for="gridRadios2">
                                        No aceptado
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Curp -->
<div class="modal fade" id="curp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Verificar Curp</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/curp" method="POST">
                    @csrf
                    <div class="form-group row">
                        <input type="hidden" class="form-control" value="{{$us[0]->id}}" id="idA" name="idA">
                        <input type="hidden" class="form-control" value="{{$e}}" id="ide" name="ide">
                        <label for="" class="col-sm-2 col-form-label">Curp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="{{$d->curp}}" disabled><br>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Documento</label>
                        <div class="col-sm-10">
                            <a class="btn btn-primary btn-sm" href="../../Archivos/{{$d->curp}}"
                                target="blank_">Ver
                                Documento</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Comentarios</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="com" name="com" rows="3"
                                placeholder="{{$d->comCurp}}"></textarea>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Criterio</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="a" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Aceptado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="b">
                                    <label class="form-check-label" for="gridRadios2">
                                        No aceptado
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- NSS -->
<div class="modal fade" id="nss" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Verificar Número de Seguro Social</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/nss" method="POST">
                    @csrf
                    <div class="form-group row">
                        <input type="hidden" class="form-control" value="{{$us[0]->id}}" id="idA" name="idA">
                        <input type="hidden" class="form-control" value="{{$e}}" id="ide" name="ide">
                        <label for="" class="col-sm-2 col-form-label">NSS</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="{{$d->nss}}" disabled><br>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Documento</label>
                        <div class="col-sm-10">
                            <a class="btn btn-primary btn-sm" href="../../Archivos/{{$d->nss}}"
                                target="blank_">Ver
                                Documento</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Comentarios</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="com" name="com" rows="3"
                                placeholder="{{$d->comNss}}"></textarea>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Criterio</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="a" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Aceptado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="b">
                                    <label class="form-check-label" for="gridRadios2">
                                        No aceptado
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Estudios -->
<div class="modal fade" id="estudios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Verificar Comprobante de Estudios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/estudios" method="POST">
                    @csrf
                    <div class="form-group row">
                        <input type="hidden" class="form-control" value="{{$us[0]->id}}" id="idA" name="idA">
                        <input type="hidden" class="form-control" value="{{$e}}" id="ide" name="ide">
                        <label for="" class="col-sm-2 col-form-label">Certificado</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="{{$d->estudios}}" disabled><br>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Documento</label>
                        <div class="col-sm-10">
                            <a class="btn btn-primary btn-sm" href="../../Archivos/{{$d->estudios}}"
                                target="blank_">Ver
                                Documento</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Comentarios</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="com" name="com" rows="3"
                                placeholder="{{$d->comEstudios}}"></textarea>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Criterio</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="a" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Aceptado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="b">
                                    <label class="form-check-label" for="gridRadios2">
                                        No aceptado
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Estudios -->
<div class="modal fade" id="estudios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Verificar Comprobante de Estudios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/estudios" method="POST">
                    @csrf
                    <div class="form-group row">
                        <input type="hidden" class="form-control" value="{{$us[0]->id}}" id="idA" name="idA">
                        <input type="hidden" class="form-control" value="{{$e}}" id="ide" name="ide">
                        <label for="" class="col-sm-2 col-form-label">Certificado</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="{{$d->estudios}}" disabled><br>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Documento</label>
                        <div class="col-sm-10">
                            <a class="btn btn-primary btn-sm" href="../../Archivos/{{$d->estudios}}"
                                target="blank_">Ver
                                Documento</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Comentarios</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="com" name="com" rows="3"
                                placeholder="{{$d->comEstudios}}"></textarea>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Criterio</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="a" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Aceptado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="b">
                                    <label class="form-check-label" for="gridRadios2">
                                        No aceptado
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Fin modales -->

<!-- Domicilio -->
<div class="modal fade" id="domicilio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Verificar Comprobante de Domicilio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/domicilio" method="POST">
                    @csrf
                    <div class="form-group row">
                        <input type="hidden" class="form-control" value="{{$us[0]->id}}" id="idA" name="idA">
                        <input type="hidden" class="form-control" value="{{$e}}" id="ide" name="ide">
                        <label for="" class="col-sm-2 col-form-label">Comprobante</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="{{$d->domicilio}}" disabled><br>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Documento</label>
                        <div class="col-sm-10">
                            <a class="btn btn-primary btn-sm" href="../../Archivos/{{$d->domicilio}}"
                                target="blank_">Ver
                                Documento</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Comentarios</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="com" name="com" rows="3"
                                placeholder="{{$d->comDomicilio}}"></textarea>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Criterio</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="a" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Aceptado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="b">
                                    <label class="form-check-label" for="gridRadios2">
                                        No aceptado
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Carta Recomendación -->
<div class="modal fade" id="carta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Verificar Carta de Recomendación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/carta" method="POST">
                    @csrf
                    <div class="form-group row">
                        <input type="hidden" class="form-control" value="{{$us[0]->id}}" id="idA" name="idA">
                        <input type="hidden" class="form-control" value="{{$e}}" id="ide" name="ide">
                        <label for="" class="col-sm-2 col-form-label">Carta</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="{{$d->cartaRecomendacion}}" disabled><br>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Documento</label>
                        <div class="col-sm-10">
                            <a class="btn btn-primary btn-sm" href="../../Archivos/{{$d->cartaRecomendacion}}"
                                target="blank_">Ver
                                Documento</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Comentarios</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="com" name="com" rows="3"
                                placeholder="{{$d->ccartaRecomendacion}}"></textarea>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Criterio</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="a" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Aceptado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="b">
                                    <label class="form-check-label" for="gridRadios2">
                                        No aceptado
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- INE -->
<div class="modal fade" id="ine" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Verificar INE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/ine" method="POST">
                    @csrf
                    <div class="form-group row">
                        <input type="hidden" class="form-control" value="{{$us[0]->id}}" id="idA" name="idA">
                        <input type="hidden" class="form-control" value="{{$e}}" id="ide" name="ide">
                        <label for="" class="col-sm-2 col-form-label">INE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="{{$d->ine}}" disabled><br>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Documento</label>
                        <div class="col-sm-10">
                            <a class="btn btn-primary btn-sm" href="../../Archivos/{{$d->ine}}"
                                target="blank_">Ver
                                Documento</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Comentarios</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="com" name="com" rows="3"
                                placeholder="{{$d->comentariosIne}}"></textarea>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Criterio</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="a" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Aceptado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="b">
                                    <label class="form-check-label" for="gridRadios2">
                                        No aceptado
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- INE -->
<div class="modal fade" id="rfc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Verificar RFC</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/rfc" method="POST">
                    @csrf
                    <div class="form-group row">
                        <input type="hidden" class="form-control" value="{{$us[0]->id}}" id="idA" name="idA">
                        <input type="hidden" class="form-control" value="{{$e}}" id="ide" name="ide">
                        <label for="" class="col-sm-2 col-form-label">RFC</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="{{$d->rfc}}" disabled><br>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Documento</label>
                        <div class="col-sm-10">
                            <a class="btn btn-primary btn-sm" href="../../Archivos/{{$d->rfc}}"
                                target="blank_">Ver
                                Documento</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Comentarios</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="com" name="com" rows="3"
                                placeholder="{{$d->comentariosRfc}}"></textarea>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Criterio</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="a" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Aceptado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="b">
                                    <label class="form-check-label" for="gridRadios2">
                                        No aceptado
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- INE -->
<div class="modal fade" id="medico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Verificar Certificado Médico</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/medico" method="POST">
                    @csrf
                    <div class="form-group row">
                        <input type="hidden" class="form-control" value="{{$us[0]->id}}" id="idA" name="idA">
                        <input type="hidden" class="form-control" value="{{$e}}" id="ide" name="ide">
                        <label for="" class="col-sm-2 col-form-label">Certificado</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="{{$d->rfc}}" disabled><br>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Documento</label>
                        <div class="col-sm-10">
                            <a class="btn btn-primary btn-sm" href="../../Archivos/{{$d->rfc}}"
                                target="blank_">Ver
                                Documento</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Comentarios</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="com" name="com" rows="3"
                                placeholder="{{$d->comentariosMedico}}"></textarea>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Criterio</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="a" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Aceptado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="b">
                                    <label class="form-check-label" for="gridRadios2">
                                        No aceptado
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Fin modales -->
@endsection