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
                <h3>Rezervasyonlarım</h3>
                <? if($tc!=null) { print "Kişi Bilgisi: ".$tc; } ?>
                <form action="vehicle/myreservationsPost" method="post">
                    <div class="form-group">
                        <label>TC KİMLİK NO:</label>
                        <input type="text" name="tckimlik_" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label></label>
                        <input type="submit" name="sorgula" class="btn btn-dark btn-sm" value="Sorgula">
                    </div>
                </form>
            </div>
            <?php if ($rezervasyonlar!=null) { ?>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Rezervasyon ID</th>
                            <th>TC Kimlik</th>
                            <th>Araç ID</th>
                            <th>Alma tarihi</th>
                            <th>teslim Tarihi</th>
                            <th>Tutar (TL)</th>
                            <th>İptal Mi</th>
                            <th>İptal Tarihi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <? foreach ($rezervasyonlar as $rez) { ?>
                        <tr>
                            <td><img src="_arac_resimleri/<?=$rez->arac_id?>.jpg" width="200" height="150" class="img-fluid rounded"></td>
                            <td><?=$rez->rezervasyon_id?></td>
                            <td><?=$rez->tckimlik?></td>
                            <td><?=$rez->arac_id?></td>
                            <td><?=$rez->alma_tarihi?></td>
                            <td><?=$rez->teslim_tarihi?></td>
                            <td><?=$rez->tutar?></td>
                            <td><?=$rez->iptal_mi?>,<?=$rez->iptal_tarihi?></td>
                            <td>
                            <?php
                                $tarih1= strtotime(date("Y-m-d"));
                                $tarih2= strtotime(date($rez->alma_tarihi));
                                $farkGun = ($tarih2-$tarih1)/(60*60*24);
                                print $farkGun;

                                if ($farkGun>0 && $rez->iptal_mi=="H") {
                                    ?>
                                    <a href="vehicle/CancelRezervations/<?=$rez->rezervasyon_id?>/<?=$tc?>" class="btn btn-danger btn-sm" onclick="return confirm('Bu rezervasyonu iptal edecek misiniz ?')">İptal Et</a>
                                    <?
                                }
                            ?>
                            </td>
                        </tr>
                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
            <? } ?>
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