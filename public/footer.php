<?php

declare(strict_types=1);

require "../config/config.php";

$linkList = [
    "W3C Cheatsheet" => "https://www.w3.org/2009/cheatsheet/",
    "Unicorn validator" => "https://validator.w3.org/unicorn/",
    "PHP documentation" => "https://www.php.net/manual/en/",
    
];
$data["footer1"] = renderView("../view/link-list.php", [
    "items" => $linkList
]);


render("../view/layout/base.php", $data);
