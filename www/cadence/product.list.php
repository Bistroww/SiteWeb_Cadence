<?php
session_start();
include 'config.php';
include 'app/model/database.php';


$db = getdb();
$bieres = GetBiere($db);


ob_start();
include 'app/view/product.list.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';
