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
        <table>
            <tr>
                <td>Masukkan Nilai Tugas</td>
                <td>:</td>
                <td><input type="uint" name="nilai_tugas" required></br></td>
            </tr>
            <tr>
                <td>Masukkan Nilai Ujian Tengah Semester</td>
                <td>:</td>
                <td><input type="uint" name="uts" required></br></td>
            </tr>
            <tr>
                <td>Masukkan Nilai Ujian Akhir Semester</td>
                <td>:</td>
                <td><input type="uint" name="uas" required></br></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
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
        if ($x >= 0 && $x <= 100 && $y >= 0 && $y <= 100 && $z >= 0 && $z <= 100) {
            $nilai_akhir = nilaiakhir($x, $y, $z);
        }
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
    } else if ($nilai_akhir > 0 && $nilai_akhir < 50) {
        echo "E";
    } else {
        echo "-";
    }
    ?>
</body>

</html>