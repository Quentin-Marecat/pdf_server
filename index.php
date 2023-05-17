<?php
$target_dir = "";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
$filename = basename($_FILES["fileToUpload"]["name"]);
echo '<a href="' . $url_pdf . $filename'">Cliquez ici pour télécharger le PDF</a>';
?>

