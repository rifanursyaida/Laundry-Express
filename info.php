<!DOCTYPE html>
<html>
<?php
include "configuration/config_etc.php";
include "configuration/config_include.php";
etc();encryption();session();connect();head();body();timing();
//alltotal();
pagination();
?>

<?php
if (!login_check()) {
?>
<meta http-equiv="refresh" content="0; url=logout" />
<?php
exit(0);
}
?>
<div class="wrapper">
<?php
theader();
menu();
?>
            <div class="content-wrapper">
                <section class="content-header">
</section>
                <section class="content">
                    <div class="row">
					  <div class="col-lg-12">
<!-- SETTING START-->

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "configuration/config_chmod.php";
$halaman = "Info"; // halaman
$dataapa = "Info"; // data
$tabeldatabase = "EULA"; // tabel database
$forward = mysqli_real_escape_string($conn, $tabeldatabase); // tabel database
$forwardpage = mysqli_real_escape_string($conn, $halaman); // halaman


?>

<!-- SETTING STOP -->



       <!-- BOX INFORMASI -->
    <?php
if ($chmod == '1' || $chmod == '2' || $chmod == '3' || $chmod == '4' || $chmod == '5' || $_SESSION['jabatan'] == 'admin') {
} else {
?>
   <div class="callout callout-danger">
    <h4>Info</h4>
    <b>Hanya user tertentu yang dapat mengakses halaman <?php echo $dataapa;?> ini .</b>
    </div>
    <?php
}
?>

<?php
if ($chmod >= 1 || $_SESSION['jabatan'] == 'admin') {
?>

<?php

        $sqla="SELECT no, COUNT( * ) AS totaldata FROM $forward";
		$hasila=mysqli_query($conn,$sqla);
		$rowa=mysqli_fetch_assoc($hasila);
		$totaldata=$rowa['totaldata'];

?>
                           <div class="box">
            <div class="box-header">
            <h3 class="box-title">Data <?php echo $forward ?>  <span class="label label-default"><?php echo $totaldata; ?></span>
					</h3>

			  


            </div>

                                <!-- /.box-header -->
                                  <!-- /.Paginasi -->
                                 <?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    $sql    = "select * from satuan order by no";
    $result = mysqli_query($conn, $sql);
    $rpp    = 15;
    $reload = "$halaman"."?pagination=true";
    $page   = intval(isset($_GET["page"]) ? $_GET["page"] : 0);

    if ($page <= 0)
        $page = 1;
    $tcount  = mysqli_num_rows($result);
    $tpages  = ($tcount) ? ceil($tcount / $rpp) : 1;
    $count   = 0;
    $i       = ($page - 1) * $rpp;
    $no_urut = ($page - 1) * $rpp;
?>
                            <div class="box-body table-responsive">
                             
 <div align="right"><?php if($tcount>=$rpp){ echo paginate_one($reload, $page, $tpages);}else{} ?></div>
		 <?php
			}

		

	

		?>
                  </tbody></table>
				  <div align="right"><?php if($tcount>=$rpp){ echo paginate_one($reload, $page, $tpages);}else{} ?></div>
	<?php  ?>

                               </div>
                                <!-- /.box-body -->
                            </div>

							<?php   ?>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                      <div class="col-lg-12">
                        <center><font color="blue"><h1>Pemakaian aplikasi ini legal bila mengikuti EULA dibawah<br/>Silahkan beli hanya dari reseller kami</h1></font></center>

<div class="col-xs-12" align="center">
          <a href="https://www.tokopedia.com/medan-city-store" class="btn btn-info" role="button">Beli Lisensi</a>
        </div>
<br/><br/>
<center><font color="blue"><h1>End-User License Agreement (EULA) of <br/>APLIKASI LAUNDRY</h1></font></center>

 <left><font color="black"><h3>
<center>This End-User License Agreement ("EULA") is a legal agreement between you and APLIKASI LAUNDRY <br/><br/></center>

This EULA agreement governs your acquisition and use of our Laundrys software ("Software") directly from APLIKASI LAUNDRY or indirectly through a APLIKASI LAUNDRY authorized reseller or distributor (a "Reseller").<br/><br/>

