<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documentos;
use App\Models\Requisicion;
use App\Models\UsuarioRe;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class DocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('aspirantes.documentos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->empresa;
        $user = new User();
        $user->email = $request->get('correo');
        $user->password = Hash::make($request->get('pass'));
        $user->empresa = $id;
        $user->tipoUsuario = 2;
        $user->name = $request->get('name');
        $user->idRequisicion = $request->get('vacante');

        $user->save();
        $idA = $user->id;

        $doc = new Documentos();
        $doc->idRequisicion = $request->get('vacante');
        $doc->idAspirante = $idA;
        $doc->actaNacimiento = '';
        $doc->estatusActa = 'Sin Documento';
        $doc->comentarioActa = 'Sin Comentarios';
        $doc->curriculum = '';
        $doc->estatusCurriculum = 'Sin Documento';
        $doc->comCurriculum = 'Sin Comentarios';
        $doc->curp = '';
        $doc->estatusCurp = 'Sin Documento';
        $doc->comCurp = 'Sin Comentarios';
        $doc->nss = '';
        $doc->estatusNss = 'Sin Documento';
        $doc->comNss = 'Sin Comentarios';
        $doc->estudios = '';
        $doc->estatusEstudios = 'Sin Documento';
        $doc->comEstudios = 'Sin Comentarios';
        $doc->domicilio = '';
        $doc->estatusDomicilio = 'Sin Documento';
        $doc->comDomicilio = 'Sin Comentarios';
        $doc->cartaRecomendacion = '';
        $doc->ecartaRecomendacion = 'Sin Documento';
        $doc->ccartaRecomendacion = 'Sin Comentarios';
        $doc->ine = '';
        $doc->estatusine = 'Sin Documento';
        $doc->comentariosIne = 'Sin Comentarios';
        $doc->rfc = '';
        $doc->estatusRfc = 'Sin Documento';
        $doc->comentariosRfc = 'Sin Comentarios';
        $doc->medico = '';
        $doc->estatusMedico = 'Sin Documento';
        $doc->comentariosMedico = 'Sin Comentarios';
        $doc->save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function subir(Request $request){
        //dd($request);
        $id = Auth::user()->id;
        $nombre="";
        $var = $request->get('doc');
        $d = $request->get('re');
        $doca = Documentos::where('idAspirante',$id)->where('idRequisicion',$d)->select('id')->get();
        $daa =  json_decode($doca,true);
        $r;
        foreach($daa as $key=>$data1){
            $r = $data1;
        }

        if($var == 'acta'){
            if($request->hasFile('pdf')){
                $archivo=$request->file('pdf');
                $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
                $nombre=$archivo->getClientOriginalName();
            }
            Documentos::where('idAspirante', $id)
            ->update([
                'actaNacimiento' => $nombre,
                'estatusActa' => 'Enviado para revisión'
             ]);
        }elseif($var == 'curriculum'){
            if($request->hasFile('pdf')){
                $archivo=$request->file('pdf');
                $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
                $nombre=$archivo->getClientOriginalName();
            }
            Documentos::where('idAspirante', $id)
            ->update([
                'curriculum' => $nombre,
                'estatusCurriculum' => 'Enviado para revisión'
             ]);
        }elseif($var == 'curp'){
            if($request->hasFile('pdf')){
                $archivo=$request->file('pdf');
                $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
                $nombre=$archivo->getClientOriginalName();
            }
            Documentos::where('idAspirante', $id)
            ->update([
                'curp' => $nombre,
                'estatusCurp' => 'Enviado para revisión'
             ]);
        }elseif($var == 'nss'){
            if($request->hasFile('pdf')){
                $archivo=$request->file('pdf');
                $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
                $nombre=$archivo->getClientOriginalName();
            }
            Documentos::where('idAspirante', $id)
            ->update([
                'nss' => $nombre,
                'estatusNss' => 'Enviado para revisión'
             ]);
        }elseif($var == 'estudios'){
            if($request->hasFile('pdf')){
                $archivo=$request->file('pdf');
                $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
                $nombre=$archivo->getClientOriginalName();
            }
            Documentos::where('idAspirante', $id)
            ->update([
                'estudios' => $nombre,
                'estatusEstudios' => 'Enviado para revisión'
             ]);
        }elseif($var == 'domicilio'){
            if($request->hasFile('pdf')){
                $archivo=$request->file('pdf');
                $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
                $nombre=$archivo->getClientOriginalName();
            }
            Documentos::where('idAspirante', $id)
            ->update([
                'domicilio' => $nombre,
                'estatusDomicilio' => 'Enviado para revisión'
             ]);
        }elseif($var == 'cartaRecomendacion'){
            if($request->hasFile('pdf')){
                $archivo=$request->file('pdf');
                $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
                $nombre=$archivo->getClientOriginalName();
            }
            Documentos::where('idAspirante', $id)
            ->update([
                'cartaRecomendacion' => $nombre,
                'ecartaRecomendacion' => 'Enviado para revisión'
             ]);
        }elseif($var == 'ine'){
            if($request->hasFile('pdf')){
                $archivo=$request->file('pdf');
                $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
                $nombre=$archivo->getClientOriginalName();
            }
            Documentos::where('idAspirante', $id)
            ->update([
                'ine' => $nombre,
                'estatusine' => 'Enviado para revisión'
             ]);
        }elseif($var == 'rfc'){
            if($request->hasFile('pdf')){
                $archivo=$request->file('pdf');
                $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
                $nombre=$archivo->getClientOriginalName();
            }
            Documentos::where('idAspirante', $id)
            ->update([
                'rfc' => $nombre,
                'estatusRfc' => 'Enviado para revisión'
             ]);
        }elseif($var == 'medico'){
            if($request->hasFile('pdf')){
                $archivo=$request->file('pdf');
                $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
                $nombre=$archivo->getClientOriginalName();
            }
            Documentos::where('idAspirante', $id)
            ->update([
                'medico' => $nombre,
                'estatusMedico' => 'Enviado para revisión'
             ]);
        }


        return redirect()->route('aspiranteDo',$r);
    }

    //
    public function aspiranteDoc($id,$e){
        $doc = Documentos::where('idRequisicion', $e)->where('idAspirante',$id)->get();
        $user= User::where('id',$id)->get();
        return view('aspirantes.documentos')->with('doc',$doc)->with('us',$user)->with('e',$e);
    }

    public function acta(Request $request){
        $comentarios = $request->get('com');
        $id = $request->get('idA');
        $ide = $request->get('ide');
        $criterio = $request->get('gridRadios');

        if($comentarios == ''){
            $comentarios = 'Sin Comentarios';
        }

        if($criterio == 'a'){
            $criterio = 'Aceptado';
        }else{
            $criterio = 'No Aceptado';
        }

        if($criterio == 'No Aceptado'){
            Documentos::where('idAspirante', $id)
            ->update([
            'estatusActa' => $criterio,
            'comentarioActa' => $comentarios,
            'actaNacimiento' => ''
         ]);
        }else{
            Documentos::where('idAspirante', $id)
            ->update([
            'estatusActa' => $criterio,
            'comentarioActa' => $comentarios
         ]);
        }
        
        return redirect()->route('documentos',['id'=>$id,'e'=>$ide]);
    }

    public function curriculum(Request $request){
        $comentarios = $request->get('com');
        $id = $request->get('idA');
        $ide = $request->get('ide');
        $criterio = $request->get('gridRadios');

        if($comentarios == ''){
            $comentarios = 'Sin Comentarios';
        }

        if($criterio == 'a'){
            $criterio = 'Aceptado';
        }else{
            $criterio = 'No Aceptado';
        }

        if($criterio == 'No Aceptado'){
            Documentos::where('idAspirante', $id)
            ->update([
            'estatusCurriculum' => $criterio,
            'comCurriculum' => $comentarios,
            'curriculum' => ''
         ]);
        }else{
            Documentos::where('idAspirante', $id)
            ->update([
            'estatusCurriculum' => $criterio,
            'comCurriculum' => $comentarios
         ]);
        }
        

        return redirect()->route('documentos',['id'=>$id,'e'=>$ide]);
    }

    public function curp(Request $request){
        $comentarios = $request->get('com');
        $id = $request->get('idA');
        $ide = $request->get('ide');
        $criterio = $request->get('gridRadios');

        if($comentarios == ''){
            $comentarios = 'Sin Comentarios';
        }

        if($criterio == 'a'){
            $criterio = 'Aceptado';
        }else{
            $criterio = 'No Aceptado';
        }

        if($criterio == 'No Aceptado'){
            Documentos::where('idAspirante', $id)
            ->update([
            'estatusCurp' => $criterio,
            'comCurp' => $comentarios,
            'curp' => ''
         ]);
        }else{
            Documentos::where('idAspirante', $id)
            ->update([
            'estatusCurp' => $criterio,
            'comCurp' => $comentarios
         ]);
        }
        

        return redirect()->route('documentos',['id'=>$id,'e'=>$ide]);
    }

    public function nss(Request $request){
        $comentarios = $request->get('com');
        $id = $request->get('idA');
        $ide = $request->get('ide');
        $criterio = $request->get('gridRadios');

        if($comentarios == ''){
            $comentarios = 'Sin Comentarios';
        }

        if($criterio == 'a'){
            $criterio = 'Aceptado';
        }else{
            $criterio = 'No Aceptado';
        }

        if($criterio == 'No Aceptado'){
            Documentos::where('idAspirante', $id)
            ->update([
            'estatusNss' => $criterio,
            'comNss' => $comentarios,
            'nss' => ''
         ]);
        }else{
            Documentos::where('idAspirante', $id)
            ->update([
            'estatusNss' => $criterio,
            'comNss' => $comentarios
         ]);
        }
        

        return redirect()->route('documentos',['id'=>$id,'e'=>$ide]);
    }

    public function estudios(Request $request){
        $comentarios = $request->get('com');
        $id = $request->get('idA');
        $ide = $request->get('ide');
        $criterio = $request->get('gridRadios');

        if($comentarios == ''){
            $comentarios = 'Sin Comentarios';
        }

        if($criterio == 'a'){
            $criterio = 'Aceptado';
        }else{
            $criterio = 'No Aceptado';
        }

        if($criterio == 'No Aceptado'){
            Documentos::where('idAspirante', $id)
            ->update([
            'estatusEstudios' => $criterio,
            'comEstudios' => $comentarios,
            'estudios' => ''
         ]);
        }else{
            Documentos::where('idAspirante', $id)
            ->update([
            'estatusEstudios' => $criterio,
            'comEstudios' => $comentarios
         ]);
        }
        

        return redirect()->route('documentos',['id'=>$id,'e'=>$ide]);
    }

    public function domicilio(Request $request){
        $comentarios = $request->get('com');
        $id = $request->get('idA');
        $ide = $request->get('ide');
        $criterio = $request->get('gridRadios');

        if($comentarios == ''){
            $comentarios = 'Sin Comentarios';
        }

        if($criterio == 'a'){
            $criterio = 'Aceptado';
        }else{
            $criterio = 'No Aceptado';
        }

        if($criterio == 'No Aceptado'){
            Documentos::where('idAspirante', $id)
            ->update([
            'estatusDomicilio' => $criterio,
            'comDomicilio' => $comentarios,
            'domicilio' => ''
         ]);
        }else{
            Documentos::where('idAspirante', $id)
            ->update([
            'estatusDomicilio' => $criterio,
            'comDomicilio' => $comentarios
         ]);
        }
        

        return redirect()->route('documentos',['id'=>$id,'e'=>$ide]);
    }

    public function carta(Request $request){
        $comentarios = $request->get('com');
        $id = $request->get('idA');
        $ide = $request->get('ide');
        $criterio = $request->get('gridRadios');

        if($comentarios == ''){
            $comentarios = 'Sin Comentarios';
        }

        if($criterio == 'a'){
            $criterio = 'Aceptado';
        }else{
            $criterio = 'No Aceptado';
        }

        if($criterio == 'No Aceptado'){
            Documentos::where('idAspirante', $id)
            ->update([
            'ecartaRecomendacion' => $criterio,
            'ccartaRecomendacion' => $comentarios,
            'cartaRecomendacion' => ''
         ]);
        }else{
            Documentos::where('idAspirante', $id)
            ->update([
            'ecartaRecomendacion' => $criterio,
            'ccartaRecomendacion' => $comentarios
         ]);
        }
        

        return redirect()->route('documentos',['id'=>$id,'e'=>$ide]);
    }

    public function ine(Request $request){
        $comentarios = $request->get('com');
        $id = $request->get('idA');
        $ide = $request->get('ide');
        $criterio = $request->get('gridRadios');

        if($comentarios == ''){
            $comentarios = 'Sin Comentarios';
        }

        if($criterio == 'a'){
            $criterio = 'Aceptado';
        }else{
            $criterio = 'No Aceptado';
        }

        if($criterio == 'No Aceptado'){
            Documentos::where('idAspirante', $id)
            ->update([
            'estatusine' => $criterio,
            'comentariosine' => $comentarios,
            'ine' => ''
         ]);
        }else{
            Documentos::where('idAspirante', $id)
            ->update([
            'estatusine' => $criterio,
            'comentariosine' => $comentarios
         ]);
        }
        

        return redirect()->route('documentos',['id'=>$id,'e'=>$ide]);
    }

    public function rfc(Request $request){
        $comentarios = $request->get('com');
        $id = $request->get('idA');
        $ide = $request->get('ide');
        $criterio = $request->get('gridRadios');

        if($comentarios == ''){
            $comentarios = 'Sin Comentarios';
        }

        if($criterio == 'a'){
            $criterio = 'Aceptado';
        }else{
            $criterio = 'No Aceptado';
        }

        if($criterio == 'No Aceptado'){
            Documentos::where('idAspirante', $id)
            ->update([
            'estatusRfc' => $criterio,
            'comentariosRfc' => $comentarios,
            'ine' => ''
         ]);
        }else{
            Documentos::where('idAspirante', $id)
            ->update([
            'estatusRfc' => $criterio,
            'comentariosRfc' => $comentarios
         ]);
        }
        

        return redirect()->route('documentos',['id'=>$id,'e'=>$ide]);
    }

    public function medico(Request $request){
        $comentarios = $request->get('com');
        $id = $request->get('idA');
        $ide = $request->get('ide');
        $criterio = $request->get('gridRadios');

        if($comentarios == ''){
            $comentarios = 'Sin Comentarios';
        }

        if($criterio == 'a'){
            $criterio = 'Aceptado';
        }else{
            $criterio = 'No Aceptado';
        }

        if($criterio == 'No Aceptado'){
            Documentos::where('idAspirante', $id)
            ->update([
            'estatusMedico' => $criterio,
            'comentariosMedico' => $comentarios,
            'ine' => ''
         ]);
        }else{
            Documentos::where('idAspirante', $id)
            ->update([
            'estatusMedico' => $criterio,
            'comentariosMedico' => $comentarios
         ]);
        }
        return redirect()->route('documentos',['id'=>$id,'e'=>$ide]);
    }

    public function control(Request $request){
        $id = $request->get('idF');
        $idD = $request->get('idD');
        $estado = $request->get('slcEstado');
        User::where('id', $id)
        ->update([
            'estadoUsuario' => $estado
        ]);
        return redirect()->route('aspiranteL', $idD);
    }

    public function trabajos($id){
        $requi = Requisicion::where('idEmpresa',$id)->where('iActiva',1)->get();
        $r = Requisicion::where('idEmpresa',$id)->select('id')->where('iActiva',1)->get();
        $requ = Requisicion::where('idEmpresa',$id)->select('requisitos')->where('iActiva',1)->get();
        $requisi = explode(",", $requ[0] -> pluck("requisitos")[0]);

        $puesto = Requisicion::where('idEmpresa',$id)->select('detallePuesto')->where('iActiva',1)->get();
        $pues = explode(",", $puesto[0]->pluck("detallePuesto")[0]);
        
        return view('aspirantes.puestos')->with('pue',$requi)->with('yo',$requisi)->with('dePu',$pues)->with('r',$r);
    }

    public function postulacion($id){
        $pos = Documentos::where('idAspirante',$id)->get();
        $f = Requisicion::all();
        $idA = $id;
        return view('postulacion')->with('pos',$pos)->with('r',$f)->with('id',$idA);
    }

    public function postular($id){
        $idA = Auth::user()->id;

        $idE = Requisicion::where('id',$id)->select('idEmpresa')->get();
        $idR = Requisicion::where('id',$id)->select('id')->get();
        $doc = Documentos::where('idRequisicion',$id)->where('idAspirante',$idA)->get();
        $num = count($doc);

        $cad = UsuarioRe::where('idRequi',$id)->where('idUsuario',$idA)->get();
        $num2 = count($cad);

        if($num2 > 0){

        }else{
                    
        $combi = new UsuarioRe();
        //Nueva tabla
        $combi->idUsuario = $idA;
        $idEm = json_decode($idE);
        $combi->idEmpresa = $idEm[0]->idEmpresa;
        $combi->idRequi = $id;
        $combi->save();
        }

        if($num > 0){

        }else{
        $doc = new Documentos();
        $doc->idRequisicion = $id;
        $doc->idAspirante = $idA;
        $doc->actaNacimiento = '';
        $doc->estatusActa = 'Sin Documento';
        $doc->comentarioActa = 'Sin Comentarios';
        $doc->curriculum = '';
        $doc->estatusCurriculum = 'Sin Documento';
        $doc->comCurriculum = 'Sin Comentarios';
        $doc->curp = '';
        $doc->estatusCurp = 'Sin Documento';
        $doc->comCurp = 'Sin Comentarios';
        $doc->nss = '';
        $doc->estatusNss = 'Sin Documento';
        $doc->comNss = 'Sin Comentarios';
        $doc->estudios = '';
        $doc->estatusEstudios = 'Sin Documento';
        $doc->comEstudios = 'Sin Comentarios';
        $doc->domicilio = '';
        $doc->estatusDomicilio = 'Sin Documento';
        $doc->comDomicilio = 'Sin Comentarios';
        $doc->cartaRecomendacion = '';
        $doc->ecartaRecomendacion = 'Sin Documento';
        $doc->ccartaRecomendacion = 'Sin Comentarios';
        $doc->ine = '';
        $doc->estatusine = 'Sin Documento';
        $doc->comentariosIne = 'Sin Comentarios';
        $doc->rfc = '';
        $doc->estatusRfc = 'Sin Documento';
        $doc->comentariosRfc = 'Sin Comentarios';
        $doc->medico = '';
        $doc->estatusMedico = 'Sin Documento';
        $doc->comentariosMedico = 'Sin Comentarios';
        $doc->postular = 'Postulado';
        $doc->save();


        }
        return redirect()->route('postulacion',$idA);
    }
    
    public function requisitos($id){
        $r = Requisicion::where('id',$id)->get();
        $requ = Requisicion::where('id',$id)->select('requisitos')->get();
        $s = Requisicion::select('id')->get();
        $array = json_decode($s);
        $c = count($s);
        $num = 0;

        for($i=0; $i<$c; $i++){
            if($array[$i]->id == $id){
                $num = $i;
                break;
            }
        }

        $requisi = explode(",", $requ[0]->pluck('requisitos')[$num]);

        $puesto = Requisicion::where('id',$id)->select('detallePuesto')->get();
        $pues = explode(",", $puesto[0]->pluck("detallePuesto")[$num]);

        return view('requisitos')->with('r',$r)->with('req',$requisi)->with('pu',$pues)->with('re',$requ)->with('a',$puesto)->with('s',$c);
    }
}
