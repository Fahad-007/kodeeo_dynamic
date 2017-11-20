<?php
require_once('db.php');

if(isset($_POST['btnSave'])){
    $fiterClass = $_POST['filter_class'];
    $dataFilter = $_POST['data_filter'];
    $filterName = $_POST['filter_name'];

    if(!isset($errorMsg)){
        $query = "insert into portfolio_filter (filter_class, data_filter, filter_name)
					values('".$fiterClass."', '".$dataFilter."', '".$filterName."')";
        $result = mysqli_query($connection, $query);
        if($result){
            $succ_msg = 'New record added successfully';
            header('works.php');
        }else{
            $err_msg = 'Error '.mysqli_error($connection);
        }
    }

}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Works Fulter</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <h3 class="navbar-brand">Add Work Filter</h3>
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
            <label for="filterClass" class="col-md-2">Add Filter Class :</label>
            <div class="col-md-10">
                <select class="form-control" name="filter_class">
                    <option value="active">active</option>
                    <option value="deactive">deactive</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="dataFilter" class="col-md-2">Data Filter For :</label>
            <div class="col-md-10">
                <input type="text" name="data_filter" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="filterName " class="col-md-2">Filter Name :</label>
            <div class="col-md-10">
                <input type="text" name="filter_name" class="form-control">
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