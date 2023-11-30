<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penilaian Mahasiswa</title>
</head>

<body>
    <h1>SISTEM PENILAIAN MAHASISWA</h1>
    <form method="post" action="">
        Masukkan Nilai Tugas : <input type="uint" name="nilai_tugas" required></br></br>
        Masukkan Nilai Ujian Tengah Semester : <input type="uint" name="uts" required></br></br>
        Masukkan Nilai Ujian Akhir Semester : <input type="uint" name="uas" required></br></br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    function nilaiakhir($x, $y, $z)
    {
        return ($x * 0.3) + ($y * 0.3) + ($z * 0.4);
    }

    $nilai_akhir = 0;

    if (isset($_POST['submit'])) {
        $x = $_POST['nilai_tugas'];
        $y = $_POST['uts'];
        $z = $_POST['uas'];
        // $a = $_POST['nilaiakhir'];

        $nilai_akhir = nilaiakhir($x, $y, $z);
    }

    echo "</br>";
    echo "Nilai Akhir = " . $nilai_akhir;
    echo "</br>";
    echo "Mahasiswa Mendapat Nilai ";
    if ($nilai_akhir >= 80) {
        echo "A";
    } else if ($nilai_akhir >= 70 && $nilai_akhir < 80) {
        echo  "B";
    } else if ($nilai_akhir >= 60 && $nilai_akhir < 70) {
        echo  "C";
    } else if ($nilai_akhir >= 50 && $nilai_akhir < 60) {
        echo  "D";
    } else if ($nilai_akhir>0 && $nilai_akhir<50){
        echo "E";
    } else{
        echo "-";
    }
    ?>
</body>

</html>