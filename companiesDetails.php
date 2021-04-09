
<?php
    require_once "ProcessHandler.php";
    $update = false; 
    $name = '';
    $country= '';
    $vat= '';
    $id=0;
    $idTeste=0;
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
