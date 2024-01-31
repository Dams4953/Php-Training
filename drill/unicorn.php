<?php

if (isset($_POST["creature"])) {

    $creature = $_POST["creature"];
    
    $urlChat = "https://media.giphy.com/media/SrAO8XBZ7mPSWzpERP/giphy.gif";
    $urlHumain = "https://media.giphy.com/media/3dkYqrbTOi3bGIVDG9/giphy.gif";
    $urlLicorne = "https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExY3ZsM3VmdW1hYmxmMGY4eGU3YTk3ZG1hZGRxeDZwc2JiOGpmZnNwaiZlcD12MV9naWZzX3NlYXJjaCZjdD1n/j0kQJxo5mzGYb4EvWK/giphy.gif";


    $gif = ($creature === "chat") ?   $urlChat :
        (($creature === "humain") ?  $urlHumain :
        (($creature === "licorne") ? $urlLicorne : ""));

 
echo '<img src="' . $gif . '" alt="' . $creature . '">';
   
}
?>

<form method="post" action="">
    <label for="question">Es-tu un humain, un chat ou une licorne ?</label>

    <label for="humain">Humain</label>
    <input type="radio" name="creature" value="humain">

    <label for="chat">Chat</label>
    <input type="radio" name="creature" value="chat">

    <label for="licorne">Licorne</label>
    <input type="radio" name="creature" value="licorne">

    <input type="submit" name="submit" value="Valider">
</form>
