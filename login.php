<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<?php 
  require_once "Assets/header.php";
?>

<h1>Welcome to the COGIP</h1>

<p>Welcome to COGIP's login space </p>

<div class="login">
    <form>
        Your username :
        <br>
        <input type="name" placeholder="username" required>
        <br>
        Password : 
        <br>
        <input type="password" placeholder="password" required>
        <br>
        <input type="submit" placeholder="submit">
    </form>
</div>

<?php 
  require_once "Assets/footer.php ";
?>
</body>
</html>

