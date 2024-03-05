<nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a href><img src="img/logo.png" alt></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
    <li class="<?php echo isActive('index.php'); ?>">
        <a href="index.php" aria-expanded="false">
            <img src="img/menu-icon/dashboard.svg" alt>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="<?php echo isActive('cargo.php'); ?>">
        <a href="cargo.php" aria-expanded="false">
            <img src="img/menu-icon/2.svg" alt>
            <span>Cargos</span>
        </a>
    </li>
    <li class="<?php echo isActive('shippments.php'); ?>">
        <a href="shippments.php" aria-expanded="false">
            <img src="img/menu-icon/3.svg" alt>
            <span>Shipments</span>
        </a>
    </li>
    <li class="<?php echo isActive('request.php'); ?>">
        <a href="request.php" aria-expanded="false">
            <img src="img/menu-icon/8.svg" alt>
            <span>Request</span>
        </a>
    </li>
</ul>

<?php
function isActive($page)
{
    return (basename($_SERVER['PHP_SELF']) === $page) ? 'mm-active' : '';
}
?>
    </nav>