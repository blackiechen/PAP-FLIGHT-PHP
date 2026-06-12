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
$payment = $_POST["payment"];
$amount = $_POST["amount"];
$description = $_POST["description"];

//require 'PHPMailer/src/PHPMailer.php';
//require 'PHPMailer/src/SMTP.php';
//require 'PHPMailer/src/Exception.php';

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;
//$mail = new PHPMailer();
// Enable SMTP
//$mail->isSMTP();
// Set the SMTP server details
//$mail->Host = 'LAPTOP-A4E73GHA';
//$mail->Port = 587;
//$mail->SMTPAuth = true;
//$mail->Username = 'silvangelkadi.com'; // Replace with your own email address
//$mail->Password = 'Ajstylesrue.'; // Replace with your own email password
//$mail->SMTPDebug = SMTP::DEBUG_CONNECTION;
//$mail->Debugoutput = 'error_log';
//$mail->SMTPSecure = 'tls'; // or 'ssl'
// Set the 'from' email address and name
//$mail->setFrom('silvangelkadi@example.com', 'Angelica'); // Replace with your own email address and name
// Define the base price
$method = $amount;

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
// Retrieve the idflight from the flight table
$idflightQuery = "SELECT idflight FROM flight";
$idflightResult = mysqli_query($liga, $idflightQuery);

if ($idflightResult && mysqli_num_rows($idflightResult) > 0) {
    $idflightRow = mysqli_fetch_assoc($idflightResult);
    $idflight = $idflightRow['idflight'];
}

// Retrieve the idnumber from the passenger table
$idnumberQuery = "SELECT idnumber FROM passenger";
$idnumberResult = mysqli_query($liga, $idnumberQuery);

if ($idnumberResult && mysqli_num_rows($idnumberResult) > 0) {
    $idnumberRow = mysqli_fetch_assoc($idnumberResult);
    $idnumber = $idnumberRow['idnumber'];
}

// Perform the insertion into the transactions table with the retrieved idnumber and idflight
$insere = "INSERT INTO transactions (idflight, idnumber, payment, amount, description) VALUES
    ('$idflight', '$idnumber', '$payment', '$amount', '$description')";

$result = mysqli_query($liga, $insere);
if ($result) {
    $id = mysqli_insert_id($liga);
}
 // Retrieve passenger email
 //$emailQuery = "SELECT email FROM passenger WHERE idnumber = '$idnumber'";
 //$emailResult = mysqli_query($liga, $emailQuery);
// if ($emailResult && mysqli_num_rows($emailResult) > 0) {
//  $emailRow = mysqli_fetch_assoc($emailResult);
//$to = $emailRow['email'];
// Prepare and send the email
//$subject = "Flight Reservation Confirmation";
// $message = "Dear passenger,\n\nThank you for reserving your flight.
//Your payment has been successfully processed.\n\nHere are the details of your reservation:\n\nFlight ID: $idflight\nPayment Method: $payment\nAmount Paid: $amount\nDescription:
//$description\n\nWe look forward to serving you!\n\nBest regards,\nThe Flight Booking Team";
//$mail->addAddress($to); // Add the recipient email address
// $mail->Subject = $subject;
// $mail->Body = $message;
// Send the email
// if ($mail->send()) {
//   echo "Reservation confirmation email sent successfully.";
//    } else {
//   echo "Failed to send the reservation confirmation email. Error: " . $mail->ErrorInfo;
//  }
//   $mail->clearAddresses(); // Clear the recipient addresses for the next iteration
 //   } else {
 // echo "Error: Failed to retrieve email from the passenger table.";
 //}
//} else {
  //  echo "Error: " . mysqli_error($liga);
//}
// Rest of your code...
echo '<fieldset style="background-color: feffba; margin-right: 90px;">';
echo "<table style='border-collapse: collapse;'>";
echo "<tr><th colspan='2'>Dados Recebidos:</th></tr>";
echo "<tr><td style='border: 1px solid black;'>Flight ID:</td><td style='border: 1px solid black;'>" . $idflight . "</td></tr>";
echo "<tr><td style='border: 1px solid black;'>Payment method:</td><td style='border: 1px solid black;'>" . $payment . "</td></tr>";
echo "<tr><td style='border: 1px solid black;'>Amount paid:</td><td style='border: 1px solid black;'>" . $amount . "</td></tr>";
echo "<tr><td style='border: 1px solid black;'>Description:</td><td style='border: 1px solid black;'>" . $description . "</td></tr>";
echo "<tr><td style='border: 1px solid black;'>Total Price:</td><td style='border: 1px solid black;'>" . $method . "</td></tr>";
echo "<tr><td colspan='2'>Dear passenger,<br><br>Thank you for reserving your flight. Your payment has been successfully processed.<br>Please send us an email with your ID number and we will email you a confirmation of your reservation to the following email: silvangelkadi@gmail.com.</td></tr>";
echo "</table>";
echo "</fieldset>";
$consulta = "SELECT * FROM transactions";
$linhas = mysqli_query($liga, $consulta);
$nregistos = mysqli_num_rows($linhas);
mysqli_close($liga);
?>
</BODY>
</HTML>
