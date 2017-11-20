<?php
require_once('db.php');
$upload_dir = 'images/';

if(isset($_POST['btnSave'])){
    $addClass = $_POST['add_class'];
    $iconClass = $_POST['icon_class'];
    $webLink = $_POST['web_link'];
    $portName = $_POST['port_name'];
    $portCata = $_POST['port_cata'];

    $imgName = $_FILES['myfile']['name'];
    $imgTmp = $_FILES['myfile']['tmp_name'];
    $imgSize = $_FILES['myfile']['size'];

    if(empty($addClass)){
        $err_msg = 'Please input Port class';
    }elseif(empty($iconClass)){
        $err_msg = 'Please input Icon class';
    }elseif (empty($webLink)){
        $err_msg = 'Please input web link';
    }elseif (empty($portName)){
        $err_msg = 'Please input port name';
    }elseif (empty($portCata)){
        $err_msg = 'Please input port cata';
    }elseif(empty($imgName)){
        $err_msg = 'Please select photo';
    }else{
        $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
        $allowExt  = array('jpeg', 'jpg', 'png', 'gif');
        $port_img = time().'_'.rand(1000,9999).'.'.$imgExt;

        if(in_array($imgExt, $allowExt)){

            if($imgSize < 5000000){
                move_uploaded_file($imgTmp ,$upload_dir.$port_img);
            }else{
                $err_msg = 'Image too large';
            }
        }else{
            $err_msg = 'Please select a valid image';
        }
    }

    if(!isset($err_msg)){
        $query = "insert into portfolio_item(port_img, add_class, icon_class, web_link, port_name, port_cata)
					values('".$port_img."', '".$addClass."', '".$iconClass."', '".$webLink."', '".$portName."', '".$portCata."')";
        $result = mysqli_query($connection, $query);
        if($result){
            $succ_msg = 'New record added successfully';
            header('refresh:5;works.php');
        }else{
            $err_msg = 'Error '.mysqli_error($connection);
        }
    }

}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Works Item section</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <h3 class="navbar-brand">Add Portfolio Items</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="page-header">
        <h3>
            <a class="btn btn-default" href="works.php">
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
            <label for="port_img" class="col-md-2">Port-Image :</label>
            <div class="col-md-10">
                <input type="file" name="myfile">
            </div>
        </div>

        <div class="form-group">
            <label for="add_class" class="col-md-2">Port-Class :</label>
            <div class="col-md-10">
                <input type="text" name="add_class" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="icon_class" class="col-md-2">Icon-Class :</label>
            <div class="col-md-10">
                <input type="text" name="icon_class" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="web_link" class="col-md-2">Web-Link :</label>
            <div class="col-md-10">
                <input type="text" name="web_link" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="port_name" class="col-md-2">Port-Name :</label>
            <div class="col-md-10">
                <input type="text" name="port_name" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="port_cata" class="col-md-2">Port-Cata :</label>
            <div class="col-md-10">
                <input type="text" name="port_cata" class="form-control">
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