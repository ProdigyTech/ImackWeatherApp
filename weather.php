<?php


Echo "<h1>MackWeather</h1>";


function displayWeather($data){
  print_r($data);

echo "Weather Status ". ($data['weather'][0]['main']);


    echo "<div id=WeatherData>";
    echo "<h2>Viewing Weather for " . $data['name'] . " , " . $data['sys']['country'] . " </h2>";
    echo "<br />";
    echo "<h3>Current Conditions</h3>";

}
function parseWeather($weatherDataJson)
{
    $weatherArray = json_decode($weatherDataJson, true);
    displayWeather(($weatherArray));
}
function getWeather($zipcode){
    $url = "http://api.openweathermap.org/data/2.5/weather?zip=$zipcode&units=imperial&us&appid=59c7d910e77039b8be5027ebf9b7f621";
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url
    ));
    $result = curl_exec($curl);
    curl_close($curl);
    parseWeather($result);
}



if (isset($_POST['zipcode'])){
    $zipcode = $_POST['zipcode'];
(getWeather($zipcode));
}
?>

<DOCTYPE !HTML>
<HTML>
<head>
    <title>Mack Weather</title>
</head>
<body>
    <div id="weatherForm">
    <form method="POST">
        Enter Zipcode: <input type="text" name="zipcode" placeholder ="zipcode">
        <input type="submit" name="submit">
    </form>
    </div>
</body>
</HTML>
