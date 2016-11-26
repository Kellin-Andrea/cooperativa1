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

  public function getEditar($id) {

    $sql              = "SELECT * FROM tipo_producto";
    $objTipoProductos = \DB::select($sql);

    $objTalla = \DB::select("SELECT * FROM talla WHERE tal_id = $id");
    return view("Modulos.Produccion.Talla.editar", compact("objTalla", 'objTipoProductos'));
  }

  public function postEditar() {
    $datos    = \Request::all();
    $objTalla = \DB::select("UPDATE talla SET tal_dimension = '" . $datos['dimension'] . "'  WHERE tal_id = " . $datos['id'] . "");
    return \Redirect::to('talla/listar');
  }

  public function getEliminar($id) {
    $objTalla = \DB::select("SELECT * FROM talla WHERE tal_id = $id");
    return view("Modulos.Produccion.Talla.eliminar", compact("objTalla"));
  }

  public function postEliminar() {
    $datos    = \Request::all();
    $objTalla = \DB::select("DELETE FROM talla WHERE tal_id = '" . $datos['id'] . "'");
    return \Redirect::to('talla/listar');
  }

  public function getDesactivar($id) {

    $sql       = "update talla set tal_estado=0 where tal_id=$id";
    $productos = \DB::select($sql);
    return Redirect::to(url('talla/listar'));
  }

  public function getActivar($id) {

    $sql       = "update talla set tal_estado=1 where tal_id=$id";
    $productos = \DB::select($sql);
    return Redirect::to(url('talla/listar'));
  }

}
