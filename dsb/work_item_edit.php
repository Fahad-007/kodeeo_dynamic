<?php
require_once('db.php');
$upload_dir = 'images/';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "select * from portfolio_item where id=".$id;
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }else{
        $err_msg = 'could not select a record';
    }
}

if (isset($_POST['btnUpdate'])) {
    $addClass = $_POST['add_class'];
    $iconClass = $_POST['icon_class'];
    $webLink = $_POST['web_link'];
    $portName = $_POST['port_name'];
    $portCata = $_POST['port_cata'];

    $imgName = $_FILES['myfile']['name'];
    $imgTemp = $_FILES['myfile']['tmp_name'];
    $imgSize = $_FILES['myfile']['size'];

    if (empty($addClass)) {
        $err_msg = 'Please input Port class';
    }elseif (empty($iconClass)) {
        $err_msg = 'please input icon class';
    }elseif (empty($webLink)){
        $err_msg = 'Please input web link';
    }elseif (empty($portName)){
        $err_msg = 'Please input port name';
    }elseif (empty($portCata)){
        $err_msg = 'Please input port cata';
    }

    if ($imgName) {
        $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
        $allowExt = array('jpeg','jpg','png','gif');
        $port_img = time().'_'.rand(1000,9999).'.'.$imgExt;

        if (in_array($imgExt, $allowExt)) {
            if ($imgSize < 5000000) {
                unlink($upload_dir.$row['port_img']);
                move_uploaded_file($imgTemp, $upload_dir.$port_img);
            }else{
                $err_msg = 'Image too large';
            }
        }else{
            $err_msg = 'please select a valid image';
        }
    }else{
        $port_img =$row['port_img'];
    }

    if (!isset($err_msg)) {
        $query = "update portfolio_item set port_img = '".$port_img."', add_class = '".$addClass."', icon_class = '".$iconClass."', web_link = '".$webLink."', port_name = '".$portName."', port_cata = '".$portCata."' where id=".$id;


        $result = mysqli_query($connection, $query);
        if ($result) {
            $succ_msg = 'Record updated successfully';
            header('refresh:5;works.php');
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
    <title>Works Edit</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="scroll">

<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <h3 class="navbar-brand">Edit Team</h3>
        </div>
    </div>
</div>

<div class="container">

    <div class="page-header">
        <h3>
            <a href="works.php" class="btn btn-default">&nbsp;Back</a>
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
        <label for="port_img" class="col-md-2">Port-Image :</label>
        <div class="col-md-10">
            <img src="<?php echo $upload_dir.$row['port_img'] ?>" width="200">
            <input type="file" name="myfile">
        </div>
    </div>

    <div class="form-group">
        <label for="add_class" class="col-md-2">Port-Class :</label>
        <div class="col-md-10">
            <input type="text" name="add_class" class="form-control" value="<?php echo $row['add_class']; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="icon_class" class="col-md-2">Icon-Class :</label>
        <div class="col-md-10">
            <input type="text" name="icon_class" class="form-control" value="<?php echo $row['icon_class']; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="web_link" class="col-md-2">Web-Link :</label>
        <div class="col-md-10">
            <input type="text" name="web_link" class="form-control" value="<?php echo $row['web_link']; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="port_name" class="col-md-2">Port-Name :</label>
        <div class="col-md-10">
            <input type="text" name="port_name" class="form-control" value="<?php echo $row['port_name']; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="port_cata" class="col-md-2">Port-Cata :</label>
        <div class="col-md-10">
            <input type="text" name="port_cata" class="form-control" value="<?php echo $row['port_cata']; ?>">
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