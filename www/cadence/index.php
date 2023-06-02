<?php

include 'config.php';
include 'app\model\database.php';




ob_start();
include 'app\view\cadence.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';

// Affichier les erreurs PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


