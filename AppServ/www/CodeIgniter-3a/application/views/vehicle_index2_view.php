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
        .tablo {
            background-color: lightgrey;
            height: 191px;
            width: 255px;
        }
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
                <a class="btn btn-success btn-sm" href="home">Ana Sayfa</a> | 
                <a class="btn btn-success btn-sm" href="vehicle">Araçlar</a> | 
                <a class="btn btn-success btn-sm" href="vehicle/myreservations">Rezervasyonlarım</a> | 
                <a class="btn btn-success btn-sm" href="home/contact">İletişim</a> |
                <a class="btn btn-success btn-sm" href="home/about">Hakkımızda</a>
            </div>
        </div>      
        
    </div>

    <div class="jumbotron text-center">
        <h1>Sakarya Bip Otomotiv</h1>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Araçlar</h3>                
            </div>
            <?foreach($araclar as $arac) { ?>
                <div class="col-md-3 text-center">
                    <h5>
                        <div class="tablo">
                            <img src="_arac_resimleri/<?=$arac->arac_id?>.jpg" class="img-fluid rounded">
                        </div>
                        <?=$arac->marka?>
                        <?=$arac->model?>
                        (<?=$arac->model_yili?>)
                    </h5>
                    <h6>
                        <?=$arac->yakit?>
                        <?=$arac->vites?><br>
                        <?=$arac->fiyat?> TL
                    </h6>
                    <a href="vehicle/detail/<?=$arac->arac_id?>" class="btn btn-dark btn-sm float-right">Detay</a>
                </div>
            <?}?>
        </div>
        <br>
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