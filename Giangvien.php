
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
              echo '<script>alert("Th??m m???i th??nh c??ng!");</script>';
          }else{
              echo "Error:". $sql . "</br>". $conn->error;
          }
      }

    
?>                        
<label class="labeo" style="    margin-bottom: 0; margin-left: 15px;" for="">Nh???p v??o n??i khai b??o <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="noikhaibao2" style="width: 97%;" type="text" placeholder="Nh???p v??o  n??i khai b??o">
</div>
<label for="" class="labeo" style="    margin-bottom: 0; margin-left: 15px;">S??? ??i???n tho???i <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="sdt2" style="width: 97%;" type="tel" placeholder="S??? ??i???n tho???i/CMND/th??? BHYT">
</div>
<label for="" class="labeo" style="    margin-bottom: 0; margin-left: 15px;">H??? v?? t??n <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="hovaten2" style="width: 97%;" type="text" placeholder="Nh???p h??? v?? t??n">
</div>
<div class="flex">
    <div class="input-group" style="width: 50%;">
        <label style="margin-bottom: 0;" for="">Ng??y sinh <span style = "color: red;" >(*)</span>:</label>
        <input name="ngaysinh2" type="date" style="margin-top: 6px;padding: 3px;">
    </div>
    <div class="input-group" style="width: 50%;">
        <label style="margin-bottom: 0;" for="">Gi???i t??nh <span style = "color: red;" >(*)</span>:</label>
        <select name="gioitinh2" id="" class="selectter">
            <option value="0">Nam</option>
            <option value="1">N???</option>
        </select>
    </div>
</div>
<div class="flex">
    <div class="input-group" style="width: 100%;" >
        <label for="" style="margin-bottom: 0;">Qu???c t???ch <span style = "color: red;" >(*)</span>:</label>
        <input name="quoctich2" type="text" placeholder="Qu???c t???ch" style="margin-top: 6px;">
    </div>
    <div class="input-group" style="width: 100%;" >
        <label for="" style="margin-bottom: 0;">T???nh th??nh <span style = "color: red;" >(*)</span>:</label>
        <select name="tinhthanh2" class = "selectter" id="provinces">
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
        <select name="quanhuyen2" class = "selectter" id="district">
            <option value="">Qu???n huy???n</option>
        </select>
    </div>
    <div class="input-group" style="width: 100%;" >
        <label style="margin-bottom: 0;" for="">X?? ph?????ng <span style = "color: red;" >(*)</span>:</label>
        <select name="xaphuong2" class = "selectter"  id="ward">
            <option value="">X?? ph?????ng</option>
        </select>
    </div>
</div>
<label for="" class="labeo" style=" margin-bottom: 0; margin-left: 15px;">?????a ch??? <span style = "color: red;" >(*)</span>:</label>
<div class="input-group">
    <input name="diachi2" style="width: 97%;" type="text" placeholder="?????a ch???">
</div>
<div id="GV" class="">
    <label for="" class="labeo" style=" margin-bottom: 0; margin-left: 15px;">M?? gi???ng vi??n <span style = "color: red;" >(*)</span>:</label>
    <div class="input-group">
        <input name="magv2" style="width: 97%;" type="text" placeholder="M?? gi???ng vi??n">
    </div>
    <label for="" class="labeo" style=" margin-bottom: 0; margin-left: 15px;">Ph??ng ban <span style = "color: red;" >(*)</span>:</label>
    <div class="input-group">
        <input name="phongban2" style="width: 97%;" type="text" placeholder="Ph??ng ban">
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
                    <td>??au h???ng (*)</td>
                    <td>
                    <input type="radio" name="tdauhong2" value="1">
                    </td>
                    <td>
                    <input type="radio" name="tdauhong2" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>M???t v???, M???t m??i (*)</td>
                    <td>
                    <input type="radio" name="tmatvi2" value="1">
                    </td>
                    <td>
                    <input type="radio" name="tmatvi2" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>C???m gi??c m???t (*)</td>
                    <td>
                    <input type="radio" name="tmet2" value="1">
                    </td>
                    <td>
                    <input type="radio" name="tmet2" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>Kh?? th??? (*)</td>
                    <td>
                    <input type="radio" name="tkhotho2" value="1">
                    </td>
                    <td>
                    <input type="radio" name="tkhotho2" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>
                    ??ng/b?? vui l??ng cung c???p th??m chi ti???t v??? tri???u ch???ng kh??c (*)
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
                    <input type="radio" name="ccovid2" value="1">
                    </td>
                    <td>
                    <input type="radio" name="ccovid2" value="0" checked="checked">
                    </td>
                </tr>
                <tr>
                    <td>
                    2.Ti???p x??c g???n ca nhi???m, ca nghi nhi???m COVID-19 trong v??ng 14
                    ng??y qua (*)
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
                    3.??i t??? qu???c gia ho???c v??ng l??nh th??? kh??c trong v??ng 14 ng??y
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
                    4.B???n c?? k???t th??c c??ch ly t???p trung trong v??ng 14 ng??y qua
                    kh??ng? (*)
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
                    5.Trong v??ng 14 ng??y qua, trong gia ????nh/c?? quan b???n c?? ai s???t
                    hay ho kh??ng? (*)
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
                    6.B???n ???? xu???t vi???n do ??i???u tr??? COVID-19 trong v??ng 14 ng??y qua
                    kh??ng? (*)
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
    Vui l??ng cung c???p th??m chi ti???t th??ng tin v??? tri???u ch???ng, d???ch t???, l???ch s??? di chuy???n (N???u c??)</textarea
                >
                <div class="input-random">
                <h3>Vui L??ng nh???p m?? x??c th???c</h3>
                <p class="random-number2" style="color: blue;">
                </p>
                <input class="input-r" type="text" name="maxacthuc2">
              </div>
            <button type="submit" class="btn-sub" name="btn-gui2">G???i</button>
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