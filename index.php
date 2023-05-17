<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['pdf_file'])) {
    $file = $_FILES['pdf_file'];
    
    // Vérifier si le fichier a été téléchargé sans erreur
    if ($file['error'] === UPLOAD_ERR_OK) {
        // Définir le chemin de destination du fichier
        $destination = './' . $file['name'];
        
        // Déplacer le fichier vers le dossier de destination
        move_uploaded_file($file['tmp_name'], $destination);
        
        // Récupérer l'URL du fichier
        $url_pdf = 'https://pdf-drag-drop.herokuapp.com/uploads' . $file['name'];
        
        // Afficher l'URL du fichier
        echo 'Lien vers le PDF : <a href="' . $url_pdf . '">' . $url_pdf . '</a>';
    } else {
        echo 'Une erreur s\'est produite lors du téléchargement du fichier.';
    }
}
?>