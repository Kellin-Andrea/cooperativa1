<?php

namespace App\Http\Controllers\Transaccion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Alert;
class  TransaccionController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
   public function __construct() {
    //	$this->middleware('guest');
  }

  /**
   * Show the application welcome screen to the user.
   *
   * @return Response
   */
  public function getIndex() {
    
  }

  public function getCrear() {
      $sql = "SELECT * FROM tipo_transaccion";
        $objtipotransaccion = \DB::select($sql);
        
     
        
        $sql = "SELECT * FROM afiliado";
        $objafiliado= \DB::select($sql);
        
    return view("Modulos.Transaccion.transaccion.crear", compact('objtipotransaccion','objafiliado'));
  }

  public function postCrear() {

    $datos          = \Request::all();
   
    $fecha_movimiento    = $datos['fecha_movimiento'];
    $nro_credito= $datos['nro_credito'];
    $tipo_transaccion_id= $datos['tipo_transaccion_id'];
    $cuota_pago= $datos['cuota_pago'];    
    $valor_capital= $datos['valor_capital'];
    $valor_interes= $datos['valor_interes'];    
    $afiliado_id= $datos['afiliado_id'];
     // dd($datos);
    \DB::insert(
      "INSERT INTO transaccion "
      . "(fecha_movimiento, nro_credito, tipo_transaccion_id, cuota_pago, valor_capital, valor_interes, afiliado_id ) "
      . "VALUES (?,?,?,?,?,?,?)", array(
       $fecha_movimiento,
       $nro_credito,
       $tipo_transaccion_id,
       $cuota_pago,    
       $valor_capital,
       $valor_interes,
       $afiliado_id
    ));
    return \Redirect::to('transaccion/listar');
//        return view("Modulos.Produccion.Talla.listar", compact("objTalla"));
  }

  public function getListar() {
    $objtransaccion = \DB::select("SELECT * FROM transaccion");
    return view("Modulos.Transaccion.Transaccion.listar", compact("objtransaccion"));
  }
  
      public function getMovimientos() {
        $objmovimientos= \DB::select("SELECT nro_documento,nombres,apellidos, fecha_movimiento,nombre,"
                . "                                                   cuota_pago,valor_capital,valor_interes from afiliado,transaccion,"
                . "                                                   tipo_transaccion WHERE transaccion.afiliado_id=afiliado.id AND "
                . "                                                  transaccion.tipo_transaccion_id = tipo_transaccion.id");
        return view("Modulos.Transaccion.Transaccion.movimientos", compact("objmovimientos"));
    }

  public function getEditar($id) {

    $sql      = "SELECT * FROM  tipo_transaccion";
    $objtipotransaccion = \DB::select($sql);

    $sql      = "SELECT * FROM afiliado";
    $objafiliado = \DB::select($sql);

    $sql       = "select * from transaccion where id=$id";
    $transaccion= \DB::select($sql);
    return view("Modulos.Transaccion.Transaccion.editar", compact('transaccion', 'objafiliado', 'objtipotransaccion'));
  }


  public function getDesactivar($id) {

    $sql       = "update transacion set estado=0 where id=$id";
    $transacion = \DB::select($sql);
    return Redirect::to(url('transacion/listar'));
  }

  public function getActivar($id) {

    $sql       = "update transaccion set estado=1 where id=$id";
    $transacion = \DB::select($sql);
    return Redirect::to(url('talla/listar'));
  }

}
