<HTML>
<head>
<body style="background-image: url('airlines.avif'); background-repeat: no-repeat; background-size: cover;">
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
<BODY>
<?php
$class = $_POST["class"];
$baggage = $_POST["baggage"];
$handbag = $_POST["handbag"];
$airline = $_POST["airline"];

// Define the base price
$bagPrice = 50.00;
$priceIncreasePerBaggage = 10.50;

// Get the number of baggages (you can replace this with your own variable or input method)

// Calculate the total price
$totalPrice1 = $bagPrice + ($baggage * $priceIncreasePerBaggage * $handbag);

// Define the base price
$classPrice = 20.50;
// Define the price increase for first class
$firstClassPrice = 30.00;
// Define the price increase for business class
$businessClassPrice = 25.00;
// Define the price increase for economy class
$economyClassPrice = 15.00;

// Calculate the total price based on the chosen class
if ($class == 'First Class') {
    $totalPrice2 = $classPrice + $firstClassPrice;
} elseif ($class == 'Business Class') {
    $totalPrice2 = $classPrice + $businessClassPrice;
} elseif ($class == 'Economy Class') {
    $totalPrice2 = $classPrice + $economyClassPrice;
}

// Define the base price
$airPrice = 200.50;
// Define the price for Emirates
$emiratesPrice = 250.00;
// Define the price for United Airlines
$unitedPrice = 195.00;
// Define the price for TAP
$tapPrice = 150.00;
// Define the price for Air Maroc
$MarocPrice = 140.00;
// Define the price for Air France
$FrancePrice = 155.00;
// Define the price for Brussels Airlines
$brusselsPrice = 175.00;
// Define the price for Turkish Airlines
$turkishPrice = 200.00;

// Calculate the total price based on the chosen airline
if ($airline == 'Emirates') {
    $totalPrice3 = $airPrice + $emiratesPrice;
} elseif ($airline == 'United Airlines') {
    $totalPrice3 = $airPrice + $unitedPrice;
} elseif ($airline == 'TAP') {
    $totalPrice3 = $airPrice + $tapPrice;
}  elseif ($airline == 'Air Maroc') {
    $totalprice3 = $airPrice + $MarocPrice;
}  elseif ($airline == 'Air France') {
     $totalPrice3 = $airPrice + $FrancePrice;
}  elseif ($airline == 'Brussels Airlines') {
     $totalPrice3 = $airPrice + $brusselsPrice;
}  elseif ($airline == 'Turkish Airlines') {
     $totalPrice3 = $airPrice + $turkishPrice;
}


$totalPrice4 = $totalPrice1 + $totalPrice2 + $totalPrice3;

if ($airline == 'Emirates') {
    $flighttime = '16h30';
} elseif ($airline == 'United Airlines') {
    $flighttime = '23h00';
} elseif ($airline == 'TAP') {
    $flighttime = '04h15';
} else {
    // Set a default value or handle other cases
    $flighttime = '13h45';
}

$liga = mysqli_connect('localhost', 'root', '');
if (!$liga) {
    echo "<p>Falha na ligação à base de dados.</p>";
    exit;
}

$escolhebd = mysqli_select_db($liga, 'agencia');
if (!$escolhebd) {
    echo "<br>Erro ao aceder a Agencia";
    exit;
}

// Retrieve the idnumber from the passenger table
$idnumberQuery = "SELECT idnumber FROM passenger";
$idnumberResult = mysqli_query($liga, $idnumberQuery);

if ($idnumberResult && mysqli_num_rows($idnumberResult) > 0) {
    $idnumberRow = mysqli_fetch_assoc($idnumberResult);
    $idnumber = $idnumberRow['idnumber'];

    // Perform the insertion into the flight table with the retrieved idnumber
    $insere = "INSERT INTO flight (idnumber, class, baggage, handbag, airline) VALUES
    ('" . $idnumber . "','" . $class . "', '" . $baggage . "', '" . $handbag . "', '" . $airline . "')";

     $result = mysqli_query($liga, $insere);
    if ($result) {
        $id = mysqli_insert_id($liga);

    } else {
        echo "Error: " . mysqli_error($liga);
    }

    // ... rest of the code ...
} else {
    echo "Error: Failed to retrieve idnumber from the passenger table.";
}
echo '<fieldset style="background-color: feffba; margin-right: 90px;">';
echo "<table style='border-collapse: collapse;'>";
echo "<tr><th colspan='2'>Dados Recebidos:</th></tr>";
echo "<tr><td style='border: 1px solid black;'>Preferred Class:</td><td style='border: 1px solid black;'>" . $class . "</td></tr>";
echo "<tr><td style='border: 1px solid black;'>Number of baggage:</td><td style='border: 1px solid black;'>" . $baggage . "</td></tr>";
echo "<tr><td style='border: 1px solid black;'>Number of handbag:</td><td style='border: 1px solid black;'>" . $handbag . "</td></tr>";
echo "<tr><td style='border: 1px solid black;'>Preferred Airline:</td><td style='border: 1px solid black;'>" . $airline . "</td></tr>";
echo "<tr><td style='border: 1px solid black;'>idflight:</td><td style='border: 1px solid black;'>" . $id . "</td></tr>";
echo "<tr><td style='border: 1px solid black;'>Total Price:</td><td style='border: 1px solid black;'>" . $totalPrice4 . "</td></tr>";
echo "<tr><td style='border: 1px solid black;'>Flight leaves at:</td><td style='border: 1px solid black;'>" . $flighttime . "</td></tr>";
echo "<tr><td colspan='2'><button type='button' onclick=\"window.location.href = 'payment.html'\">Check out</button></td></tr>";
echo "</table>";
echo "</fieldset>";

$consulta = "SELECT * FROM flight";
$linhas = mysqli_query($liga, $consulta);

$nregistos = mysqli_num_rows($linhas);
?>

</BODY>
</HTML>
