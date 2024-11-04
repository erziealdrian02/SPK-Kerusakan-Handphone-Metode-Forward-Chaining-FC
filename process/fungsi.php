<?php

function answer($kode)
{
    include 'koneksi.php';
    if ($kode == 'PERT01') {
        echo "<a class='btn outline' href='question.php?kode=PERT27'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT03'>Tidak</a>";
    }
    if ($kode == 'PERT03') {
        echo "<a class='btn outline' href='question.php?kode=PERT12'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT08'>Tidak</a>";
    }
    if ($kode == 'PERT04') {
        echo "<a class='btn outline' href='solusi.php?kode=SOL07'>Ya</a>";
        echo "<a class='btn outline' href='solusi.php?kode=SOL26'>Tidak</a>";
    }
    if ($kode == 'PERT05') {
        echo "<a class='btn outline' href='question.php?kode=PERT48'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT39'>Tidak</a>";
    }
    if ($kode == 'PERT06') {
        echo "<a class='btn outline' href='solusi.php?kode=SOL03'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT22'>Tidak</a>";
    }
    if ($kode == 'PERT07') {
        echo "<a class='btn outline' href='solusi.php?kode=SOL05'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT04'>Tidak</a>";
    }
    if ($kode == 'PERT08') {
        echo "<a class='btn outline' href='solusi.php?kode=SOL08'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT04'>Tidak</a>";
    }
    if ($kode == 'PERT08-a') {
        echo "<a class='btn outline' href='solusi.php?kode=SOL02'>Ya</a>";
        echo "<a class='btn outline' href='solusi.php?kode=SOL02'>Tidak</a>";
    }
    if ($kode == 'PERT09') {
        echo "<a class='btn outline' href='solusi.php?kode=SOL07'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT07'>Tidak</a>";
    }
    if ($kode == 'PERT12') {
        echo "<a class='btn outline' href='question.php?kode=PERT08-a'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT08'>Tidak</a>";
    }
    if ($kode == 'PERT14') {
        echo "<a class='btn outline' href='question.php?kode=PERT44'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT34'>Tidak</a>";
    }
    if ($kode == 'PERT15') {
        echo "<a class='btn outline' href='question.php?kode=PERT16'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT17'>Tidak</a>";
    }
    if ($kode == 'PERT16') {
        echo "<a class='btn outline' href='question.php?kode=PERT25'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT17'>Tidak</a>";
    }
    if ($kode == 'PERT17') {
        echo "<a class='btn outline' href='solusi.php?kode=SOL15'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT24'>Tidak</a>";
    }
    if ($kode == 'PERT20') {
        echo "<a class='btn outline' href='solusi.php?kode=SOL18'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT29'>Tidak</a>";
    }
    if ($kode == 'PERT21') {
        echo "<a class='btn outline' href='question.php?kode=PERT41'>Ya</a>";
        echo "<a class='btn outline' href='solusi.php?kode=SOL27'>Tidak</a>";
    }
    if ($kode == 'PERT22') {
        echo "<a class='btn outline' href='question.php?kode=PERT15'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT30'>Tidak</a>";
    }
    if ($kode == 'PERT24') {
        echo "<a class='btn outline' href='solusi.php?kode=SOL22'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT16'>Tidak</a>";
    }
    if ($kode == 'PERT25') {
        echo "<a class='btn outline' href='solusi.php?kode=SOL23'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT17'>Tidak</a>";
    }
    if ($kode == 'PERT27') {
        echo "<a class='btn outline' href='question.php?kode=PERT15'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT28'>Tidak</a>";
    }
    if ($kode == 'PERT28') {
        echo "<a class='btn outline' href='question.php?kode=PERT20'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT29'>Tidak</a>";
    }
    if ($kode == 'PERT29') {
        echo "<a class='btn outline' href='question.php?kode=PERT06'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT30'>Tidak</a>";
    }
    if ($kode == 'PERT30') {
        echo "<a class='btn outline' href='question.php?kode=PERT35'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT31'>Tidak</a>";
    }
    if ($kode == 'PERT31') {
        echo "<a class='btn outline' href='question.php?kode=PERT09'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT32'>Tidak</a>";
    }
    if ($kode == 'PERT32') {
        echo "<a class='btn outline' href='question.php?kode=PERT05'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT33'>Tidak</a>";
    }
    if ($kode == 'PERT33') {
        echo "<a class='btn outline' href='question.php?kode=PERT14'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT34'>Tidak</a>";
    }
    if ($kode == 'PERT34') {
        echo "<a class='btn outline' href='question.php?kode=PERT21'>Ya</a>";
        echo "<a class='btn outline' href='solusi.php?kode=SOL27'>Tidak</a>";
    }
    if ($kode == 'PERT35') {
        echo "<a class='btn outline' href='question.php?kode=PERT36'>Ya</a>";
        echo "<a class='btn outline' href='solusi.php?kode=SOL09'>Tidak</a>";
    }
    if ($kode == 'PERT36') {
        echo "<a class='btn outline' href='question.php?kode=PERT38'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT37'>Tidak</a>";
    }
    if ($kode == 'PERT37') {
        echo "<a class='btn outline' href='question.php?kode=PERT38'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT36'>Tidak</a>";
    }
    if ($kode == 'PERT38') {
        echo "<a class='btn outline' href='solusi.php?kode=SOL27'>Ya</a>";
        echo "<a class='btn outline' href='solusi.php?kode=SOL09'>Tidak</a>";
    }
    if ($kode == 'PERT39') {
        echo "<a class='btn outline' href='question.php?kode=PERT40'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT32'>Tidak</a>";
    }
    if ($kode == 'PERT40') {
        echo "<a class='btn outline' href='solusi.php?kode=SOL04'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT32'>Tidak</a>";
    }
    if ($kode == 'PERT41') {
        echo "<a class='btn outline' href='question.php?kode=PERT42'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT43'>Tidak</a>";
    }
    if ($kode == 'PERT42') {
        echo "<a class='btn outline' href='solusi.php?kode=SOL27'>Ya</a>";
        echo "<a class='btn outline' href='solusi.php?kode=SOL19'>Tidak</a>";
    }
    if ($kode == 'PERT43') {
        echo "<a class='btn outline' href='solusi.php?kode=SOL27'>Ya</a>";
        echo "<a class='btn outline' href='solusi.php?kode=SOL19'>Tidak</a>";
    }
    if ($kode == 'PERT44') {
        echo "<a class='btn outline' href='question.php?kode=PERT46'>Seluler</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT45'>Wi-Fi</a>";
    }
    if ($kode == 'PERT45') {
        echo "<a class='btn outline' href='solusi.php?kode=SOL12'>Ya</a>";
        echo "<a class='btn outline' href='solusi.php?kode=SOL29'>Tidak</a>";
    }
    if ($kode == 'PERT46') {
        echo "<a class='btn outline' href='question.php?kode=PERT47'>Ya</a>";
        echo "<a class='btn outline' href='solusi.php?kode=SOL28'>Tidak</a>";
    }
    if ($kode == 'PERT47') {
        echo "<a class='btn outline' href='solusi.php?kode=SOL12'>Ya</a>";
        echo "<a class='btn outline' href='solusi.php?kode=SOL30'>Tidak</a>";
    }
    if ($kode == 'PERT48') {
        echo "<a class='btn outline' href='solusi.php?kode=SOL04'>Ya</a>";
        echo "<a class='btn outline' href='question.php?kode=PERT32'>Tidak</a>";
    }
}

