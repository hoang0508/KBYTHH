
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
                    echo '<script>alert("Th??m m???i th??nh c??ng!");</script>';
                }else{
                    echo "Error:". $sql . "</br>". $conn->error;
                }
            }
        
    
    
?>                    
<label class="labeo" style="    margin-bottom: 0; margin-left: 15px;" for="">Nh???p v??o n??i khai b??o <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="noikhaibaos" style="width: 97%;" type="text" placeholder="Nh???p v??o  n??i khai b??o">
</div>
<label for="" class="labeo" style="    margin-bottom: 0; margin-left: 15px;">S??? ??i???n tho???i <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="sdts" style="width: 97%;" type="tel" placeholder="S??? ??i???n tho???i/CMND/th??? BHYT">
</div>
<label for="" class="labeo" style="    margin-bottom: 0; margin-left: 15px;">H??? v?? t??n <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="hovatens" style="width: 97%;" type="text" placeholder="Nh???p h??? v?? t??n">
</div>
<div class="flex">
    <div class="input-group" style="width: 50%;">
        <label style="margin-bottom: 0;" for="">Ng??y sinh <span style = "color: red;" >(*)</span>:</label>
        <input name="ngaysinhs" type="date" style="margin-top: 6px;padding: 3px;">
    </div>
    <div class="input-group" style="width: 50%;">
        <label style="margin-bottom: 0;" for="">Gi???i t??nh <span style = "color: red;" >(*)</span>:</label>
        <select name="Gioitinhs" id="" class="selectter">
            <option value="Nam">Nam</option>
            <option value="N???">N???</option>
        </select>
    </div>
</div>
<div class="flex">
    <div class="input-group" style="width: 100%;" >
        <label for="" style="margin-bottom: 0;">Qu???c t???ch <span style = "color: red;" >(*)</span>:</label>
        <input name="quoctichs" type="text" placeholder="Qu???c t???ch" style="margin-top: 6px;">
    </div>
    <div class="input-group" style="width: 100%;" >
        <label for="" style="margin-bottom: 0;">T???nh th??nh <span style = "color: red;" >(*)</span>:</label>
        <select name="provincest" class = "selectter" id="provincest">
            <option value="">T???nh th??nh</option>
            <?php
                $qry = $conn->query("SELECT * FROM province");
                while($row= $qry->fetch_assoc()):
            ?>
                <option value="<?php echo $row['provinceid'] ?>"><?php echo $row['name'] ?></option>
            <?php endwhile; ?>
        </select>
    </div>
    <div class="input-group" style="width: 100%;" >
        <label for="" style="margin-bottom: 0;">Qu???n huy???n <span style = "color: red;" >(*)</span>:</label>
        <select name="districts" class = "selectter" id="districts">
            <option value="">Qu???n huy???n</option>
        </select>
    </div>
    <div class="input-group" style="width: 100%;" >
        <label style="margin-bottom: 0;" for="">X?? ph?????ng <span style = "color: red;" >(*)</span>:</label>
        <select name="wards" class = "selectter"  id="wards">
            <option value="">X?? ph?????ng</option>
        </select>
    </div>
</div>
<label for="" class="labeo" style=" margin-bottom: 0; margin-left: 15px;">?????a ch??? <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="diachis" style="width: 97%;" type="text" placeholder="?????a ch???">
</div>
<div id="SVs" class="">
    <label for="" class="labeo" style=" margin-bottom: 0; margin-left: 15px;">M?? sinh vi??n <span style = "color: red;" >(*)</span>:</label>
    <div class="input-group">
        <input name="Masv" style="width: 97%;" type="text" placeholder="M?? sinh vi??n">
    </div>
</div>
<div class="form-heal">
            <h3 class="heal-title">
              Trong 14 ng??y qua, b???n c?? th???y nh???ng tri???u ch???ng n??o sau ????y
              kh??ng? (*):
            </h3>
            <table>
              <tr>
                <th>D???u hi???u</th>
                <th>C??</th>
                <th>Kh??ng</th>
              </tr>
              <tr>
                <td>S???t (*)</td>
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
                <td>??au h???ng (*)</td>
                <td>
                <input type="radio" name="tdauhong" value="1">
                </td>
                <td>
                <input type="radio" name="tdauhong" value="0" checked="checked">
                </td>
              </tr>
              <tr>
                <td>M???t v???, M???t m??i (*)</td>
                <td>
                <input type="radio" name="tmatvi" value="1">
                </td>
                <td>
                <input type="radio" name="tmatvi" value="0" checked="checked">
                </td>
              </tr>
              <tr>
                <td>C???m gi??c m???t (*)</td>
                <td>
                <input type="radio" name="tmet" value="1">
                </td>
                <td>
                <input type="radio" name="tmet" value="0" checked="checked">
                </td>
              </tr>
              <tr>
                <td>Kh?? th??? (*)</td>
                <td>
                <input type="radio" name="tkhotho" value="1">
                </td>
                <td>
                <input type="radio" name="tkhotho" value="0" checked="checked">
                </td>
              </tr>
              <tr>
                <td>
                  ??ng/b?? vui l??ng cung c???p th??m chi ti???t v??? tri???u ch???ng kh??c (*)
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
            <h3 class="heal-title">Trong th???i gian v???a qua (*):</h3>
            <table>
              <tr>
                <th>Y???u t??? d???ch t??? (*)</th>
                <th>C??</th>
                <th>Kh??ng</th>
              </tr>
              <tr>
                <td>1.B???n c?? ??ang m???c COVID-19 kh??ng (*)</td>
                <td>
                <input type="radio" name="ccovid" value="1">
                </td>
                <td>
                <input type="radio" name="ccovid" value="0" checked="checked">
                </td>
              </tr>
              <tr>
                <td>
                  2.Ti???p x??c g???n ca nhi???m, ca nghi nhi???m COVID-19 trong v??ng 14
                  ng??y qua (*)
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
                  3.??i t??? qu???c gia ho???c v??ng l??nh th??? kh??c trong v??ng 14 ng??y
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
                  4.B???n c?? k???t th??c c??ch ly t???p trung trong v??ng 14 ng??y qua
                  kh??ng? (*)
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
                  5.Trong v??ng 14 ng??y qua, trong gia ????nh/c?? quan b???n c?? ai s???t
                  hay ho kh??ng? (*)
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
                  6.B???n ???? xu???t vi???n do ??i???u tr??? COVID-19 trong v??ng 14 ng??y qua
                  kh??ng? (*)
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
Vui l??ng cung c???p th??m chi ti???t th??ng tin v??? tri???u ch???ng, d???ch t???, l???ch s??? di chuy???n (N???u c??)</textarea
            >
              <div class="input-random">
                <h3>Vui L??ng nh???p m?? x??c th???c</h3>
                <p class="random-number" style="color: blue;">
                </p>
                <input class="input-r" type="text" name="maxacthuc">
              </div>
            <button type="submit" class="btn-sub" name="btn-gui">G???i</button>
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