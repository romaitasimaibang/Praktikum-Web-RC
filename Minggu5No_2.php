<!DOCTYPE html>
<html>
<head>
    <title>Mengurutkan data</title>
<?php
    $data = array('BUNGA','KURSI','POHON','ATAS','WARNA','FILM','OLAHRAGA', 'KACA', 'BESI', 'PLASTIK');
    print_r($data);
    echo '<br><br>';
    sort($data);
    print_r($data);

    ?>

</body>
</html>

