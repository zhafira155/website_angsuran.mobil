<?php   
    if(!isset($_POST["submit"])){   
        header("Location: savaran.php");   
        die();   
    }   
 
    $nama = trim($_POST["nama"] ?? "");  
    $email = trim($_POST["email"] ?? "");   
    $hargamobil = trim($_POST["hargamobil"] ?? "");   
    $dp = trim($_POST["dp"] ?? "");  
    $tenor = trim($_POST["tenor"] ?? "");  
 
    $query_nama = "nama=" . urlencode($nama);  
    $query_email = "email=" . urlencode($email);  
    $query_hargamobil = "hargamobil=" . urlencode($hargamobil);  
    $query_dp = "dp=" . urlencode($dp);  
    $query_tenor = "tenor=" . urlencode($tenor);  
 
    $isi_form = "&$query_nama&$query_email&$query_hargamobil&$query_dp&$query_tenor";  


    if(isset($_POST["submit"])) {   
        $nama = $_POST["nama"]; 
        $email = $_POST["email"]; 
        $hargamobil = $_POST["hargamobil"]; 
        $dp = $_POST["dp"];

        if(empty($nama)) {   
            $pesan = urlencode("Nama harus diisi");   
            header("Location: savaran.php?pesan={$pesan}{$isi_form}");   
            die();   
        }   
 
        if(empty($email)) {   
            $pesan = urlencode("Email harus diisi");   
            header("Location: savaran.php?pesan={$pesan}{$isi_form}");   
            die();   
        }  
 
        if(empty($hargamobil)) {   
            $pesan = urlencode("Harga mobil harus diisi");   
            header("Location: savaran.php?pesan={$pesan}{$isi_form}");   
            die();   
        }  
 
        if(empty($dp)) {   
            $pesan = urlencode("DP harus dipilih");   
            header("Location: savaran.php?pesan={$pesan}{$isi_form}");   
            die();   
        }  
 
        if(empty($tenor)) {   
            $pesan = urlencode("Tenor harus dipilih");   
            header("Location: savaran.php?pesan={$pesan}{$isi_form}");   
            die();   
        }  
 
        $bunga = 20;   
        $jumlahangsuran = 0;
        $jumlahdp = 0;
        $totalbunga = 0;
 
        // cari dp harga mobil  
        if($dp == 10){   
            $jumlahdp = ($dp/100) * $hargamobil;   
        }elseif ($dp == 20){   
            $jumlahdp = ($dp/100) * $hargamobil;   
        }elseif ($dp == 30){   
            $jumlahdp = ($dp/100) * $hargamobil;   
        }elseif ($dp == 40){   
            $jumlahdp = ($dp/100) * $hargamobil;   
        }elseif($dp == 50){   
            $jumlahdp = ($dp/100) * $hargamobil;   
        }   
 
        // mencari lama angsuran  
        $lamaangsuran = 0;   
 
        if ($tenor == 1){   
            $lamaangsuran = $tenor * 12;   
        }elseif ($tenor == 2){   
            $lamaangsuran = $tenor * 12;   
        }elseif ($tenor == 3){   
            $lamaangsuran = $tenor * 12;   
        }elseif ($tenor == 4){   
            $lamaangsuran = $tenor * 12;   
        }elseif ($tenor == 5){   
            $lamaangsuran = $tenor * 12;   
        }   
 
        // menghitung bunga  
        if($bunga == 20) {   
            $totalbunga = ($bunga/100) * ($hargamobil - $jumlahdp) * $tenor;   
        }   
 
        // Cara menghitung jumlah angsurannya  
        $jumlahangsuran = (($hargamobil - $jumlahdp) + $totalbunga) / $lamaangsuran;   
 
    }   
    else {   
        echo "halaman hanya bisa diakses dari form!";   
    }    
?>   

<!DOCTYPE html>   
<html lang="en">   
<head>   
    <meta charset="UTF-8">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>Document</title>  

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="angsuran.css"> 
</head>    

<body>    
 
    <div class="bg-light p-4 rounded-4 border h-100 d-flex flex-column justify-content-between">  
        <div>  
            <div class="d-flex align-items-center gap-2 mb-3 border-bottom pb-2">  
                <h3 class="fw-bold mb-0">Hasil Perhitungan</h3>  
            </div>  
            <div class="row mb-2 small">  
              <p>Nama : <?= $nama ?></p>
              <br>
              <p>Email : <?= $email ?></p>
              <br>  
              <p>Harga Mobil : Rp.<?= number_format($hargamobil, 0, ',', '.') ?>   </p>
              <br>
              <p>DP (<?= $dp ?>%) : Rp. <?= number_format($jumlahdp, 0, ',', '.' ) ?></p>
              <p>Tenor : <?= $tenor ?> Tahun</p>
              <p>Lama Angsuran : <?= $lamaangsuran ?> Bulan</p>
              <p>Bunga : <?= $bunga ?>%</p>
              <p>Jumlah Angsuran / Bulan : Rp. <?= number_format($jumlahangsuran, 0, '.', '.') ?></p>
            </div> 
        </div>  
    </div>
 
</body>    
</html>