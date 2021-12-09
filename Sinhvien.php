
 <?php 
     include("./db/conect.php");
            if(isset($_POST['btn-gui'])) 
            {
                $sdts = $_POST['sdts'];
                $ngaysinhs = date('Y-m-d', strtotime($_POST['ngaysinhs']));
                $diachis = $_POST['diachis'];
                $xaphuongs = $_POST['wards'];
                $quanhuyens = $_POST['districts'];
                $tinhthanhs = $_POST['provincest'];
                $noikhaibaos = $_POST['noikhaibaos'];
                $hovatens = $_POST['hovatens'];
                $gioitinhs = $_POST['Gioitinhs'];
                $quoctichs = $_POST['quoctichs'];
                $masvs = md5($_POST['Masv']);
                $sot = $_POST["tsot"];
                $ho = $_POST["tho"];
                $dauhong = $_POST["tdauhong"];
                $met = $_POST["tmet"];
                $matvi = $_POST["tmatvi"];
                $khotho = $_POST["tkhotho"];
                $khac = $_POST["tkhac"];
                $covid = $_POST["ccovid"];
                $tiepxuc = $_POST["ctiepxuc"];
                $quocgia = $_POST["cquocgia"];
                $cachly = $_POST["ccachly"];
                $coquan = $_POST["ccoquan"];
                $cdieutri = $_POST["cdieutri"];
                $ghichu = $_POST["ghichu"];
                $maxacthuc = md5($_POST["maxacthuc"]);
                
                $sql_insert_yte = "INSERT INTO `tbl_sinhvien`(`noikhaibao`, `sdt`, `hoten`, `ngaysinh`, `gioitinh`, `quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong`, `diachi`, `masinhvien`, `t_sot`, `t_ho`, `t_dauhong`, `t_matvi`, `t_met`, `t_khotho`, `t_khac`, `c_covid`, `c_tiepxuc`, `c_quocgia`, `c_cachly`, `c_coquan`, `c_dieutri`, `ghichu`, `maxacthuc`) 
                VALUES ('$noikhaibaos', '$sdts', '$hovatens', '$ngaysinhs', '$gioitinhs', '$quoctichs', '$tinhthanhs', '$quanhuyens', '$xaphuongs', '$diachis', '$masvs', '$sot', '$ho', '$dauhong', '$matvi', '$met', '$khotho', '$khac', '$covid', '$tiepxuc', '$quocgia', '$cachly', '$coquan', '$cdieutri', '$ghichu', '$maxacthuc')";
                $result = $conn->query( $sql_insert_yte);
                if($result == TRUE){
                    echo '<script>alert("Thêm mới thành công!");</script>';
                }else{
                    echo "Error:". $sql . "</br>". $conn->error;
                }
            }
        
    
    
?>                    
<label class="labeo" style="    margin-bottom: 0; margin-left: 15px;" for="">Nhập vào nơi khai báo <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="noikhaibaos" style="width: 97%;" type="text" placeholder="Nhập vào  nơi khai báo">
</div>
<label for="" class="labeo" style="    margin-bottom: 0; margin-left: 15px;">Số điện thoại <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="sdts" style="width: 97%;" type="tel" placeholder="Số điện thoại/CMND/thẻ BHYT">
</div>
<label for="" class="labeo" style="    margin-bottom: 0; margin-left: 15px;">Họ và tên <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="hovatens" style="width: 97%;" type="text" placeholder="Nhập họ và tên">
</div>
<div class="flex">
    <div class="input-group" style="width: 50%;">
        <label style="margin-bottom: 0;" for="">Ngày sinh <span style = "color: red;" >(*)</span>:</label>
        <input name="ngaysinhs" type="date" style="margin-top: 6px;padding: 3px;">
    </div>
    <div class="input-group" style="width: 50%;">
        <label style="margin-bottom: 0;" for="">Giới tính <span style = "color: red;" >(*)</span>:</label>
        <select name="Gioitinhs" id="" class="selectter">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select>
    </div>
</div>
<div class="flex">
    <div class="input-group" style="width: 100%;" >
        <label for="" style="margin-bottom: 0;">Quốc tịch <span style = "color: red;" >(*)</span>:</label>
        <input name="quoctichs" type="text" placeholder="Quốc tịch" style="margin-top: 6px;">
    </div>
    <div class="input-group" style="width: 100%;" >
        <label for="" style="margin-bottom: 0;">Tỉnh thành <span style = "color: red;" >(*)</span>:</label>
        <select name="provincest" class = "selectter" id="provincest">
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
        <select name="districts" class = "selectter" id="districts">
            <option value="">Quận huyện</option>
        </select>
    </div>
    <div class="input-group" style="width: 100%;" >
        <label style="margin-bottom: 0;" for="">Xã phường <span style = "color: red;" >(*)</span>:</label>
        <select name="wards" class = "selectter"  id="wards">
            <option value="">Xã phường</option>
        </select>
    </div>
