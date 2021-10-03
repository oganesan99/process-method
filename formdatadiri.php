<html>
<head>
<title> Masukan Data</title>
</head>
<body>
<h1> Masukan Identitas Anda<h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<pre>
Isikan Nama : <input type="text" name="nama">
Isikan No Telp: <input type="text" name="notelp">
Isikan Alamat : <textarea name="alamat" rows="5" cols="40"></textarea>
<input type="submit" value="TAMPIL"><input type="reset"
value="BATAL">
</pre>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama'];
  if (empty($nama)) {
    echo "Nama tidak ada";
  } else {
    echo "Nama = $nama<br>";
  }
} if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $telp = $_POST['notelp'];
    if (empty($telp)) {
      echo "Telepon tidak ada";
    } else {
      echo "No Telp = $telp<br>";
    }
  } if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alamat = $_POST['alamat'];
    if (empty($alamat)) {
      echo "Alamat tidak ada";
    } else {
      echo "Alamat = $alamat<br>";
    }
  } 
?>
</body>
</html>