<!DOCTYPE html>
<html>
<head>
  <title>Update Flight</title>
  <link rel="stylesheet" type="text/css" href="logo.css">
  <script>
  window.addEventListener('DOMContentLoaded', function() {
    var fieldset = document.querySelector('fieldset');
    fieldset.style.padding = '20px';
    fieldset.style.border = '1px solid #ccc';
    fieldset.style.borderRadius = '5px';
    fieldset.style.backgroundColor = '#fafafa';

    var button = document.querySelector('button');
    button.style.marginTop = '10px';
    button.style.padding = '10px 20px';
    button.style.backgroundColor = '#007bff';
    button.style.border = 'none';
    button.style.borderRadius = '5px';
    button.style.color = '#fff';
    button.style.fontWeight = 'bold';
    button.style.cursor = 'pointer';
  });
</script>
</head>
<body>
  <h2>Reservation data of the client:</h2>


  <?php
  $idnumber = $_POST["idnumber"];
  $idflight = $_POST["idflight"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $idcard = $_POST["idcard"];
  $birthdate = $_POST["birthdate"];
  $address = $_POST["address"];
  $adult = $_POST["adult"];
  $kids = $_POST["kids"];
  $class = $_POST["class"];
  $baggage = $_POST["baggage"];
  $handbag = $_POST["handbag"];
  $airline = $_POST["airline"];

  $connect = mysqli_connect("localhost", "root", "", "agencia");
  if (!$connect) {
    echo '<p>Error on connection to the database.</p>';
    exit;
  }

  $name = mysqli_real_escape_string($connect, $name);
  $email = mysqli_real_escape_string($connect, $email);
  $phone = mysqli_real_escape_string($connect, $phone);
  $idcard = mysqli_real_escape_string($connect, $idcard);
  $birthdate = mysqli_real_escape_string($connect, $birthdate);
  $address = mysqli_real_escape_string($connect, $address);
  $adult = mysqli_real_escape_string($connect, $adult);
  $kids = mysqli_real_escape_string($connect, $kids);
  $class = mysqli_real_escape_string($connect, $class);
  $baggage = mysqli_real_escape_string($connect, $baggage);
  $handbag = mysqli_real_escape_string($connect, $handbag);
  $airline = mysqli_real_escape_string($connect, $airline);

  // Construct the update queries
  $procuranumber = "UPDATE passenger SET name = '$name', email = '$email', phone = '$phone', idcard = '$idcard', birthdate = '$birthdate', address = '$address', adult = '$adult', kids = '$kids' WHERE idnumber = '$idnumber'";

  $procuraflight = "UPDATE flight SET class = '$class', baggage = '$baggage', handbag = '$handbag', airline = '$airline' WHERE idflight IN (SELECT idflight FROM transactions WHERE idflight = '$idflight')";

  if (empty($idnumber) || empty($idflight)) {
    echo 'Please provide the Identification and Flight number.';
    exit;
  }

  echo '<fieldset style="margin-right: 100px; background-color: #89CFF0;">';
  echo '<p>ID Number to update: ' . $idnumber . '</p>';
  echo '<p>Flight ID to be updated: ' . $idflight . '</p>';
  echo '</fieldset>';

  if (mysqli_query($connect, $procuranumber) && mysqli_query($connect, $procuraflight)) {
    echo "<p>Data updated successfully.</p>";
  } else {
    echo "<p>Data update failed.</p>";
  }

  mysqli_close($connect);
  ?>
</body>
</html>
