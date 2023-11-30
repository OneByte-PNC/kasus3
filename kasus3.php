<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penilaian Mahasiswa</title>
</head>

<body>
    <form method="post" action="">
        Masukkan Nilai Tugas : <input type="number" name="nilai_tugas" required></br>
        Masukkan Nilai Ujian Tengah Semester : <input type="number" name="uts" required></br>
        Masukkan Nilai Ujian Akhir Semester : <input type="number" name="uas" required></br>
    </form>

    <?php
        // function nilaitugas($x){
        //     return $x * 0.3;
        // }
        // function nilaiuts($y){
        //     return $y * 0.3;
        // }
        // function nilaiuas($z){
        //     return $z * 0.4;
        // }
        function nilaiakhir($x, $y, $z){
            return ($x * 0.3)+($y * 0.3)+($z * 0.4);
        }
        
        $nilai_akhir = 0;

        if (isset($_POST['submit'])){
            $x = $_POST['nilai_tugas'];
            $y = $_POST['uts'];
            $z = $_POST['uas'];

            $nilai_akhir = nilaiakhir($x, $y, $z);
        }

        echo "Nilai Akhir = " . $nilai_akhir;
    ?>
</body>

</html>