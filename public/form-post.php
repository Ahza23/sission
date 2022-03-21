<?php

declare(strict_types=1);

require "../config/config.php";
$data["headersite"] = "<h1>Try a POST</h1>";
$data["title"] = "Form POST";
$data["main"] = renderView("../view/form/post.php");
$data["aside"] = "<h2>POST ASIDE</h2>";
render("../view/layout/base.php", $data);
