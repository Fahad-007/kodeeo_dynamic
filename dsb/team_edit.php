<?php
require_once('db.php');
$upload_dir = 'images/';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "select * from team_members where id=".$id;
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }else{
        $err_msg = 'could not select a record';
    }
}

if (isset($_POST['btnUpdate'])) {
    $memberName = $_POST['member_name'];
    $designation = $_POST['designation'];

    $imgName = $_FILES['myfile']['name'];
    $imgTemp = $_FILES['myfile']['tmp_name'];
    $imgSize = $_FILES['myfile']['size'];

    if (empty($memberName)) {
        $err_msg = 'Please input Name';
    }elseif (empty($designation)) {
        $err_msg = 'please input Member Designation';
    }

    if ($imgName) {
        $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
        $allowExt = array('jpeg','jpg','png','gif');
        $memberImg = time().'_'.rand(1000,9999).'.'.$imgExt;

        if (in_array($imgExt, $allowExt)) {
            if ($imgSize < 5000000) {
                unlink($upload_dir.$row['member_img']);
                move_uploaded_file($imgTemp, $upload_dir.$memberImg);
            }else{
                $err_msg = 'Image too large';
            }
        }else{
            $err_msg = 'please select a valid image';
        }
    }else{
        $memberImg =$row['member_img'];
    }

    if (!isset($err_msg)) {
        $query = "update team_members set member_img = '".$memberImg."', member_name = '".$memberName."', designation = '".$designation."' where id=".$id;


        $result = mysqli_query($connection, $query);
        if ($result) {
            $succ_msg = 'New record updated successfully';
            header('refresh:5;team_members.php');
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
            <h3 class="navbar-brand">Edit Team</h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="page-header">
        <h3>
            <a href="team_members.php" class="btn btn-default">&nbsp;Back</a>
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
        <label for="member_img" class="col-md-2">Member Image :</label>
        <div class="col-md-10">
            <img src="<?php echo $upload_dir.$row['member_img'] ?>" width="200">
            <input type="file" name="myfile">
        </div>
    </div>

    <div class="form-group">
        <label for="member_name" class="col-md-2">Member Name :</label>
        <div class="col-md-10">
            <input type="text" name="member_name" class="form-control" value="<?php echo $row['member_name']; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="designation" class="col-md-2">Member Designation :</label>
        <div class="col-md-10">
            <input type="text" name="designation" class="form-control" value="<?php echo $row['designation']; ?>">
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