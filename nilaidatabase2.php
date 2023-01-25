<?php 
$server = mysqli_connect("localhost", "root", "", "cellydatabase");
if ($server){
    echo "berhasil";
    }else{
        echo "gagal";
    }
    echo "<br/>";

$matematika = $_POST['mtk'];
$pipas = $_POST['pps'];
$indonesia = $_POST['ind'];
$sejarah = $_POST['sjr'];
$inggris = $_POST['eng'];

$sql = "insert into nilaisiswaa
(matematika,pipas,indonesia,sejarah,inggris)
values
('$matematika', '$pipas', '$indonesia', '$sejarah', '$inggris')";

if (mysqli_query($server,$sql)){
    echo "yess";
}else{
    echo "no";
}
echo "<br/>";

echo "Nilai Matematika Anda " . $matematika;
echo "<br/>";

echo "Nilai PIPAS Anda " . $pipas;
echo "<br/>";

echo "Nilai B.Indonesia Anda " . $indonesia;
echo "<br/>";

echo "Nilai Sejarah Anda " . $sejarah;
echo "<br/>";

echo "Nilai B.Inggris Anda " . $inggris;
echo "<br/>";
?>