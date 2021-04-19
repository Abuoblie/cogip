<?php
require_once "header.php";
?>
<?php
    require_once "ProcessHandler.php";
    $first_name = '';
    $last_name= '';
    $email= '';
    $pswd='';
?>
<div class="container-md">
<table class="table">
	<thead>
		<tr>
			<th>First Name:</th>
			<th>Last Name:</th>
			<th>Email:</th>
			<th>Action</th>
		</tr>
	</thead>
	
      <?php
      $data =  new Handle();
      $result = $data -> getPeople(1,1);
        foreach($result as $row){
        ?>
     <tr>
		<td><?php echo $row['first_name']; ?></td>
		<td><?php echo $row['last_name']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<th>
		 	<a href="contactPageDetails.php?edit=<?php echo $row['id_People'];?>" class="btn btn-info">Edit</a>
		 	<a href="contactPageDetails.php?delete=<?php echo $row['id_People'];?>" class="btn btn-danger">Delete</a>
		</th>
	</tr>
	<?php } ?>
</div>

<?php
require_once "footer.php";
?>