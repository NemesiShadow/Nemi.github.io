<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["topic"])) {
    $topic = $_POST["topic"];
    
    // Fichier où les résultats seront stockés
    $file = "results.txt";
    
    // Lire les résultats existants
    $results = [];
    if (file_exists($file)) {
        $results = json_decode(file_get_contents($file), true);
    }
    
    // Ajouter le vote
    if (!isset($results[$topic])) {
        $results[$topic] = 0;
    }
    $results[$topic]++;
    
    // Sauvegarder les résultats mis à jour
    file_put_contents($file, json_encode($results));
    
    echo "Merci pour votre vote !";
} else {
    echo "Erreur lors de l'envoi du vote.";
}
?>
