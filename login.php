<?php 
  require_once "Assets/header.php ";
  
?>

<h1>Welcome to the COGIP</h1>

<div class="welcomeLog">
    <p>Welcome to COGIP's login space </p>

    <?php 

      if (isset($_POST["submit"])) {
        $login = new Handle () ;
        $login->getLogin($_POST["email"], $_POST["pswd"]);
        
      }
      
    ?>

    <div class="login">
        <form action="login.php" method="POST">
            Email :
            <br>
            <input type="email" placeholder="Email" required="required" size="60" name="email">
            <br>
            Password : 
            <br>
            <input type="password" placeholder="Password" required="required" size="60" name="pswd">
            <br>
            <input type="submit" placeholder="Login" name="submit">
        </form>
    </div>
</div>



<?php 
  require_once "Assets/footer.php ";
?>



