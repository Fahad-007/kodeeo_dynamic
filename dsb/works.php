<?php
require_once('db.php');
$upload_dir = 'images/';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $query_portItem = "select port_img from portfolio_item where id = ".$id;
    $result_portItem = mysqli_query($connection, $query_portItem);

    if (mysqli_num_rows($result_portItem) > 0) {
        $rowPort = mysqli_fetch_assoc($result_portItem);
        $img = $rowPort['port_img'];
        unlink($upload_dir.$img);
        $query_portItem = "delete from portfolio_item where id=".$id;
        if (mysqli_query($connection, $query_portItem)) {
            header('location:works.php');
        }
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $query = "select * from portfolio_filter where id = ".$id;
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $query = "delete from portfolio_filter where id=".$id;
        if (mysqli_query($connection, $query)) {
            header('location:works.php');
        }
    }
}
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Dashboard / Admin Panel</title>

    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel='stylesheet prefetch' href="bootstrap/css/bootstrap.css">
    <link rel='stylesheet prefetch' href="css/animate.min.css">
    <link rel="stylesheet" href="main/css/library/animate.css" type="text/css" />

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">


</head>

<body>


<body class="sidebar-is-reduced">
<header class="l-header">
    <div class="l-header__inner clearfix">
        <div class="c-header-icon js-hamburger">
            <div class="hamburger-toggle"><span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span></div>
        </div>
        <div class="c-header-icon has-dropdown"><span class="c-badge c-badge--header-icon animated shake">0</span><i class="fa fa-bell"></i>
            <div class="c-dropdown c-dropdown--notifications">
                <div class="c-dropdown__header"></div>
                <div class="c-dropdown__content"></div>
            </div>
        </div>
        <div class="c-search">
            <input class="c-search__input u-input" placeholder="Search..." type="text"/>
        </div>
        <div class="header-icons-group">
            <div class="c-header-icon basket"><span class="c-badge c-badge--header-icon animated shake">0</span><i class="fa fa-shopping-basket"></i></div>
            <div class="c-header-icon logout"><i class="fa fa-power-off"></i></div>
        </div>
    </div>
</header>

<div class="l-sidebar">
    <div class="logo">
        <div class="logo__txt"><img src="img/logo.kodeeo.png"></div>
    </div>
    <div class="l-sidebar__content">
        <nav class="c-menu js-menu">
            <ul class="u-list">

                <a href="#"><li class="c-menu__item is-active" data-toggle="tooltip" title="Dashboard">
                        <div class="c-menu__item__inner"><i class="fa fa-tachometer"></i>
                            <div class="c-menu-item__title"><span>Dashboard</span></div>
                        </div>
                    </li></a>

                <a href="#slider"><li class="c-menu__item has-submenu" data-toggle="tooltip" title="Header">
                        <div class="c-menu__item__inner"><i class="fa fa-header"></i>
                            <div class="c-menu-item__title"><span>Header</span></div>
                        </div>
                    </li></a>

                <a href="#section-about"><li class="c-menu__item has-submenu" data-toggle="tooltip" title="Statistics">
                        <div class="c-menu__item__inner"><i class="fa fa-info-circle"></i>
                            <div class="c-menu-item__title"><span>About</span></div>
                        </div>
                    </li></a>

                <a href="#section-services"><li class="c-menu__item has-submenu" data-toggle="tooltip" title="Gifts">
                        <div class="c-menu__item__inner"><i class="fa fa-desktop"></i>
                            <div class="c-menu-item__title"><span>Services</span></div>
                        </div>
                    </li></a>

                <a href="#section-portfolio"><li class="c-menu__item has-submenu" data-toggle="tooltip" title="Settings">
                        <div class="c-menu__item__inner"><i class="fa fa-photo"></i>
                            <div class="c-menu-item__title"><span>Portfolio</span></div>
                        </div>
                    </li></a>

                <a href="#section-clients"><li class="c-menu__item has-submenu" data-toggle="tooltip" title="Settings">
                        <div class="c-menu__item__inner"><i class="fa fa-users"></i>
                            <div class="c-menu-item__title"><span>Clients</span></div>
                        </div>
                    </li></a>

                <a href="#section-team"><li class="c-menu__item has-submenu" data-toggle="tooltip" title="Settings">
                        <div class="c-menu__item__inner"><i class="fa fa-heart"></i>
                            <div class="c-menu-item__title"><span>Team</span></div>
                        </div>
                    </li></a>

                <a href="#section-contact"><li class="c-menu__item has-submenu" data-toggle="tooltip" title="Settings">
                        <div class="c-menu__item__inner"><i class="fa fa-cogs"></i>
                            <div class="c-menu-item__title"><span>Settings</span></div>
                        </div>
                    </li></a>

            </ul>
        </nav>
    </div>
