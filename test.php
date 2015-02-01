<?php
require_once("includes/includes.php");
$a1= homecontents::getAllHomeContents();
var_dump($a1[0]->title);