<HTML>
<head>
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
<BODY>
<?php
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$idcard=$_POST["idcard"];
$birthdate=$_POST["birthdate"];
$address=$_POST["address"];
$adult=$_POST["adult"];
$kids=$_POST["kids"];
$array = array(); // Initialize an empty array
$maxValue = 10000; // Set the maximum value to infinity

// Loop to populate the array
$i = 0;
while ($i < $maxValue) {
    $idnumber = "Value " . ($i + 1);
    $array[] = $idnumber; // Add $idnumber to $array
    $i++;
}
$arrayAsString = implode(", ", $array);


$length = "300px"; // Define the desired length
$width = "200px"; // Define the desired width


 //Loop to populate the array
//for ($i = 0; $i < 5; $i++) {
//$idnumber = "Value " . ($i + 1);
//}

$liga=mysqli_connect('localhost', 'root', '');
if(!$liga)
{
 echo "<p> Falha na ligação á base de dados. </p>";
 exit;
};

$escolhebd=mysqli_select_db($liga, 'agencia');
if(!$escolhebd)
{
 echo "<br> Erro ao aceder a Agencia";
 exit;
};

//$insere = "INSERT INTO passenger VALUES
//('".$name."', '".$email."', '".$phone."', '".$idcard."', '".$arrayAsString."', '".$birthdate."', '".$address."', '".$adult."', '".$kids."')";

$insere = "INSERT INTO passenger ( name, email, phone, idcard, birthdate, address, adult, kids) VALUES
 ( '" . $name . "', '" . $email . "', '" . $phone . "', '" . $idcard . "', '".$birthdate."','".$address."', '".$adult."', '".$kids."')";

$result = mysqli_query($liga, $insere);
if ($result) {
    $id = mysqli_insert_id($liga);
    $array[] = $id;

} else {
    echo "Error: " . mysqli_error($liga);
}


if ($result == 1) {
echo '<fieldset style="margin-right: 100px; background-color: 89CFF0;">';
echo "<table style='border-collapse: collapse;'>";
echo "<tr><th colspan='2'>Dados Recebidos:</th></tr>";
echo "<tr><td style='border: 1px solid black;'>Name and Surname:</td><td style='border: 1px solid black;'>" . $name . "</td></tr>";
echo "<tr><td style='border: 1px solid black;'>Your email address:</td><td style='border: 1px solid black;'>" . $email . "</td></tr>";
echo "<tr><td style='border: 1px solid black;'>Phone Number:</td><td style='border: 1px solid black;'>" . $phone . "</td></tr>";
echo "<tr><td style='border: 1px solid black;'>ID Document:</td><td style='border: 1px solid black;'>" . $idcard . "</td></tr>";
echo "<tr><td style='border: 1px solid black;'>ID Number:</td><td style='border: 1px solid black;'>" . $id . "</td></tr>";
echo "<tr><td style='border: 1px solid black;'>Date of birth:</td><td style='border: 1px solid black;'>" . $birthdate . "</td></tr>";
echo "<tr><td style='border: 1px solid black;'>Your address:</td><td style='border: 1px solid black;'>" . $address . "</td></tr>";
echo "<tr><td style='border: 1px solid black;'>Number of Adults:</td><td style='border: 1px solid black;'>" . $adult . "</td></tr>";
echo "<tr><td style='border: 1px solid black;'>Number of kids:</td><td style='border: 1px solid black;'>" . $kids . "</td></tr>";
echo "</table>";
echo '<button type="button" onclick="window.location.href = \'Voo.html\'" style=width: '.$width.'; height: '.$length.';>
    Agendar Voo</button>';
 echo '</fieldset>';
}


 
$consulta = "select * from passenger";
$linhas = mysqli_query($liga, $consulta);

$nregistos = mysqli_num_rows($linhas);
?>

</BODY>
</HTML>
