<?php
// Chemin du script Python
$chemin_script ='/home/qmarecat/Desktop/others/GPT/pdf_server/deploy.py';

// Exécution du script Python
$commande = 'python3 ' . $chemin_script;
$output = shell_exec($commande);

// Affichage du résultat
echo $output;
?>
