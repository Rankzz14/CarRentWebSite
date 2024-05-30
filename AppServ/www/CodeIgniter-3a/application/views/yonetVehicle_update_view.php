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
        .uyari {
            color: #b00;
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
            <div class="col-md-12">
                <h5>Araç Ekleme Formu</h5>
            </div>
            <div class="col-md-6 bg-light">
                <Form action="yonetVehicle/updatePost" method="post">
                    <div class="form-group">
                        <label>Araç ID: </label>
                        <?=$arac->arac_id?>
                        <input type="hidden" name="arac_id_" value="<?=$arac->arac_id?>">
                    </div>
                    <div class="form-group">
                        <label>Marka</label>
                        <input type="text" name="marka_" value="<?=$arac->marka?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Model</label>
                        <input type="text" name="model_" value="<?=$arac->model?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Model Yılı</label>
                        <input type="text" name="model_yili_" value="<?=$arac->model_yili?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Vites</label> <br>   
                        <input type="radio" name="vites_" value="Manuel" <?=$arac->vites=='Manuel' ? 'checked':null ?>> Manuel <br>
                        <input type="radio" name="vites_" value="Otomatik" <?=$arac->vites=='Otomatik' ? 'checked':null ?>> Otomatik <br>
                        <input type="radio" name="vites_" value="Tiptonik" <?=$arac->vites=='Tiptonik' ? 'checked':null ?>> Tiptonik <br>
                    </div>
                    <div class="form-group">
                        <label>Yakıt</label>
                        <select name="yakit_" class="form-control">
                            <option <?=$arac->yakit=='Benzin' ? 'selected':null ?> value="Benzin">Benzin</option>
                            <option <?=$arac->yakit=='Dizel' ? 'selected':null ?> value="Dizel">Dizel</option>
                            <option <?=$arac->yakit=='LPG' ? 'selected':null ?> value="LPG">LPG</option>
                            <option <?=$arac->yakit=='Hibrit' ? 'selected':null ?> value="Hibrit">Hibrit</option>
                            <option <?=$arac->yakit=='Elektrik' ? 'selected':null ?> value="Elektrik">Elektrik</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Günlük Ücret (TL)</label>
                        <input type="text" name="fiyat_" value="<?=$arac->fiyat?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Güncelle" class="btn btn-dark btn-sm">
                        <span class="uyari">
                            <?=$uyari?>
                        </span>
                    </div>
                </Form>
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