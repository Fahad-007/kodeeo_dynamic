<?php
require_once('db.php');
$upload_dir = 'images/';

if(isset($_POST['btnSave'])){
    $servIcon = $_POST['serv_icon'];
    $servName = $_POST['serv_name'];
    $servPara = $_POST['serv_para'];

    if(!isset($errorMsg)){
        $query = "insert into services_section( serv_icon, serv_name, serv_para )
					values('".$servIcon."', '".$servName."', '".$servPara."')";
        $result = mysqli_query($connection, $query);
        if($result){
            $succ_msg = 'New record added successfully';
            header('services.php');
        }else{
            $err_msg = 'Error '.mysqli_error($connection);
        }
    }

}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Services section</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <h3 class="navbar-brand">Add Services Content</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="page-header">
        <h3>
            <a class="btn btn-default" href="services.php">
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
            <label for="serv_icon" class="col-md-2">Services Icon Class :</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="serv_icon" required>
            </div>
        </div>

        <div class="form-group">
            <label for="serv_name" class="col-md-2">Services Name :</label>
            <div class="col-md-10">
                <input type="text" name="serv_name" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="serv_para" class="col-md-2">Button Text :   </label>
            <div class="col-md-10">
                <input type="text" name="serv_para" class="form-control" required>
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