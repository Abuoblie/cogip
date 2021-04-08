
<table class="table">
	<thead>
		<tr>
			<th>Company Name:</th>
			<th>TVA Number:</th>
			<th>Phone Number:</th>
			<th>Company Type:</th>
		</tr>
	</thead>
      <?php
        while ($row = $result->fetch_assoc()) :
        ?>
               <tr>
		<td><?php echo $row['companyName']; ?></td>
		<td><?php echo $row['TVA_Number']; ?></td>
		<td><?php echo $row['companyPhoneNumber']; ?></td>
		<td><?php echo $row['companyType']; ?></td>
		<th><a href="companiesPage.php?edit=" class="btn btn-info">Edit</a> <a
			href="companiesPage.php?delete=" class="btn btn-danger">Delete</a></th>
	</tr>
           <?php endwhile; ?>
         
</table>
