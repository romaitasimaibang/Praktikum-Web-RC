<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" type="text/css" href="style_Minggu5No1.css">

</head>
<body> 
    <div class="container">
<?php
if(isset($_POST["hitung"])){
    $angka1 = $_POST["input1"];
    $angka2 = $_POST["input2"];
    $operator = $_POST["operator"];
    $hasil = $angka1 + $angka2;

    if ($operator == "tambah"){
    $hasil = $angka1 + $angka2;
    }elseif ($operator == "kurang"){
        $hasil = $angka1 - $angka2;
    }elseif ($operator == "kali"){
        $hasil = $angka1 * $angka2;
    }elseif ($operator == "bagi"){
        $hasil = $angka1 / $angka2;}
       
}
?>
    <h2 class="judul">Kalkulator Sederhana</h2>
    <form method="post" actions="">
        <input type ="text" name="input1" class="input" placeholder="masukan bilangan pertama"><br><br>
        <input type ="text" name="input2" class="input" placeholder="masukan bilangan kedua"><br><br>
        <select class="opt" name="operator">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
            <select><br><br>
			<input type="submit" name="hitung" value="Hitung" class="tombol">
</form>
<?php if(isset($_POST["hitung"])){ ?>
    <input type="text" value="<?php echo $hasil; ?>" class="input">
<?php }else{ ?>
    <input type="text" value="0" class="input">
<?php } ?>
</div>
</body>
</html>
