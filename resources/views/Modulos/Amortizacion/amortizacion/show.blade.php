@extends('menu.estructura')
@section('content')
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center> <h3 class="box-title"><i class="fa fa-users fa-2x"></i>Ver Amortizacion</h3></center>
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

                    <form name="signupForm1" id="signupForm1" class="form-horizontal" method="post" autocomplete="off" action="<?php echo url('amortizacion/crear') ?>"  >
                        <div class="box-body">
                            <?php foreach($objamortizacion as $amortizacion){?>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                    <i class="fa fa-user"></i><font><font>Informacion General
                                </h2>
                            </div>
                            
                                     <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="nro_cuota">Numero cuota </label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="nro_cuota" id="nro_cuota" value="<?php echo $amortizacion->nro_cuota ?>" disabled>>
                            </div>
                        </div>
                            <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="fecha_cuota">Fecha cuota </label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="fecha_cuota" id="fecha_cuota" value="<?php echo $amortizacion->fecha_cuota ?>" disabled>
                            </div>
                        </div>
                        
                          <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="capital">Capital</label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="capital" id="nro_cuota" value="<?php echo $amortizacion->capital ?>" disabled>
                            </div>
                        </div>
                        
                          <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="cuota_capital">Cuota capital</label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="cuota_capital" id="cuota_capital" value="<?php echo $amortizacion->cuota_capital ?>" disabled>
                            </div>
                        </div>
                        
                           <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="cuota_interes">Cuota interes</label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="cuota_interes" id="cuota_interes" value="<?php echo $amortizacion->cuota_interes ?>" disabled>
                            </div>
                        </div>
                        
                           <div class="col-lg-6 form-group">
                            <label class="col-sm-3 control-label" for="valor_cuota">Valor cuota </label>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" name="valor_cuota" id="valor_cuota"value="<?php echo $amortizacion->valor_cuota ?>" disabled>
                            </div>
                        </div>
                       
                        </div>
                        <?php } ;?>
                    </form><!-- /.form-->
                </div><!-- /.box box-primary -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.box-body -->
    </div><!-- /.box-->
</section>
@endsection