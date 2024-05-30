<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?=base_url()?>" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sakarya BİP Otomotiv</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
    <style>
        .bosluk {
            padding-top: 10px;
            padding-bottom: 10px
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-success"> 
        <div class="row">
            <div class="col-md-12 text-center bosluk">
                <a class="btn btn-success btn-sm" href="yonet">Yönet</a> | 
                <a class="btn btn-success btn-sm" href="yonet">Kullanıcılar</a> |
                <a class="btn btn-success btn-sm" href="yonetVehicle">Araçlar</a> | 
                <a class="btn btn-success btn-sm" href="yonet">Siparişler</a> |
                <a class="btn btn-success btn-sm" href="yonet">Çıkış</a>
            </div>
        </div>
    </div>

    <div class="jumbotron text-center">
        <h1>Sakarya Bip Otomotiv</h1>
        <h3>Yönetim Paneli</h3>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-2 bg-light">
                <h6>Araç Yönetimi</h6>
                <hr>
                <div>
                    Bu Bölümde Araçlar ile ilgili GRUD işlemleri gerçekleştirilicektir.
                </div>
                <a href="yonetVehicle" class="btn btn-link btn-sm float-right">>></a>
            </div>
            <div class="col-md-2 bg-light">
                <h6>Sipariş Yönetimi</h6>
                <hr>
                <div>
                    Bu bölümde siparişlerin onaylanması ve takibi ile ilgili işlemler gerçekleştirilicektir.
                </div>
                <a href="#" class="btn btn-link btn-sm float-right">>></a>
            </div>
            <div class="col-md-2 bg-light">
                <h6>Kullanıcı Yönetimi</h6>
                <hr>
                <div>
                    Bu bölümde kullanıcı yetkilendirme ve promosyon atama şeklinde işlemler gerçekleştirilicektir.
                </div>
                <a href="#" class="btn btn-link btn-sm float-right">>></a>
            </div>
            <div class="col-md-6">
            <img src="images/55.jpg" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark">
        <div class="contaier">
            <div class="row">
                <div class="col-md-12 text-center text-light bosluk">
                    Bu site Sakarya MYO Bilgisayar Programcılığı öğrencileri
                    tarafından <br> 
                    İnternet Programcılığı 1 dersi kapsamında geliştirilmiştir.
                    <br><br>
                    Tüm Hakları Saklıdır (c) 2024
                </div>
            </div>
        </div>
    </div>

</body>
</html>