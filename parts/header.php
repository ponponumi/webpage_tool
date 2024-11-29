<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Ponponumi\WebpageTool\Title;
use Ponponumi\WebpageTool\ThemeColor;

$page = isset($page) ? $page : "";
$title = new Title("<テストサイト>",$page);
$title->markOffChange(" - ");

$themeColor = new ThemeColor("#ad1");
$themeColor->cssVariableNameChange("--theme-color");

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $title->htmlGet() ?>
    <?= $themeColor->metaGet() ?>
    <?= $themeColor->styleGet() ?>
</head>
<body>
    <h1><?= $title->headingGet() ?></h1>
