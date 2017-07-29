<?php
$textHolder= "Welcome to Isaac's Web Page";

if (isset($_POST["submit"])){

 $textHolder= $_POST["Infotainment"];
}


echo  "<h1>$textHolder</h1>";


?>
<!doctype html>

<html>
<head>

    <title>The SupaFast HTML5 </title>

</head>
<body>
<form method="POST">



 <input type="submit" name="submit" value="Bin">
    <input type="submit" name="Submit" value="trash">
    Enter here <input type="text" name="Infotainment">
</form>





</body>
</html>
