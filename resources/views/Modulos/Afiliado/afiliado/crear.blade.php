@extends('menu.estructura')
@section('content')

<!-- invocamos el  archivo con las validaciones del formulario "Crear persona" -->
@include('plantilla.validaciones.administracion.personaCrear')
<div class="box">
    <div class="box-header with-border">
        <center> <h3 class="box-title"><i class="fa fa-users fa-users"></i> REGISTRO DE AFILIADOS</h3></center>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">

                <form name="signupForm1" id="signupForm1" class="form-horizontal" method="post" autocomplete="off" action="<?php echo url('afiliado/crear') ?>">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="box-body">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class=""></i><font><font>Informacion General
                            </h2>
                        </div>
                        
                         <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="tip_cli_id">Tipo  identificacion</label>
                            <div class="col-sm-9">
                                <select class="form-control select2-single" name="tip_iden_id" id="tip_iden_id" required>
                                    <option value="">Selecciona Tipo Identificacion</option>
                                    <?php foreach ($objtipo_identificacion as $tipo_identificacion) { ?>
                                        <option value="<?php echo $tipo_identificacion->id ?>"><?php echo $tipo_identificacion->nombre; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="nro_documento">Identificacion </label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="nro_documento" id="nro_documento" placeholder="Digite su número de identificación sin puntos ni comas" onkeypress="return numeros(event)" required/>
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="per_nombres">Nombres </label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" name="per_nombres" id="per_nombres" placeholder="Digite los nombres" title="ejemplo: Juan Pablo" required/>
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="per_apellidos">Apellidos </label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" name="per_apellidos" id="per_apellidos" placeholder="Digite los Apellidos" title="ejemplo: Gomez Perez" required/>
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="per_direccion">Dirección </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="per_direccion" id="per_direccion" placeholder="Digite su dirección de domicilio" title="ejemplo: Diagonal 50 #50-50" required/>
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="per_telefono">Teléfono </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="per_telefono" id="per_telefono" placeholder="Digite su número de teléfono" title="ejemplo: 5555555" required/>
                            </div>
                        </div>
                        
                         <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="tip_cli_id">Departamento </label>
                            <div class="col-sm-9">
                                <select class="form-control select2-single" name="tip_cli_id" id="tip_cli_id" required>
                                    <option value="">Selecciona Departamento</option>
                                    <?php foreach ($objdepartamento as $departamento) { ?>
                                        <option value="<?php echo $departamento->id ?>"><?php echo $departamento->nombre; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        
                           <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="tip_cli_id">Genero </label>
                            <div class="col-sm-9">
                                <select class="form-control select2-single" name="tip_cli_id" id="tip_cli_id" required>
                                    <option value="">Selecciona genero</option>
          
                                      <option value="true" selected ="<?php echo isset($datos )== true ? '' : ''?>"><?php echo ('femenino') ?> </option>
                                      <option value="false"><?php echo ('masculino')?></option>
                                   
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="ciu_id">Municipio</label>
                            <div class="col-sm-9">
                                <select class="form-control select2-single" name="ciu_id" id="ciu_id" placeholder="Ciudad">
                                    <option value="">Selecciona Municipio</option>
                                    <?php foreach ($objmunicipio as $municipio) { ?>
                                        <option value="<?php echo $municipio->id ?>"><?php echo $municipio->nombre ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        
                 
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="per_correo">Correo </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="tucorreo@ejemplo.com" title="Ingrese su correo electrónico" title="ejemplo: Sena@edu.co" class="span3" onblur="usu_c()"  title="tucorreo@dominio.com" id="per_correo"  name="per_correo"  onpaste="return false" required>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="tip_cli_id">Estado Civil </label>
                            <div class="col-sm-9">
                                <select class="form-control select2-single" name="tip_cli_id" id="tip_cli_id" required>
                                    <option value="">Selecciona Estado civil</option>
                                    <?php foreach ($objestado_civil as $estado_civil) { ?>
                                        <option value="<?php echo $estado_civil->id ?>"><?php echo $estado_civil->nombre; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        
                         <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="tip_cli_id">Ocupacion </label>
                            <div class="col-sm-9">
                                <select class="form-control select2-single" name="tip_cli_id" id="tip_cli_id" required>
                                    <option value="">Selecciona ocupacion</option>
                                    <?php foreach ($objocupacion as $ocupacion) { ?>
                                        <option value="<?php echo $ocupacion->id ?>"><?php echo $ocupacion->nombre; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        
                         <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="tip_cli_id">Estudios </label>
                            <div class="col-sm-9">
                                <select class="form-control select2-single" name="tip_cli_id" id="tip_cli_id" required>
                                    <option value="">Selecciona Estudios</option>
                                    <?php foreach ($objestudios as $estudios) { ?>
                                        <option value="<?php echo $estudios->id ?>"><?php echo $estudios->nombre; ?></option>
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
