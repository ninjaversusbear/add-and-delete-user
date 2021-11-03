<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<title>Datas</title>
</head>

<body>

		<div class="container panel-table bg-secondary w-50 mt-5">
	
			<div class="row">
				<div class="col-md-6 form-below">
					<?php 

						include 'config.php';

						$sql = "SELECT * FROM userdata ";
						$result = mysqli_query($conn, $sql) or die("ERROR: QUERY Failed....");

						if(mysqli_num_rows($result) > 0){
					?>

						<table class="table-part">
								<thead>
            						<tr>
                						<th>Id</th>
                						<th>Name</th>
                						<th>Email</th>
                						<th>Password</th>
                						<th><a href="adduser.php"><input type="button" class="btn btn-warning" name="btnadduser" value="Add User"></a></th>
            						</tr>
        						</thead>
        						<tbody>
        							<?php 
        								while($rows = mysqli_fetch_assoc($result)){
        							?>
        							<tr>
        								<td><?php echo $rows['id']?></td>
        								<td><?php echo $rows['name']?></td>
        								<td><?php echo $rows['email']?></td>
        								<td><?php echo $rows['password']?></td>
        								<td><input type="button" class="btn btn-warning btnedit" name="delete" value="Edit"></td>
        								<td><a href="delete.php?id=<?php echo $rows['id'];?>"><input class="btn btn-danger mt-2" type="submit" name="btndelete" value="Delete"></a></td>
        							</tr>
        							<?php } ?>
        						</tbody>
						</table>
					<?php } ?>
				</div>
			</div>
		</div>

<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>