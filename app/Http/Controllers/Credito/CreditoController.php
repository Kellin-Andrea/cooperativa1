<?php

namespace App\Http\Controllers\Credito;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Alert;
class  CreditoController extends Controller {

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
      $sql = "SELECT * FROM tipo_credito";
        $objtipo_credito = \DB::select($sql);
        
        $sql = "SELECT * FROM periodo";
        $objperiodo= \DB::select($sql);
        
        $sql = "SELECT * FROM afiliado";
        $objafiliado= \DB::select($sql);
    return view("Modulos.Credito.credito.crear", compact('objtipo_credito','objperiodo','objafiliado'));
  }

  public function postCrear() {

    $datos          = \Request::all();
   
    $fecha_tramite    = $datos['fecha_tramite'];
    $nro_credito= $datos['nro_credito'];
    $tipo_credito_id= $datos['tipo_credito'];
    $plazo= $datos['plazo'];    
    $tasa= $datos['tasa'];
    $periodo_id = ['periodo'];
    $valor_credito= $datos['valor_credito'];
    $valor_interes= $datos['valor_interes'];    
    $saldo_credito= $datos['saldo_credito'];
    $afiliado_id= $datos['afiliado_id'];
//        dd($datos);
    \DB::insert(
      "INSERT INTO credito "
      . "( " 
      . " fecha_tramite,  "
      . " nro_credito,  "
      . " tipo_credito_id , "
      . " plazo,  "
      ." tasa,  "
      . " periodo_id,  "
      . " valor_credito , "
      . " valor_interes,  "
      ." saldo_credito,  "
      . " afiliado_id,  "
      . ") "
      . "VALUES (?,?,?,?,?,?,?,?,?,?)", array(
       $fecha_tramite,
       $nro_credito,
       $tipo_credito_id,
       $plazo,    
       $tasa,
       $periodo_id,
       $valor_credito,
       $valor_interes,
       $saldo_credito,
       $afiliado_id
    ));
    return \Redirect::to('credito/listar');
//        return view("Modulos.Produccion.Talla.listar", compact("objTalla"));
  }

  public function getListar() {
    $objcredito = \DB::select("SELECT * FROM credito");
    return view("Modulos.Credito.Credito.listar", compact("objcredito"));
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
