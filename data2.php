<!DOCTYPE html>
<head>
    <title>Halaman 2</title>
</head>
<body>

<h1>Selamat Datang, <?= $_POST ["nama"]?></h1>
<br>
ini adalah data-data mu : 
<br>
<table>
    <ul>
        <li>Nama</li>
        <li>: <?= $_POST ["nama"] ?></li>
    </ul> 
    <ul>
        <li>Jenis Kelamin</li>
        <li>: <?= $_POST ["jk"] ?></li>
    </ul> 
    <ul>
        <li>Alamat</li>
        <li>: <?= $_POST ["alamat"] ?></li>
    </ul> 
    <ul>
        <li>Hobi</li>
        <li>
        <?php 
        if(isset($_POST['hobi'])){
            $hobi = $_POST['hobi'];
            for ($i=0; $i < count($hobi) ; $i++){
             echo $hobi[$i]."&nbsp";
            }
            echo "<br />";
         }
        ?>
        </li>
    </ul> 
    <ul>
        <li>Tanggal Lahir</li>
        <li>: <?= $_POST ["tgl_lahir"] ?></li>
    </ul> 
    <ul>
        <li>Pekerjaan</li>
        <li>: <?= $_POST ["pekerjaan"] ?></li>
    </ul> 
    <ul>
        <li>Jurusan</li>
        <li>: <?= $_POST ["jurusan"] ?></li>
    </ul> 
</table>

</body>
</html>