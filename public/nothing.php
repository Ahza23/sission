<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<body>
    <div class="container">
<form action="form.php" method="GET" class="form">
    <div>
        <label>First Name:</label>
        <input type="text" name="fname" class= "form-control">
        <label>Last Name:</label>
        <input type="text" name="lname" class= "form-control">
    </div>
    <input type= "submit">
</form>
    </div>
</body>
<?php

echo $_GET["fname"];
echo $_GET["lname"];
