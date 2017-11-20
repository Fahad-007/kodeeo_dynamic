<!DOCTYPE html>
<html >
<head>
  	<meta charset="UTF-8">
  	<title>Dashboard / Admin Panel</title>
  
  	<link rel="stylesheet" href="css/normalize.min.css">
  	<link rel='stylesheet prefetch' href="bootstrap/css/bootstrap.min.js">
	<link rel='stylesheet prefetch' href="css/animate.min.css">

    <link rel="stylesheet" href="css/style.css">

  
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
                        <li class="c-menu__item is-active" data-toggle="tooltip" title="Flights">
                            <div  class="c-menu__item__inner"><i class="fa fa-tachometer"></i>
                                <div class="c-menu-item__title"><span>Dashboard</span></div>
                            </div>
                        </li>

                        <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Modules">
                            <div class="c-menu__item__inner"><i class="fa fa-header"></i>
                                <div class="c-menu-item__title"><span>Header</span></div>
                            </div>
                        </li>

                        <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Statistics">
                            <div class="c-menu__item__inner"><i class="fa fa-info-circle"></i>
                                <div class="c-menu-item__title"><span>About</span></div>
                            </div>
                        </li>

                        <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Gifts">
                            <div class="c-menu__item__inner"><i class="fa fa-desktop"></i>
                                <div class="c-menu-item__title"><span>Services</span></div>
                            </div>
                        </li>

                        <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Settings">
                            <div class="c-menu__item__inner"><i class="fa fa-photo"></i>
                                <div class="c-menu-item__title"><span>Portfolio</span></div>
                            </div>
                        </li>

                        <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Settings">
                            <div class="c-menu__item__inner"><i class="fa fa-users"></i>
                                <div class="c-menu-item__title"><span>Clients</span></div>
                            </div>
                        </li>

                        <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Settings">
                            <div class="c-menu__item__inner"><i class="fa fa-heart"></i>
                                <div class="c-menu-item__title"><span>Team</span></div>
                            </div>
                        </li>
                        
                        <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Settings">
                            <div class="c-menu__item__inner"><i class="fa fa-cogs"></i>
                                <div class="c-menu-item__title"><span>Settings</span></div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </body>


    <main class="l-main">
        <div class="content-wrapper content-wrapper--with-bg">
            <h1 class="page-title">Dashboard</h1>
            <div class="page-content">
                <img src="img/logo.kodeeo.png">
                <input type="file" name="">
            </div>
        </div>
    </main>


    <script src="js/jquery.min.js"></script>
    <script src="js/fontawesome.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script  src="js/index.js"></script>

</body>
</html>
