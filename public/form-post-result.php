<?php

declare(strict_types=1);

require "../config/config.php";
$data["headersite"] = "<h1>Try a Post</h1>";
$data["title"] = "Form POST";
$data["main"] = renderView("../view/form/post-result.php");

render("../view/layout/base.php", $data);
