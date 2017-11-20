<?php
	require_once('db.php');
	$upload_dir = 'images/';

	if(isset($_POST['btnSave'])){
		$heading = $_POST['slider_heading'];
		$para = $_POST['slider_paragraph'];

		$imgName = $_FILES['myfile']['name'];
		$imgTmp = $_FILES['myfile']['tmp_name'];
		$imgSize = $_FILES['myfile']['size'];

		if(empty($heading)){
			$err_msg = 'Please input name';
		}elseif(empty($para)){
			$err_msg = 'Please input position';
		}elseif(empty($imgName)){
			$err_msg = 'Please select photo';
		}else{
			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');
			$slider_img = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

				if($imgSize < 5000000){
					move_uploaded_file($imgTmp ,$upload_dir.$slider_img);
				}else{
					$err_msg = 'Image too large';
				}
			}else{
				$err_msg = 'Please select a valid image';
			}
		}

		if(!isset($err_msg)){
			$query = "insert into slider_section(slider_img, slider_heading, slider_paragraph)
					values('".$slider_img."', '".$heading."', '".$para."')";
			$result = mysqli_query($connection, $query);
			if($result){
				$succ_msg = 'New record added successfully';
				header('refresh:5;slider.php');
			}else{
				$err_msg = 'Error '.mysqli_error($connection);
			}
		}

	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Slider Add section</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<h3 class="navbar-brand">Add Slider Content</h3>
		</div>
	</div>
</div>
<div class="container">
	<div class="page-header">
		<h3>
			<a class="btn btn-default" href="slider.php">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;Back
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
			<label for="slider_img" class="col-md-2">Slider Image :</label>
			<div class="col-md-10">
				<input type="file" name="myfile">
			</div>
		</div>

		<div class="form-group">
			<label for="slider_heading" class="col-md-2">Slider Heading :</label>
			<div class="col-md-10">
				<input type="text" name="slider_heading" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="slider_paragraph" class="col-md-2">Slider Paragraph :</label>
			<div class="col-md-10">
				<input type="text" name="slider_paragraph" class="form-control">
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