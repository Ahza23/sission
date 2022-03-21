<?php

declare(strict_types=1);

require "../config/config.php";

//$data["title"] = "Session process";
$data["main"] = renderView("../view/game/game-process.php");

render("../view/layout/base.php", $data);
