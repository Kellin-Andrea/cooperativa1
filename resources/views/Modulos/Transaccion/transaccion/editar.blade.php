@extends('menu.estructura')
@section('content')
<!-- invocamos el  archivo con las validaciones del formulario "Editar producto" -->



<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center> <h3 class="box-title"><i class="fa fa-users fa-2x"></i>Editar transaccion</h3></center>
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
                    <?php foreach ($transaccion as $transaccion) { ?>
                        <form name="signupForm1" id="signupForm1" class="form-horizontal" method="POST" autocomplete="off" action="<?php echo url("transaccion/editar/") ?>">
                            <div class="box-body">
                                <input type="hidden" name="id" value="<?php echo $transaccion->id ?>">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-xs-12">
                                    <h2 class="page-header">
                                        <i class="fa fa-user"></i><font><font>Informacion General
                                    </h2>
                                </div>

                                <div class="col-lg-6 form-group">
                                    <label class="col-sm-3 control-label" for="fecha_movimiento">Fecha Movimiento</label>
                                    <div class="col-xs-9">
                                        <input type="date" class="form-control" id="fecha_movimiento" name="fecha_movimiento" value="<?php echo $transaccion->fecha_movimiento ?>" >
                                    </div>
                                </div>

                                <div class="col-lg-6 form-group">
                                    <label class="col-sm-3 control-label" for="nro_credito">Numero Credito</label>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" id="nro_credito" name="nro_credito" value="<?php echo $transaccion->nro_credito ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6 form-group">
                                    <label class="col-sm-3 control-label" for="tipo_transaccion_id">Tipo Transaccion</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select2-single"   id="tipo_transaccion_id" name="tipo_transaccion_id">

                                            <option>Selecciona Tipo transaccion</option>
                                            <?php
                                            foreach ($objtipotransaccion as $tipotransaccion):
                                                if ($tipotransaccion->id == $transaccion->tipo_transaccion_id):
                                                    ?>
                                                    <option value="<?php echo $tipotransaccion->id ?>" selected><?php echo $tipotransaccion->nombre ?></option>
                                                <?php else: ?>
                                                    <option value="<?php echo $transaccion->id ?>"><?php echo $tipotransaccion->nombre ?></option>

                                                <?php
                                                endif;
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="valor_capital">Valor Capital</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="valor_capital" name="valor_capital" value="<?php echo $transaccion->valor_capital ?>" >
                                </div>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="cuota_pago">Cuota Pago</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="cuota_pago" name="cuota_pago" value="<?php echo $transaccion->cuota_pago ?>" >
                                </div>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label class="col-sm-3 control-label" for="valor_interes">Valor Interes</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="valor_interes" name="valor_interes" value="<?php echo $transaccion->valor_interes ?>" >
                                </div>
                            </div>




                            <div class="col-lg-6 form-group" >
                                <label class="col-sm-3 control-label" for="afiliado_id">Afiliado</label>
                                <div class="col-lg-9">
                                    <select  class="form-control select2-single" id="afiliado_id" name="afiliado_id">
                                        <option>Selecciona Afiliado</option>
                                        <?php
                                        foreach ($objafiliado as $afiliado):
                                            if ($transaccion->afiliado_id == $afiliado->id):
                                                ?>
                                                <option value="<?php echo $afiliado->id ?>" selected><?php echo $afiliado->nombres ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo $afiliado->id ?>" selected><?php echo $afiliado->nombres ?></option>
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