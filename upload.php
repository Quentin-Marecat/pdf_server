<?php
$targetDirectory = "uploads/"; // Répertoire où les fichiers PDF seront stockés
$targetFile = $targetDirectory . basename($_FILES["pdf"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Vérifie si le fichier est un fichier PDF
if ($fileType !== "pdf") {
