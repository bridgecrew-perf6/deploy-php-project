<?php include('vars.php'); ?>
<?php  
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$a = $_REQUEST['first_num'];
	$b = $_REQUEST['second_num'];
	$sum = $a + $b;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>This is a PHP project</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="row">
	<div class="col-lg-4"></div>
	<div class="col-lg-4">
		<div class="card">
			<div class="card-header">
				<h1>PHP Project</h1>
				<h3>You can clone this project <a href="<?= $github_link ?>">Here</a></h3>	
			</div>
			
			<div class="card-body">
				<label class="control-label">simpe calculator</label>
				<form class="form-group" action="" method="post">
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label">a = </label>
						</div>
						<div class="col-lg-2">
							<input type="number" name="first_num" class="form-control" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $a; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label">b = </label>
						</div>
						<div class="col-lg-2">
							<input type="number" name="second_num" class="form-control" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $b; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label">a + b = </label>
						</div>
						<div class="col-lg-2">
							<input type="number" name="sum" class="form-control" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $sum; ?>" readonly>
						</div>
					</div>
					<div>
						<button class="btn btn-primary" type="submit">submit</button>
					</div>
				</form>
			</div>
		</div>
		
	</div>
	<div class="col-lg-4"></div>
</body>
</html>