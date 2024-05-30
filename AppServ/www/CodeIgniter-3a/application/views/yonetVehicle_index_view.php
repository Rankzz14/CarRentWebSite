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
            <div class="col-md-6">
                <h3>Araçlar</h3>                
            </div>
            <div class="col-md-6 text-right">
                <a href="yonetVehicle/add" class="btn btn-primary btn-sm">Araç Ekle</a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
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
                            <td>
                                <?if ($arac->resim_var_mi!='H') {?>
                                <img src="_arac_resimleri/<?=$arac->arac_id?>.jpg" width="150px">
                                <? } ?>
                            </td>
                            <td><?=$arac->arac_id?></td>
                            <td><?=$arac->marka?></td>
                            <td><?=$arac->model?></td>
                            <td><?=$arac->model_yili?></td>
                            <td><?=$arac->vites?></td>
                            <td><?=$arac->yakit?></td>
                            <td><?=$arac->fiyat?> TL</td>
                            <td>
                                <a href="vehicle/detail/<?=$arac->arac_id?>" class="btn btn-success btn-sm">Detay</a>
                                <a href="yonetVehicle/Delete/<?=$arac->arac_id?>" class="btn btn-danger btn-sm" onclick="return confirm('Bu kaydı silmek istiyormusunuz?')">Sil</a>
                                <a href="yonetVehicle/Update/<?=$arac->arac_id?>" class="btn btn-sm btn-dark">Güncelle</a>
                                <a href="yonetVehicle/UploadImage/<?=$arac->arac_id?>" class="btn btn-sm btn-primary">Resim Yükle</a>
                            </td>
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