<?php

declare(strict_types=1);

require "../config/config.php";
$data["title"] = "About";
$data["aside"] = renderView("../view/figure.php");
$data["main"] = <<<EOD
<h1>All about me</h1>

<p>My name is Ahmed Zaytoun and I am 23 years old. I have recently moved 
to Karlskrona from Borås to study at Blekinge Institute of Technology 
for web programming. I came to Sweden with my family in 2015 due to the 
war in my country where I do not have the opportunity to fulfill my dreams, 
so I moved here. I would describe myself as a very determined and very motivated 
person and now I am investing in being able to manage in this program with a lot 
of experience to be able to use it in working life. I usually work out at the gym 
and I have it as a hobby in my spare time. My goal is to finish all the courses 
and gain a lot of experience and try to introduce this later after the study.</p>
________________________________
<h3>In my free time:</h3>
<div>
    <tabell>
        <h5>Working out</h5>
        <h5>Watch anime</h5>
        <h5>Practice new programming languages</h5>
    </tabell>
</div>
EOD;

// Create content for the aside, by rendering a view creating a listo of links
$linkList = [
    "W3C Cheatsheet" => "https://www.w3.org/2009/cheatsheet/",
    "Unicorn validator" => "https://validator.w3.org/unicorn/",
    "PHP documentation" => "https://www.php.net/manual/en/",
    "More about me" => "http://www.student.bth.se/~ahza21/dbwebb-kurser/webtec/me/htmlcss/",
    "My last website" => "http://www.student.bth.se/~ahza21/dbwebb-kurser/webtec/me/onepage/onepage.html",
    "About my course" => "http://www.student.bth.se/~ahza21/dbwebb-kurser/webtec/me/htmlcss/about.html",
];

$data["footer1"] = renderView("../view/link-list.php", [
    "items" => $linkList



]) . "<p>Copyright 2021 Ahmed Zaytoun</p>";


$data["measure"] = true;


render("../view/layout/base.php", $data);

