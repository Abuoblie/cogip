<?php
require_once "header.php";
?>
<div class="container-md">
    <?php
       
        $first_name = '';
        $last_name= '';
        $email= '';
        $pswd='';
    ?>
    <div class="row justify-content-center">
		<form action="" method="POST">
            
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
					<label class="control-label" for="price">Email:</label> <input
						type="text" id="email" required maxlength="48" name="email"
						class="form-control" value="<?php echo $email;?>" placeholder="Enter your Email">
				</div>
				<div class="form-group mb-2">
					<label class="control-label" for="pswd">Password:</label> 
					<input type="password" id="pswd" required maxlength="48" name="pswd"
						class="form-control" value="<?php echo $pswd;?>" placeholder="Enter your Company">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="save">Save</button>
					<a href="contactPageDetails.php" class="btn btn-info">Details Page</a>
				</div>
			</div>
		</form>
	</div>
</div>


<?php
require_once "footer.php";
?>