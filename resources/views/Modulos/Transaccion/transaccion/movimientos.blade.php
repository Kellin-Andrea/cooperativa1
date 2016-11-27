@extends('menu.estructura')
@section('content')
<!-- Confirmacion de Desactivar -->
<script src="{{ asset('js/Confirmacion.js') }}"></script>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center><h3 class="box-title"> Listado de Movimientos</h3></center>
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
                        <h3 class="box-title">Listado de Movimientos</h3>
                    </div><!-- /.box-header -->
                    <div class="box-success">
                        <div class="table-responsive">
                            <table id="tabla" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Numero documento</th>
                                        <th class="text-center">Nombres</th>
                                        <th class="text-center">Apellidos</th>                   
                                        <th class="text-center">Fecha Movimiento</th> 
                                        <th class="text-center">Tipo_transaccion</th>
                                        <th class="text-center">Cuota Pago</th>
                                        <th class="text-center">Valor Capital</th>
                                        <th class="text-center">Valor Interes</th>

                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($objmovimientos as $movientos) { ?>
                                        <tr>
                                            <td><?php echo $movientos->nro_documento ?></td>
                                            <td><?php echo $movientos->nombres ?></td>
                                            <td><?php echo $movientos->apellidos ?></td>
                                            <td><?php echo $movientos->fecha_movimiento ?></td>
                                            <td><?php echo $movientos->nombre ?></td>
                                            <td><?php echo $movientos->cuota_pago ?></td>
                                            <td><?php echo $movientos->valor_capital ?></td>
                                            <td><?php echo $movientos->valor_interes ?></td>
                                        
                                              
                                                



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