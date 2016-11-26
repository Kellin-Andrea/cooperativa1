@extends('menu.estructura')
@section('content')

<!-- invocamos el  archivo con las validaciones del formulario "Crear persona" -->
@include('plantilla.validaciones.administracion.personaCrear')
<div class="box">
    <div class="box-header with-border">
        <center> <h3 class="box-title"><i class="fa fa-users fa-users"></i> REGISTRO DE  TRANSACCION</h3></center>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">

                <form name="signupForm1" id="signupForm1" class="form-horizontal" method="post" autocomplete="off" action="<?php echo url('transaccion/crear') ?>">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="box-body">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class=""></i><font><font>Informacion General
                            </h2>
                        </div>
                          <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="fecha_movimiento">Fecha movimiento </label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="fecha_movimiento" id="fecha_movimiento" placeholder="fecha movimiento" onkeypress="return numeros(event)"required/>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="nro_credito">Numero credito </label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="nro_credito" id="nro_credito" placeholder="nro credito" onkeypress="return numeros(event)" required/>
                            </div>
                        </div>
                        
                               <div class="col-lg-6 form-group">
                                    <label class="col-sm-3 control-label" for="tipo_transaccion_id_fk">Tipo transaccion</label>
                                    <div class="col-sm-9">
                             <select class="form-control select2-single" name="tipo_transaccion_id" id="tipo_transaccion_id" placeholder="Credito">
                                    <option value="">Selecciona un tipo transaccion</option>
                                    <?php foreach ($objtipotransaccion as $tipotransaccion) { ?>
                                        <option value="<?php echo $tipotransaccion->id ?>"><?php echo $tipotransaccion->nombre ?></option>
                                    <?php } ?>
                                </select>
                                    </div>
                                </div>
                     
                  
                          <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="valor_capital">Valor capital</label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="valor_capital" id="valor_credito" placeholder="valor_capital" onkeypress="return numeros(event)" required/>
                            </div>
                        </div>
                        
                              <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="cuota_pago">Cuota_pago</label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="cuota_pago" id="cuota_pago" placeholder="cuota_pago" onkeypress="return numeros(event)" required/>
                            </div>
                        </div>
                        
                          <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="valor_interes">Valor_interes</label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="valor_interes" id="valor_interes" placeholder="valor_interes" onkeypress="return numeros(event)" required/>
                            </div>
                        </div>

                        
                               <div class="col-lg-6 form-group">
                                    <label class="col-sm-3 control-label" for="afiliado_id_fk">Afiliado</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2-single" name="afiliado_id" id="afiliado_id" placeholder="Afiliado">
                                    <option value="">Selecciona un afiliado</option>
                                    <?php foreach ($objafiliado as $afiliado) { ?>
                                        <option value="<?php echo $afiliado->id ?>"><?php echo $afiliado->nombres ?></option>
                                    <?php } ?>
                                </select>
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
