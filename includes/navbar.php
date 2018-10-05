<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="../dashboard/index.php"><i class="fa fa-dashboard fa-fw"></i> Descripción</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-th-list fa-fw"></i> Administración<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <?php 
                        include 'administracion.php';
                     ?>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-th-list fa-fw"></i> Agencias<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <?php 
                        include 'agencias.php';
                     ?>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-th-list fa-fw"></i> Proveedores<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <?php 
                        include 'proveedores.php';
                     ?>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-th-list fa-fw"></i> Excursiones<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <?php 
                        include 'excursiones.php';
                     ?>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-th-list fa-fw"></i> Traslados<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <?php 
                        include 'traslados.php';
                     ?>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-th-list fa-fw"></i> Descuentos<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <?php 
                        include 'descuentos.php';
                     ?>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-th-list fa-fw"></i> Servicios<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <?php 
                        include 'servicios.php';
                     ?>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-th-list fa-fw"></i> Tarifas<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <?php 
                        include 'tarifas.php';
                     ?>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="tables.html"><i class="fa fa-th-list fa-fw"></i> Incentivos</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-th-list fa-fw"></i> Reportes<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <?php 
                        include 'reportes.php';
                     ?>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-th-list fa-fw"></i> Área Contable<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <?php 
                        include 'areacontable.php';
                     ?>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
            <!-- /.navbar-static-side -->