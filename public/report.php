<?php

declare(strict_types=1);

require "../config/config.php";
$data["measure"] = true;
$data["headersite"] = "<h1>Redovisning text!</h1>";
$linkList = [
    "W3C Cheatsheet" => "https://www.w3.org/2009/cheatsheet/",
    "Unicorn validator" => "https://validator.w3.org/unicorn/",
    "PHP documentation" => "https://www.php.net/manual/en/",
    "Cheat Sheet" => "https://www.websiterating.com/resources/html-css-php-cheat-sheet/",
    "MDN"               => "https://developer.mozilla.org/en-US/docs/Web/HTML",
    "W3Schools" => "https://https://www.w3schools.com/html/",
    "CSS" => "https://www.cssportal.com/css-validator/",
    "dbwebb" => "https://dbwebb.se/kurser/webtec-v1/forelasning/bygg-en-webbplats-med-php",
];
$data["aside"] = renderView("../view/link-list.php", [
    "items" => $linkList]);
$data["main"] = <<<EOD

<h1>Report page</h1>


EOD;

$Parsedown = new Parsedown();
$reports = ["kmom01", "kmom03", "kmom05", "kmom10"];
foreach ($reports as $report) {
    $filename = "../content/$report.md";
    if (is_readable($filename)) {
        $data["main"] .= $Parsedown->text(file_get_contents($filename));
    }
}

render("../view/layout/base.php", $data);
