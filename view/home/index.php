<?php
    require_once("../../config/conexion.php");
    if (isset($_SESSION["usu_id"])){
?>

<!DOCTYPE html>
<html>
    <!-- Head -->
<?php

require_once("../../view/MainHead/head.php");
?>


<title>StartUI - Premium Bootstrap 4 Admin Dashboard Template</title>
<body class="with-side-menu">

    <!-- HEADER -->
    <?php
        require_once("../../view/MainHeader/header.php");
    ?>

    <div class="mobile-menu-left-overlay"></div>
    <!-- SIDEBAR NAV -->
    <?php
        require_once("../../view/MainNav/nav.php");
    ?>

    <div class="page-content">
        <div class="container-fluid">
            Blank page.
        </div><!--.container-fluid-->
    </div><!--.page-content-->

    <!-- scripts -->
    <?php
        require_once("../../view/MainJs/js.php");
    ?>
    <script type="text/javascript" src="home.js"></script>
</body>

</html>
<?php
    } else {
        header("Location:../../index.php");
    }
?>