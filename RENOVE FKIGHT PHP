<html>
<head>
<title> Delete Flight </title>
<link rel="stylesheet" type="text/css" href="logo.css">
</head>
<body>
<h2>Reservation data of the client:</h2>
<?php
$idnumber = $_POST["idnumber"];
$idflight = $_POST["idflight"];
if (!$idnumber && !$idflight) {
  echo 'Insert the Identification and Flight number.';
  exit;
}
$connect = mysqli_connect("localhost", "root", "", "agencia");
  if (!$connect) {
    echo '<p>Error on connection to the database.</p>';
    exit;
  }
$procuranumber = "DELETE FROM passenger WHERE idnumber = '$idnumber'";
$procuraflight = "DELETE FROM flight WHERE idflight IN (SELECT idflight FROM transactions WHERE idflight = '$idflight')";

$result1 = mysqli_query($connect, $procuranumber);
$result2 = mysqli_query($connect, $procuraflight);

if ($result1 && $result2) {
  echo "<p> Data removed successfully </p>";
} else {
  echo "<p> Failed to remove data </p>";
}

?>
</BODY>
</HTML>
