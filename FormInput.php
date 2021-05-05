<!DOCTYPE html>
<html>
<head>
    <title>PHP Dasar</title>
</head>
<body>
    <form method="POST" name="frmpost" action="">
    <table align="center" border="1" cellpadding="0" cellspacing="0">
    <tr align="center"><td><h2><b>Masukan Data Diri Anda</b></h2></td>
    <tr>
        <td>
        <table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
    <tr>
        <td>Nama</td>
        <td> : </td>
        <td><input type="text" name="nama[]" size="40" /></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td> : </td>
        <td><input type="text" name="tgl[]" size="40" /></td>
    </tr>
    <tr>
        <td>Posisi</td>
        <td> : </td>
        <td><select name="jabat">
            <option value="programmer">Programmer</option>
            <option value="software engineer">Software Engineer</option>
            <option value="it consultant">IT Consultant</option>
            <option value="system analyst">System Analyst</option>
            <option value="database engineer">Database Engineer</option>
        </select></td>
    </tr>
    <tr>
        <td colspan="4" align="center"><input type="submit" name="btnOk" value="Kirim"></td>
    </tr>
        </table>
    </td>
    </tr>
    </tr>
    </table>
</form>
    <center>
    <table width="450" border="1" cellpadding="2" cellspacing="4">
        <?php
        $nama = $_POST['nama'];
        $tgl = $_POST['tgl'];

        foreach ($nama as $key => $value) {
        ?>
        <tr>
            <td align="center" colspan="2">
                <?php
                echo '<b>Hasil Data Diri Anda</b><br>';?>
            </td>
        </tr>
            <tr>
            <td><?php echo 'Nama'?></td>
            <td><?php echo $nama[$key];?></td>
        </tr>
        <tr>
            <td><?php echo 'Umur';?></td>
            <td>
                <?php
                $tanggal = new DateTime('2000-06-01');
                $today = new DateTime('2021-5-5');
                $y = $today->diff($tanggal)->y;
                $m = $today->diff($tanggal)->m;
                $d = $today->diff($tanggal)->d;
                echo "". $y . " tahun " . $m . " bulan " . $d . " hari ";
                ?>
            </td>
        </tr>
        <tr>
            <td><?php echo 'Gaji';?></td>
            <td>
                <?php
                $posisi = $_POST["jabat"];

                if ($posisi=="programmer"){
                $posisiku="Programmer";}
                else if($posisi=="software engineer"){
                $posisiku="Software Engineer";}
                else if($posisi=="it consultant"){
                $posisiku="IT Consultant";}
                else if($posisi=="system analyst"){
                $posisiku="System Analyst";}
                else
                {$posisiku="Database Engineer";}
                echo "";
                if ($posisiku=="Programmer"){
                $gajifinal="10.000.000";}
                else if($posisiku=="Software Engineer"){
                $gajifinal="19.000.000";}
                else if($posisiku=="IT Consultant"){
                $gajifinal="12.000.000";}
                else if($posisiku=="System Analyst"){
                $gajifinal="16.500.000";}
                else
                {$gajifinal="14.000.000";}
                echo " Rp. $gajifinal  ";
                ?>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    </center>
</html>