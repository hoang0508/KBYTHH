
 <?php 
      include("./db/conect.php");
      if(isset($_POST['btn-gui2'])) 
      {
          $sdts = $_POST['sdt2'];
          $ngaysinhs = date('Y-m-d', strtotime($_POST['ngaysinh2']));
          $diachis = $_POST['diachi2'];
          $xaphuongs = $_POST['xaphuong2'];
          $quanhuyens = $_POST['quanhuyen2'];
          $tinhthanhs = $_POST['tinhthanh2'];
          $noikhaibaos = $_POST['noikhaibao2'];
          $hovatens = $_POST['hovaten2'];
          $gioitinhs = $_POST['gioitinh2'];
          $quoctichs = $_POST['quoctich2'];
          $sot = $_POST["tsot2"];
          $ho = $_POST["tho2"];
          $dauhong = $_POST["tdauhong2"];
          $met = $_POST["tmet2"];
          $matvi = $_POST["tmatvi2"];
          $khotho = $_POST["tkhotho2"];
          $khac = $_POST["tkhac2"];
          $covid = $_POST["ccovid2"];
          $tiepxuc = $_POST["ctiepxuc2"];
          $quocgia = $_POST["cquocgia2"];
          $cachly = $_POST["ccachly2"];
          $coquan = $_POST["ccoquan2"];
          $cdieutri = $_POST["cdieutri2"];
          $ghichu = $_POST["ghichu2"];
          $phongban= $_POST["phongban2"];
          $magv= $_POST["magv2"];
          $maxacthuc = md5($_POST["maxacthuc2"]);
          
          $sql_insert_gv = "INSERT INTO `tbl_giangvien`(`noikhaibao`, `sodienthoai`, `hoten`, `ngaysinh`, `gioitinh`, `quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong`, `diachi`, `magiangvien`, `phongban`, `t_sot`, `t_ho`, `t_dauhong`, `t_matvi`, `t_met`, `t_khotho`, `t_khac`, `c_covid`, `c_tiepxuc`, `c_quocgia`, `c_cachly`, `c_coquan`, `c_dieutri`, `ghichu`, `maxacthuc`)
          VALUES ('$noikhaibaos', '$sdts', '$hovatens', '$ngaysinhs', '$gioitinhs', '$quoctichs', '$tinhthanhs', '$quanhuyens', '$xaphuongs', '$diachis','$magv' ,'$phongban','$sot', '$ho', '$dauhong', '$matvi', '$met', '$khotho', '$khac', '$covid', '$tiepxuc', '$quocgia', '$cachly', '$coquan', '$cdieutri', '$ghichu', '$maxacthuc')";
          $result = $conn->query($sql_insert_gv);
          if($result == TRUE){
              echo '<script>alert("Thêm mới thành công!");</script>';
          }else{
              echo "Error:". $sql . "</br>". $conn->error;
          }
      }

    
?>                        
<label class="labeo" style="    margin-bottom: 0; margin-left: 15px;" for="">Nhập vào nơi khai báo <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="noikhaibao2" style="width: 97%;" type="text" placeholder="Nhập vào  nơi khai báo">
</div>
<label for="" class="labeo" style="    margin-bottom: 0; margin-left: 15px;">Số điện thoại <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="sdt2" style="width: 97%;" type="tel" placeholder="Số điện thoại/CMND/thẻ BHYT">
</div>
<label for="" class="labeo" style="    margin-bottom: 0; margin-left: 15px;">Họ và tên <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="hovaten2" style="width: 97%;" type="text" placeholder="Nhập họ và tên">
</div>
<div class="flex">
    <div class="input-group" style="width: 50%;">
        <label style="margin-bottom: 0;" for="">Ngày sinh <span style = "color: red;" >(*)</span>:</label>
        <input name="ngaysinh2" type="date" style="margin-top: 6px;padding: 3px;">
    </div>
    <div class="input-group" style="width: 50%;">
        <label style="margin-bottom: 0;" for="">Giới tính <span style = "color: red;" >(*)</span>:</label>
        <select name="gioitinh2" id="" class="selectter">
            <option value="0">Nam</option>
            <option value="1">Nữ</option>
        </select>
    </div>
</div>
<div class="flex">
    <div class="input-group" style="width: 100%;" >
        <label for="" style="margin-bottom: 0;">Quốc tịch <span style = "color: red;" >(*)</span>:</label>
        <input name="quoctich2" type="text" placeholder="Quốc tịch" style="margin-top: 6px;">
    </div>
    <div class="input-group" style="width: 100%;" >
        <label for="" style="margin-bottom: 0;">Tỉnh thành <span style = "color: red;" >(*)</span>:</label>
        <select name="tinhthanh2" class = "selectter" id="provinces">
            <option value="">Tỉnh thành</option>
            <?php
                $qry = $conn->query("SELECT * FROM province");
                while($row= $qry->fetch_assoc()):
            ?>
                <option value="<?php echo $row['provinceid'] ?>"><?php echo $row['name'] ?></option>
            <?php endwhile; ?>
        </select>
    </div>
    <div class="input-group" style="width: 100%;" >
        <label for="" style="margin-bottom: 0;">Quận huyện <span style = "color: red;" >(*)</span>:</label>
        <select name="quanhuyen2" class = "selectter" id="district">
            <option value="">Quận huyện</option>
        </select>
    </div>
    <div class="input-group" style="width: 100%;" >
        <label style="margin-bottom: 0;" for="">Xã phường <span style = "color: red;" >(*)</span>:</label>
        <select name="xaphuong2" class = "selectter"  id="ward">
            <option value="">Xã phường</option>
        </select>
    </div>
