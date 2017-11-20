<?php
require_once('db.php');
$upload_dir = 'images/';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "select * from client_comment_section where id=".$id;
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }else{
        $err_msg = 'could not select a record';
    }
}

if (isset($_POST['btnUpdate'])) {
    $clientName = $_POST['client_name'];
    $workGroup = $_POST['work_group'];
    $clientComment = $_POST['client_comment'];

    if (empty($clientName)) {
        $err_msg = 'Please input Name';
    }elseif (empty($workGroup)) {
        $err_msg = 'please input office';
    }elseif (empty($clientComment)) {
        $err_msg = 'please input comment';
    }


    if (!isset($err_msg)) {
        $query = "update client_comment_section set client_name = '".$clientName."', work_group = '".$workGroup."', client_comment = '".$clientComment."' where id=".$id;

        $result = mysqli_query($connection, $query);
        if ($result) {
            $succ_msg = 'Record updated successfully';
            header('refresh:5;clients_comment.php');
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
    <title>Clients Edit</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="scroll">

<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <h3 class="navbar-brand">Edit Client's Section</h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="page-header">
        <h3>
            <a href="clients_comment.php" class="btn btn-default">&nbsp;Back</a>
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
        <label for="client_name" class="col-md-2">Client Name :</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="client_name" value="<?php echo $row['client_name']; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="work_group" class="col-md-2">Work Group :</label>
        <div class="col-md-10">
            <input type="text" name="work_group" class="form-control" value="<?php echo $row['work_group']; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="client_comment" class="col-md-2">Client Comment :</label>
        <div class="col-md-10">
            <input type="text" name="client_comment" class="form-control" value="<?php echo $row['client_comment']; ?>">
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