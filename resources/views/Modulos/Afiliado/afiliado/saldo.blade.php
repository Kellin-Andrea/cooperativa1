@extends('menu.estructura')
@section('content')
<!-- Confirmacion de Desactivar -->
<script src="{{ asset('js/Confirmacion.js') }}"></script>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center><h3 class="box-title"> Listado de Saldos</h3></center>
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
                        <h3 class="box-title">Listado de Saldos</h3>
                    </div><!-- /.box-header -->
                    <div class="box-success">
                        <div class="table-responsive">
                            <table id="tabla" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Numero documento</th>
                                        <th class="text-center">Nombres</th>
                                        <th class="text-center">Apellidos</th>                   
                                        <th class="text-center">Numero credito</th> 
                                        <th class="text-center">Tipo Credito</th>
                                        <th class="text-center">Valor Credito</th>
                                        <th class="text-center">Saldo Credito</th>
                                        <th class="text-center">Saldo Interes</th>

                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($objsaldos as $saldo) { ?>
                                        <tr>
                                            <td><?php echo $saldo->nro_documento ?></td>
                                            <td><?php echo $saldo->nombres ?></td>
                                            <td><?php echo $saldo->apellidos ?></td>
                                            <td><?php echo $saldo->nro_credito ?></td>
                                            <td><?php echo $saldo->nombre ?></td>
                                            <td><?php echo $saldo->valor_credito ?></td>
                                            <td><?php echo $saldo->saldo_credito ?></td>
                                            <td><?php echo $saldo->saldo_interes ?></td>
                                        
                                              
                                                



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