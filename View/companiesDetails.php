<?php
require_once "../View/header.php";
require_once "../Controller/companyAction.php" 
?>

<div class="container-md">
<table class="table">
	<thead>
		<tr>
			<th>Company Name:</th>
			<th>Country:</th>
			<th>TVA Number:</th>
		</tr>
	</thead>
	<h4>Clients</h4> 
      <?php
      $data =  new CompanyAction();
      $result = $data -> getCompanies('c.id_Type',1);
     
              foreach($result as $row){
        ?>
       
     <tr>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['country']; ?></td>
		<td><?php echo $row['vat']; ?></td>
		<th>
		 	<a href="detailsOfCompany.php?edit=<?php echo $row['id_Company'];?>" class="btn btn-info">Details</a>
		</th>
	</tr>
	<?php } ?>
</table>
<table class="table">
	<thead>
		<tr>
			<th>Company Name:</th>
			<th>Country:</th>
			<th>TVA Number:</th>
		</tr>
	</thead>	
	
	
	 <h4>Suppliers</h4>
	<?php
	 $resultSuppliers = $data -> getCompanies('c.id_Type',2);
	 foreach($resultSuppliers as $row){
	    ?>
	   
     <tr>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['country']; ?></td>
		<td><?php echo $row['vat']; ?></td>
		<th>
		 	<a href="detailsOfCompany.php?edit=<?php echo $row['id_Company'];?>" class="btn btn-info">Details</a>
		</th>
	</tr>
	<?php } ?>
</table>	
</div>
<?php
require_once "../View/footer.php";
?>
