<?php
function faktorial($n){
    if($n<=1){
        return 1;
    }else{
        return $n*faktorial($n-1);
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tugas Faktorial</title>
    </head>
    <body>
        <form action="" method="POST">
            <label for="Angka">
                Masukan bilangan : 
            </label>
            <input type="text" name="Bilangan" id="Angka">
            <input type="submit" value="Hitung">
        </form>

        <?php
        if(isset($_POST['Bilangan'])){
            $n=$_POST['Bilangan'];
            echo $n . "! : ";
            echo faktorial($n);
        }
        ?>
    </body>
</html>