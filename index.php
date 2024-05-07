<?php
 date_default_timezone_set('Asia/Jakarta');
 $tanggal_jam = date('Y-m-d H:i:s');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulangan Tengah Semester - Hibatul Akmal</title>
</head>
<body>
    <h1>Website Data Point Klasemen Piala Asia </h1>
    <h2>Isi Form Berikut ini</h2>   

    <form method="post">
    <label for="">Negara : </label>
    <select name="negara" id="">
        <option value="Korea Selatan U-23">Korea Selatan U-23</option>
        <option value="Jepang U-23">Jepang U-23</option>
        <option value="Tiongkok U-23">Tiongkok U-23</option>
        <option value="Uni Emirat Arab U-23">Uni Emirat Arab U-23</option>
    </select>
    <br><br>
    <label for="">Jumlah Pertadingan:</label>
    <input type="number" name="jml_pertandingan">
    <br><br>
    <label for="">Jumlah Menang : </label>
    <input type="number" name="jml_menang">
    <br><br>
    <label for="">Jumlah Seri :</label>
    <input type="number" name="jml_seri">
    <br><br>
    <label for="">Jumlah Kalah :</label>
    <input type="number" name="jml_kalah">
    <br><br>
    <label for="">Jumlah Poin :</label>
    <input type="number" name="jml_poin">
    <br><br>
    <label for="">Nama Operator :</label>
    <input type="text" name="nama_operator">
    <br><br>
    <label for="">Nim Mahasiswa :</label>
    <input type="number" name="nim">
    <br><br>
    <input type="submit" name="submit" value="Simpan">
    </form>
    
        <?php
        // Memproses input dan menampilkan data
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
            $nama_operator = $_POST["nama_operator"];
            $nim = $_POST["nim"];
            
            $negara = $_POST["negara"];
            $jml_pertandingan = $_POST["jml_pertandingan"];
            $jml_menang = $_POST["jml_menang"];
            $jml_seri = $_POST["jml_seri"];
            $jml_kalah = $_POST["jml_kalah"];
            $jml_poin = $_POST["jml_poin"];
        }

        ?>

        <center>
            <p>Data Group B Piala Asia Qatar U-23</p>
            <p>Per <?= $tanggal_jam ?></p>
            <p><?= $nama_operator ?>/<?= $nim ?></p>
        

        <table border="1">
        <tr>
            <td>Negara</td>
            <td>P</td>
            <td>M</td>
            <td>S</td>
            <td>K</td>
            <td>Poin</td>
        </tr>
        <tr>
            <td><?= $negara ?></td>
            <td><?= $jml_pertandingan ?></td>
            <td><?= $jml_menang ?></td>
            <td><?= $jml_seri ?></td>
            <td><?= $jml_kalah ?></td>
            <td><?= $jml_poin ?></td>
        </tr>
        

        

        

    </table>
    
    </center>
</body>
</html>