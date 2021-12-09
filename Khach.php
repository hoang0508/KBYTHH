
 <?php 
    include("./db/conect.php");
    if(isset($_POST['btn-gui1'])) 
    {
        $sdts = $_POST['sdt1'];
        $ngaysinhs = date('Y-m-d', strtotime($_POST['ngaysinhs']));
        $diachis = $_POST['diachi1'];
        $xaphuongs = $_POST['xaphuong'];
        $quanhuyens = $_POST['quanhuyen'];
        $tinhthanhs = $_POST['tinhthanh'];
        $noikhaibaos = $_POST['noikhaibao1'];
        $hovatens = $_POST['hovaten1'];
        $gioitinhs = $_POST['Gioitinh1'];
        $quoctichs = $_POST['quoctich1'];
        $sot = $_POST["tsot1"];
        $ho = $_POST["tho1"];
        $dauhong = $_POST["tdauhong1"];
        $met = $_POST["tmet1"];
        $matvi = $_POST["tmatvi1"];
        $khotho = $_POST["tkhotho1"];
        $khac = $_POST["tkhac1"];
        $covid = $_POST["ccovid1"];
        $tiepxuc = $_POST["ctiepxuc1"];
        $quocgia = $_POST["cquocgia1"];
        $cachly = $_POST["ccachly1"];
        $coquan = $_POST["ccoquan1"];
        $cdieutri = $_POST["cdieutri1"];
        $ghichu = $_POST["ghichu1"];
        $maxacthuc = md5($_POST["maxacthuc1"]);
        
        $sql_insert_khach = "INSERT INTO `tbl_khach`(`noikhaibao`, `sdt`, `hoten`, `ngaysinh`, `gioitinh`, `quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong`, `diachi`, `t_sot`, `t_ho`, `t_dauhong`, `t_matvi`, `t_met`, `t_khotho`, `t_khac`, `c_covid`, `c_tiepxuc`, `c_quocgia`, `c_cachly`, `c_coquan`, `c_dieutri`, `ghichu`, `maxacthuc`)
        VALUES ('$noikhaibaos', '$sdts', '$hovatens', '$ngaysinhs', '$gioitinhs', '$quoctichs', '$tinhthanhs', '$quanhuyens', '$xaphuongs', '$diachis',  '$sot', '$ho', '$dauhong', '$matvi', '$met', '$khotho', '$khac', '$covid', '$tiepxuc', '$quocgia', '$cachly', '$coquan', '$cdieutri', '$ghichu', '$maxacthuc')";
        $result = $conn->query( $sql_insert_khach);
        if($result == TRUE){
            echo '<script>alert("Thêm mới thành công!");</script>';
        }else{
            echo "Error:". $sql . "</br>". $conn->error;
        }
    }
    
?>                           
<label class="labeo" style="    margin-bottom: 0; margin-left: 15px;" for="">Nhập vào nơi khai báo <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="noikhaibao1" style="width: 97%;" type="text" placeholder="Nhập vào  nơi khai báo">
</div>
<label for="" class="labeo" style="    margin-bottom: 0; margin-left: 15px;">Số điện thoại <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="sdt1" style="width: 97%;" type="tel" placeholder="Số điện thoại/CMND/thẻ BHYT">
</div>
<label for="" class="labeo" style="    margin-bottom: 0; margin-left: 15px;">Họ và tên <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="hovaten1" style="width: 97%;" type="text" placeholder="Nhập họ và tên">
</div>
<div class="flex">
    <div class="input-group" style="width: 50%;">
        <label style="margin-bottom: 0;" for="">Ngày sinh <span style = "color: red;" >(*)</span>:</label>
        <input name="ngaysinh1" type="date" style="margin-top: 6px;padding: 3px;">
    </div>
    <div class="input-group" style="width: 50%;">
        <label style="margin-bottom: 0;" for="">Giới tính <span style = "color: red;" >(*)</span>:</label>
        <select name="Gioitinh1" id="" class="selectter">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select>
    </div>
</div>
<div class="flex">
    <div class="input-group" style="width: 100%;" >
        <label for="" style="margin-bottom: 0;">Quốc tịch <span style = "color: red;" >(*)</span>:</label>
        <input name="quoctich1" type="text" placeholder="Quốc tịch" style="margin-top: 6px;">
    </div>
    <div class="input-group" style="width: 100%;" >
        <label for="" style="margin-bottom: 0;">Tỉnh thành <span style = "color: red;" >(*)</span>:</label>
        <select name="tinhthanh" class = "selectter" id="provincesm">
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
        <select name="quanhuyen" class = "selectter" id="districtn">
            <option value="">Quận huyện</option>
        </select>
    </div>
    <div class="input-group" style="width: 100%;" >
        <label style="margin-bottom: 0;" for="">Xã phường <span style = "color: red;" >(*)</span>:</label>
        <select name="xaphuong" class = "selectter"  id="wardo">
            <option value="">Xã phường</option>
        </select>
    </div>
