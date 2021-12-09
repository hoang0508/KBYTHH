<?php
  include '../db/conect.php';
  include '../admin/2404/incLogin.php'
?>
<?php
    if(isset($_GET['xoa'])) {
      $id = $_GET['xoa'];
      $sql_delete_sinhvien = mysqli_query($conn, "DELETE FROM tbl_sinhvien WHERE sv_id = '$id'");
    }
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

    <title>Khai Báo YTE SV</title>

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
          <div class="container">
    <div class="row">
       <?php
        if(isset($_GET['quanly'])=='xemsinhvien') {
          $masv = $_GET['masv'];
          $sql_chitiet = mysqli_query($conn, "SELECT * FROM tbl_sinhvien WHERE masinhvien = '$masv'");
        ?> 
        <div class="col-md-12 mb-3">
          <p style="font-size: 20px;">Xem chi tiết sinh vien</p>
                <form action="" method="POST">
            <table class="table table-bordered">
            <tr style="text-align:center">
              <th>STT</th>
              <th>Họ và tên</th>
              <th>Ngày sinh</th>
              <th>Giới tính</th>
              <th>SĐT</th>
              <th>Dấu hiệu</th>
              <th>Dấu hiệu</th>
              <th>Dấu hiệu</th>
              <th>Dấu hiệu</th>
              <th>Dấu hiệu</th>
              <th>Dấu hiệu</th>
              <th>Dấu hiệu</th>
              <th>Dấu hiệu</th>
              <th>Yếu tố dịch tễ</th>
              <th>Yếu tố dịch tễ</th>
              <th>Yếu tố dịch tễ</th>
              <th>Yếu tố dịch tễ</th>
              <th>Yếu tố dịch tễ</th>
              <th>Yếu tố dịch tễ</th>

            </tr>
            <?php
            $i= 0;
              while($row_ctsv = mysqli_fetch_array($sql_chitiet)){
                $i++;
            ?>
              <tr style="text-align:center">
                <td><?php echo $i ?></td>
                <!-- <td><?php echo $row_ctsv['masinhvien'] ?></td> -->
                <td><?php echo $row_ctsv['hoten'] ?></td>
                <td><?php echo $row_ctsv['ngaysinh'] ?></td>
                <td><?php 
                  if($row_ctsv['gioitinh'] == 0) {
                    echo 'Nam';
                  }
                  else {
                    echo 'Nữ';
                  }
               ?>
              </td>
                <td><?php echo $row_ctsv['sdt'] ?></td>
                <td><?php echo $row_ctsv['ngaysinh'] ?></td>
                <td>
                  <?php
                  if($row_ctsv['t_sot'] == 1) {
                    echo 'Sốt';
                  }
                  else {
                    echo 'Không có';
                  }
                  ?>
                </td>
                <td>
                  <?php
                  if($row_ctsv['t_khac'] == 1) {
                    echo 'Khác';
                  }
                  else {
                    echo 'Không có';
                  }
                  ?>
                </td>
                <td>
                  <?php
                  if($row_ctsv['t_ho'] == 1) {
                    echo 'Ho';
                  }
                  else {
                    echo 'Không có';
                  }
                  ?>
                </td>
                <td>
                  <?php
                  if($row_ctsv['t_dauhong'] == 1) {
                    echo 'Đau họng';
                  }
                  else {
                    echo 'Không có';
                  }
                  ?>
                </td>
                <td>
                  <?php
                  if($row_ctsv['t_met'] == 1) {
                    echo 'Mệt';
                  }
                  else {
                    echo 'Không có';
                  }
                  ?>
                </td>
                <td>
                  <?php
                  if($row_ctsv['t_matvi'] == 1) {
                    echo 'Mất vị';
                  }
                  else {
                    echo 'Không có';
                  }
                  ?>
                </td>
                <td>
                  <?php
                  if($row_ctsv['t_khotho'] == 1) {
                    echo 'Khó thở';
                  }
                  else {
                    echo 'Không có';
                  }
                  ?>
                </td>
                <td>
                  <?php
                  if($row_ctsv['c_covid'] == 1) {
                    echo 'Đang mắc covid 19';
                  }
                  else {
                    echo 'Không có';
                  }
                  ?>
                </td>
                <td>
                  <?php
                  if($row_ctsv['c_tiepxuc'] == 1) {
                    echo 'Tiếp xúc gần ca nhiễm, ca nghi nhiễm COVID-19 trong vòng 14 ngày qua';
                  }
                  else {
                    echo 'Không có';
                  }
                  ?>
                </td>
                <td>
                  <?php
                  if($row_ctsv['c_quocgia'] == 1) {
                    echo 'Đi từ quốc gia hoặc vùng lãnh thổ khác trong vòng 14 ngày qua (*)';
                  }
                  else {
                    echo 'Không có';
                  }
                  ?>
                </td>
                <td>
                  <?php
                  if($row_ctsv['c_cachly'] == 1) {
                    echo 'Đã kết thúc cách ly tập trung trong vòng 14 ngày ';
                  }
                  else {
                    echo 'Không có';
                  }
                  ?>
                </td>
                <td>
                  <?php
                  if($row_ctsv['c_dieutri'] == 1) {
                    echo 'Đã xuất viện do điều trị COVID-19 trong vòng 14 ngày';
                  }
                  else {
                    echo 'Không có';
                  }
                  ?>
                </td>
                <td>
                  <?php
                  if($row_ctsv['c_coquan'] == 1) {
                    echo '14 ngày qua, trong gia đình/cơ quan có người có sốt hay ho';
                  }
                  else {
                    echo 'Không có';
                  }
                  ?>
                </td>
              </tr>
              <?php
              }
              ?>
              </table>
                  <!-- <select name="xuly" id="" class="form-control">
              <option value="1">Đã xử lý</option>
              <option value="0">Chưa xử lý</option>
            </select>
            <br>
            <input type="submit" value="Cập nhật sinh vien" class="btn btn-success" name="capnhatsinhvien"> --> 
          </form>
        </div>
        <?php
        } else {
         ?> 
         
        <?php
        }
        ?>
      <div class="col-md-12">
      <h4>Danh sách sv</h4>
      <?php
        $sql_select = mysqli_query($conn, "SELECT * FROM tbl_sinhvien");
      ?>
        <table class="table table-bordered">
          <tr style="text-align:center">
            <th>STT</th>
            <th>Nơi khai báo</th>
            <th>SDT/CMND</th>
            <th>Họ tên</th>
            <th>Ngày tháng sinh</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Mã sv</th>
            <th>Sức khỏe</th>
            <th>Mục khác</th>
          </tr>
          <?php
          $i= 0;
            while($row_khaibaosv = mysqli_fetch_array($sql_select)){
              $i++;
          ?>
            <tr style="text-align:center">
              <td><?php echo $i ?></td>
              <td><?php echo $row_khaibaosv['noikhaibao'] ?></td>
              <td><?php echo $row_khaibaosv['sdt'] ?></td>
              <td><?php echo $row_khaibaosv['hoten'] ?></td>
              <td><?php echo $row_khaibaosv['ngaysinh'] ?></td>
              <td><?php 
                  if($row_khaibaosv['gioitinh'] == 0) {
                    echo 'Nam';
                  }
                  else {
                    echo 'Nữ';
                  }
               ?>
              </td>
              <td><?php echo $row_khaibaosv['diachi'] ?></td>
              <td><?php echo $row_khaibaosv['masinhvien'] ?></td>
              <td>
              <?php 
                if($row_khaibaosv['t_sot'] == 0 && $row_khaibaosv['t_ho'] == 0 && $row_khaibaosv['t_dauhong'] == 0 && $row_khaibaosv['t_matvi'] == 0 && $row_khaibaosv['t_met'] == 0 && $row_khaibaosv['t_khotho'] == 0 && $row_khaibaosv['t_khac'] == 0 && $row_khaibaosv['c_covid'] == 0 && $row_khaibaosv['c_tiepxuc'] == 0 && $row_khaibaosv['c_quocgia'] == 0 && $row_khaibaosv['c_cachly'] == 0 && $row_khaibaosv['c_coquan'] == 0 && $row_khaibaosv['c_dieutri'] == 0) {
                  echo "Bình thường";
                }
                else {
                  echo "Không bình thường";
                }
              ?>
              </td>
              <td style="text-align: center;"><a style="font-size: 14px;display:block;" href="?xoa=<?php echo $row_khaibaosv['sv_id'] ?>" class="btn btn-danger mb-2"><i class="fa fa-trash" aria-hidden="true"></i></a> <a href="?quanly=xemsinhvien&masv=<?php echo $row_khaibaosv['masinhvien'] ?>" style="font-size: 14px;display:block" class="btn btn-primary">Xem Chi tiết</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
      </div>
    </div>
  </div>
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
