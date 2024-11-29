<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Ponponumi\WebpageTool\Title;

$page = isset($page) ? $page : "";
$title = new Title("<テストサイト>",$page);
$title->markOffChange(" - ")

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $title->htmlGet() ?>
</head>
<body>
    <h1><?= $title->headingGet() ?></h1>
