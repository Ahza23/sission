<?php

declare(strict_types=1);

require "../config/config.php";
$data["headersite"] = "<h1>My Server!</h1>";
$data["title"] = "Home";
$data["aside"] = "<h2>SERVER ASIDE</h2>";
$data["measure"] = true;
$data["main"] = 
$data["main"] = "<pre>" . renderView("../content/server1.php") . print_r($_SERVER, true) . "</pre>";


$linkList = [
    "W3C Cheatsheet" => "https://www.w3.org/2009/cheatsheet/",
    "Unicorn validator" => "https://validator.w3.org/unicorn/",
    "PHP documentation" => "https://www.php.net/manual/en/",
    
];
$data["footer1"] = renderView("../view/link-list.php", [
    "items" => $linkList
]) . "<p>Copyright 2021 Ahmed Zaytoun</p>";
render("../view/layout/base.php", $data);
