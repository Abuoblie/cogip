<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="Assets/login.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<?php 
  require_once "Assets/header.php";
?>

<h1>Welcome to the COGIP</h1>

<div class="welcomeLog">
    <p>Welcome to COGIP's login space </p>


    <div class="login">
        <form>
            Email :
            <br>
            <input type="email" placeholder="email" required size="60">
            <br>
            Password : 
            <br>
            <input type="password" placeholder="password" required size="60">
            <br>
            <input type="submit" placeholder="submit">
        </form>
    </div>
</div>

<?php 
  require_once "Assets/footer.php ";
?>
</body>
</html>

