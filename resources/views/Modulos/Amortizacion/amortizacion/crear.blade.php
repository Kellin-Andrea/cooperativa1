@extends('menu.estructura')
@section('content')

<!-- invocamos el  archivo con las validaciones del formulario "Crear persona" -->
@include('plantilla.validaciones.administracion.personaCrear')
<div class="box">
    <div class="box-header with-border">
        <center> <h3 class="box-title"><i class="fa fa-users fa-users"></i> REGISTRO DE AMORTIZACIONES</h3></center>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">

                <form name="signupForm1" id="signupForm1" class="form-horizontal" method="post" autocomplete="off" action="<?php echo url('amortizacion/crear') ?>">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="box-body">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class=""></i><font><font>Informacion General
                            </h2>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="nro_cuota">Numero cuota </label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="nro_cuota" id="nro_cuota" placeholder="nro_cuota" onkeypress="return numeros(event)" required/>
                            </div>
                        </div>
                      
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="fecha_cuota">Fecha cuota </label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="fecha_cuota" id="fecha_cuota" placeholder="fecha_cuota" onkeypress="return numeros(event)"required/>
                            </div>
                        </div>
                        
                          <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="capital">Capital</label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="capital" id="nro_cuota" placeholder="capital" onkeypress="return numeros(event)" required/>
                            </div>
                        </div>
                        
                          <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="cuota_capital">Cuota capital</label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="cuota_capital" id="cuota_capital" placeholder="cuota capital" onkeypress="return numeros(event)" required/>
                            </div>
                        </div>
                        
                           <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="cuota_interes">Cuota interes</label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="cuota_interes" id="cuota_interes" placeholder="cuota interes" onkeypress="return numeros(event)" required/>
                            </div>
                        </div>
                        
                           <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="valor_cuota">Valor cuota </label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="valor_cuota" id="valor_cuota" placeholder="valor cuota l" onkeypress="return numeros(event)" required/>
                            </div>
                        </div>
                       
                        <div class="col-lg-12">
                            <div class="box-footer">
                                <input type="submit" class="btn btn-success" onclick="valida_envia()" value="Registrar" id="registrar" />               
                                <input type="reset" class="btn btn-primary" value="Limpiar" />
                            </div>
                        </div>
                    </div>
                </form><!-- /.form-->
            </div><!-- /.box box-primary -->
        </div><!-- /.col-md-12 -->
    </div><!-- /.box-body -->
</div><!-- /.box-->

@endsection
