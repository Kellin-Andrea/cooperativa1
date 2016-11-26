<?php

namespace App\Http\Controllers\Amortizacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Alert;
class AmortizacionController extends Controller {

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
    $sql              = "SELECT * FROM amortizacion";
    $objamortizacion= \DB::select($sql);

    return view("Modulos.Amortizacion.amortizacion.crear", compact('objamortizacion'));
  }

  public function postCrear() {

    $datos          = \Request::all();
   
    $nro_cuota     = $datos['nro_cuota'];
    $fecha_cuota= $datos['fecha_cuota'];
    $capital= $datos['capital'];
    $cuota_capital= $datos['cuota_capital'];    
    $cuota_interes= $datos['cuota_interes'];
    $valor_cuota= $datos['valor_cuota'];
//        dd($datos);
    \DB::insert(
      "INSERT INTO amortizacion "
      . "( " 
      . " nro_cuota,  "
      . " fecha_cuota,  "
      . " capital , "
      . " cuota_capital,  "
      ." cuota_interes,  "
      . " valor_cuota  "
      . ") "
      . "VALUES (?,?,?,?,?,?)", array(
      $nro_cuota,
      $fecha_cuota,
      $capital,
      $cuota_capital,
      $cuota_interes,
      $valor_cuota
    ));
    return \Redirect::to('amortizacion/listar');
//        return view("Modulos.Produccion.Talla.listar", compact("objTalla"));
  }

  public function getListar() {
    $objamortizacion = \DB::select("SELECT * FROM amortizacion");
    return view("Modulos.Amortizacion.amortizacion.listar", compact("objamortizacion"));
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
