<!DOCTYPE html>
<html>
    <head>
        <title>Beautiful Tour</title>
        <!-- css eksternal-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" type="text/css" href="style.css"> <!-- css eksternal-->
        <style>
            div {
                border-radius: 5px;
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <!--Start Form-->
        <section class="row">
            <div class="column">
                <h2>Form Pemesanan</h2>
                <div>
                    <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
                        <label>Nama</label> <br>
                            <input type="text" name="input_nama" placeholder="Masukkan nama Anda"> <br><br>
                        <label>Nomor Telepon</label> <br>
                            <input type="number" name="input_notelp"> <br><br>
                        <label>Email</label> <br>
                            <input type="text" name="input_email" placeholder="Masukkan alamat email"><br><br>
                        <label>Destinasi Wisata</label> <br>
                            <select name="input_destinasi" id="destination_name">
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select> <br><br>
                        <label>Tanggal</label> <br>
                            <input type="date" name="input_tanggal" value="Ya"> <br><br>
                        <label>Jumlah Pesanan</label> <br>
                            <input type="number" name="input_jumlah" min="1" max="100" value="0"> <br><br>
                        <label>Kategori Usia</label> <br>
                            <select name="input_kategori_usia" id="age_category">
                                <option value="Anak-anak">Anak-anak</option>
                                <option value="Dewasa">Dewasa</option>
                            </select> <br><br>
                        <label>Catatan</label> <br>
                            <textarea name="input_catatan" cols="30" rows="10"></textarea> <br><br>
                        <input type="submit" value="Submit">
                    </form>
                </div>
                <div>
                    <?php
                        if(isset($_POST['input_nama'])){
                            $nama = $_POST['input_nama'];
                            $no_telp=$_POST['input_notelp'];
                            $email=$_POST['input_email'];
                            $destinasi=$_POST['input_destinasi'];
                            $tanggal=$_POST['input_tanggal'];
                            $jml_pesanan=$_POST['input_jumlah'];
                            $kategori=$_POST['input_kategori_usia'];
                            $catatan=$_POST['input_catatan'];
                    
                        echo "Daftar Pesanan";
                        echo "<table id='pesanan'>";
                        echo "<tr><th>No</th><th>Nama</th><th>No Telp</th><th>Email</th><th>Destinasi Wisata</th><th>Tanggal</th><th>Jumlah Pesanan</th><th>Kategori Usia</th><th>Catatan</th></tr>";
                        echo "<tr><td>1. </td><td>$nama</td><td>$no_telp</td><td>$email</td><td>$destinasi</td><td>$tanggal</td><td>$jml_pesanan</td><td>$kategori</td><td>$catatan</td></tr>";
                        }
                    ?>
                </div>
            </div>
            
        </section>        
    </body>
</html>