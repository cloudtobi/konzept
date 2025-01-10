<!DOCTYPE html>
<html lang="de">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Anton&family=Permanent+Marker&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Shadows+Into+Light&display=swap" rel="stylesheet">
      <title>High Rollin Hustlers | MintV</title>
      <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/fontawesome.css">
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/owl.css">
      <link rel="stylesheet" href="assets/css/animate.css">
      <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
      <link rel="stylesheet" href="assets/css/cardclip.css">
      <link rel="stylesheet" href="assets/css/memberFlip.css">

   </head>
   <?php

   include "header.php";

      // Definiere eine Liste von erlaubten Seiten und ihren zugehörigen Dateien
      $allowed_pages = [
         'home' => 'home.php',
         'story' => 'story.php',
         'base' => 'base.php',
         'member' => 'member.php',
         'ranks' => 'ranks.php',
         'equipment' => 'equipment.php'
         // Weitere Seiten hier hinzufügen
      ];

      // Hole die Seite aus dem URL-Parameter (Standard ist "home")
      $page = $_GET['page'] ?? 'home';

      // Prüfe, ob die angeforderte Seite in der Liste der erlaubten Seiten enthalten ist
      if (array_key_exists($page, $allowed_pages)) {
         $file_to_include = $allowed_pages[$page];
      } else {
         // Falls die Seite nicht erlaubt ist, zeige eine Fehlerseite an
         $file_to_include = 'includes/404.php'; // Stelle sicher, dass du eine 404-Seite hast
      }

      // Binde die entsprechende Datei ein
      if (file_exists($file_to_include)) {
         include $file_to_include;
      } else {
         echo "Fehler: Datei $file_to_include existiert nicht.";
      }

?>


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/counter.js"></script>
<script src="assets/js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>   


</html>