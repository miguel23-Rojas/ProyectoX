<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\Documentos;
use App\Models\Area;
use App\Models\Empresa;
use App\Models\Puesto;
use App\Models\Requisicion;
use App\Models\UsuarioRe;
use Illuminate\Support\Facades\Mail;
use App\Mail\Correo;
use App\EstadosValues\ValoresEstado;
//use App\Strategy\StrategyFollowInterface;
//use App\Strategy\Estados\EstadoRevision;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloreclutador',['only'=>'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $empres = Auth::user()->empresa;
        $area = Area::where('idEmpresa',$empres)->get();
        $puesto = Puesto::all();
        $requi = Requisicion::where('idEmpresa',$empres)->where('iactiva',1)->get();
        $usuarios = User::where('empresa', $empres)->where('tipoUsuario', 2)->get();

        return view('home')->with('usuarios',$usuarios)->with('id',$empres)->with('area',$area)->with('puesto',$puesto)->with('re',$requi);
    }

    public function getUsuario()
    {
        $usuario = Auth::user()->id;
        $doc = Documentos::where('idAspirante',$usuario)->get();
        $IdDoc = Documentos::where('idAspirante',$usuario)->select('id')->get();
        $empresas = Empresa::all();
        $estado = Auth::user()->estadoUsuario;
        $valor = $this->cambiarEstado($estado);

        if($valor == 'Aspirante'){
            return view($valor,$IdDoc)->with('doc',$doc)->with('em',$empresas);
        }
        else
        {
            return view($valor)->with('doc',$doc)->with('em',$empresas);
        }
    }

    public function aspirante($id){
        $usuarios = User::where('tipoUsuario', 2)->where('estadoUsuario','<>','Rechazado')->get();
        $doc = Documentos::where('idRequisicion',$id)->get();
        $d = UsuarioRe::where('idRequi', $id)->select('idUsuario')->get();
        return view('aspirantes.listaAs')->with('us',$usuarios)->with('doc',$doc)->with('id',$id)->with('a',$d);
    }

    public function correo(Request $request){
        $titulo = $request->get('t');
        $texto = $request->get('com');
        $id = $request->get('idA');
        $idR = $request->get('idR');

        $details=[
            'title' => $titulo,
            'body' => $texto
        ];

        $correo = User::where('id',$id)->select('email')->get();

        Mail::to($correo)->send(new Correo($details));
        return \Redirect::route('aspiranteL',['id'=>$idR])->with('message', 'Correo enviado con éxito');
    }

    public function cambiarEstado($valor){
        $state = $valor;
        $stateClass = ValoresEstado::STRATEGY[$state];
        return (new $stateClass)->getEstadoUsuario();
    }

    public function aspiranteDo($id){
        $doc = Documentos::where('id',$id)->get();
        $idr = Documentos::where('id',$id)->select('idRequisicion')->get();

        return view('usuario')->with('doc',$doc)->with('id',$idr);
    }
}
