<?php
error_reporting(0);
$becvr1 = $_POST['bed1'];
$becvr2 = $_POST['bed2'];
$pakaian = $_POST['pkian'];
$jeans = $_POST['Jeans'];
$harga_becvr1 = $becvr1 * 25000;
$harga_becvr2 = $becvr2 * 20000;
$harga_pakaian = $pakaian * 1500;
$harga_jeans = $jeans * 5000;
$nm = $_POST['nama'];

$harga_total = $harga_becvr1 + $harga_becvr2 + $harga_jeans + $harga_pakaian;
$tglmsk = date('d.m.Y', strtotime($_POST['tgl']));
// echo "Tanggal Masuk:  $tglmsk"."<br>";
$tglambil = date('d.m.Y', strtotime('+2days', strtotime($tglmsk)));
// echo "Bisa diambil dari: $tglambil";


//Membuat connection 
$conn = mysqli_connect('localhost:3307', 'root', '', 'reg');

$mask = "INSERT INTO `pesanan_sat`(`nama`, `tanggal_masuk`, `tgl_ambil`, `bedcover_1`, `bedcover_2`, `pakaian_b`, `pakaian_jins`) VALUES 
                                    ('$nm','$tglmsk','$tglambil','$becvr1','$becvr2','$pakaian','$jeans')";

$run = mysqli_query($conn, $mask);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harga</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="text1">
        <table class="table1">
            <tr class="tr1">
                <td colspan="5" class="heading1">
                    <h1>Evan's Laundry</h1>
                </td>
            </tr>
            <tr>
                <td id="tgl"><?php echo "Tanggal Masuk : " . $tglmsk ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="td1" id="tgl"><?php echo "Tanggal Ambil : " . $tglambil ?></td>
            </tr>
            <tr>
                <td colspan="5" class="td2"><?php echo "Nama Pelanggan : " . $nm ?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="2" class="td3"><?php echo "Total Harga : Rp." . $harga_total ?></td>
            </tr>
            <tr>
                <td id="lk" class="td4" colspan="5"><a href="h1.php" class="link">Terima Kasih Karena Telah Memakai Jasa Kami</a></td>
            </tr>
        </table>
    </div>
</body>

</html>