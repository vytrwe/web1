<!DOCTYPE html>
<html>
<head>
    <title></title>

    <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 25%
    }

    td, th {
      border: 1px solid #dddddd;
      text=align: center;
      padding: 8px;
    }
    .input {
        width: 100%;
    }

    </style>
</head>
<body bgcolor="pink">

    <h2>tugas 4</h2>
        <table>
        <form method="POST">
          <tr>
            <td>nilai 1</td>
            <td><input type="number" name="nilai_satu" placeholder="masukkan nilai 1" class="input"></td>
          </tr>
          <tr>
            <td>nilai 2</td>
            <td><input type="number" name="nilai_dua" placeholder="masukkan nilai 1" class="input"></td>
          </tr>
          <tr>
            <center>
                <td colspan="2">
                    <input type="radio" name="lis" value="segitiga">
                    <label>Segitiga</label>
                    <br/>
                    <input type="radio" name="lis" value="persegi">
                    <label>Persegi Panjang</label>
                </td>
            </tr>
            <tr>
              <td style="border: 0;" colspan="2">
                  <button type="submit" name="submit">submit</button>
                  <button type="submit" name="batal">batal</button>
              </td>
            </tr>
            </form>
        </table>

<?php

$nilai1=$_POST['nilai_satu'];
$nilai2=$_POST['nilai_dua'];
$lis=$_POST['lis'];

if (isset($_POST['submit'])){
    if ($lis=="segitiga"){
        $hasil=1/2*$nilai1*$nilai2;

        echo "Nilai a adalah=" .$nilai.'<br/>';
        echo "Nilai b adalah=" .$nilai2.'<br/>';
        echo "Rumus Yang Dipilih= segitiga".'<br/>';
        echo "Hasil Perhitungan Rumus=".$hasil.'<br/>';
    }
    elseif ($lis=="persegi") {
        $hasil=$nilai1*$nilai2;

        echo "Nilai a adalah=" .$nilai1.'<br/>';
        echo "Nilai b adalah=" .$nilai2.'<br/>';
        echo "Rumus Yang Dipilih= persegi panjang".'<br/>';
        echo "Hasil Perhitungan Rumus=".$hasil.'<br/>';
    }
    else{
        echo "periksa pilihan";
    }
}

?>

</body>
</html>