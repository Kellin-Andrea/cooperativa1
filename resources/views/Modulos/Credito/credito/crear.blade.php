@extends('menu.estructura')
@section('content')

<!-- invocamos el  archivo con las validaciones del formulario "Crear persona" -->
@include('plantilla.validaciones.administracion.personaCrear')
<div class="box">
    <div class="box-header with-border">
        <center> <h3 class="box-title"><i class="fa fa-users fa-users"></i> REGISTRO DE CREDITO</h3></center>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">

                <form name="signupForm1" id="signupForm1" class="form-horizontal" method="post" autocomplete="off" action="<?php echo url('credito/crear') ?>">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="box-body">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class=""></i><font><font>Informacion General
                            </h2>
                        </div>
                          <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="fecha_tramite">Fecha tramite </label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="fecha_tramite" id="fecha_tramite" placeholder="fecha_tramite" onkeypress="return numeros(event)"required/>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="nro_credito">Numero credito </label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="nro_credito" id="nro_credito" placeholder="nro credito" onkeypress="return numeros(event)" required/>
                            </div>
                        </div>
                        
                               <div class="col-lg-6 form-group">
                                    <label class="col-sm-3 control-label" for="tipo_credito_id_fk">Tipo credito</label>
                                    <div class="col-sm-9">
                             <select class="form-control select2-single" name="credito_id" id="credito_id" placeholder="Credito">
                                    <option value="">Selecciona un tipo credito</option>
                                    <?php foreach ($objtipo_credito as $credito) { ?>
                                        <option value="<?php echo $credito->id ?>"><?php echo $credito->nombre ?></option>
                                    <?php } ?>
                                </select>
                                    </div>
                                </div>
                      
                       <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="plazo">Plazo</label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="plazo" id="plazo" placeholder="plazo" onkeypress="return numeros(event)" required/>
                            </div>
                        </div>
                        
                         <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="tasa">Tasa</label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="tasa" id="tasa" placeholder="tasa" onkeypress="return numeros(event)" required/>
                            </div>
                        </div>
                        
                               <div class="col-lg-6 form-group">
                                    <label class="col-sm-3 control-label" for="periodo_id_fk">Periodo</label>
                                    <div class="col-sm-9">
                                   <select class="form-control select2-single" name="periodo_id" id="periodo_id" placeholder="Periodo">
                                    <option value="">Selecciona un periodo</option>
                                    <?php foreach ($objperiodo as $periodo) { ?>
                                        <option value="<?php echo $periodo->id ?>"><?php echo $periodo->nombre ?></option>
                                    <?php } ?>
                                </select>
                                    </div>
                                </div>
                        
                          <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="valor_credito">Valor credito</label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="valor_credito" id="valor_credito" placeholder="valor_creditol" onkeypress="return numeros(event)" required/>
                            </div>
                        </div>
                        
                          <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="valor_interes">Valor_interes</label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="valor_interes" id="valor_interes" placeholder="valor_interes" onkeypress="return numeros(event)" required/>
                            </div>
                        </div>
                        
                           <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="saldo_credito">Saldo_credito</label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="saldo_credito" id="saldo_credito" placeholder="saldo credito" onkeypress="return numeros(event)" required/>
                            </div>
                        </div>
                        
                           <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="saldo_interes">Saldo_interes </label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="saldo_interes" id="valor_cuota" placeholder="saldo interes" onkeypress="return numeros(event)" required/>
                            </div>
                        </div>
                        
                               <div class="col-lg-6 form-group">
                                    <label class="col-sm-3 control-label" for="afiliado_id_fk">Afiliado</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2-single" name="afiliado_id" id="afiliado_id" placeholder="Afiliado">
                                    <option value="">Selecciona un afiliado</option>
                                    <?php foreach ($objafiliado as $afiliado) { ?>
                                        <option value="<?php echo $afiliado->id ?>"><?php echo $afiliado->nombre ?></option>
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