</div>
</body>


<main class="l-main" style="top: 70px;position: absolute;">
    <div class="content-wrapper content-wrapper--with-bg">
        <h1 class="page-title">Works Category Section</h1>
        <div id="ex3" class="page-content">
            <div class="content-table">
                <div class="page-header">
                    <h3>
                        <a class="btn btn-default" href="work_cata_add.php">
                            <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add New
                        </a>
                    </h3>
                </div>

                <table class="table table-bordered table-hover tbl-2nd">
                    <thead class="t-head">
                    <tr>
                        <th>Id</th>
                        <th>Filter Class</th>
                        <th>Data Fulter</th>
                        <th>Filter Name</th>
                        <th>Edit / Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "select * from portfolio_filter";
                    $result = mysqli_query($connection, $query);
                    if(mysqli_num_rows($result)){
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['filter_class'] ?></td>
                                <td><?php echo $row['data_filter'] ?></td>
                                <td><?php echo $row['filter_name'] ?></td>
                                <td>
                                    <span>
                                        <a class="btn btn-info" href="work_cata_edit.php?id=<?php echo $row['id'] ?>">Edit</a>
                                        <a class="btn btn-danger" href="works.php?delete=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure to delete this record?')">Delete</a>
                                    </span>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>


                <div class="page-header">
                    <h3>
                        <a class="btn btn-default" href="work_item_add.php">
                            <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add New
                        </a>
                    </h3>
                </div>

                <table class="table table-bordered table-hover tbl-2nd">
                    <thead class="t-head">
                        <tr>
                            <th>ID</th>
                            <th>Port. Iamge</th>
                            <th>Item Class</th>
                            <th>Icon Class</th>
                            <th>Web Link</th>
                            <th>Portfolio Name</th>
                            <th>Portfolio Catagory</th>
                            <th>Edit / Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                    $queryPort = "select * from portfolio_item";
                    $resultPort = mysqli_query($connection, $queryPort);
                    if(mysqli_num_rows($resultPort)){
                        while($rowPort = mysqli_fetch_assoc($resultPort)){
                            ?>
                            <tr>
                                <td><?php echo $rowPort['id'] ?></td>
                                <td class="col-md-2"><img src="<?php echo $upload_dir.$rowPort['port_img'] ?>" height="40" style="width: 100%;height: 150px"></td>
                                <td><?php echo $rowPort['add_class'] ?></td>
                                <td><?php echo $rowPort['icon_class'] ?></td>
                                <td><?php echo $rowPort['web_link'] ?></td>
                                <td><?php echo $rowPort['port_name'] ?></td>
                                <td><?php echo $rowPort['port_cata'] ?></td>
                                <td>
                                    <span>
                                        <a class="btn btn-info" href="work_item_edit.php?id=<?php echo $rowPort['id'] ?>">Edit</a>
                                        <a class="btn btn-danger" href="works.php?delete=<?php echo $rowPort['id'] ?>" onclick="return confirm('Are you sure to delete this record?')">Delete</a>
                                    </span>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>




<script src="js/jquery.min.js"></script>
<script src="js/fontawesome.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script  src="js/index.js"></script>

</body>
</html>
