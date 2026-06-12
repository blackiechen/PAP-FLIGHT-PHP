<html>
<head>
<style>
    body {
     background-image: url("BackgroundA1.png");
    }

    .container {
      background-color: #FAFAFA;
      margin: auto;
      width: 400px;
      padding: 20px;
      text-align: center;
    }

    form {
      display: flex;
	  width: 700px;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    fieldset {
      border: 1px solid black;
      background-color: #FFFDD0;
      height: 270px;
      width: 80%;
      margin-bottom: 20px;
      padding: 10px;
    }

    legend {
      font-weight: bold;
    }

    label {
      margin-right: 10px;
    }

    input[type="radio"] {
      margin-right: 5px;
    }

    input[type="submit"] {
      margin-top: 10px;
    }
  </style>
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
<?php

$pais=$_POST["pais"];
$cidade=$_POST["cidade"];
$goandcome=$_POST["goandcome"];
$departure=$_POST["departure"];
$return=$_POST["return"];
$origen=$_POST["origen"];
$length = "300px"; // Define the desired length
$width = "200px"; // Define the desired width
$basePrice = 100.00;
// Calculate the total price based on the origin and destination countries
$totalPrice = $basePrice + calculateCountryToCountryPrice($origen, $pais, $cidade);
// Output the total price

// Function to calculate country-to-country pricing
function calculateCountryToCountryPrice($origen, $pais, $cidade) {
    // You can implement your own logic here to calculate the price based on the origin and destination countries
    // This is just a dummy example, you need to replace it with your own pricing logic
    $countryToCountryPrice = 100.00;

 if ($origen == 'Angola' && $pais == 'South Africa' && ($cidade == 'Durban' || $cidade == 'Johannesburg')) {
   $countryToCountryPrice = 15.00;
} else if ($origen == 'Angola' && $pais == 'Namibia' && $cidade == 'Windhoek') {
  $countryToCountryPrice = 20.00;
} else if ($origen == 'Angola' && $pais == 'Quenia' && $cidade == 'Nairobi') {
  $countryToCountryPrice = 25.00;
} else if ($origen == 'Angola' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
  $countryToCountryPrice = 25.00;
} else if ($origen == 'Angola' && $pais == 'Tunisia' && ($cidade == 'Tunes' || $cidade == 'Monaster')) {
   $countryToCountryPrice = 25.00;
} else if ($origen == 'Angola' && $pais == 'Germany' && ($cidade == 'Frankfrut' || $cidade == 'Bonn')) {
    $countryToCountryPrice = 15.00;
} else if ($origen == 'Angola' && $pais == 'Belgium' && ($cidade == 'Bruges' || $cidade == 'Antuerpia')) {
    $countryToCountryPrice = 20.00;
} else if ($origen == 'Angola' && $pais == 'France' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} else if ($origen == 'Angola' && $pais == 'Spain' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} else if ($origen == 'Angola' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} else if ($origen == 'Angola' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} else if ($origen == 'Angola' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Hongqiao')) {
    $countryToCountryPrice = 15.00;
} else if ($origen == 'Angola' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 20.00;
} else if ($origen == 'Angola' && $pais == 'Nepal' && $cidade == 'Catmandu') {
    $countryToCountryPrice = 25.00;
} else if ($origen == 'Angola' && $pais == 'India' && ($cidade == 'Deli' || $cidade == 'Bombaim')) {
    $countryToCountryPrice = 25.00;
} else if ($origen == 'Angola' && $pais == 'Japan' && ($cidade == 'Tokya narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 25.00;
} else if ($origen == 'Angola' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 15.00;
} else if ($origen == 'Angola' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 20.00;
} else if ($origen == 'Angola' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} else if ($origen == 'Angola' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melboune')) {
    $countryToCountryPrice = 25.00;
} else if ($origen == 'Angola' && $pais == 'New Caledonia' && $cidade == 'Naoumea') {
    $countryToCountryPrice = 25.00;
} else if ($origen == 'Angola' && $pais == 'Tonga' && $cidade == 'Fau anotou') {
    $countryToCountryPrice = 25.00;
};
  if ($origen == 'South Africa' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'South Africa' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'South Africa' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Africa' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Africa' && $pais == 'Tunisia' && ($cidade == 'Tunes' || $cidade == 'Monaster')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Africa' && $pais == 'Germany' && ($cidade == 'Frankfrut' || $cidade == 'Bonn')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'South Africa' && $pais == 'Belgium' && ($cidade == 'Bruges' || $cidade == 'Antuerpia')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'South Africa' && $pais == 'France' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Africa' && $pais == 'Spain' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Africa' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Africa' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Africa' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Hongqiao')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'South Africa' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'South Africa' && $pais == 'Nepal' && $cidade == 'Catmandu') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Africa' && $pais == 'India' && ($cidade == 'Deli' || $cidade == 'Bombaim')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Africa' && $pais == 'Japan' && ($cidade == 'Tokya narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Africa' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'South Africa' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'South Africa' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Africa' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Africa' && $pais == 'New Caledonia' && $cidade == 'Noumea') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Africa' && $pais == 'Tonga' && $cidade == 'Fau anotou') {
    $countryToCountryPrice = 25.00;
};


       if ($origen == 'Namibia' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Namibia' && $pais == 'South Africa' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Namibia' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Namibia' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Namibia' && $pais == 'Tunisia' && ($cidade == 'Tunes' || $cidade == 'Monaster')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Namibia' && $pais == 'Germany' && ($cidade == 'Frankfrut' || $cidade == 'Bonn')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Namibia' && $pais == 'Belgium' && ($cidade == 'Bruges' || $cidade == 'Antuerpia')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Namibia' && $pais == 'France' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Namibia' && $pais == 'Spain' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Namibia' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Namibia' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Namibia' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Hongqiao')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Namibia' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Namibia' && $pais == 'Nepal' && $cidade == 'Catmandu') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Namibia' && $pais == 'India' && ($cidade == 'Deli' || $cidade == 'Bombaim')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Namibia' && $pais == 'Japan' && ($cidade == 'Tokya narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Namibia' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Namibia' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Namibia' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Namibia' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Namibia' && $pais == 'New Caledonia' && $cidade == 'Noumea') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Namibia' && $pais == 'Tonga' && $cidade == 'Fau anotou') {
    $countryToCountryPrice = 25.00;
};

        
   if ($origen == 'Quenia' && $pais == 'Angola' && $cidade == 'Luanda') {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Quenia' && $pais == 'South Africa' && $cidade == 'Durban') {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Quenia' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Quenia' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Quenia' && $pais == 'Tunisia' && ($cidade == 'Tunes' || $cidade == 'Monaster')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Quenia' && $pais == 'Germany' && ($cidade == 'Frankfrut' || $cidade == 'Bonn')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Quenia' && $pais == 'Belgium' && ($cidade == 'Bruges' || $cidade == 'Antuerpia')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Quenia' && $pais == 'France' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Quenia' && $pais == 'Spain' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Quenia' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Quenia' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Quenia' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Hongqiao')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Quenia' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Quenia' && $pais == 'Nepal' && $cidade == 'Catmandu') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Quenia' && $pais == 'India' && ($cidade == 'Deli' || $cidade == 'Bombaim')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Quenia' && $pais == 'Japan' && ($cidade == 'Tokya narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Quenia' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Quenia' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Quenia' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Quenia' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Quenia' && $pais == 'New Caledonia' && $cidade == 'Noumea') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Quenia' && $pais == 'Tonga' && $cidade == 'Fau anotou') {
    $countryToCountryPrice = 25.00;
}

       if ($origen == 'Nigeria' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Nigeria' && $pais == 'South Africa' && ($cidade == 'Durban' || $cidade == 'Johannesburg')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Nigeria' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Nigeria' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nigeria' && $pais == 'Tunisia' && ($cidade == 'Tunes' || $cidade == 'Monaster')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nigeria' && $pais == 'Germany' && ($cidade == 'Frankfurt' || $cidade == 'Bonn')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Nigeria' && $pais == 'Belgium' && ($cidade == 'Bruges' || $cidade == 'Antwerp')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Nigeria' && $pais == 'France' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nigeria' && $pais == 'Spain' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nigeria' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nigeria' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nigeria' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Hongqiao')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Nigeria' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Nigeria' && $pais == 'Nepal' && $cidade == 'Kathmandu') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nigeria' && $pais == 'India' && ($cidade == 'Delhi' || $cidade == 'Mumbai')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nigeria' && $pais == 'Japan' && ($cidade == 'Tokyo Narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nigeria' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Nigeria' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Nigeria' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nigeria' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nigeria' && $pais == 'New Caledonia' && $cidade == 'Noumea') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nigeria' && $pais == 'Tonga' && $cidade == 'Faua') {
    $countryToCountryPrice = 25.00;
}
if ($origen == 'Germany' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Germany' && $pais == 'South Africa' && ($cidade == 'Durban' || $cidade == 'Johannesburg')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Germany' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Germany' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Germany' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Germany' && $pais == 'Tunisia' && ($cidade == 'Tunis' || $cidade == 'Monastir')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Germany' && $pais == 'Belgium' && ($cidade == 'Bruges' || $cidade == 'Antwerp')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Germany' && $pais == 'France' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Germany' && $pais == 'Spain' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Germany' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Germany' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Germany' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Hongqiao')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Germany' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Germany' && $pais == 'Nepal' && $cidade == 'Kathmandu') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Germany' && $pais == 'India' && ($cidade == 'Delhi' || $cidade == 'Mumbai')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Germany' && $pais == 'Japan' && ($cidade == 'Tokyo Narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Germany' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Germany' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Germany' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Germany' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Germany' && $pais == 'New Caledonia' && $cidade == 'Noumea') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Germany' && $pais == 'Tonga' && $cidade == 'Faua') {
    $countryToCountryPrice = 25.00;
}

      if ($origen == 'Belgium' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Belgium' && $pais == 'South Africa' && ($cidade == 'Durban' || $cidade == 'Johannesburg')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Belgium' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Belgium' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Belgium' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Belgium' && $pais == 'Tunisia' && ($cidade == 'Tunis' || $cidade == 'Monastir')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Belgium' && $pais == 'Germany' && ($cidade == 'Frankfurt' || $cidade == 'Bonn')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Belgium' && $pais == 'France' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Belgium' && $pais == 'Spain' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Belgium' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Belgium' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Belgium' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Hongqiao')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Belgium' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Belgium' && $pais == 'Nepal' && $cidade == 'Kathmandu') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Belgium' && $pais == 'India' && ($cidade == 'Delhi' || $cidade == 'Mumbai')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Belgium' && $pais == 'Japan' && ($cidade == 'Tokyo Narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Belgium' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Belgium' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Belgium' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Belgium' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Belgium' && $pais == 'New Caledonia' && $cidade == 'Noumea') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Belgium' && $pais == 'Tonga' && $cidade == 'Faua') {
    $countryToCountryPrice = 25.00;
}

       if ($origen == 'France' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'France' && $pais == 'South Africa' && ($cidade == 'Durban' || $cidade == 'Johannesburg')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'France' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'France' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'France' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'France' && $pais == 'Tunisia' && ($cidade == 'Tunis' || $cidade == 'Monastir')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'France' && $pais == 'Germany' && ($cidade == 'Frankfurt' || $cidade == 'Bonn')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'France' && $pais == 'Belgium' && ($cidade == 'Bruges' || $cidade == 'Antwerp')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'France' && $pais == 'Spain' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'France' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'France' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'France' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Hongqiao')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'France' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'France' && $pais == 'Nepal' && $cidade == 'Kathmandu') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'France' && $pais == 'India' && ($cidade == 'Delhi' || $cidade == 'Mumbai')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'France' && $pais == 'Japan' && ($cidade == 'Tokyo Narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'France' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'France' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'France' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'France' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'France' && $pais == 'New Caledonia' && $cidade == 'Noumea') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'France' && $pais == 'Tonga' && $cidade == 'Faua') {
    $countryToCountryPrice = 25.00;
}
if ($origen == 'Spain' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Spain' && $pais == 'South Africa' && ($cidade == 'Johannesburg' || $cidade == 'Durban')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Spain' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Spain' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Spain' && $pais == 'Tunisia' && ($cidade == 'Tunes' || $cidade == 'Monaster')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Spain' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Spain' && $pais == 'Germany' && ($cidade == 'Bruges' || $cidade == 'Antuerpia')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Spain' && $pais == 'Belgium' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Spain' && $pais == 'France' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Spain' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Spain' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Spain' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Hongqiao')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Spain' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Spain' && $pais == 'Nepal' && $cidade == 'Catmandu') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Spain' && $pais == 'India' && ($cidade == 'Deli' || $cidade == 'Bombaim')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Spain' && $pais == 'Japan' && ($cidade == 'Tokya narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Spain' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Spain' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Spain' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Spain' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Spain' && $pais == 'New Caledonia' && $cidade == 'Noumea') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Spain' && $pais == 'Tonga' && $cidade == 'Faua') {
    $countryToCountryPrice = 25.00;
}

        if ($origen == 'Denmark' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Denmark' && $pais == 'South Africa' && ($cidade == 'Johannesburg' || $cidade == 'Durban')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Denmark' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Denmark' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Denmark' && $pais == 'Tunisia' && ($cidade == 'Tunes' || $cidade == 'Monaster')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Denmark' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Denmark' && $pais == 'Germany' && ($cidade == 'Bruges' || $cidade == 'Antuerpia')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Denmark' && $pais == 'Belgium' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Denmark' && $pais == 'France' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Denmark' && $pais == 'Spain' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Denmark' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Denmark' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Hongqiao')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Denmark' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Denmark' && $pais == 'Nepal' && $cidade == 'Catmandu') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Denmark' && $pais == 'India' && ($cidade == 'Deli' || $cidade == 'Bombaim')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Denmark' && $pais == 'Japan' && ($cidade == 'Tokya narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Denmark' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Denmark' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Denmark' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Denmark' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Denmark' && $pais == 'New Caledonia' && $cidade == 'Noumea') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Denmark' && $pais == 'Tonga' && $cidade == 'Faua') {
    $countryToCountryPrice = 25.00;
}
if ($origen == 'Croatia' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Croatia' && $pais == 'South Africa' && ($cidade == 'Johannesburg' || $cidade == 'Durban')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Croatia' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Croatia' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Croatia' && $pais == 'Tunisia' && ($cidade == 'Tunes' || $cidade == 'Monaster')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Croatia' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Croatia' && $pais == 'Germany' && ($cidade == 'Bruges' || $cidade == 'Antuerpia')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Croatia' && $pais == 'Belgium' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Croatia' && $pais == 'France' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Croatia' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Croatia' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Hongqiao')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Croatia' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Croatia' && $pais == 'Nepal' && $cidade == 'Catmandu') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Croatia' && $pais == 'India' && ($cidade == 'Deli' || $cidade == 'Bombaim')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Croatia' && $pais == 'Japan' && ($cidade == 'Tokya narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Croatia' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Croatia' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Croatia' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Croatia' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Croatia' && $pais == 'New Caledonia' && $cidade == 'Naoumea') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Croatia' && $pais == 'Tonga' && $cidade == 'Fau anotou') {
    $countryToCountryPrice = 25.00;
}

         if ($origen == 'India' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'India' && $pais == 'South Africa' && ($cidade == 'Johannesburg' || $cidade == 'Durban')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'India' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'India' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'India' && $pais == 'Tunisia' && ($cidade == 'Tunes' || $cidade == 'Monaster')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'India' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'India' && $pais == 'Germany' && ($cidade == 'Bruges' || $cidade == 'Antuerpia')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'India' && $pais == 'Belgium' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'India' && $pais == 'France' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'India' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'India' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Hongqiao')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'India' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'India' && $pais == 'Nepal' && $cidade == 'Catmandu') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'India' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'India' && $pais == 'Japan' && ($cidade == 'Tokya narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'India' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'India' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'India' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'India' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'India' && $pais == 'New Caledonia' && $cidade == 'Naoumea') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'India' && $pais == 'Tonga' && $cidade == 'Fau anotou') {
    $countryToCountryPrice = 25.00;
}

      if ($origen == 'China' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'China' && $pais == 'South Africa' && ($cidade == 'Johannesburg' || $cidade == 'Durban')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'China' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'China' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'China' && $pais == 'Tunisia' && ($cidade == 'Tunes' || $cidade == 'Monaster')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'China' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'China' && $pais == 'Germany' && ($cidade == 'Bruges' || $cidade == 'Antuerpia')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'China' && $pais == 'Belgium' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'China' && $pais == 'France' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'China' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'China' && $pais == 'India' && ($cidade == 'Deli' || $cidade == 'Bombaim')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'China' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'China' && $pais == 'Nepal' && $cidade == 'Catmandu') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'China' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'China' && $pais == 'Japan' && ($cidade == 'Tokya narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'China' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'China' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'China' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'China' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'China' && $pais == 'New Caledonia' && $cidade == 'Naoumea') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'China' && $pais == 'Tonga' && $cidade == 'Fau anotou') {
    $countryToCountryPrice = 25.00;
}

       if ($origen == 'Nepal' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Nepal' && $pais == 'South Africa' && ($cidade == 'Johannesburg' || $cidade == 'Durban')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Nepal' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nepal' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nepal' && $pais == 'Tunisia' && ($cidade == 'Tunes' || $cidade == 'Monaster')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nepal' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Nepal' && $pais == 'Germany' && ($cidade == 'Bruges' || $cidade == 'Antuerpia')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Nepal' && $pais == 'Belgium' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nepal' && $pais == 'France' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nepal' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nepal' && $pais == 'India' && ($cidade == 'Deli' || $cidade == 'Bombaim')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Nepal' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Nepal' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Xangai Hongqiao')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nepal' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nepal' && $pais == 'Japan' && ($cidade == 'Tokya narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nepal' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Nepal' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Nepal' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nepal' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nepal' && $pais == 'New Caledonia' && $cidade == 'Naoumea') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Nepal' && $pais == 'Tonga' && $cidade == 'Fau anotou') {
    $countryToCountryPrice = 25.00;
}

      if ($origen == 'Pakistan' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Pakistan' && $pais == 'South Africa' && ($cidade == 'Johannesburg' || $cidade == 'Durban')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Pakistan' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Pakistan' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Pakistan' && $pais == 'Tunisia' && ($cidade == 'Tunes' || $cidade == 'Monaster')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Pakistan' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Pakistan' && $pais == 'Germany' && ($cidade == 'Bruges' || $cidade == 'Antuerpia')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Pakistan' && $pais == 'Belgium' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Pakistan' && $pais == 'France' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Pakistan' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Pakistan' && $pais == 'India' && ($cidade == 'Deli' || $cidade == 'Bombaim')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Pakistan' && $pais == 'Nepal' && $cidade == 'Catmandu') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Pakistan' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Xangai Hongqiao')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Pakistan' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Pakistan' && $pais == 'Japan' && ($cidade == 'Tokya narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Pakistan' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Pakistan' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Pakistan' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Pakistan' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Pakistan' && $pais == 'New Caledonia' && $cidade == 'Naoumea') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Pakistan' && $pais == 'Tonga' && $cidade == 'Fau anotou') {
    $countryToCountryPrice = 25.00;
}
if ($origen == 'Japan' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Japan' && $pais == 'South Africa' && ($cidade == 'Johannesburg' || $cidade == 'Durban')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Japan' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Japan' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Japan' && $pais == 'Tunisia' && ($cidade == 'Tunes' || $cidade == 'Monaster')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Japan' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Japan' && $pais == 'Germany' && ($cidade == 'Bruges' || $cidade == 'Antuerpia')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Japan' && $pais == 'Belgium' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Japan' && $pais == 'France' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Japan' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Japan' && $pais == 'India' && ($cidade == 'Deli' || $cidade == 'Bombaim')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Japan' && $pais == 'Nepal' && $cidade == 'Catmandu') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Japan' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Xangai Hongqiao')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Japan' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Japan' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Japan' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Japan' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Japan' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Japan' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Japan' && $pais == 'New Caledonia' && $cidade == 'Naoumea') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Japan' && $pais == 'Tonga' && $cidade == 'Fau anotou') {
    $countryToCountryPrice = 25.00;
}
if ($origen == 'South Korea' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'South Korea' && $pais == 'South Africa' && ($cidade == 'Johannesburg' || $cidade == 'Durban')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'South Korea' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Korea' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Korea' && $pais == 'Tunisia' && ($cidade == 'Tunes' || $cidade == 'Monaster')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Korea' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'South Korea' && $pais == 'Germany' && ($cidade == 'Bruges' || $cidade == 'Antuerpia')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'South Korea' && $pais == 'Belgium' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Korea' && $pais == 'France' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Korea' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Korea' && $pais == 'India' && ($cidade == 'Deli' || $cidade == 'Bombaim')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'South Korea' && $pais == 'Nepal' && $cidade == 'Catmandu') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'South Korea' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Xangai Hongqiao')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Korea' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Korea' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Korea' && $pais == 'Japan' && ($cidade == 'Tokyo narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'South Korea' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'South Korea' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Korea' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Korea' && $pais == 'New Caledonia' && $cidade == 'Naoumea') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'South Korea' && $pais == 'Tonga' && $cidade == 'Fau anotou') {
    $countryToCountryPrice = 25.00;
}
if ($origen == 'New Zealand' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'New Zealand' && $pais == 'South Africa' && ($cidade == 'Johannesburg' || $cidade == 'Durban')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'New Zealand' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Zealand' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Zealand' && $pais == 'Tunisia' && ($cidade == 'Tunes' || $cidade == 'Monaster')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Zealand' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'New Zealand' && $pais == 'Germany' && ($cidade == 'Bruges' || $cidade == 'Antuerpia')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'New Zealand' && $pais == 'Belgium' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Zealand' && $pais == 'France' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Zealand' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Zealand' && $pais == 'India' && ($cidade == 'Deli' || $cidade == 'Bombaim')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'New Zealand' && $pais == 'Nepal' && $cidade == 'Catmandu') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'New Zealand' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Xangai Hongqiao')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Zealand' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Zealand' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Zealand' && $pais == 'Japan' && ($cidade == 'Tokyo narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'New Zealand' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'New Zealand' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Zealand' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Zealand' && $pais == 'New Caledonia' && $cidade == 'Naoumea') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Zealand' && $pais == 'Tonga' && $cidade == 'Fau anotou') {
    $countryToCountryPrice = 25.00;
}

       if ($origen == 'Australia' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Australia' && $pais == 'South Africa' && ($cidade == 'Johannesburg' || $cidade == 'Durban')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Australia' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Australia' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Australia' && $pais == 'Tunisia' && ($cidade == 'Tunes' || $cidade == 'Monaster')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Australia' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Australia' && $pais == 'Germany' && ($cidade == 'Bruges' || $cidade == 'Antuerpia')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Australia' && $pais == 'Belgium' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Australia' && $pais == 'France' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Australia' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Australia' && $pais == 'India' && ($cidade == 'Deli' || $cidade == 'Bombaim')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Australia' && $pais == 'Nepal' && $cidade == 'Catmandu') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Australia' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Xangai Hongqiao')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Australia' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Australia' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Australia' && $pais == 'Japan' && ($cidade == 'Tokyo narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Australia' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Australia' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Australia' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Australia' && $pais == 'New Caledonia' && $cidade == 'Naoumea') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Australia' && $pais == 'Tonga' && $cidade == 'Fau anotou') {
    $countryToCountryPrice = 25.00;
}

       if ($origen == 'Fiji' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Fiji' && $pais == 'South Africa' && ($cidade == 'Johannesburg' || $cidade == 'Durban')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Fiji' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Fiji' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Fiji' && $pais == 'Tunisia' && ($cidade == 'Tunes' || $cidade == 'Monaster')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Fiji' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Fiji' && $pais == 'Germany' && ($cidade == 'Bruges' || $cidade == 'Antuerpia')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Fiji' && $pais == 'Belgium' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Fiji' && $pais == 'France' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Fiji' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Fiji' && $pais == 'India' && ($cidade == 'Deli' || $cidade == 'Bombaim')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Fiji' && $pais == 'Nepal' && $cidade == 'Catmandu') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Fiji' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Xangai Hongqiao')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Fiji' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Fiji' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Fiji' && $pais == 'Japan' && ($cidade == 'Tokyo narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Fiji' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Fiji' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Fiji' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Fiji' && $pais == 'New Caledonia' && $cidade == 'Naoumea') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Fiji' && $pais == 'Tonga' && $cidade == 'Fau anotou') {
    $countryToCountryPrice = 25.00;
}

        if ($origen == 'New Caledonia' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'New Caledonia' && $pais == 'South Africa' && ($cidade == 'Johannesburg' || $cidade == 'Durban')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'New Caledonia' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Caledonia' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Caledonia' && $pais == 'Tunisia' && ($cidade == 'Tunes' || $cidade == 'Monaster')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Caledonia' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'New Caledonia' && $pais == 'Germany' && ($cidade == 'Bruges' || $cidade == 'Antuerpia')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'New Caledonia' && $pais == 'Belgium' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Caledonia' && $pais == 'France' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Caledonia' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Caledonia' && $pais == 'India' && ($cidade == 'Deli' || $cidade == 'Bombaim')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'New Caledonia' && $pais == 'Nepal' && $cidade == 'Catmandu') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'New Caledonia' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Xangai Hongqiao')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Caledonia' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Caledonia' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Caledonia' && $pais == 'Japan' && ($cidade == 'Tokyo narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'New Caledonia' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'New Caledonia' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Caledonia' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Caledonia' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'New Caledonia' && $pais == 'Tonga' && $cidade == 'Fau anotou') {
    $countryToCountryPrice = 25.00;
}
if ($origen == 'Tonga' && $pais == 'Angola' && ($cidade == 'Luanda' || $cidade == 'Benguela')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Tonga' && $pais == 'South Africa' && ($cidade == 'Johannesburg' || $cidade == 'Durban')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Tonga' && $pais == 'Namibia' && $cidade == 'Windhoek') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Tonga' && $pais == 'Quenia' && $cidade == 'Nairobi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Tonga' && $pais == 'Tunisia' && ($cidade == 'Tunes' || $cidade == 'Monaster')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Tonga' && $pais == 'Nigeria' && ($cidade == 'Lagos' || $cidade == 'Abuja')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Tonga' && $pais == 'Germany' && ($cidade == 'Bruges' || $cidade == 'Antuerpia')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Tonga' && $pais == 'Belgium' && $cidade == 'Orly') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Tonga' && $pais == 'France' && ($cidade == 'Madrid' || $cidade == 'Barcelona')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Tonga' && $pais == 'Denmark' && ($cidade == 'Billund' || $cidade == 'Odense')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Tonga' && $pais == 'India' && ($cidade == 'Deli' || $cidade == 'Bombaim')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Tonga' && $pais == 'Nepal' && $cidade == 'Catmandu') {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Tonga' && $pais == 'China' && ($cidade == 'Hong Kong' || $cidade == 'Xangai Hongqiao')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Tonga' && $pais == 'Croatia' && ($cidade == 'Rijeka' || $cidade == 'Osijek')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Tonga' && $pais == 'Pakistan' && $cidade == 'Karachi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Tonga' && $pais == 'Japan' && ($cidade == 'Tokyo narita' || $cidade == 'Tokyo Haneda')) {
    $countryToCountryPrice = 15.00;
} elseif ($origen == 'Tonga' && $pais == 'South Korea' && ($cidade == 'Busan Gimhae' || $cidade == 'Jeju')) {
    $countryToCountryPrice = 20.00;
} elseif ($origen == 'Tonga' && $pais == 'Australia' && ($cidade == 'Sydney' || $cidade == 'Melbourne')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Tonga' && $pais == 'New Zealand' && ($cidade == 'Auckland' || $cidade == 'Queenstown')) {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Tonga' && $pais == 'Fiji' && $cidade == 'Nadi') {
    $countryToCountryPrice = 25.00;
} elseif ($origen == 'Tonga' && $pais == 'New Caledonia' && $cidade == 'Fau anotou') {
    $countryToCountryPrice = 25.00;
}
   // Add more conditions for other country combinations as needed
    return $countryToCountryPrice;
    
}

