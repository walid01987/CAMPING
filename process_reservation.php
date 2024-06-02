<?php
// Vérifier si des données ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $date_arrivee = $_POST["date_arrivee"];
    $date_depart = $_POST["date_depart"];
    $type_chambre = $_POST["type_chambre"];
    $message = $_POST["message"];
    
    // Construire le corps de l'e-mail
    $to = "walid1gaoud@gmail.com"; // Adresse e-mail de réception
    $subject = "Nouvelle réservation de chambre";
    $body = "Nom: $nom\n";
    $body .= "Adresse e-mail: $email\n";
    $body .= "Date d'arrivée: $date_arrivee\n";
    $body .= "Date de départ: $date_depart\n";
    $body .= "Type de chambre: $type_chambre\n";
    $body .= "Message: $message\n";
    
    // Envoyer l'e-mail
    if (mail($to, $subject, $body)) {
        echo "Votre réservation a été soumise avec succès!";
    } else {
        echo "Une erreur s'est produite lors de la soumission de votre réservation. Veuillez réessayer.";
    }
} else {
    // Redirection si le formulaire n'a pas été soumis
    header("Location: index.html");
    exit();
}
?>
