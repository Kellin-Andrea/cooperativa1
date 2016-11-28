@extends('menu.estructura')
@section('content')
<!-- Confirmacion de Desactivar -->
<script src="{{ asset('js/Confirmacion.js') }}"></script>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center><h3 class="box-title"> Listado de Transaccion</h3></center>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i
                        class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Listado de Transaccion</h3>
                    </div><!-- /.box-header -->
                    <div class="box-success">
                        <div class="table-responsive">
                            <table id="tabla" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Fechta Movimiento</th>
                                        <th class="text-center">Numero Credito</th>
                                        <th class="text-center">Tipo Transaccion</th>                   
                                        <th class="text-center">Cuota Pago</th> 
                                        <th class="text-center">Valor Capital</th>
                                        <th class="text-center">Valor  Interes</th>
                                        <th class="text-center">Estado</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($objtransaccion as $transaccion) { ?>
                                        <tr>
                                            <td><?php echo $transaccion->fecha_movimiento ?></td>
                                            <td><?php echo $transaccion->nro_credito ?></td>
                                            <td><?php echo $transaccion->tipo_transaccion_id ?></td>
                                            <td><?php echo $transaccion->cuota_pago ?></td>
                                            <td><?php echo $transaccion->valor_capital ?></td>
                                            <td><?php echo $transaccion->valor_interes ?></td>
                                      
                                            <td class="text-center">    
                                           


                                                <?php if ($transaccion->estado == 1): ?>
                                                    <span class='label label-success'>
                                                        <font class='h5'>Activo</font>
                                                    </span>
                                                <?php else: ?>
                                                    <span class='label label-danger'>
                                                        <font class='h5'>Inactivo</font>
                                                    </span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                       
                                                 <a href="<?php echo url("transaccion/editar/" . $transaccion->id) ?>"
                                                   class="btn btn-info btn-sm">Editar</a>
                                                   <?php if ($transaccion->estado == 1): ?>
                                                    <button onclick="Desactivar(<?php echo $transaccion->id ?>)"
                                                            class="btn btn-danger btn-sm" id="dss">Deshabilitar
                                                    </button>
                                                <?php else: ?>
                                                    <button onclick="Activar(<?php echo $transaccion->id ?>)"
                                                            class="btn btn-success btn-sm" id="add">Activar
                                                    </button>
                                                <?php endif; ?>
                                            </td>
                                        </tr>

                                        </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- /.box box-primary -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.box-body -->
    </div><!-- /.box-->
</section>
@endsection