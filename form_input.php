<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>PHP Dasar</title>
</head>
<body>
<h2>Form Input</h2>
<form method="post">
 <label>Nama: </label>
 <input type="text" name="nama">
</form>

 <form method="post" action="tgllahirproses.php">
        <table>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <select name="tanggallahir">
                    <?php
                        for ($i=1; $i<=31 ; $i++) {
                    ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php
                        }
                    ?>
                    </select>
                </td>
                <td>
                    <select name="bulan">
                    <?php
                        for ($i=1; $i<=12 ; $i++) {
                    ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php
                        }
                    ?>
                    </select>
                </td>
                <td>
                    <select name="tahun">
                    <?php
                        for ($i=1990; $i<=2018 ; $i++) {
                    ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php
                        }
                    ?>
                    </select>
                </td>
            </tr>
        </table>

<form method="post">
 <label>Pekerjaan: </label>
 <input type="text" pekerjaan="pekerjaan">
</form>
<input type="submit" value="tampilkan">
<?php
    echo 'Selamat Datang ' 
    . $_POST['nama'];
    . $_POST['Tanggal lahir'];
    . $_POST['Pekerjaan'];
?>
</body>
</html>