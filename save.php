<?php
    if(isset($_POST['simpan'])) {

        date_default_timezone_set('Asia/Jakarta');
        
        $fileName = 'db.html';
        
        $file = fopen($fileName, "w");
        
        $content = '
        <center>
            <h1>Data Pemantauan Covid19 Wilayah '.$_POST['wilayah'].'</h1>
            <h2>Per '.date('d M Y H:i:s').'</h2>
            <h3>'.$_POST['nama'].' / '.$_POST['nim'].'</h3>
        </center>
        <table class="table" width="100%" border="1">
            <thead>
                <tr>
                    <th>Positif</th>
                    <th>Dirawat</th>
                    <th>Sembuh</th>
                    <th>Meninggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>'.number_format($_POST['positif']).'</td>
                    <td>'.number_format($_POST['dirawat']).'</td>
                    <td>'.number_format($_POST['sembuh']).'</td>
                    <td>'.number_format($_POST['meninggal']).'</td>
                </tr>
            </tbody>
        </table>
        ';
        
        fwrite($file, $content);
        fclose($file);
    }

    header("location: tampil.php");