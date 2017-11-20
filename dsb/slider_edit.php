<?php 
	require_once('db.php');
	$upload_dir = 'images/';

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = "select * from slider_section where id=".$id;
		$result = mysqli_query($connection, $query);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
		}else{
			$err_msg = 'could not select a record';
		}
	}

	if (isset($_POST['btnUpdate'])) {
		$heading = $_POST['slider_heading'];
		$para = $_POST['slider_paragraph'];

		$imgName = $_FILES['myfile']['name'];
		$imgTemp = $_FILES['myfile']['tmp_name'];
		$imgSize = $_FILES['myfile']['size'];

		if (empty($heading)) {
			$err_msg = 'Please input Slider heading';
		}elseif (empty($para)) {
			$err_msg = 'please input slider_paragraph';
		}

		if ($imgName) {
			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
			$allowExt = array('jpeg','jpg','png','gif');
			$slider_img = time().'_'.rand(1000,9999).'.'.$imgExt;

			if (in_array($imgExt, $allowExt)) {
				if ($imgSize < 5000000) {
					unlink($upload_dir.$row['slider_img']);
					move_uploaded_file($imgTemp, $upload_dir.$slider_img);
				}else{
					$err_msg = 'Image too large';
				}
			}else{
				$err_msg = 'please select a valid image';
			}
		}else{
			$slider_img =$row['slider_img'];
		}

		if (!isset($err_msg)) {
			$query = "update slider_section set slider_heading = '".$heading."', slider_paragraph = '".$para."', slider_img = '".$slider_img."' where id=".$id;

			$result = mysqli_query($connection, $query);
			if ($result) {
				$succ_msg = 'New record updated successfully';
				header('refresh:5;slider.php');
			}else{
				$err_msg = 'Error '.mysqli_error($connection);
			}
		}
	}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Slider Edit</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
     <link rel="stylesheet" href="css/style.css">
 </head>
 <body class="scroll">
 	
	<div class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<h3 class="navbar-brand">Edit Slider Section</h3>
			</div>
		</div>
	</div>

	<div class="container">
        <div class="page-header">
            <h3>
                <a href="slider.php" class="btn btn-default">&nbsp;Back</a>
            </h3>
        </div>

	<?php if (isset($err_msg)) { ?>
		<div class="alert alert-danger">
			<span class="glyphicon glyphicon-info">
				<strong><?php echo $err_msg; ?></strong>
			</span>
		</div>
	<?php } ?>

	<?php if (isset($succ_msg)) { ?>
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
			<label for="photo" class="col-md-2">Slider Image :</label>
			<div class="col-md-10">
				<img src="<?php echo $upload_dir.$row['slider_img'] ?>" width="200">
				<input type="file" name="myfile">
			</div>
		</div>

		<div class="form-group">
			<label for="name" class="col-md-2">Slider Heading :</label>
			<div class="col-md-10">
				<input type="text" name="slider_heading" class="form-control" value="<?php echo $row['slider_heading']; ?>">
			</div>
		</div>

		<div class="form-group">
			<label for="name" class="col-md-2">Slider Paragraph :</label>
			<div class="col-md-10">
				<input type="text" name="slider_paragraph" class="form-control" value="<?php echo $row['slider_paragraph']; ?>">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-2"></label>
			<div class="col-md-10">
				<button type="submit" class="btn btn-success btnUpdate" name="btnUpdate">
					<span class="glyphicon glyphicon-save"></span>Update
				</button>
			</div>
		</div>
	</form>
    </div>
 </body>
 </html>