<?php
require_once "header.php";
?>
<div class="container-md">
    <?php
    require_once "companiesDetails.php";
    ?>
    <div class="row justify-content-center">
        
		<form action="companiesDetails.php" method="POST">
			   <div
				style="width: 50%; height: 30%; position: relative; margin-left: auto; margin-right: auto;">
				<div class="form-group mb-2">
					<label class="control-label" for="name">Company Name:</label>
					<input type="text" id="name" required maxlength="48"
						name="name" class="form-control" value="<?php echo $name;?>"
						placeholder="Enter the  Company Name">
				</div>
				<div class="form-group mb-2">
					<label class="control-label" for="country">Country:</label> <input
						type="text" id="country" required maxlength="48"
						name="country" class="form-control" value="<?php echo $country;?>"
						placeholder="Enter your country">
				</div>
				<div class="form-group mb-2">
					<label class="control-label" for="vat">vat:</label>
					<input type="text" id="vat" required maxlength="48"
						name="vat" class="form-control" value="<?php echo $vat;?>"
						placeholder="Enter your vat">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="save">Save</button>
				</div>
			</div>
		</form>
	</div>
</div>


<?php
require_once "footer.php";
?>