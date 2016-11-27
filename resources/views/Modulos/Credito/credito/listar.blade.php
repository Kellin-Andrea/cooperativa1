@extends('menu.estructura')
@section('content')
<!-- Confirmacion de Desactivar -->
<script src="{{ asset('js/Confirmacion.js') }}"></script>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center><h3 class="box-title"> Listado de Credito</h3></center>
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
                        <h3 class="box-title">Listado de Credito</h3>
                    </div><!-- /.box-header -->
                    <div class="box-success">
                        <div class="table-responsive">
                            <table id="tabla" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                              <th class="text-center">Fecha Tramite</th> 
                                            <th class="text-center">Numero_ credito</th>
                                            <th class="text-center">Tipo Credito</th>
                                            <th class="text-center">Plazo</th> 
                                            <th class="text-center">Tasa</th>
                                            <th class="text-center">Periodo</th> 
                                            <th class="text-center">Valor Credito</th>
                                            <th class="text-center">Valor Interes</th>
                                            <th class="text-center">Saldo Credito</th>
                                            <th class="text-center">Saldo Interes</th>
                                          
                                            <th class="text-center">Acciones</th>
                                        </tr>
                           
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($objcredito as $credito) { ?>
                                        <tr>
                                       
                                        <td><?php echo $credito->fecha_tramite ?></td>
                                        <td ><?php echo $credito->nro_credito ?></td>
                                        <td><?php echo $credito->tipo_credito_id ?></td>
                                        <td><?php echo $credito->plazo ?></td>
                                        <td><?php echo $credito->tasa ?></td>
                                        <td<?php echo $credito->periodo_id ?></td>
                                        <td><?php echo $credito->valor_credito ?></td>
                                        <td><?php echo $credito->valor_interes ?></td>
                                        <td><?php echo $credito->saldo_credito ?></td>
                                        <td><?php echo $credito->saldo_interes ?></td>
                                      
                                        </tr>
                                            <td class="text-center">





                                    <button onclick="Desactivar(<?php echo $credito->id ?>)"
                                            class="btn btn-danger btn-sm" id="dss">Deshabilitar
                                    </button>



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