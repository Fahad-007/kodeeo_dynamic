<?php
require_once('db.php');
$upload_dir = 'images/';
require_once('function.php');

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $query = "select * from services_section where id=".$id;
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $query = "delete from services_section where id=".$id;
        if (mysqli_query($connection, $query)) {
            header('location:services.php');
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
    <link rel="stylesheet" href="main/font-awesome/css/font-awesome.css">
    <link rel='stylesheet prefetch' href="css/animate.min.css">
    <link rel="stylesheet" href="main/css/library/animate.css" type="text/css" />
    <link rel="stylesheet" href="main/css/library/magnific-popup.css" type="text/css" />


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
                        <li class="c-menu__item" data-toggle="tooltip" title="Flights">
                            <a href="index.php">
                                <div  class="c-menu__item__inner"><i class="fa fa-tachometer"></i>
                                    <div class="c-menu-item__title"><span>Dashboard</span></div>
                                </div>
                            </a>
                        </li>

                        <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Slider">
                            <a href="slider.php">
                                <div class="c-menu__item__inner"><i class="fa fa-header"></i>
                                    <div class="c-menu-item__title"><span>Slider</span></div>
                                </div>
                            </a>
                        </li>

                        <li class="c-menu__item has-submenu" data-toggle="tooltip" title="About Section">
                            <a href="about.php">
                                <div class="c-menu__item__inner"><i class="fa fa-info-circle"></i>
                                    <div class="c-menu-item__title"><span>About</span></div>
                                </div>
                            </a>
                        </li>

                        <li class="c-menu__item has-submenu is-active" data-toggle="tooltip" title="Services">
                            <a href="services.php">
                                <div class="c-menu__item__inner"><i class="fa fa-desktop"></i>
                                    <div class="c-menu-item__title"><span>Services</span></div>
                                </div>
                            </a>
                        </li>

                        <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Portfolio">
                            <a href="works.php">
                                <div class="c-menu__item__inner"><i class="fa fa-photo"></i>
                                    <div class="c-menu-item__title"><span>Portfolio</span></div>
                                </div>
                            </a>
                        </li>

                        <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Clients">
                            <a href="clients_comment.php">
                                <div class="c-menu__item__inner"><i class="fa fa-users"></i>
                                    <div class="c-menu-item__title"><span>Clients</span></div>
                                </div>
                            </a>
                        </li>

                        <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Settings">
                            <a href="team_members.php">
                                <div class="c-menu__item__inner"><i class="fa fa-heart"></i>
                                    <div class="c-menu-item__title"><span>Team</span></div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Settings">
                            <a href="#">
                                <div class="c-menu__item__inner"><i class="fa fa-cogs"></i>
                                    <div class="c-menu-item__title"><span>Settings</span></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
    </div>
</div>
</body>


<main class="l-main" style="top: 70px;position: absolute;">
    <div class="content-wrapper content-wrapper--with-bg">
        <h1 class="page-title">Service Section</h1>
        <div id="ex3" class="page-content">

            <div class="page-header">
                <h3>
                    <a class="btn btn-default" href="services_add.php">
                        <i class="fa fa-plus" aria-hidden="true"></i> &nbsp;Add New
                    </a>
                </h3>
            </div>

            <table class="table table-bordered table-hover">
                <thead class="t-head">
                <tr>
                    <th>Id</th>
                    <th>Services Icon</th>
                    <th>Services Name</th>
                    <th>Services Text</th>
                    <th>Edit / Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if(mysqli_num_rows($dataServ['section'])){
                    while($row = mysqli_fetch_assoc($dataServ['section'])){
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['serv_icon'] ?></td>
                            <td><?php echo $row['serv_name'] ?></td>
                            <td><?php echo $row['serv_para'] ?></td>
                            <td>
                                <span>
                                    <a class="btn btn-info" href="services_edit.php?id=<?php echo $row['id'] ?>">
                                        <span class="glyphicon glyphicon-edit"></span>Edit
                                    </a>
                                    <a class="btn btn-danger" href="services.php?delete=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure to delete this record?')">
                                        <span class="glyphicon glyphicon-remove-circle"></span>Delete
                                    </a>
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
</main>




<script src="js/jquery.min.js"></script>
<script src="js/fontawesome.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script  src="js/index.js"></script>

</body>
</html>
