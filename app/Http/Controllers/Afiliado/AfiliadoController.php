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

    public function postCrear() {



        $datos = \Request::all();


        $nro_documento = $datos['nro_documento'];
        $nombres = $datos['nombres'];
        $apellidos = $datos['apellidos'];
        $direccion = $datos['direccion'];
        $municipio_id = $datos['municipio_id'];
        $correo = $datos['correo'];
        $telefono = $datos['telefono'];
        $sexo = $datos['sexo'];
        $estado_civil_id = $datos['estado_civil_id'];
        $ocupacion_id = $datos['ocupacion_id'];
        $tipo_identificacion_id = $datos['tipo_identificacion_id'];
        $departamento_id = $datos['departamento_id'];
        $estudios_id = $datos['estudios_id'];


//dd($datos);



        $sql = DB::insert(
                        "INSERT INTO afiliado "
                        . "( "
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
                    $nro_documento,
                    $nombres,
                    $apellidos,
                    $direccion,
                    $telefono,
                    $municipio_id,
                    $correo,
                    $sexo,
                    $ocupacion_id,
                    $estado_civil_id,
                    $tipo_identificacion_id,
                    $departamento_id,
                    $estudios_id
        ));

        return \Redirect::to('afiliado/listar');
//        return view("Modulos.Produccion.Talla.listar", compact("objTalla"));
    }

    public function getListar() {
        $objafiliado = \DB::select("SELECT * FROM afiliado");
        return view("Modulos.Afiliado.Afiliado.listar", compact("objafiliado"));
    }

    public function getEditar($id) {
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
        return view("Modulos.Afiliado.Afiliado.editar", compact('afiliado', 'objmunicipio', 'objtipo_identificacion', 'objdepartamento', 'objestado_civil', 'objestudios', 'objocupacion'));
    }

    public function postEditar() {
        $datos = \Request::all();
        $objafiliado = \DB::select("UPDATE afiliado SET nro_documento ='{$datos['nro_documento']}',nombres ='{$datos['nombres']}',
        						apellidos ='{$datos['apellidos']}',direccion ='{$datos['direccion']}',telefono='{$datos['telefono']}', 
        						municipio_id='{$datos['municipio_id']}',sexo='{$datos['sexo']}', correo='{$datos['correo']}', 
        						tipo_identificacion_id='{$datos['tipo_identificacion_id']}',departamento_id='{$datos['departamento_id']}',estado_civil_id='{$datos['estado_civil_id']}',"
                        . "                                                                 ocupacion_id='{$datos['ocupacion_id']}',estudios_id='{$datos['estudios_id']}'
                                WHERE id='" . $datos['id'] . "'");
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
