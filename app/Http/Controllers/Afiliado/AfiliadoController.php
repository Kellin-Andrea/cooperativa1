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
        $telefono = $datos['telefono'];
        $correo = $datos['correo'];
        $sexo = $datos['sexo'];
        $tipo_identificacion_id = $datos['tipo_identificacion_id'];
        $departamento_id = $datos['departamento_id'];
        $municipio_id = $datos['municipio_id'];
        $estado_civil_id = $datos['estado_civil_id'];
        $ocupacion_id = $datos['ocupacion_id'];
        $estudios_id = $datos['estudios_id'];


        //dd($datos);



        \DB::insert(
                "INSERT INTO afiliado "
                . "( "
                . " nro_documento, "
                . " nombres, "
                . " apellidos, "
                . " direccion, "
                . " correo, "
                . " sexo, "
                . " telefono, "
                . " tipo_identificacion_id, "
                . " departamento_id, "
                . " municipio_id, "
                . " estado_civil_id, "
                . " ocupacion_id, "
                . " estudios_id "
                . ") "
                . "VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)", array(
            $nro_documento,
            $nombres,
            $apellidos,
            $direccion,
            $correo,
            $sexo,
            $telefono,
            $tipo_identificacion_id,
            $departamento_id,
            $municipio_id,
            $estado_civil_id,
            $ocupacion_id,
            $estudios_id,
        ));

        return \Redirect::to('afiliado/listar');
//        return view("Modulos.Produccion.Talla.listar", compact("objTalla"));
    }

    public function getListar() {
        $objafiliado = \DB::select("SELECT * FROM afiliado");
        return view("Modulos.Afiliado.Afiliado.listar", compact("objafiliado"));
    }

    public function getTodo() {
        $objtodo = \DB::select("SELECT nombre,nro_documento,nombres,apellidos,correo,telefono,"
                        . " fecha_tramite,nro_credito,saldo_credito,saldo_interes from afiliado,"
                        . " tipo_identificacion,credito WHERE credito.afiliado_id=afiliado.id AND "
                        . "afiliado.tipo_identificacion_id = tipo_identificacion.id");
        return view("Modulos.Afiliado.Afiliado.todo", compact("objtodo"));
    }

    public function getSaldo() {
        $objsaldos = \DB::select("SELECT nro_documento,nombres,apellidos, nro_credito,"
                        . "tipo_credito.nombre,valor_credito, saldo_credito,"
                        . "                                             saldo_interes from afiliado,credito,tipo_credito "
                        . "                                             WHERE credito.afiliado_id=afiliado.id "
                        . "                                             AND credito.tipo_credito_id = tipo_credito.id");
        return view("Modulos.Afiliado.Afiliado.saldo", compact("objsaldos"));
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

        $sql = "select * from afiliado where id=$id";
        $afiliado = \DB::select($sql);

        return view("Modulos.Afiliado.Afiliado.editar", compact('afiliado', 'objmunicipio', 'objtipo_identificacion', 'objdepartamento', 'objestado_civil', 'objestudios', 'objocupacion'));
    }

    public function postEditar() {
        $datos = \Request::all();
        $afiliado = \DB::select("UPDATE afiliado SET        nro_documento = '" . $datos['nro_documento'] . "', nombres='" . $datos['nombres'] . "', apellidos='" . $datos['apellidos'] . "', direccion='" . $datos['direccion'] . "', "
                        . "                                                                   telefono='" . $datos['telefono'] . "', correo='" . $datos['correo'] . "', sexo='" . $datos['sexo'] . "', tipo_identificacion_id='" . $datos['tipo_identificacion_id'] . "', municipio_id='" . $datos['municipio_id'] . "' "
                        . "                                                                    , departamento_id='" . $datos['departamento_id'] . "', estado_civil_id='" . $datos['estado_civil_id'] . "' , ocupacion_id='" . $datos['ocupacion_id'] . "' , estudios_id='" . $datos['estudios_id'] . "' WHERE id = " . $datos['id'] . "");
        return \Redirect::to('afiliado/listar');
    }

  public function getDesactivar($id) {

    $sql       = "update afiliado set  estado=0 where id=$id";
    $afiliado= \DB::select($sql);
    return Redirect::to(url('afiliado/listar'));
  }

  public function getActivar($id) {

    $sql       = "update afiliado set estado=1 where tal_id=$id";
    $afiliado = \DB::select($sql);
    return Redirect::to(url('afiliado/listar'));
  }

}
