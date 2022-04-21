<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Simpan Data</title>
</head>
<body>
 <form action="UtsWebPHP2.php" method="post">
 <table>
 <tr>
 <td>Wilayah : </td>
 <td><select name="wilayah" id="">
 <option value="Jakarta">DKI Jakarta</option>
 <option value="Jawa Barat">Jawa Barat</option> 
 <option value="Banten">Banten</option>
 <option value="Jawa Tengah">Jawa Tengah</option>
 </select></td>
 </tr>
 <tr>
 <td>Jumlah Positif : </td>
 <td><input type="text" name="positif"></td>
 </tr>
 <tr>
 <td>Jumlah Dirawat : </td>
 <td><input type="text" name="rawat"></td>
 </tr>
 <tr>
 <td>Jumlah Sembuh : </td>
 <td><input type="text" name="sembuh"></td>
 </tr>
 <tr>
 <td>Jumlah Meninggal : </td>
 <td><input type="text" name="meninggal"></td>
 </tr> 
 <tr>
    <td>Nama Operator : </td>
    <td><input type="text" name="operator"></td>
    </tr>
    <tr>
    <td>NIM Mahasiswa : </td>
    <td><input type="text" name="nim"></td>
    </tr>
    <tr>
    <td><button type="submit" name="OK">Simpan</button></td>
    </tr>
    </form>
    <?php
 if (isset($_POST['OK'])) {
 if (empty($_POST['wilayah'])) {
 print "Lengkapi form";
 } else {
 //Mendapatkan value dari data diatas
 $wil = $_POST['wilayah'];
 $pos = $_POST['positif'];
 $rawat = $_POST['rawat'];
 $sembuh = $_POST['sembuh'];
 $die = $_POST['meninggal'];
 $op = $_POST['operator'];
 $nim = $_POST['nim'];
 //membuat waktu
 date_default_timezone_set('Asia/Jakarta');
 $tanggal = date('d-m-Y H:i:s a');
 //membuat dan membuka file db.html
 $buka = fopen("db.html", 'a');
 //menulis data yang telah dimasukkan
 fwrite($buka, "Data Pemantauan Covid 19 Wilayah ${wil} <br>");
 fwrite($buka, "Per ${tanggal} <br>");
 fwrite($buka, "${op} / ${nim} <br><br>");
 fwrite($buka, "Positif : ${pos} <br>");
 fwrite($buka, "Dirawat : ${rawat} <br>");
 fwrite($buka, "Sembuh :${sembuh} <br>");
 fwrite($buka, "Meninggal : ${die} <br>");
 fwrite($buka, "<br>");
 //menutup file
 fclose($buka);
 //memunculkan kata
 print "data berhasil disimpan";
 }
 } ?>
</body>
</html>