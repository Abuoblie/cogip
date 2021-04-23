
<?php
require_once "../View/header.php";


// declaring variable + hosting

$username ="";
$email ="";
$error =array();
$invoice = null;
$people = null;
$company = null;


//conexion with DB

// $db = mysqli_connect('localhost', 'root', '', 'registration');

?>
<div class="container-md">
<h1>Welcome to the COGIP</h1>

<p>Hello !</p>
<p>What do you want to do today?</p>

<?php if(!empty($_SESSION)){ ?>
<div style='text-align:center'>
    <a  href="newInvoice.php" class="btn btn-info">+ New Invoice</a>
    <a  href="newContact.php" class="btn btn-info">+ New Contact</a>
    <a  href="newCompany.php" class="btn btn-info">+ New Company</a>
</div>
<?php } ?>

<h4>Last invoice :</h4>

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
 var_dump($_GET['invoice']);
  if(isset($_GET['idInvoice'])){
      $deletePeople = new Validation () ;
      //var_dump($invoice);
      $deletePeople -> delete('invoice','id_invoice', $_GET['idInvoice'] );
     
      
  }
  
  ?>  
    <?php
  
    
    $clients = new Validation () ;
    $resultat = $clients->getInvoice(1,1) ;
    if (count($resultat) > 5) {
          for ($i = 0; $i < 5; $i++) {
              if(empty($_SESSION)){
                    echo "
                        <tr>
                          <td>{$resultat[$i]['name']}</td>
                          <td>{$resultat[$i]['number']}</td>
                          <td>{$resultat[$i]['invoice_date']}</td>
                        </tr>
                    ";
              }else{
                  echo "
                        <tr>
                          <td>{$resultat[$i]['name']}</td>
                          <td>{$resultat[$i]['number']}</td>
                          <td>{$resultat[$i]['invoice_date']}</td>
                          <td>
                                <a href='#?invoice={$resultat[$i]['id_invoice']}' class='btn btn-info'>Delete</a>
                           </td>
                        </tr>
                    ";
              }
              
           }
     }else{
        foreach ($resultat as  $row ) {
            if(empty($_SESSION)){
                echo "
                    <tr>
                      <td>{$row['name']}</td>
                      <td>{$row['number']}</td>
                      <td>{$row['invoice_date']}</td>
                    </tr>
                ";
             }else{
                  echo "
                    <tr>
                      <td>{$row['name']}</td>
                      <td>{$row['number']}</td>
                      <td>{$row['invoice_date']}</td>
                    </tr>
                    <tr>
                      <td>
                         <a  href='#?idInvoice={$resultat[$i]['id_invoice']}' class='btn btn-info'>Delete</a>
                      </td>
                    </tr>
                  ";
             }
        }
     }
    

    ?>
   
  </tbody>
</table>
  </tbody>
</table>

<?php ?> <!--insert data base mysql here-->


<h4>Last contacts :</h4>

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
    
    $clients = new Validation () ;
    $resultat = $clients->getContact(1,1) ;
    if (count($resultat) > 5) {
      for ($i = 0; $i < 5; $i++) {
          if(empty($_SESSION)){
            echo "
                <tr>
                  <td>{$resultat[$i]['first_name']}</td>
                  <td>{$resultat[$i]['last_name']}</td>
                  <td>{$resultat[$i]['email']}</td>
                  <td>{$resultat[$i]['name']}</td>
                 
                </tr>
            ";
          }else{
                echo "
                <tr>
                  <td>{$resultat[$i]['first_name']}</td>
                  <td>{$resultat[$i]['last_name']}</td>
                  <td>{$resultat[$i]['email']}</td>
                  <td>{$resultat[$i]['name']}</td>
                  <td>
                      <a  href='#?idPeople={$resultat[$i]['id_People']}' class='btn btn-info'>Delete</a>
                  </td>
                </tr>
            ";
            }
          
      }
    } else{
        foreach ($resultat as  $row ) {
        if(empty($_SESSION)){
            echo "
                <tr>
                  <td>{$row['first_name']}</td>
                  <td>{$row['last_name']}</td>
                  <td>{$row['email']}</td>
                  <td>{$row['name']}</td>
                </tr>
            ";
      
         }else{
                echo "
                    <tr>
                      <td>{$row['first_name']}</td>
                      <td>{$row['last_name']}</td>
                      <td>{$row['email']}</td>
                      <td>{$row['name']}</td>
                      <td>
                           <a  href='#?id={$resultat[$i]['id_People']}' class='btn btn-info'>Delete</a>
                       </td>
                      </tr>
                 ";
                  
          }
        }
    }
    ?>
  </tbody>
</table>
  </tbody>
</table>

<?php ?><!--insert data base mysql here-->

<h4>Last compagnies :</h4>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Company Name</th>
      <th scope="col">Country</th>
      <th scope="col">Email</th>
      <th scope="col">Vat</th>
    </tr>
  </thead>
  <tbody>
    <?php

    
    $clients = new Validation () ;
    $resultat = $clients->getContact(1,1);
    
    if (count($resultat) > 5) {
      for ($i = 0; $i < 5; $i++) {
          if(empty($_SESSION)){
        echo "
        <tr>
          <td>{$resultat[$i]['name']}</td>
          <td>{$resultat[$i]['country']}</td>
          <td>{$resultat[$i]['email']}</td>
          <td>{$resultat[$i]['vat']}</td>
      </tr>
        ";
          }else{
              echo "
                <tr>
                  <td>{$resultat[$i]['name']}</td>
                  <td>{$resultat[$i]['country']}</td>
                  <td>{$resultat[$i]['email']}</td>
                  <td>{$resultat[$i]['vat']}</td>
                  <td>
                    <a  href='#?id={$resultat[$i]['id_People']}' class='btn btn-info'>Delete</a>
                  </td>
              </tr>
                ";
              
          }
      }
    } else{
      foreach ($resultat as  $row ) {
          if(empty($_SESSION)){
            echo "
                <tr>
                  <td>{$row['name']}</td>
                  <td>{$row['country']}</td>
                  <td>{$row['lebel']}</td>
                  <td>{$row['vat']}</td>
                  <td>
                    <a  href='#?id={$resultat[$i]['id_People']}' class='btn btn-info'>Delete</a>
                  </td>
                </tr>
            ";
          }else{
              echo "
                <tr>
                  <td>{$row['name']}</td>
                  <td>{$row['country']}</td>
                  <td>{$row['lebel']}</td>
                  <td>{$row['vat']}</td>
                  <td>
                    <a  href='#?id={$resultat[$i]['id_People']}' class='btn btn-info'>Delete</a>
                  </td>
                </tr>
            ";
          }
  
      }
    }
    ?>
  </tbody>
</table>
  </tbody>
</table>
</div>
<?php ?><!--insert data base mysql here-->

<?php
require_once "../View/footer.php";
?>