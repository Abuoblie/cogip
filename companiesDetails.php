<?php require_once "header.php" ?>
<?php
    
    $update = false; 
    $name = '';
    $country= '';
    $vat= '';
    $id=0;
    $idTeste=0;
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
      $data =  new Validation();
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
	
	 <?php
	   //edit
	   if(isset($_GET['edit'])){
	       $id = $_GET['edit'];
	       $idTeste = $id;
	       $update = true;
	       $resultEdit = $data -> getCompanies('id_Company',$id);
	       if($resultEdit != null ){
	         
	         foreach($resultEdit as $row){
	           $name = $row['name'];
	           $country= $row['country'];
	           $vat= $row['vat'];  
	         }
	     }
	 }
     ?>    
    <?php 
          //update
          if(isset($_POST['update'])){
              $id = $_POST['id'];
              $data  -> updateCountry( $_POST['name'], $_POST['country'], $_POST['vat'], 'id_Company', $id);
              header("location: companiesPage.php");
            
          }
     ?> 
      <?php 
            //delete
            if(isset($_GET['delete'])){
                $id = $_GET['delete']; 
                $data -> delete('Company', 'id_Company' , $id);
                header("location: companiesPage.php");
            }
     ?>
       
         
</table>
</div>
