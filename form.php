<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
</head>
<body>
    <form>
        <div>
            <label>Nama</label> <br>
            <input name="nama" type="text" placeholder="Masukkan nama">
        </div>
        <div>
            <label>Pekerjaan</label> <br>
            <input name="Pekerjaan" type="text" placeholder="Masukkan Pekerjaan">
        </div>
        <div>
            <label>Tanggallahir</label> <br>
            <input name="Tanggallahir" type="text" placeholder="Masukkan Tanggallahir">
        </div>
        
        <div>
            <button>Submit</button>
        </div>
        
    </form>
    <?php # membuka tag PHP

$nama = @$_GET['nama'];
$Pekerjaan = @$_GET['Pekerjaan'];
$Tanggallahir =@$_POST['Tanggallahir'];
$rubah = date_format(date_create($Tanggallahir), 'Y');
$thn_skrg = date('Y');
$usia = $thn_skrg - $rubah;


if ($nama) {
    echo "<strong>Nama:</strong> {$nama} <br>";
}

if ($Pekerjaan) {
    echo "<strong>Pekerjaan:</strong> {$Pekerjaan} <br>";
}
if ($Tanggallahir) {
    echo "<strong>Tanggal lahir Anda:</strong>{$Tanggallahir} <br>";
    echo "<strong>Usia Anda sekarang adalah: </strong>{$usia} <br> thn";
}
?>
</body>
</html>