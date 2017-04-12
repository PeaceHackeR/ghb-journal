<div class="navbar navbar-default header-highlight">

    <div class="navbar-header">
        <a class="navbar-brand" href="01_dashboard.php"><img src="assets/images/logo_light.svg" alt=""></a>
        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <?php /*<img src="assets/images/placeholder.jpg" alt="">*/ ?>
                        <span>Administrator</span>
                        <i class="caret"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="00_users_detail.php"><i class="icon-user-plus"></i> My profile</a></li>
                        <li class="divider"></li>
                        <li><a href="00_login.php"><i class="icon-switch2"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>