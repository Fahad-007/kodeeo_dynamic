<?php
require_once('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "select * from services_section where id=".$id;
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }else{
        $err_msg = 'could not select a record';
    }
}

if (isset($_POST['btnUpdate'])) {
    $servIcon = $_POST['serv_icon'];
    $servName = $_POST['serv_name'];
    $servPara = $_POST['serv_para'];

    if (empty($servIcon)) {
        $err_msg = 'Please input Icon Class';
    } elseif (empty($servName)) {
        $err_msg = 'please input Name';
    }elseif (empty($servPara)) {
        $err_msg = 'please input Paragraph';
    }


    if (!isset($err_msg)) {
        $query = "update services_section set serv_icon = '" . $servIcon . "', serv_name = '" . $servName . "', serv_para = '" . $servPara . "' where id=" . $id;

        $result = mysqli_query($connection, $query);
        if ($result) {
            $succ_msg = 'Record updated successfully';
            header('refresh:5;services.php');
        } else {
            $err_msg = 'Error '.mysqli_error($connection);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Services Edit</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <h3 class="navbar-brand">Edit Services Section</h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="page-header">
        <h3>
            <a href="services.php" class="btn btn-default">&nbsp;Back</a>
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
        <label for="icon" class="col-md-2">Services Icon</label>
        <div class="col-md-10">
            <input type="text" name="serv_icon" class="form-control" value="<?php echo $row['serv_icon']; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="name" class="col-md-2">Service Name</label>
        <div class="col-md-10">
            <input type="text" name="serv_name" class="form-control" value="<?php echo $row['serv_name']; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="para" class="col-md-2">Service Paragraph</label>
        <div class="col-md-10">
            <input type="text" name="serv_para" class="form-control" value="<?php echo $row['serv_para']; ?>">
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