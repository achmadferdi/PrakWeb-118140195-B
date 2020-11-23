<?php
function hitung($Nama,$Warna="red"){
    $Panjang=strlen($Nama);
    if($Panjang>0 && $Panjang<=10){
        $Harga=300;
        $Total=$Panjang*$Harga;
        cetak($Total,$Nama,$Warna);
    }elseif($Panjang>=11 && $Panjang<=20){
        $Harga=500;
        $Total=$Panjang*$Harga;
        cetak($Total,$Nama,$Warna);
    }elseif($Panjang>20){
        $Harga=700;
        $Total=$Panjang*$Harga;
        cetak($Total,$Nama,$Warna);
    }
}

function cetak($Total,$Nama,$Warna){
    echo "Nama Bet = " . $Nama . "<br>" . "Harga Bet = " . "Rp." . $Total . "<br>" . "Warna font = " . $Warna;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tugas Bet</title>
    </head>
    <body>
        <h3>Harga Bet</h3>
        <form action="" method="POST">
            <label for="name"> Nama : </label>
            <input type="text" name="nama" id="name"> <br>
            <label for="color">Warna font : </label>
            <input type="text" name="warna" id="color"> <br>
            <input type="submit" name="submit" value="hitung">
        </form> <br>

        <?php
    if (isset($_POST['submit'])) {
        $Nama=$_POST['nama'];
        $Warna=$_POST['warna'];
        hitung($Nama,$Warna);
    }
    if(!$Warna){
        hitung($Nama);
    }else{
        hitung($Nama,$Warna);
    }
    ?>
    </body>
</html>