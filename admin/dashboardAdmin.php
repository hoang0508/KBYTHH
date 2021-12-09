<?php
  include '../db/conect.php';
  include '../admin/2404/incLogin.php'
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Trang chủ Admin</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <link rel="stylesheet" href="./css/clendar.css">
    <link rel="stylesheet" href="./css/styleh11.css">
    
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
             <?php
              include("2404/menu.php");
              include("2404/top.php");
              ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
            <div class="statistical">
              <?php 
                  $sql_kb = mysqli_query($conn, "SELECT COUNT(*) AS 'nkb' from tbl_sinhvien");
                  while($row_khai = mysqli_fetch_array($sql_kb)) {
              ?>
              <div class="list-statis feed-back">
              <i class="fa fa-comments-o" aria-hidden="true"></i>
              <div class="feed-number">
                <span class="number-txt"><?php echo $row_khai['nkb'] ?></span>
                <span class="txt-desc">SV khai báo</span>
              </div>
              </div>
              <?php
                  }
              ?>
              <?php 
                $sql_kbg = mysqli_query($conn, "SELECT COUNT(*) AS 'nkb1' FROM tbl_giangvien");
                while($row_gv = mysqli_fetch_array($sql_kbg)) {
              ?>
              <div class="list-statis login-total">
              <i class="fa fa-user-circle-o" aria-hidden="true"></i>
              <div class="feed-number">
                <span class="number-txt"><?php echo $row_gv['nkb1'] ?></span>
                <span class="txt-desc">GV khai báo</span>
              </div>
              </div>
              <?php
                }
              ?>
              <?php 
                $sql_kbk = mysqli_query($conn, "SELECT COUNT(*) AS 'nbk2' FROM tbl_khach");
                while($row_kk = mysqli_fetch_array($sql_kbk)) {
              ?>
              <div class="list-statis total-order">
              <i class="fa fa-user-circle-o" aria-hidden="true"></i>
              <div class="feed-number">
                <span class="number-txt"><?php echo $row_kk['nbk2'] ?></span>
                <span class="txt-desc">Khách khai báo</span>
              </div>
              </div>
              <?php
                }
              ?>
               <?php
                $sql_dauhieus = mysqli_query($conn, 'SELECT COUNT(*) as "dh" FROM tbl_sinhvien WHERE tbl_sinhvien.t_sot = "1" or tbl_sinhvien.t_ho = "1" or tbl_sinhvien.t_dauhong = "1" or tbl_sinhvien.t_matvi = "1" or tbl_sinhvien.t_khotho = "1" or tbl_sinhvien.t_met = "1" or tbl_sinhvien.t_khac = "1"');
                $row_svd = mysqli_fetch_array($sql_dauhieus);
              ?>
              <div class="list-statis total-vote">
              <i class="fa fa-cart-plus" aria-hidden="true"></i>
              <div class="feed-number">
                <span class="number-txt"><?php echo $row_svd['dh'] ?></span>
                <span class="txt-desc">SV có dấu hiệu</span>
              </div>
              </div>
            </div>
   <section class="ftco-section" style="width: 100%;padding: 3rem">
		<div class="container">
			<div class="row">
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="elegant-calencar d-md-flex">
						<div class="wrap-header d-flex align-items-center img" style="background-image: url(images/bg.jpg);">
				      <p id="reset">Today</p>
			        <div id="header" class="p-0">
								<!-- <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div> -->
		            <div class="head-info">
		            	<div class="head-month"></div>
		                <div class="head-day"></div>
		            </div>
		            <!-- <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div> -->
			        </div>
			      </div>
			      <div class="calendar-wrap">
			      	<div class="w-100 button-wrap">
				      	<div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div>
				      	<div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div>
			      	</div>
			        <table id="calendar">
		            <thead>
		                <tr>
	                    <th>Sun</th>
	                    <th>Mon</th>
	                    <th>Tue</th>
	                    <th>Wed</th>
	                    <th>Thu</th>
	                    <th>Fri</th>
	                    <th>Sat</th>
		                </tr>
		            </thead>
		            <tbody>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
		            </tbody>
			        </table>
			      </div>
			    </div>
				</div>
        <div class="col-md-6 bg-clock">
          <div class="clock">
            <div class="hour">
              <div class="hr" id="hr"></div>
            </div>
            <div class="min">
              <div class="mn" id="mn">
              </div>
            </div>
            <div class="sec">
              <div class="sc" id="sc">
              </div>
            </div>
          </div>
        </div>
			</div>
		</div>
    <div class="task-chart">
      <div id="piechart" style="width: 500px; height: 500px;border-radius: 10px"></div>
      <div class="app">
      <div class="form-control1">
        <textarea class="content" name="" id="content"> </textarea>
        <button>Ghi chú</button>
      </div>
      <div id="list-task" class="list-task">
        <h4>Danh sách cv</h4>
        <div class="result"></div>
      </div>
    </div>
    </div>
	</section>
          </div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            @coppyright Bản quyền thuộc by <a href="https://colorlib.com">Huy Hoàng</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <script >
      const deg = 6;
      const hr = document.querySelector("#hr");
      const mn = document.querySelector("#mn");
      const sc = document.querySelector("#sc");

      setInterval(() => {
        let day = new Date();
        let hh = day.getHours() * 30;
        let mm = day.getMinutes() * deg;
        let ss = day.getSeconds() * deg;

        hr.style.transform = `rotateZ(${hh + mm / 12}deg)`;
        mn.style.transform = `rotateZ(${mm}deg)`;
        sc.style.transform = `rotateZ(${ss}deg)`;
});
    </script>
    <script src="./js/app11.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/popper.js"></script>
    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
	
  </body>
</html>
