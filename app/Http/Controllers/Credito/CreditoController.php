<?php

namespace App\Http\Controllers\Credito;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Alert;

class CreditoController extends Controller {

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
        $sql = "SELECT * FROM periodo";
        $objperiodo = \DB::select($sql);

        $sql = "SELECT * FROM tipo_credito";
        $objtipocredito = \DB::select($sql);

        $sql = "SELECT * FROM afiliado";
        $objafiliado = \DB::select($sql);

      $sql = "SELECT * FROM amortizacion";
        $objamortizacion = \DB::select($sql);


        return view("Modulos.Credito.credito.crear", compact('objperiodo', 'objtipocredito', 'objafiliado','objamortizacion'));
    }

    public function postCrear() {



        $datos = \Request::all();


        $fecha_tramite = $datos['fecha_tramite'];
        $nro_credito = $datos['nro_credito'];
        $periodo_id = $datos['periodo_id'];
        $plazo = $datos['plazo'];
        $saldo_credito = $datos['saldo_credito'];
        $saldo_interes = $datos['saldo_interes'];
        $tasa = $datos['tasa'];
        $tipo_credito_id = $datos['tipo_credito_id'];
        $valor_credito = $datos['valor_credito'];
         $amortizacion_id = $datos['amortizacion_id'];
        $valor_interes = $datos['valor_interes'];
     


//dd($datos);



        $sql = DB::insert(
                        "INSERT INTO credito "
                        . "( "
                        . " fecha_tramite, "
                        . " nro_credito, "
                        . " periodo_id, "
                        . " plazo, "
                        . " saldo_credito, "
                        . " saldo_interes, "
                        . " tasa, "
                        . " tipo_credito_id, "
                        . " valor_credito, "
                       . " amortizacion_id, "
                        . " valor_interes "
                      
                
                        . ") "
                        . "VALUES (?,?,?,?,?,?,?,?,?,?,?)", array(
                    $fecha_tramite,
                    $nro_credito,
                    $periodo_id,
                    $plazo,
                    $saldo_credito,
                    $saldo_interes,
                    $tasa,
                    $tipo_credito_id,
                    $valor_credito,
                     $amortizacion_id,
                    $valor_interes,
                    
        ));

        return \Redirect::to('credito/listar');
//        return view("Modulos.Produccion.Talla.listar", compact("objTalla"));
    }

    public function getListar() {
        $objcredito = \DB::select("SELECT * FROM credito");
        return view("Modulos.Credito.Credito.listar", compact("objcredito"));
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
        return view("Modulos.Afiliado.Afiliado.todo", compact("objsaldos"));
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

    public function getDessativar($id) {

        $sql = "DELETE credito WHERE id=$id";
        $credito= \DB::select($sql);
        return Redirect::to(url('credito/listar'));
    }

    public function getActivar($id) {

        $sql = "UPDATE credito SET estado=1 WHERE per_id=$id";
        $credito = \DB::select($sql);
        return Redirect::to(url('credito/listar'));
    }

}

?>
