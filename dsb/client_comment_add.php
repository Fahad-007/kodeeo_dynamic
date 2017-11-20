<?php
require_once('db.php');
$upload_dir = 'images/';

if(isset($_POST['btnSave'])){
    $clientName = $_POST['client_name'];
    $workGroup = $_POST['work_group'];
    $clientComment = $_POST['client_comment'];

    if(!isset($err_msg)){
        $query = "insert into client_comment_section( client_name, work_group, client_comment )
					values('".$clientName."', '".$workGroup."', '".$clientComment."')";
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
    <title>Client's Comments</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <h3 class="navbar-brand">Add Client's Comments</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="page-header">
        <h3>
            <a class="btn btn-default" href="clients_comment.php">
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
            <label for="client_name" class="col-md-2">Client Name :</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="client_name" required>
            </div>
        </div>

        <div class="form-group">
            <label for="work_group" class="col-md-2">Work Group :</label>
            <div class="col-md-10">
                <input type="text" name="work_group" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="client_comment" class="col-md-2">Client Comment :   </label>
            <div class="col-md-10">
                <textarea class="form-control" name="client_comment" required></textarea>
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