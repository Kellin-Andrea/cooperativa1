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
                                        <th class="text-center">Identificacion</th>
                                        <th class="text-center">Nombre</th>
                                        <th class="text-center">Apellido</th>                   
                                        <th class="text-center">Direccion</th> 
                                        <th class="text-center">Correo</th>
                                        <th class="text-center">Telefono</th>

                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($objafiliado as $afiliado) { ?>
                                        <tr>
                                            <td><?php echo $afiliado->nro_documento ?></td>
                                            <td><?php echo $afiliado->nombres ?></td>
                                            <td><?php echo $afiliado->apellidos ?></td>
                                            <td><?php echo $afiliado->direccion ?></td>
                                            <td><?php echo $afiliado->correo ?></td>
                                            <td><?php echo $afiliado->telefono ?></td>
                                            <td class="text-center">  
                                                <a href="<?php echo url("amortizacion/ver/" . $afiliado->id) ?>"
                                                   class="btn btn-info btn-sm">Ver</a>
                                                <a href="<?php echo url("afiliado/editar/" . $afiliado->id) ?>"
                                                   class="btn btn-info btn-sm">Editar</a>

                                                <button onclick="Desactivar(<?php echo $afiliado->id ?>)"
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