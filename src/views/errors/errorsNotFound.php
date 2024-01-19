<?php
$title = 'Olana teknika';
ob_start();
echo '<main class="h-100">';
echo '<div class="container py-5 text-center">';
echo '<h1 class="text-danger fw-bold">Misy olana nitranga.</h1>';
echo '<a href="/">Tsy misy ato amin\'ity tranokala ity io zavatra karohinao io. Miverena any amin\'ny pejy fandraisana.</a>';
echo '</div>';
echo '</main>';
$pageContent = ob_get_clean();

require_once "errorsTemplates.php";