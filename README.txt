Après avoir récupéré les fichiers, vous pouvez voir que dans le fichier connectDB il y a un require de "params.php".
Il vous faut donc créer un fichier "params.php", avec dedans les identifiants de votre base de données.
Comme ci-dessous :

<?php
$servername = "name_server";
$dbname = "name_db";
$dbuser = "name_user";
$dbpassword = "password";
?>