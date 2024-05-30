<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?=base_url()?>" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sakarya BİP Otomotiv</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
    <script src="assets/jquery-3.7.1.min.js"></script>
    <style>
        .bosluk {
            padding-top: 10px;
            padding-bottom: 10px
        }
        #rezervasyonFormu {
            display: none;
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
                <h3>Araç Detay</h3>                
            </div>
            <div class="col-md-6">
                <img src="_arac_resimleri/<?=$arac->arac_id?>.jpg" class="img-fluid">
            </div>
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <td>Araç ID:</td>
                        <td><?=$arac->arac_id?></td>
                    </tr>
                    <tr>
                        <td>Marka:</td>
                        <td><?=$arac->marka?></td>
                    </tr>
                    <tr>
                        <td>Model:</td>
                        <td><?=$arac->model?></td>
                    </tr>
                    <tr>
                        <td>Model Yılı:</td>
                        <td><?=$arac->model_yili?></td>
                    </tr>
                    <tr>
                        <td>Vites:</td>
                        <td><?=$arac->vites?></td>
                    </tr>
                    <tr>
                        <td>Yakıt:</td>
                        <td><?=$arac->yakit?></td>
                    </tr>
                    <tr>
                        <td>Fiyat:</td>
                        <td><?=$arac->fiyat?></td>
                    </tr>
                    <tr>
                        <td>Müsait mi:</td>
                        <td><?=$arac->musait_mi?></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <a href="vehicle" class="btn btn-sm btn-primary">Araçlar</a>
                            <button id="btnKirala" class="btn btn-sm btn-success">Rezervasyon</button>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="rezervasyonFormu" class="col-md-6">
                <form action="vehicle/PostRezervationAdd" method="post">
                    <h5>Rezervasyon Formu</h5>
                    <div class="form-group">
                        <label>ARAÇ ID</label>
                        <input type="text" name="arac_id_" value="<?=$arac->arac_id?>">
                        <div class="form-group">
                            <label>TC KİMLİK NO</label>
                            <input type="text" name="tckimlik_" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>ALMA TARİHİ</label>
                            <input type="date" name="alma_tarihi_" id="a_tar" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>TESLİM TARİHİ</label>
                            <input type="date" name="teslim_tarihi_" id="t_tar" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>GÜNLÜK FİYAT (TL)</label>
                            <input type="text" name="fiyat_" value="<?=$arac->fiyat?>" id="fiyat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>TUTAR</label>
                            <input type="text" name="tutar_" id="tutar" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Kaydet" class="btn btn-sm btn-primary">
                            <span id="tarih" class="uyari">
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark">
        <div class="contaier">
            <div class="row">
                <div class="col-md-12 text-center text-light bosluk">
                    Bu site Sakarya MYO Bilgisayar Programcılığı öğrencileri
                    tarafından 
                    <br> 
                    İnternet Programcılığı 1 dersi kapsamında geliştirilmiştir.
                    <br><br>
                    Tüm Hakları Saklıdır (c) 2024
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<script>
    $(function(){
        $("#btnKirala").click(function(){
            $("#rezervasyonFormu").show(500);
        })

        $("#t_tar").blur(function(){
            var dt1 = new Date($('#a_tar').val());
            var dt2 = new Date($('#t_tar').val());
            var fark = dt2.getTime() - dt1.getTime(); //salise
            var farkGun = Math.ceil(fark/(1000*3600*24)); //gün
            var gunlukFiyat = parseFloat($('#fiyat').val());
            $('#tutar').val(parseInt(farkGun)*gunlukFiyat); 
        })
        $("#a_tar").attr("min","2024-05-27");
        GecmisTarihiEngelle($("#a_tar"));
        GecmisTarihiEngelle($("#t_tar"));
        
        function GecmisTarihiEngelle(id){
            var t = new Date();
            var yil = t.getFullYear();
            var ay = String((t.getMonth()+1)).padStart(2,"0");
            var gun = String(t.getDate()).padStart(2,"0");
            var bugun = yil+'-'+ay+'-'+gun;
            $("#tarih").text(bugun);
            $(id).att("min",bugun);
        }
        TarihYaz();
    }) 
</script>