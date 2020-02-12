<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Generate CSV File Using MySQLi</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Add Employee</button>
		<a href="export.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-export"></span> Export as CSV</a>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-success">
				<tr>
						<th>id</th>
					<th>name</th>
					<th>id1</th>
					<th>intara</th>
					<th>akarere</th>
					<th>umurenge</th>
					<th>umudugudu</th>
					<th>akagari</th>
					<th>telefoni</th>
<th>upi</th>
					<th>ibisobanuro</th>
			</thead>
			<tbody style="background-color:#fff;">
				<?php
					require 'conn.php';
					
					$query = $conn->query("SELECT * FROM `form1` ORDER BY `me1` ASC");
					while($fetch = $query->fetch_array()){
				?>
				<tr>
					<td><?php echo $fetch['id']?></td>
					<td><?php echo $fetch['me1']?></td>
					<td><?php echo $fetch['id1']?></td>
					<td><?php echo $fetch['intara']?></td>
					<td><?php echo $fetch['akarere']?></td>
					<td><?php echo $fetch['umurenge']?></td>
					<td><?php echo $fetch['umudugudu']?></td>
					<td><?php echo $fetch['akagari']?></td>
					<td><?php echo $fetch['telefoni']?></td>
					<td><?php echo $fetch['upi']?></td>
					<td><?php echo $fetch['ibisobanuro']?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
	
	
	<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form method="POST" action="save_query.php">
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Firstname</label>
								<input class="form-control" type="text" name="firstname"/>
							</div>
							<div class="form-group">
								<label>Lastname</label>
								<input class="form-control" type="text" name="lastname"/>
							</div>
							<div class="form-group">
								<label>Address</label>
								<input class="form-control" type="text" name="address"/>
							</div>
							<div class="form-group">
								<label>Age</label>
								<input class="form-control" type="number" name="age"/>
							</div>
							<div class="form-group">
								<label>Job</label>
								<input class="form-control" type="text" name="job"/>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button"  class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>