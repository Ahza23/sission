<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "Session";
$data["main"] = renderView("../view/form/session.php");

$data["aside"] = "<h2>ASIDE SESSION</h2>";
render("../view/layout/base.php", $data);
