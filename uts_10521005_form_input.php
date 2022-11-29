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
                justify-content: center;
                align-items: center;
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
                <h2>Form Pengiriman Barang</h2>
                <form method="get" action="uts_10521005_output.php">
                    <table>
                        <tr>
                            <td>Nama Pengirim</td>
                            <td>: <input type="text" name="nama" required></td>
                        </tr>
                        <tr>
                            <td>No. Telepon</td>
                            <td>: <input type="text" name="telp" required></td>
                        </tr>
                        <tr>
                            <td>Tujuan Pengiriman</td>
                            <td>: <select name="tujuan" required>
                                    <option value="">-=Pilih=-</option>
                                    <option value="Bandung">Bandung</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Semarang">Semarang</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Pengiriman</td>
                            <td>: <input type="radio" name="kurir" value="Reguler" required>Reguler
                            <input type="radio" name="kurir" value="Ekspres" required>Ekspres</td>
                        </tr>
                        <tr>
                            <td>Berat Barang</td>
                            <td>: <input type="number" name="berat" required></td>
                        </tr>
                        <tr>
                            <td>Asuransi</td>
                            <td>: <select name="asuransi" required>
                                <option value="">-=Pilih=-</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                            </td>
                        </tr>
                    </table>
                    <p><input type="submit" value="Proses"> | <input type="reset" value="Clear"></p>
                </form>
            </center>
        </div>
    </body>
</html>