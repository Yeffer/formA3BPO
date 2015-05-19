<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormTestValidation;
use App\Models\DatosUsuario;
use Request;
use Auth;
use Session;
use DB;

class WelcomeController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Welcome Controller
      |--------------------------------------------------------------------------
      |
      | This controller renders the "marketing page" for the application and
      | is configured to only allow guests. Like most of the other sample
      | controllers, you are free to modify or remove it as you desire.
      |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index() {
        return view('form.formulario');
        //return view('login.login');
    }
    
    public function SearchUser(){	
        $term =  Request::input('term');
        //$term = Input::get('term');
        
        
	$results = array();
	
	$queries = DB::table('usuario')
		->where('cedula', 'LIKE', '%'.$term.'%')		
		->get();
	
	foreach ($queries as $query)
	{
	    $results[] = [ 'value' => $query->cedula, 'id' => $query->id,'cedula' => $query->cedula,'apellido' => $query->apellido,'nombre' => $query->nombre,'cargo' => $query->cargo,'fechaNacimiento' => $query->fechaNacimiento,'fechaExpedicion' => $query->fechaExpedicion,'lugarExpedicion' => $query->lugarExpedicion,'genero' => $query->genero,'RH' => $query->RH,'EPS' => $query->EPS,'Pension' => $query->Pension,'direccion' => $query->direccion,'telefono1' => $query->telefono1,'telefono2' => $query->telefono2,'celular1' => $query->celular1,'celular2' => $query->celular2,'estadoCivil' => $query->estadoCivil,'barrio' => $query->barrio,'email' => $query->email,'profesion' => $query->profesion,'examenMedico' => $query->examenMedico,'referenciacion' => $query->referenciacion,'informePsicologico' => $query->informePsicologico,'entrevista1' => $query->entrevista1,'certificadosLaborales' => $query->certificadosLaborales,'certificadoEstudio' => $query->certificadoEstudio,'libretaMilitar' => $query->libretaMilitar,'fotocopiaCedula' => $query->fotocopiaCedula,'hojaVida' => $query->hojaVida,'certificadoEps' => $query->certificadoEps,'certificadoAfp' => $query->certificadoAfp,'certificadoPension' => $query->certificadoPension,'certificadoLaboral' => $query->certificadoLaboral,'pasadoJudicial' => $query->pasadoJudicial,'id_RRHH' => $query->id_RRHH,'fecha' => $query->fecha];
	}        
        return response()->json($results);
    }


    public function save() {
      
        $data = Request::input('data');
        
       
        
        if ( empty($data['cedula']) ) {
            Session::flash('error', 'El campo cedula esta vacio');
            return view('form.formulario');
        }
         if(!empty($data['id'])){
            $user = DatosUsuario::find($data['id']);            
        }else{
            $user = new DatosUsuario();
        }

        $user->cedula = $data['cedula'];
        $user->apellido = $data['apellido'];
        $user->nombre = $data['nombre'];
        $user->cargo = $data['cargo'];
        $user->fechaNacimiento = $data['fechaNacimiento'];
        $user->fechaExpedicion = $data['fechaExpedicion'];
        $user->genero = $data['genero'];
        $user->RH = $data['RH'];
        $user->EPS = $data['EPS'];
        $user->pension = $data['pension'];
        $user->direccion = $data['direccion'];
        $user->telefono1 = $data['telefono1'];
        $user->telefono2 = $data['telefono2'];
        $user->celular1 = $data['celular2'];
        $user->estadoCivil = $data['estadoCivil'];
        $user->barrio = $data['barrio'];
        $user->email = $data['email'];
        $user->profesion = $data['profesion'];               
        $user->examenMedico = $data['examenMedico'];
        $user->referenciacion = $data['referenciacion'];
        $user->informePsicologico = $data['informePsicologico'];
        $user->entrevista1 = $data['entrevista1'];
        $user->certificadosLaborales = $data['certificadosLaborales'];
        $user->certificadoEstudio = $data['certificadoEstudio'];
        $user->libretaMilitar = $data['libretaMilitar'];
        $user->pasadoJudicial = $data['pasadoJudicial'];
        $user->fotocopiaCedula = $data['fotocopiaCedula'];
        $user->hojaVida = $data['hojaVida'];
        $user->certificadoEps = $data['certificadoEps'];
        $user->certificadoAfp = $data['certificadoAfp'];        
        $user->certificadoPension = $data['certificadoPension'];
        $user->certificadoLaboral = $data['certificadoLaboral'];      
        $user->id_RRHH =  Auth::id();
        $user->save();
      
    }
}
