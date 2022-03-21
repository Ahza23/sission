<?php

declare(strict_types=1);

require "../config/config.php";
$data["headersite"] = "<h1>Searching for programming languages</h1>";
$data["title"] = "Home";
$data["main"] = file_get_contents("../content/new1.php");
$data["measure"] = true;
$data["aside"] = renderView("../content/new2.php");
$linkList = [
    "PHP" => "https://www.php.net/",
    "Best programming languages" => "https://www.fullstackacademy.com/blog/nine-best-programming-languages-to-learn",
    "Programming languages" => "https://www.arageek.com/l/%D8%A8%D8%AD%D8%AB-%D8%B9%D9%86-%D9%84%D8%BA%D8%A7%D8%AA-%D8%A7%D9%84%D8%A8%D8%B1%D9%85%D8%AC%D8%A9",

];
$data["footer1"] = renderView("../view/link-list.php", [
    "items" => $linkList
]);


render("../view/layout/base.php", $data);
