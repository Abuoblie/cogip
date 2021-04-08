
<?php
    require_once "ProcessHandler.php";
    $mysqli = new mysqli('localhost','root','root','cogip') or die(mysqli_error($mysqli)); 
?>
<table class="table">
	<thead>
		<tr>
			<th>Company Name:</th>
			<th>Country:</th>
			<th>TVA Number:</th>
		</tr>
	</thead>
	
      <?php
      $data =  new Handle();
        $result = $data -> getCompanies(1,1);
        foreach($result as $row){
        ?>
     <tr>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['country']; ?></td>
		<td><?php echo $row['vat']; ?></td>
		<th>
		 	<a href="companiesPage.php?edit=<?php echo $row['id_Company'];?>" class="btn btn-info">Edit</a>
		 	<a href="companiesPage.php?delete=<?php echo $row['id_Company'];?>" class="btn btn-danger">Delete</a>
		</th>
	</tr>
	<?php } ?>
	 <?php 
	   if(isset($_GET['edit'])){
	       $id = $row['id_Company'];
	      
	     if($result != null ){
	         $name = $row['name'];;
	         $country= $row['country'];
	         $vat= $row['vat'];
	         
	     }
	 }
     ?>    
    <?php 
          if(isset($_POST['save'])){
            $sql = " name ={$_POST['name']}, country ={$_POST['country']} vat ={$_POST['vat']} ";
            $data  -> update('Company', $sql, 'id' , $row['id_Company']);
          }
     ?>    
         
</table>
