<?php
require_once "header.php";
?>
<div class="container-md">
    <?php
    require_once "companiesDetails.php";
    ?>
    <div class="row justify-content-center">
		<form action="" method="POST">

			<div
				style="width: 50%; height: 30%; position: relative; margin-left: auto; margin-right: auto;">
				<div class="form-group mb-2">
					<label class="control-label" for="companyName">Company Name:</label>
					<input type="text" id="companyName" required maxlength="48"
						name="companyName" class="form-control" value=""
						placeholder="Enter the  Company Name">
				</div>
				<div class="form-group mb-2">
					<label class="control-label" for="TVA_Number">TVA Number:</label> <input
						type="text" id="TVA_Number" required maxlength="48"
						name="TVA_Number" class="form-control" value=""
						placeholder="Enter your TVA Number">
				</div>
				<div class="form-group mb-2">
					<label class="control-label" for="companyPhoneNumber">Phone Number:</label>
					<input type="text" id="companyPhoneNumber" required maxlength="48"
						name="companyPhoneNumber" class="form-control" value=""
						placeholder="Enter your Phone Number">
				</div>
				<div class="form-group mb-2">
					<label class="control-label" for="companyType">Company Type:</label>
					<input type="text" id="companyType" required maxlength="48"
						name="companyType" class="form-control" value=""
						placeholder="Enter your Company Type">
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