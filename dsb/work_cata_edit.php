<?php
require_once('db.php');
$upload_dir = 'images/';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "select * from portfolio_filter where id=".$id;
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }else{
        $err_msg = 'could not select a record';
    }
}

if (isset($_POST['btnUpdate'])) {
    $fiterClass = $_POST['filter_class'];
    $dataFilter = $_POST['data_filter'];
    $filterName = $_POST['filter_name'];

    if (empty($fiterClass)) {
        $err_msg = 'Please input filter class';
    }elseif (empty($dataFilter)) {
        $err_msg = 'please input data filter';
    }elseif (empty($filterName)) {
        $err_msg = 'please input filter name';
    }


    if (!isset($err_msg)) {
        $query = "update portfolio_filter set filter_class = '".$fiterClass."', data_filter = '".$dataFilter."', filter_name = '".$filterName."' where id=".$id;

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
    <title>Works Cata. Edit</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <h3 class="navbar-brand">Edit Works Section</h3>
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
        <label for="filterClass" class="col-md-2">Add Filter Class :</label>
        <div class="col-md-10">
            <select class="form-control" name="filter_class" onselect="<?php echo $row['filter_class']; ?>">
                <option value="active">active</option>
                <option value="deactive">deactive</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="data_filter" class="col-md-2">Data Filter For :</label>
        <div class="col-md-10">
            <input type="text" name="data_filter" class="form-control" value="<?php echo $row['data_filter']; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="filter_name" class="col-md-2">Filter Name :</label>
        <div class="col-md-10">
            <input type="text" name="filter_name" class="form-control" value="<?php echo $row['filter_name']; ?>">
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