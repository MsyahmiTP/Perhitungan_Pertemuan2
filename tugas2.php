<?php
//class persegi
class persegi{
    var $sisi;
    var $hasil;
    
    function luas($sisi){
        $hasil = $sisi * $sisi;
        
        return "hasil luas persegi = ".$hasil."<br>";
    }
    
    function keliling($sisi){
        $hasil = $sisi * 4;
        
        return "hasil keliling persegi = ".$hasil."<br>";
    }
}

//class persegi panjang
class persegi_panjang{
    var $panjang;
    var $lebar;
    var $hasil;
    
    function luas($panjang, $lebar){
        $hasil = $panjang * $lebar;
        
        return "hasil luas persegi panjang = ".$hasil."<br>";
    }
    
    function keliling($panjang, $lebar){
        $hasil = $panjang * 2 + $lebar * 2;
        
        return "hasil keliling persegi panjang = ".$hasil."<br>";
    }
}

//class segitiga
class segitiga{
    var $tinggi;
    var $alas;
    var $sisi1;
    var $sisi2;
    var $sisi3;
    var $hasil;
    
    function luas($alas, $tinggi){
        $hasil = 1/2 * $alas * $tinggi;
        
        return "hasil luas segitiga = ".$hasil."<br>";
    }
    
    function keliling($sisi1 , $sisi2 , $sisi3){
        $hasil = $sisi1 + $sisi2 + $sisi3;
        
        return "hasil keliling segitiga = ".$hasil."<br>";
    }
}


if(isset($_POST['submit_persegi'])){

    $persegi = new persegi();
    $segitiga = new segitiga();
    
    $sisi_persegi = $_POST['sisi_persegi'];
    
    $luas_persegi = $persegi->luas($sisi_persegi);
    $keliling_persegi = $persegi->keliling($sisi_persegi);
   
   
}
if(isset($_POST['submit_persegi_panjang'])){
    $persegi_panjang = new persegi_panjang();

    $panjang_persegi_panjang = $_POST['panjang_persegi_panjang'];
    $lebar_persegi_panjang = $_POST['lebar_persegi_panjang'];

    $luas_persegi_panjang = $persegi_panjang->luas($panjang_persegi_panjang, $lebar_persegi_panjang);
    $keliling_persegi_panjang = $persegi_panjang->keliling($panjang_persegi_panjang, $lebar_persegi_panjang);
}

if(isset($_POST['submit_segitiga'])){
    $segitiga = new segitiga();
    $alas_segitiga = $_POST['alas_segitiga'];
    $tinggi_segitiga = $_POST['tinggi_segitiga'];
    $sisi1_segitiga = $_POST['sisi1_segitiga'];
    $sisi2_segitiga = $_POST['sisi2_segitiga'];
    $sisi3_segitiga = $_POST['sisi3_segitiga'];

    $luas_segitiga = $segitiga->luas($alas_segitiga, $tinggi_segitiga);
    $keliling_segitiga = $segitiga->keliling($sisi1_segitiga, $sisi2_segitiga, $sisi3_segitiga);
}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Perhitungan Sederhana</h1>
    <form method="post">
        <h2>Persegi</h2>
        Masukkan sisi persegi: <input type="text" name="sisi_persegi"><br>
        <input type="submit" name="submit_persegi" value="Hitung">
    </form>
    <br>
    <form method="post">
    <h2>Persegi Panjang</h2>
        Masukkan panjang: <input type="text" name="panjang_persegi_panjang"><br>
        Masukkan lebar: <input type="text" name="lebar_persegi_panjang"><br>
        <input type="submit" name="submit_persegi_panjang" value="Hitung">
    </form>
    <br>
    <form method="post">      
    <h2>Segitiga</h2>
        Masukkan alas: <input type="text" name="alas_segitiga"><br>
        Masukkan tinggi: <input type="text" name="tinggi_segitiga"><br>
        Masukkan sisi 1: <input type="text" name="sisi1_segitiga"><br>
        Masukkan sisi 2: <input type="text" name="sisi2_segitiga"><br>
        Masukkan sisi 3: <input type="text" name="sisi3_segitiga"><br>
        <br>
        <input type="submit" name="submit_segitiga" value="Hitung">
    </form>
    <?php
    if(isset($_POST['submit_persegi'])){
        // Display results
        echo $luas_persegi;
        echo $keliling_persegi;
          
    }
    if(isset($_POST['submit_persegi_panjang'])){
        echo $luas_persegi_panjang;
        echo $keliling_persegi_panjang;
    }
    if(isset($_POST['submit_segitiga'])){
        echo $luas_segitiga;
        echo $keliling_segitiga;
    }
    ?>
</body>
</html>