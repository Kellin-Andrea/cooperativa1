<?php

namespace App\Http\Controllers\Afiliado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Alert;

class AfiliadoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct() {
        //$this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCrear() {
        $sql = "SELECT * FROM municipio";
        $objmunicipio = \DB::select($sql);

        $sql = "SELECT * FROM departamento";
        $objdepartamento = \DB::select($sql);

        $sql = "SELECT * FROM tipo_identificacion";
        $objtipo_identificacion = \DB::select($sql);

        $sql = "SELECT * FROM estado_civil";
        $objestado_civil = \DB::select($sql);

        $sql = "SELECT * FROM ocupacion";
        $objocupacion = \DB::select($sql);

        $sql = "SELECT * FROM estudios";
        $objestudios = \DB::select($sql);

        return view("Modulos.Afiliado.afiliado.crear", compact('objmunicipio', 'objtipo_identificacion', 'objdepartamento', 'objestado_civil', 'objocupacion', 'objestudios'));
    }

    public function postCrear(Request $request) {

        $id = "DEFAULT";
        $nro_documento = $request->input('nro_documento');
        
        var_dump($request);
        
        
        $nombres = $request->input('nombres');
           var_dump($request);
        $apellidos = $request->input('apellidos');
           var_dump($request);
        $direccion = $request->input('direccion');
           var_dump($request);
        $telefono = $request->input('telefono');
           var_dump($request);
        $municipio_id = $request->input('municipio_id');
           var_dump($request);
        $correo = $request->input('correo');
           var_dump($request);
        $sexo = $request->input('sexo');
           var_dump($request);
        $tipo_identificacion_id = $request->input('tipo_identificacion_id');
           var_dump($request);
        $departamento_id = $request->input('departamento_id');
           var_dump($request);
        $estado_civil_id = $request->input('estado_civil_id');
           var_dump($request);
        $ocupacion_id = $request->input('ocupacion_id');
           var_dump($request);
        $estudios_id = $request->input('estudios_id');
           var_dump($request);


        $sql = DB::insert(
                        "INSERT INTO afiliado "
                        . "( "
                        . " id, "
                        . " nro_documento, "
                        . " nombres, "
                        . " apellidos, "
                        . " direccion, "
                        . " municipio_id, "
                        . " correo, "
                        . " telefono, "
                        . " sexo, "
                        . " estado_civil_id, "
                        . " ocupacion_id, "
                        . " tipo_identificacion_id, "
                        . " departamento_id, "
                        . " estudios_id "
                        . ") "
                        . "VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)", array(
                    $telefono,
                    $nro_documento,
                    $nombres,
                    $apellidos,
                    $direccion,
                    $municipio_id,
                    $correo,
                    $sexo,
                    $ocupacion_id,
                    $estado_civil_id,
                    $tipo_identificacion_id,
                    $departamento_id,
                    $estudios_id
        ));
        if ($sql <> 0):
            Alert::success('El Registro Fue Exitoso..!!!')->persistent('Cerrar')->autoclose(3000);
            return Redirect::to(url('afiliado/listar'));
        else:
            echo "El Registro No Se Guardo";
        endif;
    }

    public function getListar() {
        $sql = "SELECT * FROM  afiliado ";
        $afiliado = \DB::select($sql);

        return view('Modulos.Afiliado.afiliado.listar', compact("afiliado"));
    }

    public function getVer($per_id) {

        $sql = "SELECT * FROM ciudad";
        $objCiudad = \DB::select($sql);

        $sql = "SELECT * FROM tipo_cliente";
        $objTipoCliente = \DB::select($sql);

        $sql = "select * from persona where per_id=$per_id";
        $personas = \DB::select($sql);
        return view("Modulos.Administracion.persona.show", compact('personas', 'objCiudad', 'objTipoCliente'));
    }

    public function getEditar($per_id) {
        $sql = "SELECT * FROM ciudad";
        $objCiudad = \DB::select($sql);

        $sql = "SELECT * FROM tipo_cliente";
        $objTipoCliente = \DB::select($sql);

        $sql = "select * from persona where per_id=$per_id";
        $personas = \DB::select($sql);
        return view("Modulos.Administracion.persona.editar", compact('personas', 'objCiudad', 'objTipoCliente'));
    }

    public function postEditar() {
        $datos = \Request::all();
        $personas = \DB::select("UPDATE persona SET per_identificacion ='{$datos['per_identificacion']}',per_nombres ='{$datos['per_nombres']}',
        						per_apellidos ='{$datos['per_apellidos']}',per_direccion ='{$datos['per_direccion']}',per_telefono='{$datos['per_telefono']}', 
        						ciu_id='{$datos['ciu_id']}',per_fecha_nacimiento='{$datos['per_fecha_nacimiento']}', per_correo='{$datos['per_correo']}', 
        						tip_cli_id='{$datos['tip_cli_id']}' 
                                WHERE per_id='" . $datos['per_id'] . "'");

        Alert::success('Persona Actualizada Con exito!')->persistent('Cerrar')->autoclose(3000);

        return Redirect::to(url('persona/listar'));
    }

    public function getDesactivar($per_id) {

        $sql = "UPDATE persona SET per_estado=0 WHERE per_id=$per_id";
        $personas = \DB::select($sql);
        return Redirect::to(url('persona/listar'));
    }

    public function getActivar($per_id) {

        $sql = "UPDATE persona SET per_estado=1 WHERE per_id=$per_id";
        $personas = \DB::select($sql);
        return Redirect::to(url('persona/listar'));
    }

}

?>
