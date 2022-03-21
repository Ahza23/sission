<?php

declare(strict_types=1);

require "../config/config.php";
$data["headersite"] = "<h1>Game</h1>";
$data["title"] = "Home";
$data["main"] = "Content to my game";
$data["measure"] = true;
$data["aside"] = "Aside game";
$data["main"] = renderView("../view/game/games.php");

render("../view/layout/base.php", $data);
