
<?php 
  require_once "Assets/header.php";
?>

<h1>Welcome to the COGIP</h1>

<p>Hello !</p>


<p>Last invoice :</p>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Compagny Name</th>
      <th scope="col">Invoice Number</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    $clients = new Handle () ;
    $resultat = $clients->getInvoice(1,1) ;
    foreach ($resultat as  $row ) {
      echo "
          <tr>
            <td>{$row['name']}</td>
            <td>{$row['number']}</td>
            <td>{$row['invoice_date']}</td>
          </tr>
      ";

    }
    ?>
  </tbody>
</table>
  </tbody>
</table>

<?php ?> <!--insert data base mysql here-->


<p>Last contacts :</p>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Company</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    $clients = new Handle () ;
    $resultat = $clients->getContact(1,1) ;
    foreach ($resultat as  $row ) {
      echo "
          <tr>
            <td>{$row['first_name']}</td>
            <td>{$row['last_name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['name']}</td>
          </tr>
      ";

    }
    ?>
  </tbody>
</table>
  </tbody>
</table>

<?php ?><!--insert data base mysql here-->

<p>Last compagnies :</p>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Compagny Name</th>
      <th scope="col">Country</th>
      <th scope="col">Email</th>
      <th scope="col">Vat</th>
    </tr>
  </thead>
  <tbody>
    <?php

    
    $clients = new Handle () ;
    $resultat = $clients->getCompanies(1,1) ;
    foreach ($resultat as  $row ) {
      echo "
          <tr>
            <td>{$row['name']}</td>
            <td>{$row['country']}</td>
            <td>{$row['lebel']}</td>
            <td>{$row['vat']}</td>
          </tr>
      ";

    }
    ?>
  </tbody>
</table>
  </tbody>
</table>

<?php ?><!--insert data base mysql here-->

<?php 
  require_once "Assets/footer.php ";
?>