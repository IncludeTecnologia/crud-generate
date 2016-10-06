<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{Auth::user()->pathphoto}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
            </div>
        </div>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Inicio</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('user.index') }}">
                    <i class="fa fa-users"></i>
                    <span>Usuários</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right"></span>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('city.index') }}">
                    <i class="fa fa-th"></i> <span>Cidades</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">Hot</small>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('events.index') }}">
                    <i class="fa fa-th"></i> <span>Eventos</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">Hot</small>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('groups.index') }}">
                    <i class="fa fa-th"></i> <span>Grupos</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">Hot</small>
                    </span>
                </a>
            </li>
            <li>
                <a href="../widgets.html">
                    <i class="fa fa-th"></i> <span>Alunos</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">Hot</small>
                    </span>
                </a>
            </li>
            <li>
                <a href="../widgets.html">
                    <i class="fa fa-th"></i> <span>Exportar Eventos</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">Hot</small>
                    </span>
                </a>
            </li>
            <li>
                <a href="../widgets.html">
                    <i class="fa fa-th"></i> <span>Relatórios</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">Hot</small>
                    </span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<!-- =============================================== -->