function kesimpulan($rusak)
{
    include 'koneksi.php';
    $sql = "SELECT * from kerusakan WHERE solusi='$rusak' AND status='Dalam Proses'";
    $data = mysqli_query($connect, $sql);

    if (mysqli_num_rows($data) == 0) {
        return;
    }

    if (!$data) {
        die("Query gagal: " . mysqli_error($connect));
    }

    while ($row = mysqli_fetch_assoc($data)) {
        // Set session variables
        $_SESSION['fakta'] = $row['fakta'];
        $_SESSION['solusi'] = $row['solusi'];
        $_SESSION['oleh'] = $row['oleh'];
        $_SESSION['status'] = $row['status'];
    }
}




function solusi($kode)
{
    if ($kode == 'SOL02') {
        $rusak = "Ganti layar handphone";
        kesimpulan($rusak);
    }
    if ($kode == 'SOL03') {
        $rusak = "Perbaiki layar sentuh handphone";
        kesimpulan($rusak);
    }
    if ($kode == 'SOL04') {
        $rusak = "Perbaiki atau ganti speaker handphone";
        kesimpulan($rusak);
    }
    if ($kode == 'SOL05') {
        $rusak = "Perbaiki atau ganti komponen pendingin";
        kesimpulan($rusak);
    }
    if ($kode == 'SOL07') {
        $rusak = "Perbaiki atau ganti baterai handphone";
        kesimpulan($rusak);
    }
    if ($kode == 'SOL08') {
        $rusak = "Perbaiki atau ganti komponen handphone yang terkena cairan";
        kesimpulan($rusak);
    }
    if ($kode == 'SOL09') {
        $rusak = "Perbaiki atau ganti kamera handphone";
        kesimpulan($rusak);
    }
    if ($kode == 'SOL12') {
        $rusak = "Perbaiki atau ganti komponen jaringan atau Wi-Fi";
        kesimpulan($rusak);
    }
    if ($kode == 'SOL15') {
        $rusak = "Perbaiki atau ganti aplikasi yang menyebabkan crash";
        kesimpulan($rusak);
    }
    if ($kode == 'SOL18') {
        $rusak = "Perbaiki atau ganti layar handphone";
        kesimpulan($rusak);
    }
    if ($kode == 'SOL19') {
        $rusak = "Perbaiki atau ganti port pengisian daya handphone";
        kesimpulan($rusak);
    }
    if ($kode == 'SOL22') {
        $rusak = "Bersihkan atau hapus data yang tidak perlu";
        kesimpulan($rusak);
    }
    if ($kode == 'SOL23') {
        $rusak = "Perbaiki atau ganti sistem operasi handphone";
        kesimpulan($rusak);
    }
    if ($kode == 'SOL26') {
        $rusak = "Terus Rawat Handphone mu";
        kesimpulan($rusak);
    }
    if ($kode == 'SOL27') {
        $rusak = "Terus Rawat Handphone mu";
        kesimpulan($rusak);
    }
    if ($kode == 'SOL28') {
        $rusak = "Terus Rawat Handphone mu";
        kesimpulan($rusak);
    }
    if ($kode == 'SOL29') {
        $rusak = "Terus Rawat Handphone mu";
        kesimpulan($rusak);
    }
    if ($kode == 'SOL30') {
        $rusak = "Terus Rawat Handphone mu";
        kesimpulan($rusak);
    }
}
