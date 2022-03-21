<?php

declare(strict_types=1);

require "../config/config.php";

$data["headersite"] = "<h1>Cookie!</h1>";
$data["title"] = "Cookie";
$data["main"] = renderView("../view/form/cookie.php");
$data["measure"] = true;
$linkList = [
    "More about me" => "http://www.student.bth.se/~ahza21/dbwebb-kurser/webtec/me/htmlcss/",
    "My last website" => "http://www.student.bth.se/~ahza21/dbwebb-kurser/webtec/me/onepage/onepage.html",
    "About my course" => "http://www.student.bth.se/~ahza21/dbwebb-kurser/webtec/me/htmlcss/about.html",
];
$data["footer1"] = renderView("../view/link-list.php", [
    "items" => $linkList
]) . "<p>Copyright 2021 Ahmed Zaytoun</p>";

render("../view/layout/base.php", $data);
