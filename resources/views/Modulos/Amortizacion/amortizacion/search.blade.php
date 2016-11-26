@extends('menu.estructura')
@section('content')
<!-- Confirmacion de Desactivar -->
<script src="{{ asset('js/Confirmacion.js') }}"></script>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center><h3 class="box-title"> Listado de Amortizacion</h3></center>
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
                        <h3 class="box-title">Listado de Amortizacion</h3>
                    </div><!-- /.box-header -->
                    <div class="box-success">
                        <div class="table-responsive">
                            <table id="tabla" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Numero cuotas</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Capital</th>                   
                                        <th class="text-center">Cuota capital</th> 
                                        <th class="text-center">Cuota interes</th>
                                        <th class="text-center">Valor cuota</th>

                                        <th class="text-center">Acciones</th>
                                    </tr>
                           
                        </div>
                    </div>
                </div><!-- /.box box-primary -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.box-body -->
    </div><!-- /.box-->
</section>
@endsection