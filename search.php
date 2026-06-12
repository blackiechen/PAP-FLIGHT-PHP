<html>
<head>
<title> Reservation </title>
<link rel="stylesheet" type="text/css" href="logo.css">
 <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            padding-top: 50px;
        }

        h1 {
            color: #333333;
            margin-bottom: 20px;
        }

        .container {
            width: 400px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 10px;
            font-weight: bold;
            color: #666666;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #cccccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #337ab7;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #286090;
        }

        .output {
            margin-top: 20px;
            background-color: #eeeeee;
            padding: 10px;
            border-radius: 3px;
            text-align: left;
            color: #333333;
        }
    </style>
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
echo '<fieldset style="margin-right: 100px; background-color: 89CFF0;">';
echo '<p>Identification Number: ' . $idnumber . '</p>';
echo '<p>Flight ID: ' . $idflight . '<p>';
echo '</fieldset>';

$liga = mysqli_connect("localhost", "root", "");
if (!$liga) {
  echo '<p>Error on connection to the database.</p>';
  exit;
}

$escolhebd = mysqli_select_db($liga, 'agencia');
if (!$escolhebd) {
  echo "<p>Error on accessing the 'agencia' database.</p>";
  exit;
}

$procuranumber = "SELECT * FROM passenger WHERE idnumber = '$idnumber'";
$procuraflight = "SELECT *
FROM flight
JOIN transactions ON flight.idflight = transactions.idflight
WHERE flight.idflight = '$idflight'";

$resultNumber = mysqli_query($liga, $procuranumber);
$resultFlight = mysqli_query($liga, $procuraflight);

$nregistosNumber = mysqli_num_rows($resultNumber);
$nregistosFlight = mysqli_num_rows($resultFlight);

if ($nregistosNumber > 0) {
  echo '<fieldset style="margin-right: 100px; background-color: 89CFF0;">';
  echo '<p>Passenger:</p>';
  while ($row = mysqli_fetch_assoc($resultNumber)) {
    // Access passenger data
    echo '<p>Name: ' . $row['name'] . '</p>';
    echo '<p>Email: ' . $row['email'] . '</p>';
    echo '<p>phone: ' . $row['phone'] . '</p>';
    echo '<p>idcard: ' . $row['idcard'] . '</p>';
    echo '<p>birthdate: ' . $row['birthdate'] . '</p>';
    echo '<p>address: ' . $row['address'] . '</p>';
    echo '<p>adult: ' . $row['adult'] . '</p>';
    echo '<p>kids: ' . $row['kids'] . '</p>';
    echo '</fieldset>';
    // ...
  }
} else {
  echo '<p>No passenger found with the specified identification number.</p>';
}

if ($nregistosFlight > 0) {
 echo '<fieldset style="margin-right: 100px; background-color: 89CFF0;">';
  echo '<p>Flight:</p>';
  while ($row = mysqli_fetch_assoc($resultFlight)) {
    // Access flight data
    echo '<p>Class: ' . $row['class'] . '</p>';
    echo '<p>baggage: ' . $row['baggage'] . '</p>';
    echo '<p>Handbag: ' . $row['handbag'] . '</p>';
    echo '<p>Airline: ' . $row['airline'] . '</p>';
    echo '<p>Payment: ' . $row['payment'] . '</p>';
    echo '<p>amount: ' . $row['amount'] . '</p>';
    echo '<p>description: ' . $row['description'] . '</p>';

  }
} else {
  echo '<p>No flight found with the specified flight ID.</p>';
}

mysqli_close($liga);
?>

  </body>
  </html>
  
