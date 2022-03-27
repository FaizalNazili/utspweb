<html>

<head>
    <title>Website</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
<?php
    session_start();
    
    if (isset($_POST['ok'])) {
        if (empty($_POST['nama']) || empty($_POST['alamat']) || empty($_POST['nomer']) || empty($_POST['jumlah'])) {
            print "Lengkapi form";
        } else {

            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $nomer = $_POST['nomer'];
            $jumlah = $_POST['jumlah'];
            $_SESSION["total"] = $jumlah* 10 / 100;
            $buka = fopen("hasil.html", 'a');
            fwrite($buka, "nama : ${nama} <br> ");
            fwrite($buka, "alamat : ${alamat} <br> ");
            fwrite($buka, "Nomer HP : ${nomer} <br> ");
            fwrite($buka, "Pendapatan : ${jumlah} <br> ");
            fwrite($buka, "Pajak PPN :  {$_SESSION['total']} <br> ");
            fwrite($buka, "<hr>");
            fclose($buka);
            print "data berhasil disimpan";
        }
    }
    ?>

    <div class="head">
        <div class="logo">
            <div class="child1">

            </div>
        </div>
        <div class="header">
            <div class="child2">
                <font size="7">Website Laporan pajak PPN Sederhana</font></br>
                <font size="4"></font>
            </div>
        </div>
    </div>
    <div class="atas">
        <hr />
    </div>
    <div class="content">
        <div class="isi">
            <div class="form">
                <div class="form1">
                    <form action="formuser1.php" method="POST" class="form">
                        <div class="right">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama">

                            <label>Alamat</label>
                            <input type="text" name="alamat">

                            <label>Nomer HP</label>
                            <input type="text" name="nomer"><br>

                            <label>Pendapatan</label>
                            <input type="text" name="jumlah"><br>

                            <input type="submit" name="ok" value="Simpan">

                            <br><label>Total</label>
                            <input type="text" name="total" value="<?= number_format("{$_SESSION['total']}", 2, ",", ".") ?>" placeholder="0" readonly>

                            <a href="logout.php"><input class="logout" type="button" name="logout" value="logout" ></a>
                        </div>
                </div>
                </form>

            </div>
        </div>


    </div>
    <div class="footer">
        <p>Copyright 2022</p>
    </div>
</body>

</html>
