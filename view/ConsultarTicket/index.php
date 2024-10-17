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

<title> Joscar</>::Consultar Ticket</title>

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
            consultarticket
        </div><!--.container-fluid-->
    </div><!--.page-content-->

    <!-- scripts -->
    <?php
        require_once("../../view/MainJs/js.php");
    ?>
    <script type="text/javascript" src="consultarticket.js"></script>
</body>

</html>
<?php
    } else {
        header("Location:../../index.php");
    }
?>