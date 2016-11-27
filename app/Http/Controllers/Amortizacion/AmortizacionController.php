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
  public function getIndex(Request $request) {
      

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
  
    public function getAmortiza() {
        $objamortiza = \DB::select("SELECT nro_cuota,fecha_cuota,capital,valor_cuota,cuota_capital,cuota_interes,
                                                                  plazo,periodo_id,valor_interes from amortizacion,credito  
                                                                  where credito.amortizacion_id =amortizacion.id
");
        return view("Modulos.Amortizacion.Amortizacion.amortiza", compact("objamortiza"));
    }
  public function getEliminar($id) {
    $objamotizacion = \DB::select("SELECT * FROM amortizacion WHERE id = $id");
    return view("Modulos.Amortizacion.Amortizacion.eliminar", compact("objamortizacion"));
  }

  public function postEliminar() {
    $datos    = \Request::all();
    $objamortizacion = \DB::select("DELETE FROM amortizacion WHERE id = '" . $datos['id'] . "'");
    return \Redirect::to('amortizacion/listar');
  }

  public function getDesactivar($id) {

    $sql       = "update amortizacion set estado=1 where id=$id";
    $amortizacion = \DB::select($sql);
    return Redirect::to(url('amortizacion/listar'));
  }

  public function getActivar($id) {

    $sql       = "update amortizacion set estado=1 where id=$id";
    $amortizacion = \DB::select($sql);
    return Redirect::to(url('amortizacion/listar'));
  }
  
    public function search($search){
        $search = urldecode($search);
        $datos =DB::select("SELECT * FROM amortizacion")
                ->where('datos', 'LIKE', '%'.$search.'%')
                ->orderBy('id', 'nro_cuota')
                ->get();
        
        if (count($datos) == 0){
            return View('amortizacion.search')
            ->with('message', 'No hay resultados que mostrar')
            ->with('search', $search);
        } else{
            return View('home.search')
            ->with('datos', $datos)
            ->with('search', $search);
        }
    }
}