echo '<fieldset style="background-color: FAFAFA; margin-right: 90px;">';
echo "Dados Recebidos: <br>";
echo "Departure: <br>" .$departure. "<br>";
echo "return: <br>" .$return. "<br>";
echo "Nome do Pais:" .$pais. "<br>";
echo "Nome da cidade:" .$cidade. "<br>";
echo "From:" .$origen. "<br>";
echo "Total price: €" . number_format($totalPrice, 2) . "<br>";
echo '<button type="button" onclick="window.location.href = \'passenger.html\'" style=width: '.$width.'; height: '.$length.';>
    Reservar já</button>';
echo '</fieldset>'; "<br>";



$liga=mysqli_connect('localhost', 'root', '');
if(!$liga)
{ echo "<p> Falha na ligação á base de dados. </p>";
  exit;
};
$escolhebd=mysqli_select_db($liga, 'agencia');
if(!$escolhebd)
{
  echo "<br> Erro ao aceder a agencia";
  exit;
};
$insere = "Insert into destinos values
('".$origen."', '".$pais."', '".$cidade."', '".$departure."', '".$return."')";

$result = mysqli_query($liga, $insere);
if ($result == 1) {
echo '<p> Dados inseridos </p>';
header("Location: passenger.html");
}
else {
echo '<p> Dados não inseridos </p>';
}

$consulta = "select * from destinos";
$linhas = mysqli_query($liga, $consulta);

$nregistos = mysqli_num_rows($linhas);
echo '<p> Nº de registos encontrados:' .$nregistos. '</p>';

?>
<a href="Agencia2.html">Voltar Inicio</a></p></p>

</body>
</html>
