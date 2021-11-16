<html>
<head>
    <title>Tugas Praktikum</title>
    <link rel="stylesheet" type="text/css" href="style6.css">
</head>
<body>
<div class="container">
<?php
class buah
{
    var $totalMangga, $totalJambu, $totalSalak;
   
    public function __construct($mangga, $jambu, $salak){
        $this->mangga = $mangga;
        $this->jambu = $jambu;
        $this->salak = $salak;
    }
    
    public function getMangga(){
        $this->totalMangga = $this->mangga * 15000;
        echo "<br><b>Total Harga</b><br>";
        echo "<br>Mangga : ".$this->totalMangga;
    }

    public function getJambu(){
        $this->totalJambu = $this->jambu * 13000;
        echo "<br>Jambu : ".$this->totalJambu;
    }

    public function getSalak(){
        $this->totalSalak = $this->salak * 10000;
        echo "<br>Salak : ".$this->totalSalak;
    }

    public function total(){
        $total = $this->totalMangga + $this->totalJambu + $this->totalSalak;
        echo "<br>Total buah= ". $total;
    }
}
?>
    <section>
        <div>
            <p><b>Harga Jual Buah</b></p>
            <form method="POST" id="belanja" name="belanja" >
                <tr align="center">
							<td><label >Mangga</label></td>
							<td><label >Rp. 15.000</label></td>
                </tr>
                <input type="number" id="mangga"  name="mangga">
                <label>kg</label> <br>
                <tr align="center">
							<td><label >Jambu</label></td>
							<td><label >Rp. 13.000</label></td>
                </tr>
                <input type="number" id="jambu"  name="jambu">
                <label>kg</label> <br>
                <tr align="center">
							<td><label >Salak</label></td>
							<td><label >Rp. 10.000</label></td>
                </tr>
                <input type="number" id="salak" onchange="nilai()" name="salak">
                <label>kg</label> <br>
                <button type="submit" name="">Jumlah</button><br>
                <label for="">Total Pesanan : </label>
                <input type="text" id="total" name="total"> <br>
                
            </form>
        </div>
    </section>
</body>
<script>
    
    function nilai(){
        var mangga = document.getElementById("mangga").value * 15000;
        var jambu = document.getElementById("jambu").value * 13000;
        var salak = document.getElementById("salak").value * 10000;
        var total = document.getElementById("total");
        console.log(mangga + jambu + salak);
        var hasil = mangga + jambu + salak;
        total.value = hasil;
    }
    
</script>
<div>
</html>