</div>
<label for="" class="labeo" style=" margin-bottom: 0; margin-left: 15px;">Địa chỉ <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="diachi2" style="width: 97%;" type="text" placeholder="Địa chỉ">
</div>
<div id="GV" class="">
    <label for="" class="labeo" style=" margin-bottom: 0; margin-left: 15px;">Mã giảng viên <span style = "color: red;" >(*)</span>:</label>
    <div class="input-group">
        <input name="magv2" style="width: 97%;" type="text" placeholder="Mã giảng viên">
    </div>
    <label for="" class="labeo" style=" margin-bottom: 0; margin-left: 15px;">Phòng ban <span style = "color: red;" >(*)</span>:</label>
    <div class="input-group">
        <input name="phongban2" style="width: 97%;" type="text" placeholder="Phòng ban">
    </div>
</div>

<div class="form-heal">
                <h3 class="heal-title">
                Trong 14 ngày qua, bạn có thấy những triệu chứng nào sau đây
                không? (*):
                </h3>
                <table>
                <tr>
                    <th>Dấu hiệu</th>
                    <th>Có</th>
                    <th>Không</th>
                </tr>
                <tr>
                    <td>Sốt (*)</td>
                    <!-- <td><input type="radio" value="1" nane="tsot" /></td> -->
                    <td>
                    <input type="radio" name="tsot2" value="1">
                    </td>
                    <td>
                    <input type="radio" name="tsot2" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>Ho (*)</td>
                    <td>
                    <input type="radio" name="tho2" value="1">
                    </td>
                    <td>
                    <input type="radio" name="tho2" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>Đau họng (*)</td>
                    <td>
                    <input type="radio" name="tdauhong2" value="1">
                    </td>
                    <td>
                    <input type="radio" name="tdauhong2" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>Mất vị, Mất mùi (*)</td>
                    <td>
                    <input type="radio" name="tmatvi2" value="1">
                    </td>
                    <td>
                    <input type="radio" name="tmatvi2" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>Cảm giác mệt (*)</td>
                    <td>
                    <input type="radio" name="tmet2" value="1">
                    </td>
                    <td>
                    <input type="radio" name="tmet2" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>Khó thở (*)</td>
                    <td>
                    <input type="radio" name="tkhotho2" value="1">
                    </td>
                    <td>
                    <input type="radio" name="tkhotho2" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>
                    Ông/bà vui lòng cung cấp thêm chi tiết về triệu chứng khác (*)
                    </td>
                    <td>
                    <input type="radio" name="tkhac2" value="1">
                    </td>
                    <td>
                    <input type="radio" name="tkhac2" value="0" checked="checked">
                    </td>
                </tr>
                </table>
            </div>
            <div class="form-heal">
                <h3 class="heal-title">Trong thời gian vừa qua (*):</h3>
                <table>
                <tr>
                    <th>Yếu tố dịch tễ (*)</th>
                    <th>Có</th>
                    <th>Không</th>
                </tr>
                <tr>
                    <td>1.Bạn có đang mắc COVID-19 không (*)</td>
                    <td>
                    <input type="radio" name="ccovid2" value="1">
                    </td>
                    <td>
                    <input type="radio" name="ccovid2" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>
                    2.Tiếp xúc gần ca nhiễm, ca nghi nhiễm COVID-19 trong vòng 14
                    ngày qua (*)
                    </td>
                    <td>
                    <input type="radio" name="ctiepxuc2" value="1">
                    </td>
                    <td>
                    <input type="radio" name="ctiepxuc2" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>
                    3.Đi từ quốc gia hoặc vùng lãnh thổ khác trong vòng 14 ngày
                    qua (*)
                    </td>
                    <td>
                    <input type="radio" name="cquocgia2" value="1">
                    </td>
                    <td>
                    <input type="radio" name="cquocgia2" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>
                    4.Bạn có kết thúc cách ly tập trung trong vòng 14 ngày qua
                    không? (*)
                    </td>
                    <td>
                    <input type="radio" name="ccachly2" value="1">
                    </td>
                    <td>
                    <input type="radio" name="ccachly2" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>
                    5.Trong vòng 14 ngày qua, trong gia đình/cơ quan bạn có ai sốt
                    hay ho không? (*)
                    </td>
                    <td>
                    <input type="radio" name="ccoquan2" value="1">
                    </td>
                    <td>
                    <input type="radio" name="ccoquan2" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>
                    6.Bạn đã xuất viện do điều trị COVID-19 trong vòng 14 ngày qua
                    không? (*)
                    </td>
                    <td>
                    <input type="radio" name="cdieutri2" value="1">
                    </td>
                    <td>
                    <input type="radio" name="cdieutri2" value="0" checked="checked">
                    </td>
                </tr>
                </table>
                <textarea
                name="ghichu2"
                class="form-input form-tex"
                id=""
                cols="30"
                rows="10"
                >
    Vui lòng cung cấp thêm chi tiết thông tin về triệu chứng, dịch tễ, lịch sử di chuyển (Nếu có)</textarea
                >
                <div class="input-random">
                <h3>Vui Lòng nhập mã xác thực</h3>
                <p class="random-number2" style="color: blue;">
                </p>
                <input class="input-r" type="text" name="maxacthuc2">
              </div>
            <button type="submit" class="btn-sub" name="btn-gui2">Gửi</button>
        </div>

        <script>
            const randomNum2 = document.querySelector(".random-number2");
            randomNum2.textContent = Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);
          </script>


<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script>
        jQuery(document).ready(function($){
            $("#provinces").change(function(event){
                var  provinceids = $("#provinces").val();
                $.post('district.php',{"provicesid":provinceids},function(data) {
                    $("#district").html(data);
                });
            });
            $("#district").change(function(event){
                var  districtids = $("#district").val();
                $.post('ward.php',{"districid":districtids},function(data) {
                    $("#ward").html(data);
                });
            });
        });
    </script>