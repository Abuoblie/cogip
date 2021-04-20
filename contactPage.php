<?php
require_once "header.php";
require_once "verification.php";
require_once "ProcessHandler.php";
?>
<div class="container-md">
    <?php
       
        $first_name = '';
        $last_name= '';
        $email= '';
        $phone='';
        $company='';
    ?>
    <?php 
				    $validate = new Validation();
				    $validate -> validatePeople();
				    ?>
    <div class="row justify-content-center">
 
		<form action="verification.php" method="POST">
              
			<div
				style="width: 50%; height: 30%; position: relative; margin-left: auto; margin-right: auto;">
				<div class="form-group mb-2">
					<label class="control-label" for="first_name">First Name:</label> <input
						type="text" id="first_name" required maxlength="48"
						name="first_name" class="form-control" value="<?php echo $first_name;?>"
						placeholder="Enter your First Name">
				</div>
				<div class="form-group mb-2">
					<label class="control-label" for="last_name">Last Name:</label> <input
						type="text" id="last_name" required maxlength="48" name="last_name"
						class="form-control" value="<?php echo $last_name;?>" placeholder="Enter your Surname">
				</div>
				<div class="form-group mb-2">
					<label class="control-label" for="telephone">Telephone</label> <input
						type="text" id="telephone" required maxlength="48" name="telephone"
						class="form-control" value="<?php echo $phone;?>" placeholder="Enter your Phone Number">
				</div>
				<div class="form-group mb-2">
					<label class="control-label" for="email">Email:</label> <input
						type="text" id="email" required maxlength="48" name="email"
						class="form-control" value="<?php echo $email;?>" placeholder="Enter your Email">
				</div>
				<div class="form-group mb-2">
					<label class="control-label" for="id_Company">Company:</label>
					   
						
				    <select name="company" id="company"> 
				       <?php
    				      $dataCompany =  new Handle();
    				      $resultCompany = $dataCompany -> getCompanies(1,1);
    				      foreach($resultCompany as $row ){
    				    		 echo "<option value='{$row['id_Company']}'>{$row['name']}</option>"; 
    				      } 
				       ?> 		    			
				     </select>
				</div>

				<div class="form-group">
				    
					<button type="submit" class="btn btn-primary"  name="submit">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>


<?php
require_once "footer.php";
?>