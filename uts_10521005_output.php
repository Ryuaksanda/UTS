<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Pengiriman Barang</title>
        <style>
            body{
                margin: 0%;
                overflow: hidden;
                font-family: sans-serif;
                color: white;
            }
            video{
                width: 100%; height: auto;
                position: absolute;
                object-fit: cover;
                top: 0%;
            }
            div{
                position: absolute;
                background-color: #1f1f1f;
                border-radius: 20px;
                width: 50%;
                left: 25%; top: 25%;
                box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            }
        </style>
    </head>
    <body>
        <video autoplay loop muted>
            <source src="https://raw.githubusercontent.com/Ryuaksanda/UAS/main/WORLDS%202022%20-%20ORCHESTRAL%20THEME%20%20-%20League%20of%20Legends.mkv">
        </video>
        <div>
            <center>
                <table style="margin-top: 1%;">
                    <tr>
                        <td>NIM</td>
                        <td>: 10521005</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: Muhammad Ryu Aksanda</td>
                    </tr>
                </table>
                <?php
                    $nama = $_GET['nama'];
                    $telp = $_GET['telp'];
                    $tujuan = $_GET['tujuan'];
                    $kurir = $_GET['kurir'];
                    $berat = $_GET['berat'];
                    $asuransi = $_GET['asuransi'];
                    $biaya; $bas; $total;
                    if($kurir=="Reguler"){
                        if($tujuan=="Bandung"){
                            $biaya = 10000;
                        }
                        elseif($tujuan=="Jakarta"){
                            $biaya=20000;
                        }
                        elseif($tujuan=="Semarang"){
                            $biaya=30000;
                        }
                    }
                    elseif($kurir=="Ekspres"){
                        if($tujuan=="Bandung"){
                            $biaya = 12000;
                        }
                        elseif($tujuan=="Jakarta"){
                            $biaya=24000;
                        }
                        elseif($tujuan=="Semarang"){
                            $biaya=35000;
                        }
                    }
                    $biaya=$biaya*$berat;
                    if($asuransi=="YA"){
                        $bas=$biaya*0.07;
                    }
                    else $bas=0;
                    $total=$biaya+$bas;
                    echo "
                    <h2>Form Pengiriman Barang</h2>
                    <table>
                        <tr>
                            <td>Nama Pengirim</td>
                            <td>: $nama</td>
                        </tr>
                        <tr>
                            <td>No. Telepon</td>
                            <td>: $telp</td>
                        </tr>
                        <tr>
                            <td>Tujuan Pengiriman</td>
                            <td>: $tujuan</td>
                        </tr>
                        <tr>
                            <td>Jenis Pengiriman</td>
                            <td>: $kurir</td>
                        </tr>
                        <tr>
                            <td>Berat Badan</td>
                            <td>: $berat Kg</td>
                        </tr>
                        <tr>
                            <td>Asuransi</td>
                            <td>: $asuransi</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td>BAYAR</td>
                            <td>: Rp. $biaya</td>
                        </tr>
                        <tr>
                            <td>BIAYA ASURANSI</td>
                            <td>: Rp. $bas</td>
                        </tr>
                        <tr>
                            <td><b>TOTAL BAYAR</b></td>
                            <td><b>: Rp. $total</b></td>
                        </tr>
                    </table><br>
                    <table>
                        
                    </table>
                    ";
                ?>
            </center>
        </div>
    </body>
</html>
