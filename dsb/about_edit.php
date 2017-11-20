<?php
require_once('db.php');
$upload_dir = 'images/';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "select * from about_section where id=".$id;
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }else{
        $err_msg = 'could not select a record';
    }
}

if (isset($_POST['btnUpdate'])) {
    $heading = $_POST['heading'];
    $para = $_POST['paragraph'];
    $btn_text = $_POST['btn_text'];
    $bg_color = $_POST['bg_color'];
    $icon_bg = $_POST['icon_bg'];

    if (empty($heading)) {
        $err_msg = 'Please input heading';
    }elseif (empty($para)) {
        $err_msg = 'please input paragraph';
    }elseif (empty($btn_text)) {
        $err_msg = 'please input button text';
    }elseif (empty($bg_color)) {
        $err_msg = 'please input background color';
    }elseif (empty($icon_bg)) {
        $err_msg = 'please input backgrounf icon';
    }


    if (!isset($err_msg)) {
        $query = "update about_section set heading = '".$heading."', paragraph = '".$para."', btn_text = '".$btn_text."', bg_color = '".$bg_color."', icon_bg = '".$icon_bg."' where id=".$id;

        $result = mysqli_query($connection, $query);
        if ($result) {
            $succ_msg = 'New record updated successfully';
            header('refresh:5;about.php');
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
    <title>About Edit</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="scroll">

<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <h3 class="navbar-brand">Edit About Section</h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="page-header">
        <h3>
            <a href="about.php" class="btn btn-default">&nbsp;Back</a>
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
        <label for="heading" class="col-md-2">Heading :</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="heading" value="<?php echo $row['heading']; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="paragraph" class="col-md-2">Paragraph :</label>
        <div class="col-md-10">
            <input type="text" name="paragraph" class="form-control" value="<?php echo $row['paragraph']; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="btn_text" class="col-md-2">Button Text :</label>
        <div class="col-md-10">
            <input type="text" name="btn_text" class="form-control" value="<?php echo $row['btn_text']; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="bg_color" class="col-md-2">Background Color :</label>
        <div class="col-md-10">
            <input type="text" name="bg_color" class="form-control" value="<?php echo $row['bg_color']; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="icon_bg" class="col-md-2">Background Icon :</label>
        <div class="col-md-10">
            <input type="text" name="icon_bg" class="form-control" value="<?php echo $row['icon_bg']; ?>">
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