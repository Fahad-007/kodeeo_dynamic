<?php
	require_once('db.php');
	$upload_dir = 'images/';

	if(isset($_POST['btnSave'])){
		$heading = $_POST['heading'];
		$para = $_POST['paragraph'];
		$btn_text = $_POST['btn_text'];
		$bg_color = $_POST['bg_color'];
		$icon_bg = $_POST['icon_bg'];

		if(!isset($errorMsg)){
			$query = "insert into about_section(heading, paragraph, btn_text, bg_color, icon_bg)
					values('".$heading."', '".$para."', '".$btn_text."', '".$bg_color
					."', '".$icon_bg."')";
			$result = mysqli_query($connection, $query);
			if($result){
				$succ_msg = 'New record added successfully';
				header('about.php');
			}else{
				$err_msg = 'Error '.mysqli_error($connection);
			}
		}

	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>About Add section</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<h3 class="navbar-brand">Add About Content</h3>
		</div>
	</div>
</div>
<div class="container">
	<div class="page-header">
		<h3>
			<a class="btn btn-default" href="about.php">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>  Back
			</a>
		</h3>
	</div>

	<?php
		if(isset($err_msg)){		
	?>
		<div class="alert alert-danger">
			<span class="glyphicon glyphicon-info">
				<strong><?php echo $err_msg; ?></strong>
			</span>
		</div>
	<?php
		}
	?>

	<?php
		if(isset($succ_msg)){		
	?>
		<div class="alert alert-success">
			<span class="glyphicon glyphicon-info">
				<strong><?php echo $succ_msg; ?> - redirecting</strong>
			</span>
		</div>
	<?php
		}
	?>

	<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

		<div class="form-group">
			<label for="heading" class="col-md-2">Heading :</label>
			<div class="col-md-10">
				<input type="text" class="form-control" name="heading" required>
			</div>
		</div>

		<div class="form-group">
			<label for="paragraph" class="col-md-2">Paragraph :</label>
			<div class="col-md-10">
				<input type="text" name="paragraph" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="btn_text" class="col-md-2">Button Text :</label>
			<div class="col-md-10">
				<input type="text" name="btn_text" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="bg_color" class="col-md-2">Background Color :</label>
			<div class="col-md-10">
				<input type="text" name="bg_color" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="icon_bg" class="col-md-2">Background Icon :</label>
			<div class="col-md-10">
				<input type="text" name="icon_bg" class="form-control" required>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-2"></label>
			<div class="col-md-10">
				<button type="submit" class="btn btn-success btnSave" name="btnSave">
					<span class="glyphicon glyphicon-save"></span>Save
				</button>
			</div>
		</div>
	</form>
</div>



<script src="js/fontawesome.js"></script>

</body>
</html>