</div>
<label for="" class="labeo" style=" margin-bottom: 0; margin-left: 15px;">Địa chỉ <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="diachi1" style="width: 97%;" type="text" placeholder="Địa chỉ">
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
                    <input type="radio" name="tsot1" value="1">
                    </td>
                    <td>
                    <input type="radio" name="tsot1" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>Ho (*)</td>
                    <td>
                    <input type="radio" name="tho1" value="1">
                    </td>
                    <td>
                    <input type="radio" name="tho1" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>Đau họng (*)</td>
                    <td>
                    <input type="radio" name="tdauhong1" value="1">
                    </td>
                    <td>
                    <input type="radio" name="tdauhong1" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>Mất vị, Mất mùi (*)</td>
                    <td>
                    <input type="radio" name="tmatvi1" value="1">
                    </td>
                    <td>
                    <input type="radio" name="tmatvi1" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>Cảm giác mệt (*)</td>
                    <td>
                    <input type="radio" name="tmet1" value="1">
                    </td>
                    <td>
                    <input type="radio" name="tmet1" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>Khó thở (*)</td>
                    <td>
                    <input type="radio" name="tkhotho1" value="1">
                    </td>
                    <td>
                    <input type="radio" name="tkhotho1" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>
                    Ông/bà vui lòng cung cấp thêm chi tiết về triệu chứng khác (*)
                    </td>
                    <td>
                    <input type="radio" name="tkhac1" value="1">
                    </td>
                    <td>
                    <input type="radio" name="tkhac1" value="0" checked="checked">
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
                    <input type="radio" name="ccovid1" value="1">
                    </td>
                    <td>
                    <input type="radio" name="ccovid1" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>
                    2.Tiếp xúc gần ca nhiễm, ca nghi nhiễm COVID-19 trong vòng 14
                    ngày qua (*)
                    </td>
                    <td>
                    <input type="radio" name="ctiepxuc1" value="1">
                    </td>
                    <td>
                    <input type="radio" name="ctiepxuc1" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>
                    3.Đi từ quốc gia hoặc vùng lãnh thổ khác trong vòng 14 ngày
                    qua (*)
                    </td>
                    <td>
                    <input type="radio" name="cquocgia1" value="1">
                    </td>
                    <td>
                    <input type="radio" name="cquocgia1" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>
                    4.Bạn có kết thúc cách ly tập trung trong vòng 14 ngày qua
                    không? (*)
                    </td>
                    <td>
                    <input type="radio" name="ccachly1" value="1">
                    </td>
                    <td>
                    <input type="radio" name="ccachly1" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>
                    5.Trong vòng 14 ngày qua, trong gia đình/cơ quan bạn có ai sốt
                    hay ho không? (*)
                    </td>
                    <td>
                    <input type="radio" name="ccoquan1" value="1">
                    </td>
                    <td>
                    <input type="radio" name="ccoquan1" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>
                    6.Bạn đã xuất viện do điều trị COVID-19 trong vòng 14 ngày qua
                    không? (*)
                    </td>
                    <td>
                    <input type="radio" name="cdieutri1" value="1">
                    </td>
                    <td>
                    <input type="radio" name="cdieutri1" value="0" checked="checked">
                    </td>
                </tr>
                </table>
                <textarea
                name="ghichu1"
                class="form-input form-tex"
                id=""
                cols="30"
                rows="10"
                >
    Vui lòng cung cấp thêm chi tiết thông tin về triệu chứng, dịch tễ, lịch sử di chuyển (Nếu có)</textarea
                >
                <div class="input-random">
                <h3>Vui Lòng nhập mã xác thực</h3>
                <p class="random-number1" style="color: blue;">
                </p>
                <input class="input-r" type="text" name="maxacthuc1">
              </div>
            <button type="submit" class="btn-sub" name="btn-gui1">Gửi</button>
        </div>

        <script>
            const randomNum1 = document.querySelector(".random-number1");
            randomNum1.textContent = Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);
          </script>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script>
        jQuery(document).ready(function($){
            $("#provincesm").change(function(event){
                var  provinceids = $("#provincesm").val();
                $.post('district.php',{"provicesid":provinceids},function(data) {
                    $("#districtn").html(data);
                });
            });
            $("#districtn").change(function(event){
                var  districtids = $("#districtn").val();
                $.post('ward.php',{"districid":districtids},function(data) {
                    $("#wardo").html(data);
                });
            });
        });
</script>