</div>
<label for="" class="labeo" style=" margin-bottom: 0; margin-left: 15px;">Địa chỉ <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="diachis" style="width: 97%;" type="text" placeholder="Địa chỉ">
</div>
<div id="SVs" class="">
    <label for="" class="labeo" style=" margin-bottom: 0; margin-left: 15px;">Mã sinh viên <span style = "color: red;" >(*)</span>:</label>
    <div class="input-group">
        <input name="Masv" style="width: 97%;" type="text" placeholder="Mã sinh viên">
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
                <input type="radio" name="tsot" value="1">
                </td>
                <td>
                <input type="radio" name="tsot" value="0" checked="checked">
                </td>
              </tr>
              <tr>
                <td>Ho (*)</td>
                <td>
                <input type="radio" name="tho" value="1">
                </td>
                <td>
                <input type="radio" name="tho" value="0" checked="checked">
                </td>
              </tr>
              <tr>
                <td>Đau họng (*)</td>
                <td>
                <input type="radio" name="tdauhong" value="1">
                </td>
                <td>
                <input type="radio" name="tdauhong" value="0" checked="checked">
                </td>
              </tr>
              <tr>
                <td>Mất vị, Mất mùi (*)</td>
                <td>
                <input type="radio" name="tmatvi" value="1">
                </td>
                <td>
                <input type="radio" name="tmatvi" value="0" checked="checked">
                </td>
              </tr>
              <tr>
                <td>Cảm giác mệt (*)</td>
                <td>
                <input type="radio" name="tmet" value="1">
                </td>
                <td>
                <input type="radio" name="tmet" value="0" checked="checked">
                </td>
              </tr>
              <tr>
                <td>Khó thở (*)</td>
                <td>
                <input type="radio" name="tkhotho" value="1">
                </td>
                <td>
                <input type="radio" name="tkhotho" value="0" checked="checked">
                </td>
              </tr>
              <tr>
                <td>
                  Ông/bà vui lòng cung cấp thêm chi tiết về triệu chứng khác (*)
                </td>
                <td>
                <input type="radio" name="tkhac" value="1">
                </td>
                <td>
                <input type="radio" name="tkhac" value="0" checked="checked">
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
                <input type="radio" name="ccovid" value="1">
                </td>
                <td>
                <input type="radio" name="ccovid" value="0" checked="checked">
                </td>
              </tr>
              <tr>
                <td>
                  2.Tiếp xúc gần ca nhiễm, ca nghi nhiễm COVID-19 trong vòng 14
                  ngày qua (*)
                </td>
                <td>
                <input type="radio" name="ctiepxuc" value="1">
                </td>
                <td>
                <input type="radio" name="ctiepxuc" value="0" checked="checked">
                </td>
              </tr>
              <tr>
                <td>
                  3.Đi từ quốc gia hoặc vùng lãnh thổ khác trong vòng 14 ngày
                  qua (*)
                </td>
                <td>
                <input type="radio" name="cquocgia" value="1">
                </td>
                <td>
                <input type="radio" name="cquocgia" value="0" checked="checked">
                </td>
              </tr>
              <tr>
                <td>
                  4.Bạn có kết thúc cách ly tập trung trong vòng 14 ngày qua
                  không? (*)
                </td>
                <td>
                <input type="radio" name="ccachly" value="1">
                </td>
                <td>
                <input type="radio" name="ccachly" value="0" checked="checked">
                </td>
              </tr>
              <tr>
                <td>
                  5.Trong vòng 14 ngày qua, trong gia đình/cơ quan bạn có ai sốt
                  hay ho không? (*)
                </td>
                <td>
                <input type="radio" name="ccoquan" value="1">
                </td>
                <td>
                <input type="radio" name="ccoquan" value="0" checked="checked">
                </td>
              </tr>
              <tr>
                <td>
                  6.Bạn đã xuất viện do điều trị COVID-19 trong vòng 14 ngày qua
                  không? (*)
                </td>
                <td>
                <input type="radio" name="cdieutri" value="1">
                </td>
                <td>
                <input type="radio" name="cdieutri" value="0" checked="checked">
                </td>
              </tr>
            </table>
            <textarea
              name="ghichu"
              class="form-input form-tex"
              id=""
              cols="30"
              rows="10"
            >
Vui lòng cung cấp thêm chi tiết thông tin về triệu chứng, dịch tễ, lịch sử di chuyển (Nếu có)</textarea
            >
              <div class="input-random">
                <h3>Vui Lòng nhập mã xác thực</h3>
                <p class="random-number" style="color: blue;">
                </p>
                <input class="input-r" type="text" name="maxacthuc">
              </div>
            <button type="submit" class="btn-sub" name="btn-gui">Gửi</button>
          </div>

          <script>
            const randomNumber = document.querySelector(".random-number");
            randomNumber.textContent = Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);
          </script>


<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script>
        jQuery(document).ready(function($){
            $("#provincest").change(function(event){
                var  provinceids = $("#provincest").val();
                $.post('district.php',{"provicesid":provinceids},function(data) {
                    $("#districts").html(data);
                });
            });
            $("#districts").change(function(event){
                var  districtids = $("#districts").val();
                $.post('ward.php',{"districid":districtids},function(data) {
                    $("#wards").html(data);
                });
            });
        });
    </script>