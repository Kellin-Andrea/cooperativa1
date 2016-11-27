@extends('menu.estructura')
@section('content')
<!-- Confirmacion de Desactivar -->
<script src="{{ asset('js/Confirmacion.js') }}"></script>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center><h3 class="box-title"> Listado de Afiliado</h3></center>
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
                        <h3 class="box-title">Listado de Afiliado</h3>
                    </div><!-- /.box-header -->
                    <div class="box-success">
                        <div class="table-responsive">
                            <table id="tabla" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Tipo identificacion</th>
                                        <th class="text-center">Numero documento</th>
                                        <th class="text-center">Nombres</th>
                                        <th class="text-center">Apellidos</th>  
                                        <th class="text-center">Correo</th>    
                                        <th class="text-center">Telefono</th>    
                                        <th class="text-center">Fecha_tramite</th> 
                                        <th class="text-center">Numero Credito</th>
                                        <th class="text-center">Saldo Credito</th>
                                        <th class="text-center">Saldo Interes</th>

                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($objtodo as $todo) { ?>
                                        <tr>
                                            
                                            <td><?php echo $todo->nombre ?></td>
                                            <td><?php echo $todo->nro_documento ?></td>
                                            <td><?php echo $todo->nombres ?></td>
                                            <td><?php echo $todo->apellidos ?></td>
                                            <td><?php echo $todo->correo ?></td>
                                            <td><?php echo $todo->telefono ?></td>
                                            <td><?php echo $todo->fecha_tramite ?></td>
                                            <td><?php echo $todo->nro_credito ?></td>
                                            <td><?php echo $todo->saldo_credito ?></td>
                                            <td><?php echo $todo->saldo_interes ?></td>
                                        
                                              
                                                



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