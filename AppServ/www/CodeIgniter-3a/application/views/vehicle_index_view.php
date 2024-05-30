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
            <div class="col-md-6">
                <h3>Araçlar</h3>                
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Araç ID</th>
                            <th>Marka</th>
                            <th>Model</th>
                            <th>Model Yılı</th>
                            <th>Vites</th>
                            <th>Yakıt</th>
                            <th>Fiyat</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <? foreach ($araclar as $arac) { ?>
                        <tr>
                            <td><?=$arac->arac_id?></td>
                            <td><?=$arac->marka?></td>
                            <td><?=$arac->model?></td>
                            <td><?=$arac->model_yili?></td>
                            <td><?=$arac->vites?></td>
                            <td><?=$arac->yakit?></td>
                            <td><?=$arac->fiyat?> TL</td>
                            <td><a href="vehicle/detail/<?=$arac->arac_id?>" class="btn btn-success btn-sm">Detay</a></td>
                        </tr>
                        <? } ?>
                    </tbody>
                </table>
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