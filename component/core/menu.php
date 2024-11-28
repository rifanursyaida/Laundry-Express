<?php
include "configuration/config_connect.php";
include "configuration/config_chmod.php";
?>
<aside class="main-sidebar">

    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo $_SESSION['avatar']; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $_SESSION['nama']; ?></p>
                <a href="#"><i class="fa fa-circle text-online"></i> Online</a>
            </div>
        </div>
        <br>
        <ul class="sidebar-menu">
            <!-- <li class="header">MENU UTAMA</li> -->
            <li class="treeview">
                <a href="index"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>

            </li>



            <?php

            if ($chmenu1 >= 1 || $_SESSION['jabatan'] == 'admin') { ?>



            <?php } else {
            }
            if ($chmenu2 >= 1 || $_SESSION['jabatan'] == 'admin') { ?>

                <li class="treeview">
                    <a href="#"> <i class="glyphicon glyphicon-folder-close"></i> <span>Pelanggan</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="pelanggan"><i class="fa fa-circle-o"></i>Data Pelanggan</a>
                        </li>
                        <li>
                            <a href="add_pelanggan"><i class="fa fa-circle-o"></i>Tambah Pelanggan</a>
                        </li>
                    </ul>
                </li>



            <?php } else {
            }
            if ($chmenu3 >= 1 || $_SESSION['jabatan'] == 'admin') { ?>




            <?php } else {
            }
            if ($chmenu4 >= 1 || $_SESSION['jabatan'] == 'admin') { ?>



            <?php } else {
            }

            if ($chmenu5 >= 1 || $_SESSION['jabatan'] == 'admin') { ?>

                <li class="treeview">
                    <a href="add_jual"> <i class="glyphicon glyphicon-shopping-cart"></i> <span>Transaksi</span> <span class="pull-right-container"> </span> </a>

                </li>

            <?php } else {
            }

            if ($chmenu6 >= 1 || $_SESSION['jabatan'] == 'admin') { ?>

                <li class="treeview">
                    <a href="#"> <i class=" glyphicon glyphicon-flash"></i> <span>Trx Operasional</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="operasional"><i class="fa fa-circle-o"></i>Data Operasional</a>
                        </li>
                        <li>
                            <a href="add_operasional"><i class="fa fa-circle-o"></i>Tambah Trx</a>
                        </li>

                    </ul>
                </li>


            <?php } else {
            }
            if ($chmenu7 >= 1 || $_SESSION['jabatan'] == 'admin') { ?>

                <li class="treeview">
                    <a href="#"> <i class="glyphicon glyphicon-inbox"></i> <span>Order</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="order_data"><i class="fa fa-circle-o"></i>Data Order</a>
                        </li>
                        <li>
                            <a href="order_batal"><i class="fa fa-circle-o"></i>Pembatalan Order</a>
                        </li>

                    </ul>
                </li>




            <?php } else {
            }
            if ($chmenu8 >= 1 || $_SESSION['jabatan'] == 'admin') { ?>

                <li class="treeview">
                    <a href="#"> <i class="glyphicon glyphicon-stats"></i> <span>Laporan</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="report_trx"><i class="fa fa-circle-o"></i>Transaksi Jual</a>
                        </li>
                        <li>
                            <a href="report_operasi"><i class="fa fa-circle-o"></i>Operasional</a>
                        </li>
                        <li>
                            <a href="report_revenue"><i class="fa fa-circle-o"></i>Pendapatan</a>
                        </li>

                    </ul>
                </li>

            <?php } else {
            }
            if ($chmenu4 >= 1 || $_SESSION['jabatan'] == 'admin') { ?>

                <li class="treeview">
                    <a href="#"> <i class="glyphicon glyphicon-pushpin"></i> <span>Jenis Layanan</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="jenis"><i class="fa fa-circle-o"></i>Data Jenis</a>
                        </li>
                        <li>
                            <a href="add_jenis"><i class="fa fa-circle-o"></i>Tambah Jenis</a>
                        </li>
                    </ul>
                </li>


            <?php } else {
            }
            if ($chmenu1 >= 1 || $_SESSION['jabatan'] == 'admin') { ?>

                <li class="treeview">
                    <a href="#"> <i class="glyphicon glyphicon-user"></i> <span>User</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="admin"><i class="fa fa-circle-o"></i>Data User</a>
                        </li>
                        <li>
                            <a href="add_admin"><i class="fa fa-circle-o"></i>Tambah User</a>
                        </li>
                    </ul>
                </li>

            <?php } else {
            }
            if ($chmenu3 >= 1 || $_SESSION['jabatan'] == 'admin') { ?>

                <li class="treeview">
                    <a href="#"> <i class="glyphicon glyphicon-tag"></i> <span>Satuan</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="satuan"><i class="fa fa-circle-o"></i>Data Satuan</a>
                        </li>
                        <li>
                            <a href="add_satuan"><i class="fa fa-circle-o"></i>Tambah Satuan</a>
                        </li>
                    </ul>
                </li>

            <?php } else {
            }
            if ($chmenu3 >= 1 || $_SESSION['jabatan'] == 'admin') { ?>

                <li class="treeview">
                    <a href="#"> <i class="glyphicon glyphicon-inbox"></i> <span>Outlet</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="outlet"><i class="fa fa-circle-o"></i>Data Outlet</a>
                        </li>
                        <li>
                            <a href="add_outlet"><i class="fa fa-circle-o"></i>Tambah Outlet</a>
                        </li>
                    </ul>
                </li>

            <?php } else {
            }
            if ($chmenu3 >= 1 || $_SESSION['jabatan'] == 'admin') { ?>

                <li class="treeview">
                    <a href=""> <i class="glyphicon glyphicon-cog"></i> <span>Pengaturan</span> <span class="pull-right-container"> </span> </a>
                    <ul class="treeview-menu">
                        <!-- <li>
                            <a href="log_transaksi"><i class="fa fa-circle-o"></i>Outlet</a>
                        </li> -->
                        <li>
                            <a href="log_login"><i class="fa fa-circle-o"></i>Login History</a>
                        </li>
                        <li>
                            <a href="add_jabatan"><i class="fa fa-circle-o"></i>User Setting</a>
                        </li>
                        <li>
                            <a href="set_chmod"><i class="fa fa-circle-o"></i>Hak Akses</a>
                        </li>
                    </ul>
                </li>



            <?php } else {
            }
            if ($chmenu9 >= 1 || $_SESSION['jabatan'] == 'admin') { ?>


                <!-- <li class="treeview">
                            <a href=""> <i class="glyphicon glyphicon-cog"></i> <span>LISENSI</span> <span class="pull-right-container"> </span> </a>
                            	 <ul class="treeview-menu">
                                <li>
                                    <a href="info"><i class="fa fa-circle-o"></i>Info</a>
                                </li>
								
                            </ul>
                        </li> -->
            <?php } else {
            } ?>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>