@extends('menu.estructura')
@section('content')
<!-- invocamos el  archivo con las validaciones del formulario "Editar producto" -->

<!-- invocamos el  archivo con las validaciones del formulario "Editar persona" -->



<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center> <h3 class="box-title"><i class="fa fa-users fa-2x"></i>Editar Afiliado</h3></center>
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
                    <?php foreach ($afiliado as $afiliado) { ?>
                        <form name="signupForm1" id="signupForm1" class="form-horizontal" method="POST" autocomplete="off" action="<?php echo url("afiliado/editar/") ?>">
                            <div class="box-body">
                                <input type="hidden" name="id" value="<?php echo $afiliado->id ?>">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-xs-12">
                                    <h2 class="page-header">
                                        <i class="fa fa-user"></i><font><font>Informacion General
                                    </h2>
                                </div>

                                <div class="col-lg-6 form-group">
                                    <label class="col-sm-3 control-label" for="tipo_identificacion_id"></label>
                                    <div class="col-lg-9">
                                        <select class="form-control select2-single"   id="tipo_identificacion_id" name="tipo_identificacion_id">

                                            <option>Selecciona Tipo identificacion</option>
                                            <?php
                                            foreach ($objtipo_identificacion as $tipo_identificacion):
                                                if ($afiliado->tipo_identificacion_id == $tipo_identificacion->id):
                                                    ?>
                                                    <option value="<?php echo $tipo_identificacion->id ?>" selected><?php echo $tipo_identificacion->nombre ?></option>
                                                <?php else: ?>
                                                    <option value="<?php echo $tipo_identificacion->id ?>"><?php echo $tipo_identificacion->nombre ?></option>

                                                <?php
                                                endif;
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 form-group">
                                    <label class="col-sm-3 control-label" for="nro_documento">Identidicacion</label>
                                    <div class="col-xs-9">
                                        <input type="number" class="form-control" id="nro_documento" name="nro_documento" value="<?php echo $afiliado->nro_documento ?>" >
                                    </div>
                                </div>

                                <div class="col-lg-6 form-group">
                                    <label class="col-sm-3 control-label" for="nombres">Nombres</label>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $afiliado->nombres ?>">
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="apellidos">Apellidos</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $afiliado->apellidos ?>" >
                                </div>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="direccion">Direccion</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $afiliado->direccion ?>" >
                                </div>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="telefono">Telefono</label>
                                <div class="col-xs-9">
                                    <input type="number" class="form-control" id="telefono" name="telefono" value="<?php echo $afiliado->telefono ?>" >
                                </div>
                            </div>

                            <div class="col-lg-6 form-group" >
                                <label class="col-sm-3 control-label" for="departamento_id">Departamento</label>
                                <div class="col-lg-9">
                                    <select  class="form-control select2-single" id="departamento_id_id" name="departamento_id">
                                        <option>Selecciona Departamento</option>
                                        <?php
                                        foreach ($objdepartamento as $departamento):
                                            if ($afiliado->departamento_id == $departamento->id):
                                                ?>
                                                <option value="<?php echo $departamento->id ?>" selected><?php echo $departamento->nombre ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo $departamento->id ?>" selected><?php echo $departamento->nombre ?></option>
                                            <?php
                                            endif;
                                        endforeach;
                                        ?>
                                    </select>
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

                            <div class="col-lg-6 form-group" >
                                <label class="col-sm-3 control-label" for="municipio_id">Municipio</label>
                                <div class="col-lg-9">
                                    <select  class="form-control select2-single" id="municipio_id" name="municipio_id">
                                        <option>Selecciona municipio</option>
                                        <?php
                                        foreach ($objmunicipio as $municipio):
                                            if ($afiliado->municipio_id == $municipio->id):
                                                ?>
                                                <option value="<?php echo $municipio->id ?>" selected><?php echo $municipio->nombre ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo $municipio->id ?>" selected><?php echo $municipio->nombre ?></option>
                                            <?php
                                            endif;
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>


                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="correo">Correo</label>
                                <div class="col-xs-9">
                                    <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $afiliado->correo ?>" >
                                </div>
                            </div>

                            <div class="col-lg-6 form-group" >
                                <label class="col-sm-3 control-label" for="estado_civil_id">Estado Civil</label>
                                <div class="col-lg-9">
                                    <select  class="form-control select2-single" id="estado_civil_id" name="estado_civil_id">
                                        <option>Selecciona estado civil</option>
                                        <?php
                                        foreach ($objestado_civil as $estado_civil):
                                            if ($afiliado->estado_civil_id == $estado_civil->id):
                                                ?>
                                                <option value="<?php echo $estado_civil->id ?>" selected><?php echo $estado_civil->nombre ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo $estado_civil->id ?>" selected><?php echo $estado_civil->nombre ?></option>
                                            <?php
                                            endif;
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            
                             <div class="col-lg-6 form-group" >
                                <label class="col-sm-3 control-label" for="ocupacion_id">Ocupacion</label>
                                <div class="col-lg-9">
                                    <select  class="form-control select2-single" id="ocupacion_id" name="ocupacion_id">
                                        <option>Selecciona ocupacion</option>
                                        <?php
                                        foreach ($objocupacion as $ocupacion):
                                            if ($afiliado->ocupacion_id == $ocupacion->id):
                                                ?>
                                                <option value="<?php echo $ocupacion->id ?>" selected><?php echo $ocupacion->nombre ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo $ocupacion->id ?>" selected><?php echo $ocupacion->nombre ?></option>
                                            <?php
                                            endif;
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            
                             <div class="col-lg-6 form-group" >
                                <label class="col-sm-3 control-label" for="estudios_id">Estudios</label>
                                <div class="col-lg-9">
                                    <select  class="form-control select2-single" id="estudios_id" name="estudios_id">
                                        <option>Selecciona estudios</option>
                                        <?php
                                        foreach ($objestudios as $estudios):
                                            if ($afiliado->estudios_id == $estudios->id):
                                                ?>
                                                <option value="<?php echo $estudios->id ?>" selected><?php echo $estudios->nombre ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo $estudios->id ?>" selected><?php echo $estudios->nombre ?></option>
                                            <?php
                                            endif;
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" >Editar</button>
                            </div>
                        <?php } ?>  
                    </form><!-- /.form-->
                </div><!-- /.box box-primary -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.box-body -->
    </div><!-- /.box-->
</section>
@endsection