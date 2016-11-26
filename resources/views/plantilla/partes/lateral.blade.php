<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo url("img/avatar.png")?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $nombre = Auth::user()->nombre; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Navegaci&oacute;n</li>
            <!-----------Modulo de Administracion-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span>Administracion</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
              
                     <!-----------Modulo de Amortizacion-->
                     <li>
                        <a href="#"><i class="fa fa-user"></i> Amortizacion <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('amortizacion/crear') }}"><i class="fa fa-circle-o"></i> Crear</a></li>
                            <li><a href="{{ url('amortizacion/listar') }}"><i class="fa fa-circle-o"></i> Consultar</a></li>
                        </ul>
                    </li>
                     <!-----------Modulo de Credito-->
                       <li>
                        <a href="#"><i class="fa fa-caret-up"></i> Credito <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('credito/crear') }}"><i class="fa fa-circle-o"></i> Crear</a></li>
                            <li><a href="{{ url('credito/listar') }}"><i class="fa fa-circle-o"></i> Consultar</a></li>
                        </ul>
                    </li>
                    
                    <!-----------Modulo de Afiliado-->
                       <li>
                        <a href="#"><i class="fa fa-caret-up"></i> Afiliado <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('afiliado/crear') }}"><i class="fa fa-circle-o"></i> Crear</a></li>
                            <li><a href="{{ url('afiliado/listar') }}"><i class="fa fa-circle-o"></i> Consultar</a></li>
                        </ul>
                    </li>
                    
                    
            <!-----------Modulo de Usuarios-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Usuarios</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <li><a href="<?php echo url('usuario/crear') ?>"><i class="fa fa-circle-o"></i> Crear</a></li>
                        <li><a href="<?php echo url('usuario/listar') ?>"><i class="fa fa-circle-o"></i> Consultar</a></li>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
