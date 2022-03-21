<?php

declare(strict_types=1);

require "../config/config.php";
$data["headersite"] = "<h1>Try a GET</h1>";
$data["title"] = "Form GET";
$data["main"] = renderView("../view/form/get.php");
$data["aside"] = "<h2>GET ASIDE</h2>";
$linkList = [
    "W3C Cheatsheet" => "https://www.w3.org/2009/cheatsheet/",
    "Unicorn validator" => "https://validator.w3.org/unicorn/",
    "PHP documentation" => "https://www.php.net/manual/en/",
    "Stackoverflow"     => "https://stackoverflow.com/",
];
$data["footer1"] = renderView("../view/link-list.php", [
    "items" => $linkList
]);
render("../view/layout/base.php", $data);



