<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="icon" href="asset/img/rmutl-logo.ico" type="image/icon type">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สัปดาห์วิทยาศาสตร์</title>

</head>
<body>
    <div class="head">
        <div class="container mt-2 mb-2">
            <div class="row">
                <div class="col-12 col-lg-1 mt-1">
                    <center>
                        <a href="?page=home"><img class="main__logo" src="asset/img/rmutl-logo.png"></a>
                    </center>
                </div>
                <div class="col-12 col-lg-11">
                    <div class="row">
                        <div class="col-12">
                            <h1>สัปดาห์วิทยาศาสตร์</h1>
                        </div>
                        <div class="col-12">
                            <h6> คณะวิทยศาสตร์และเทคโนโลยีการเกษตร มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container ">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
            <div class="collapse navbar-collapse " id="navbarTogglerDemo03">
                <ul class="navbar-nav text-center mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="?page=home">หน้าแรก <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=regis">สมัครเข้าร่วมประกวด</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=online-event">Live กิจกรรม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=check">ตรวจสอบรายชื่อ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=schedule">กำหนดการ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=contact">แผนที่จัดงาน/ติดต่อเรา</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    </nav>

    <div class="content">
    <?php 
    if(@$_GET['fd'])
        $file=$_GET['fd']."/".$_GET['page'].".php";
    else
        $file=@$_GET['page'].".php";
    if(is_file($file)){
        require_once("$file");
    }
    else{
        require_once("home.php");
    }
    ?>
    </div>


    <footer>
        <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6">
                <p>
                คณะวิทยาศาสตร์และเทคโนโลยีการเกษตร มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก
                </p>
            </div>
            <div class="col-12 col-xl-4">
                <p>
                Email : science_lannattak@hotmail.com เจ้าหน้าที่ประสานงาน : 06-4490-7700
                </p>
            </div>
            <div class="col-12 col-xl-2">
                <h6>จำนวนผู้เข้าชม</h6>                                 
                <!-- Start of WebFreeCounter Code -->
                <a href="https://www.webfreecounter.com/" target="_blank"><img src="https://www.webfreecounter.com/hit.php?id=grmenokop&nd=6&style=80" border="0" alt="visitor counter"></a>
                <!-- End of WebFreeCounter Code -->
            </div>
        </div>
        </div>
    </footer>
</body>


<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</html>