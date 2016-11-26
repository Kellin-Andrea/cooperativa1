@extends('menu.estructura')
@section('content')

<!-- invocamos el  archivo con las validaciones del formulario "Editar persona" -->
@include('plantilla.validaciones.administracion.personaEditar')

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center> <h3 class="box-title"><i class="fa fa-users fa-2x"></i>Editar Afiliados</h3></center>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div><!-- /.box-header -->
                    <?php foreach ($objafiliado as $afiliado) { ?>
                        <form name="signupForm1" id="signupForm1" class="form-horizontal" method="POST" autocomplete="off" action="<?php echo url("afiliado/editar/") ?>">
                            <div class="box-body">
                                <input type="hidden" name="id" value="<?php echo $afiliado->id ?>"
                                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-xs-12">
                                    <h2 class="page-header">
                                        <i class="fa fa-user"></i><font><font>Informacion General
                                    </h2>
                                </div>


                                <div class="col-lg-6 form-group" >
                                    <label class="col-sm-3 control-label" for="tipo_identificacion_id">Identificacion</label>
                                    <div class="col-lg-9">
                                        <select  class="form-control select2-single" id="tipo_identificacion_id" name="tipo_identificacion_id" required>
                                            <option value="">Selecciona Tipo de identificacion</option>
                                            <?php
                                            foreach ($objtipo_identificacion as $tipo_identificacion):
                                                if ($tipo_identificacion->id == $afiliado->tipo_identificacion_id):
                                                    ?>
                                                    <option value="<?php echo $tipo_identificacion->id; ?>" selected><?php echo $tipo_identificacion->nombre; ?></option>
                                                <?php else: ?>
                                                    <option value="<?php echo $tipo_identificacion->id; ?>" ><?php echo $tipo_identificacion->nombre; ?></option>
                                                <?php
                                                endif;
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="nro_documento">Identificacion </label>
                                <div class="col-xs-9">
                                    <input type="number" class="form-control" name="nro_documento" id="nro_documento" placeholder="Digite su número de identificación sin puntos ni comas" onkeypress="return numeros(event)" required/>
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="nombres">Nombres </label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Digite los nombres" title="ejemplo: Juan Pablo" required/>
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="apellidos">Apellidos </label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Digite los Apellidos" title="ejemplo: Gomez Perez" required/>
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="direccion">Dirección </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Digite su dirección de domicilio" title="ejemplo: Diagonal 50 #50-50" required/>
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="telefono">Teléfono </label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Digite su número de teléfono" title="ejemplo: 5555555" required/>
                                </div>
                            </div>
                            <div class="col-lg-6 form-group" >
                                <label class="col-sm-3 control-label" for="departamento_id">Departamento</label>
                                <div class="col-lg-9">
                                    <select  class="form-control select2-single" id="departamento_id" name="departamento_id" required>
                                        <option value="">Seleccione un departamento</option>
                                        <?php
                                        foreach ($objdepartamento as $departamento):
                                            if ($departamento->id == $afiliado->departamento_id):
                                                ?>
                                                <option value="<?php echo $departamento->id; ?>" selected><?php echo $departamento->nombre; ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo $departamento->id; ?>" ><?php echo $departamento > nombre; ?></option>
                                            <?php
                                            endif;
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 form-group">
                        <label class="col-sm-3 control-label" for="sexo">Genero </label>
                        <div class="col-sm-9">
                            <select class="form-control select2-single" name="sexo" id="sexo" required>
                                <option value="">Selecciona genero</option>

                                <option value="true" selected ="<?php echo isset($datos) == true ? '' : '' ?>"><?php echo ('femenino') ?> </option>
                                <option value="false"><?php echo ('masculino') ?></option>

                            </select>
                        </div>
                    </div>


                    <div class="col-lg-6 form-group">
                        <label class="col-sm-3 control-label" for="municipio_id_fk">Municipio</label>
                        <div class="col-sm-9">
                            <select class="form-control Select2-single" name="municipio_id" id="municipio_id" required>
                                <option value="">Seleccione un municipio</option>
                                <?php
                                foreach ($objmunicipio as $municipio):
                                    if ($afiliado->municipio_id == $municipio->id):
                                        ?>
                                        <option value="<?php echo $municipio->id; ?>" selected><?php echo $municipio->nombre; ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo $municipio->municipio_id; ?>" ><?php echo $municipio->nombre; ?></option>
                                    <?php
                                    endif;
                                endforeach;
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 form-group">
                        <label class="col-sm-3 control-label" for="correo">Correo </label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" placeholder="tucorreo@ejemplo.com" title="Ingrese su correo electrónico" title="ejemplo: Sena@edu.co" class="span3" onblur="usu_c()"  title="tucorreo@dominio.com" id="correo"  name="correo"  onpaste="return false" required>
                        </div>
                    </div>

                    <div class="col-lg-6 form-group" >
                        <label class="col-sm-3 control-label" for="estado_civil_id">Estado Civil</label>
                        <div class="col-lg-9">
                            <select  class="form-control select2-single" id="estado_civil_id" name="estado_civil_id" required>
                                <option value="">Seleccione un estado civil</option>
                                <?php
                                foreach ($objestado_civil as $estado_civil):
                                    if ($estado_civil->id == $afiliado->estado_civil_id):
                                        ?>
                                        <option value="<?php echo $estado_civil->id; ?>" selected><?php echo $estado_civil->nombre; ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo $estado_civil->id; ?>" ><?php echo $estado_civil->nombre; ?></option>
                                    <?php
                                    endif;
                                endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 form-group" >
                    <label class="col-sm-3 control-label" for="ocupacion_id">Ocupacion</label>
                    <div class="col-lg-9">
                        <select  class="form-control select2-single" id="ocupacion_id_id" name="ocupacion_id" required>
                            <option value="">Seleccione una ocupacion</option>
                            <?php
                            foreach ($objocupacion as $ocupacion):
                                if ($ocupacion->id == $afiliado->ocupacion_id):
                                    ?>
                                    <option value="<?php echo $ocupacion->id; ?>" selected><?php echo $ocupacion->nombre; ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $ocupacion->id; ?>" ><?php echo $ocupacion->nombre; ?></option>
                                <?php
                                endif;
                            endforeach;
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        
        <div class="col-lg-6 form-group" >
                                    <label class="col-sm-3 control-label" for="estudios_id">Estudios</label>
                                    <div class="col-lg-9">
                                        <select  class="form-control select2-single" id="estudios_id" name="estudios_id" required>
                                            <option value="">Seleccione un estudio</option>
                                            <?php
                                            foreach ($objestudios as $estudios):
                                                if ($estudios->id == $afiliado->estudios_id):
                                                    ?>
                                                    <option value="<?php echo $estudios->id; ?>" selected><?php echo $estudios->nombre; ?></option>
                                                <?php else: ?>
                                                    <option value="<?php echo $estudios->id; ?>" ><?php echo $estudios->nombre; ?></option>
                                                <?php
                                                endif;
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>


            <div class="box-footer">
                <button type="submit" class="btn btn-primary" >Actualizar</button>
            </div>
        <?php } ?>  
        </form><!-- /.form-->
    </div><!-- /.box box-primary -->
</div><!-- /.col-md-12 -->
</div><!-- /.box-body -->
</div><!-- /.box-->
</section>
@endsection