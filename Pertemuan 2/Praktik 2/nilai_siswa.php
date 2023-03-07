<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
</head>
<body>
    
    <?php
    if (isset($_POST['proses'])) {

        //variabel untuk menampung  data
        $nama_siswa = $_POST["nama_lengkap"];
        $mata_kuliah = $_POST["matkul"];
        $uts = $_POST["nilai_uts"];
        $uas = $_POST["nilai_uas"];
        $tugas = $_POST["nilai_tugas"];

        $total_nilai = ($uts * 0.3) + ($uas * 0.35) + ($tugas * 0.35);

        //tampilkan data dari variabel
        echo 'Nama siswa: ' . $nama_siswa, '<br>';
        echo 'Mata kuliah: ' . $mata_kuliah, '<br>';
        echo 'Nilai UTS: ' . $uts, '<br>';
        echo 'Nilai UAS: ' . $uas, '<br>';
        echo 'Nilai tugas: ' . $tugas, '<br><br>';
        echo '<hr>';
        echo 'Total nilai: ' . $total_nilai;
        echo '<hr>'; 

    }
    ?>

</body>
</html>