Please read this EULA agreement carefully before completing the installation process and using the Laundrys software. It provides a license to use the Laundrys software and contains warranty information and liability disclaimers.<br/><br/>

If you register for a free trial of the Laundrys software, this EULA agreement will also govern that trial. By clicking "accept" or installing and/or using the Laundrys software, you are confirming your acceptance of the Software and agreeing to become bound by the terms of this EULA agreement.<br/><br/>

If you are entering into this EULA agreement on behalf of a company or other legal entity, you represent that you have the authority to bind such entity and its affiliates to these terms and conditions. If you do not have such authority or if you do not agree with the terms and conditions of this EULA <br/>agreement, do not install or use the Software, and you must not accept this EULA agreement. <br/><br/>

This EULA agreement shall apply only to the Software supplied by APLIKASI LAUNDRY herewith regardless of whether other software is referred to or described herein. The terms also apply to any APLIKASI LAUNDRY updates, supplements, Internet-based services, and support services for the Software, unless other terms accompany those items on delivery. If so, those terms apply. <br/><br/>

License Grant
APLIKASI LAUNDRY hereby grants you a personal, non-transferable, non-exclusive licence to use the Laundrys software on your devices in accordance with the terms of this EULA agreement.<br/><br/>

You are permitted to load the Laundrys software (for example a PC, laptop, mobile or tablet) under your control. You are responsible for ensuring your device meets the minimum requirements of the Laundrys software.<br/><br/>

<center><font color="blue"> You are permitted to:<br/><br/></font></center>

<center>Edit, modify, translate the script <font color="red"> for personal or educational use only </font></center>
<br/><br/><br/>
<center><font color="red"><h1> You are NOT permitted to:</h1><br/><br/></font></center>
Rename, reskin, rebranding with your name, copy, distribute, resell for any commercial purpose<br/><br/>
Allow any third party to use the Software on behalf of or for the benefit of any third party<br/><br/>
Use the Software in any way which breaches any applicable local, national or international law<br/><br/>
use the Software for any purpose that APLIKASI LAUNDRY considers is a breach of this EULA agreement
Intellectual Property and Ownership<br/><br/>

<br/><br/><br/><br/>
APLIKASI LAUNDRY shall at all times retain ownership of the Software as originally downloaded by you and all subsequent downloads of the Software by you. The Software (and the copyright, and other intellectual property rights of whatever nature in the Software, including any modifications made thereto) are and shall remain the property of APLIKASI LAUNDRY.<br/><br/>

APLIKASI LAUNDRY reserves the right to grant licences to use the Software to third parties.<br/><br/>
<br/><br/>

<center><font color="blue"><h1>Termination</h1></font></center>
This EULA agreement is effective from the date you first use the Software and shall continue until terminated. You may terminate it at any time upon written notice to APLIKASI LAUNDRY.<br/><br/>

It will also terminate immediately if you fail to comply with any term of this EULA agreement. Upon such termination, the licenses granted by this EULA agreement will immediately terminate and you agree to stop all access and use of the Software. The provisions that by their nature continue and survive will survive any termination of this EULA agreement.
<br/><br/>
<center><font color="blue"><h1>Governing Law<br/><br/></h1></font></center>
This EULA agreement, and any dispute arising out of or in connection with this EULA agreement, shall be governed by and construed in accordance with the laws of id.
</h3></font></left>

                    </div>
                    <!-- /.row (main row) -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
           <?php footer();?>
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
        <script src="dist/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
        <script src="dist/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="dist/plugins/morris/morris.min.js"></script>
        <script src="dist/plugins/sparkline/jquery.sparkline.min.js"></script>
        <script src="dist/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="dist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="dist/plugins/knob/jquery.knob.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <script src="dist/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="dist/plugins/datepicker/bootstrap-datepicker.js"></script>
        <script src="dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <script src="dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="dist/plugins/fastclick/fastclick.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/pages/dashboard.js"></script>
        <script src="dist/js/demo.js"></script>
		<script src="dist/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="dist/plugins/datatables/dataTables.bootstrap.min.js"></script>
		<script src="dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<script src="dist/plugins/fastclick/fastclick.js"></script>

    </body>
</html>
