<?php

include("./db/conect.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khai báo Y tế</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/styleh.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
</head>
<body>
    <div class="containers">
        <div class="navbar__container">
            <div class="logo">
                <img src="./images/Logo.png" alt="" class="logoimg" width="45" height="45">
                <h4 class="title">Khai báo y tế điện tử</h4>
            </div>
            <div class="icon__navbar">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="containerKB">
            <div class="content__title">
                <h4>Trường đại học điên lực</h4>
                <p>Khai báo thông tin sai là vi phạm pháp luật việt nam và có thể xử lý hình sự</p>
            </div>
            <div class="declare">
                <form  action="" method="POST">
                    <div class="" >

                        <div class="radioitems">
                            <input onclick="add()" type="radio" name="pick" id="Gvien" class="itemradio"><span id="txtgv">Giảng viên</span>
                            <input onclick="add()" type="radio" name="pick" id="Svien" class="itemradio"><span id="txtsv">Sinh viên</span>
                            <input onclick="add()" checked="checked" type="radio" name="pick" id="Khac" class="itemradio"><span style="color: #0056c1;" id="txtk">Khách</span>
                        </div>
                        <div id="conteent" class="content_text">
                            <div style="display: none;" id="GVchinh">
                                <?php
                                    include ('Giangvien.php');
                                ?>
                            </div>
                            <div style="display: none;" id="SVchinh">
                                <?php
                                    include ('Sinhvien.php');
                                ?>
                            </div>
                            <div  id="Khacchinh">
                                <?php
                                    include ('Khach.php');
                                ?>
                            </div> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <div class="footer">
            <img src="" alt="">
            <p style="text-align: center;">Copyright 2021 - Trường đai học điện lực </p>
        </div>
        
    <script>
  function add() {
    
    if(document.getElementById('Gvien').checked == true){
        document.getElementById("txtgv").style.color = '#0056c1';
        
        document.getElementById("GVchinh").style.display = 'block';
      
    }else{
    
      document.getElementById("GVchinh").style.display = 'none';
      document.getElementById("txtgv").style.color = '#000';
    }
    if(document.getElementById('Svien').checked == true){
        document.getElementById("txtsv").style.color = '#0056c1';
        document.getElementById("SVchinh").style.display = 'block';
      
    }else{
     
      document.getElementById("SVchinh").style.display = 'none';
      document.getElementById("txtsv").style.color = '#000';
    }
    if(document.getElementById('Khac').checked == true){
      document.getElementById("txtk").style.color = '#0056c1';
      document.getElementById("Khacchinh").style.display = 'block';

    }else{
        document.getElementById("Khacchinh").style.display = 'none';
         document.getElementById("txtk").style.color = '#000';
    }
  }
</script>
</body>

</html>
