@extends('layouts.app')

@section('content')
<div style="text-align: right;width:220px">
@foreach($doc as $r)
    <a href="/postulacion/{{$r->idAspirante}}" class="btn btn-primary btn-sm">Regresar</a>
@endforeach
</div>
<br>  
<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="card">
					<div class="card-body d-flex justify-content-between align-items-center">
						Subir archivos
						<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Subir</a>
					</div>
				</div>
			</div>
		</div>
</div>
<div style="text-align: right; width:1250px">
    <h4>Listado de Documentos</h4>
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
        <th>Acción</th>
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
          <a class="btn btn-primary btn-sm" href="Archivos/{{$d->actaNacimiento}}" target="blank_">Ver Documento</a>
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
          <a class="btn btn-primary btn-sm" href="Archivos/{{$d->curriculum}}" target="blank_">Ver Documento</a>
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
          <a class="btn btn-primary btn-sm" href="Archivos/{{$d->curp}}" target="blank_">Ver Documento</a>
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
          <a class="btn btn-primary btn-sm" href="Archivos/{{$d->nss}}" target="blank_">Ver Documento</a>
        </td>
      @endif
    </tr>
    <tr>
      <td>Comprobante de Estudios</td>
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
          <a class="btn btn-primary btn-sm" href="Archivos/{{$d->estudios}}" target="blank_">Ver Documento</a>
        </td>
      @endif
    </tr>
    <tr>
      <td>Comprobante de Domicilio</td>
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
          <a class="btn btn-primary btn-sm" href="Archivos/{{$d->domicilio}}" target="blank_">Ver Documento</a>
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
          <a class="btn btn-primary btn-sm" href="Archivos/{{$d->cartaRecomendacion}}" target="blank_">Ver Documento</a>
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
          <a class="btn btn-primary btn-sm" href="Archivos/{{$d->ine}}" target="blank_">Ver Documento</a>
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
          <a class="btn btn-primary btn-sm" href="Archivos/{{$d->rfc}}" target="blank_">Ver Documento</a>
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
          <a class="btn btn-primary btn-sm" href="Archivos/{{$d->medico}}" target="blank_">Ver Documento</a>
        </td>
      @endif
    </tr>
    @endforeach
</table>
</div>
</center>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Subir archivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="/subirPDF" method="POST" enctype="multipart/form-data">
          @csrf
          <select name="doc" id="doc" class="form-select">
                    <option selected disabled>Seleccione un tipo de archivo...</option>
                    @foreach($doc as $d)
                    @if($d->actaNacimiento != null)
                    <option disabled>Acta de Nacimiento</option>
                    @else
                    <option value="acta">Acta de Nacimiento</option>
                    @endif
                    @if($d->curriculum != null)
                    <option disabled>Currículum</option>
                    @else
                    <option value="curriculum">Currículum</option>
                    @endif
                    @if($d->curp != null)
                    <option disabled>Curp</option>
                    @else
                    <option value="curp">Curp</option>
                    @endif
                    @if($d->nss != null)
                    <option disabled>Número de Seguro Social</option>
                    @else
                    <option value="nss">Número de Seguro Social</option>
                    @endif
                    @if($d->estudios != null)
                    <option disabled>Comprobante de Estudios (Certificado)</option>
                    @else
                    <option value="estudios">Comprobante de Estudios (Certificado)</option>
                    @endif
                    @if($d->domicilio != null)
                    <option disabled>Comprobante de Domicilio (Luz,Agua o Internet)</option>
                    @else
                    <option value="domicilio">Comprobante de Domicilio (Luz,Agua o Internet)</option>
                    @endif
                    @if($d->cartaRecomendacion != null)
                    <option disabled>Carta de Recomendación</option>
                    @else
                    <option value="cartaRecomendacion">Carta de Recomendación</option>
                    @endif
                    @if($d->ine != null)
                    <option disabled>INE</option>
                    @else
                    <option value="ine">INE</option>
                    @endif
                    @if($d->rfc != null)
                    <option disabled>RFC</option>
                    @else
                    <option value="rfc">RFC</option>
                    @endif
                    @if($d->medico != null)
                    <option disabled>Certificado Médico</option>
                    @else
                    <option value="medico">Certificado Médico</option>
                    @endif
                    @endforeach
          </select>
          <br>
          <br>
          <div class="mb-3">
                <label for="" class="form-label">Buscar archivo:</label>
                <input type="file" id="pdf" name="pdf" class="form-control">
                @foreach($id as $d)
                <input type="hidden" id="re" name="re" value="{{$d->idRequisicion}}" class="form-control">
                @endforeach
            </div>
          <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Subir Archivo</button>
         </div>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection
