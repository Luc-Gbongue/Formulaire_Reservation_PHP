<?php 

// Verifie si le formulaire est envoyé
if($_SERVER["REQUEST_METHOD"] === "POST"){

// Recupère les données envoyées
$nom = $_POST["nom"];
$email = $_POST["email"];
$service = $_POST["service"];
$date = $_POST["date"];
$heure = $_POST["heure"];
$contact = $_POST["contact"];
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESERVATION_PHP</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <h1>Reservation de service</h1>

        <form action="#" method="POST">
            <!-- Nom -->
             <input type="text" name="nom" placeholder="Entrez votre nom complet" required>
            
            <!-- Email -->
             <input type="email" name="email" placeholder="Entrez votre email" required>

             <!-- Services -->
             <select name="service" id="service" required>
                <option value="">Choisir un service</option>
                <option value="ReservationHotel">Reservation hôtel</option>
                <option value="ReservationRestaurant">Reservation restaurant</option>
                <option value="LocationVoiture">Location voiture</option>
                <option value="SalleConference">Salle évènement</option>
             </select>
            <!-- Date de rendez-vous -->
             <input type="date" name="date" required>
            
            
            <!-- Heure de rendez-vous -->
             <input type="time" name="heure" required>
            
            <!-- Contact client-->
             <input type="tel" name="contact" placeholder="Entrez votre numéro de téléphone" required>
            <br>
            <!-- Bouton envoyer -->
             <button type="submit">Reserver</button>

        </form>
    </div>
    
</body>
</html>