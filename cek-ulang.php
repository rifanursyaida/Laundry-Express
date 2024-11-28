<?php
//error_reporting(0);
include "configuration/config_etc.php" ;
include "configuration/config_include.php" ;
include 'configuration/config_connect.php';
$queryback="SELECT * FROM data";
    $resultback=mysqli_query($conn,$queryback);
    $rowback=mysqli_fetch_assoc($resultback);
    $footer=$rowback['nama'];
?>
<html>
<title>Login</title>
<?php head();

?>
<body class="hold-transition login-page">


<?php

?>




    <div class="container">
	<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

	<?php  // error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	?>

         <div class="login-box">
  <div class="login-logo">
    <a href=""><b><?php echo $footer;?></b>&nbsp;Laundrys</a>
  </div>

  <h2 style="color:red;">Nota yang anda masukan salah, masukan yang benar!</h2><hr/>
  <!-- /.login-logo -->
  <div class="login-box-body">

    <form action="status.php" id="form" method="GET">
      <div class="form-group has-feedback">
        <input type="txt" class="form-control" name="txtnota" id="txtnama" placeholder="Nama nota" maxlength="20" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12" align="right">
          <button type="submit" class="btn btn-default btn-block btn-flat">Periksa</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->
	<br>
	  <p class="login-box-msg">Dikembangakn oleh Ahmad Irfan- Aplikasi Manajemen Usaha Laundri</p>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
        </div>


         </div>
    </div>





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
